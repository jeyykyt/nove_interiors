FROM php:8.3-apache

# System deps + PHP extensions
RUN apt-get update && apt-get install -y \
  git unzip libzip-dev libpng-dev libjpeg62-turbo-dev libfreetype6-dev \
  && docker-php-ext-configure gd --with-freetype --with-jpeg \
  && docker-php-ext-install pdo pdo_mysql zip gd \
  && a2enmod rewrite headers

# Apache: set docroot to /public
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public
RUN sed -ri 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf \
  && sed -ri 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Ensure .htaccess works (important for Laravel routes)
RUN sed -ri 's/AllowOverride None/AllowOverride All/g' /etc/apache2/apache2.conf

# Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html
COPY . .

# Install PHP deps + cache
RUN composer install --no-dev --optimize-autoloader \
  && php artisan config:cache || true \
  && php artisan route:cache || true \
  && php artisan view:cache || true \
  && chown -R www-data:www-data storage bootstrap/cache

EXPOSE 80
