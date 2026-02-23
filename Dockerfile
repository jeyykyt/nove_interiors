FROM php:8.3-apache

RUN apt-get update && apt-get install -y \
  git unzip libzip-dev libpng-dev libjpeg62-turbo-dev libfreetype6-dev \
  && docker-php-ext-configure gd --with-freetype --with-jpeg \
  && docker-php-ext-install pdo pdo_mysql zip gd \
  && a2enmod rewrite headers

RUN echo "ServerName localhost" > /etc/apache2/conf-available/servername.conf && a2enconf servername

ENV APACHE_DOCUMENT_ROOT=/var/www/html/public
RUN sed -ri 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf \
  && sed -ri 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf \
  && sed -ri 's/AllowOverride None/AllowOverride All/g' /etc/apache2/apache2.conf

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html
COPY . .

RUN mkdir -p storage/framework/cache storage/framework/sessions storage/framework/views storage/logs bootstrap/cache \
  && chown -R www-data:www-data storage bootstrap/cache \
  && chmod -R 777 storage bootstrap/cache

RUN composer install --no-dev --optimize-autoloader

# Start script: write .env from Render env vars, clear caches, then start apache
RUN printf '%s\n' \
'#!/bin/sh' \
'set -e' \
'cd /var/www/html' \
'echo "APP_ENV=${APP_ENV:-production}" > .env' \
'echo "APP_DEBUG=${APP_DEBUG:-false}" >> .env' \
'echo "APP_KEY=${APP_KEY}" >> .env' \
'echo "APP_URL=${APP_URL:-http://localhost}" >> .env' \
'echo "LOG_CHANNEL=${LOG_CHANNEL:-stderr}" >> .env' \
'php artisan config:clear || true' \
'php artisan cache:clear || true' \
'php artisan route:clear || true' \
'php artisan view:clear || true' \
'exec apache2-foreground' \
> /usr/local/bin/start.sh \
&& chmod +x /usr/local/bin/start.sh

EXPOSE 80
CMD ["/usr/local/bin/start.sh"]
