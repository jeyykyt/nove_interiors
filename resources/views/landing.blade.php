<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Nove Interiors</title>

    <!-- Fonts: Inter + Garamond-style -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=EB+Garamond:wght@400;500;600&display=swap" rel="stylesheet">

    <style>
        :root{
            --bg: #fff7f6;
            --paper: #ffffff;
            --paper2: #fff0ee;
            --line: rgba(28,20,20,.10);
            --line2: rgba(28,20,20,.06);
            --text: rgba(28,20,20,.92);
            --muted: rgba(28,20,20,.62);

            --nude: #e7b7b6;
            --nude2: #f0c9c7;

            --shadow: 0 18px 50px rgba(35, 18, 18, 0.10);
            --shadow2: 0 10px 24px rgba(35, 18, 18, 0.08);

            --radius: 18px;
            --maxw: 1180px;
        }

        *{box-sizing:border-box}
        body{
            margin:0;
            font-family: Inter, system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif;
            color: var(--text);
            background:
                radial-gradient(900px 520px at 78% -30%, rgba(231,183,182,0.45) 0%, rgba(255,255,255,0) 65%),
                radial-gradient(900px 520px at 10% -30%, rgba(240,201,199,0.30) 0%, rgba(255,255,255,0) 65%),
                linear-gradient(180deg, var(--bg) 0%, #ffffff 60%, var(--bg) 100%);
            overflow-x:hidden;
        }
        a{color:inherit;text-decoration:none}
        button{font-family:inherit}
        .container{max-width:var(--maxw);margin:0 auto;padding:0 18px}

        /* Header */
        .nav{
            position:sticky;top:0;z-index:50;
            background: rgba(255,247,246,.86);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid var(--line2);
        }
        .nav-inner{
            height: 68px;
            display:flex;
            align-items:center;
            justify-content:space-between;
            gap: 14px;
        }
        .brand{
            display:flex;align-items:baseline;gap:10px;
            user-select:none;
            min-width: 240px;
        }
        .mark{
            width:12px;height:12px;border-radius:999px;
            background: linear-gradient(135deg,var(--nude2),var(--nude));
            box-shadow: 0 0 0 6px rgba(231,183,182,.22);
            transform: translateY(-2px);
        }
        .brand .name{
            font-family:"EB Garamond", Garamond, "Times New Roman", serif;
            font-size:22px;font-weight:600;letter-spacing:-.01em;
        }
        .brand .tag{
            font-size:12px;letter-spacing:.16em;text-transform:uppercase;
            color:var(--muted);font-weight:700;
        }

        .nav-actions{display:flex;align-items:center;gap:10px;flex:1;justify-content:flex-end}
        .search{
            display:flex;align-items:center;gap:10px;
            padding:10px 12px;border-radius:999px;
            background: rgba(255,255,255,.78);
            border:1px solid var(--line2);
            box-shadow: 0 8px 20px rgba(35,18,18,.05);
            max-width: 520px;
            width: 100%;
        }
        .search svg{opacity:.65}
        .search input{
            width:100%;
            border:0;outline:0;background:transparent;
            color:var(--text);font-size:13px;
        }
        .search input::placeholder{color: rgba(28,20,20,.45)}
        .btn{
            border:1px solid var(--line2);
            background: rgba(255,255,255,.78);
            color:var(--text);
            padding:10px 12px;border-radius:999px;
            font-weight:700;font-size:13px;
            cursor:pointer;
            box-shadow: 0 8px 20px rgba(35,18,18,.05);
            transition: transform .12s ease, opacity .12s ease, background .12s ease;
            white-space:nowrap;
        }
        .btn:active{transform: translateY(1px)}
        .btn-primary{
            border:0;
            background: linear-gradient(135deg,var(--nude2),var(--nude));
            box-shadow: 0 14px 30px rgba(231,183,182,.35);
        }
        @media (max-width: 920px){
            .brand{min-width:auto}
            .brand .tag{display:none}
            .btn.hide-sm{display:none}
            .search{max-width:100%}
        }

        /* HERO with background image + overlay like your sample */
        .hero{
            position:relative;
            min-height: 72vh;
            display:flex;
            align-items:center;
            overflow:hidden;
        }
        .hero-bg{
            position:absolute; inset:0;
            background-size: cover;
            background-position: center;
            transform: scale(1.02);
            filter: saturate(1.02);
        }
        .hero-overlay{
            position:absolute; inset:0;
            background:
                linear-gradient(180deg, rgba(28,20,20,.45) 0%, rgba(28,20,20,.25) 55%, rgba(28,20,20,.35) 100%);
        }
        .hero-content{
            position:relative;
            width:100%;
            padding: 52px 0;
            color: rgba(255,255,255,.92);
            text-align:center;
        }
        .hero-title{
            margin:0;
            font-family:"EB Garamond", Garamond, "Times New Roman", serif;
            font-size: clamp(38px, 4.4vw, 72px);
            line-height: 1.05;
            font-weight: 600;
            letter-spacing: -0.02em;
            text-shadow: 0 18px 50px rgba(0,0,0,.35);
        }
        .hero-sub{
            margin: 14px auto 0;
            max-width: 70ch;
            font-weight: 700;
            letter-spacing: .14em;
            text-transform: uppercase;
            color: rgba(255,255,255,.80);
            font-size: 13px;
            text-shadow: 0 18px 50px rgba(0,0,0,.35);
        }
        .hero-cta{
            margin-top: 22px;
            display:flex;
            gap: 12px;
            justify-content:center;
            flex-wrap:wrap;
        }
        .btn-ghost{
            background: rgba(255,255,255,.14);
            border: 1px solid rgba(255,255,255,.35);
            color: rgba(255,255,255,.92);
            box-shadow: none;
        }
        .btn-ghost:hover{background: rgba(255,255,255,.20)}
        .hero-cta .btn-primary{color: rgba(28,20,20,.92)}

        /* Rows / Carousels */
        .section{padding: 18px 0 36px}
        .row{margin-top: 26px}
        .row-head{
            display:flex;align-items:baseline;justify-content:space-between;
            gap:12px;margin-bottom:10px;
        }
        .row-title{margin:0;display:flex;gap:10px;align-items:baseline;flex-wrap:wrap}
        .row-title .cat{
            font-family:"EB Garamond", Garamond, "Times New Roman", serif;
            font-size: 28px;
            font-weight: 600;
        }
        .row-title .desc{
            font-size: 13px;
            font-weight: 700;
            color: var(--muted);
            letter-spacing:.02em;
        }

        .carousel{position:relative;border-radius:22px}
        .rail{
            display:flex;gap:14px;
            overflow-x:auto;
            padding: 10px 6px 14px;
            scroll-behavior:smooth;
            scroll-snap-type: x mandatory;
            scrollbar-width:none;
            -ms-overflow-style:none;
        }
        .rail::-webkit-scrollbar{display:none}

        .fade-left,.fade-right{
            position:absolute;top:0;bottom:0;width:76px;
            pointer-events:none;border-radius:22px;
            opacity:0;transition: opacity .18s ease;
        }
        .fade-left{left:0;background:linear-gradient(90deg, rgba(255,247,246,.95), rgba(255,247,246,0))}
        .fade-right{right:0;background:linear-gradient(270deg, rgba(255,247,246,.95), rgba(255,247,246,0))}
        .carousel.has-left .fade-left{opacity:1}
        .carousel.has-right .fade-right{opacity:1}

        .arrow{
            position:absolute;top:50%;
            transform: translateY(-50%);
            width:42px;height:42px;border-radius:999px;
            border:1px solid var(--line2);
            background: rgba(255,255,255,.55);
            box-shadow: 0 12px 24px rgba(35,18,18,.08);
            display:grid;place-items:center;
            cursor:pointer;
            opacity:.70; /* not 100% */
            transition: opacity .12s ease, background .12s ease, transform .12s ease;
            z-index:5;
        }
        .arrow:hover{opacity:.95;background: rgba(255,255,255,.72)}
        .arrow:active{transform: translateY(-50%) scale(.98)}
        .arrow.left{left:10px}
        .arrow.right{right:10px}
        .arrow svg{width:18px;height:18px;opacity:.78}

        /* Cards */
        .card{
            flex: 0 0 330px;
            scroll-snap-align:start;
            border-radius: var(--radius);
            overflow:hidden;
            background: rgba(255,255,255,.82);
            border:1px solid var(--line2);
            box-shadow: var(--shadow2);
            cursor:pointer;
            transition: transform .14s ease, box-shadow .14s ease;
            position:relative;
        }
        .card:hover{transform: translateY(-3px);box-shadow: 0 16px 40px rgba(35,18,18,.10)}

        .thumb{
            height: 200px;
            background-size: cover;
            background-position:center;
            position:relative;
        }
        .thumb::after{
            content:"";
            position:absolute; inset:0;
            background: linear-gradient(180deg, rgba(0,0,0,0) 40%, rgba(0,0,0,.22) 100%);
            pointer-events:none;
        }
        .label{
            position:absolute; top:12px; left:12px;
            padding: 8px 10px;border-radius:999px;
            background: rgba(255,255,255,.78);
            border: 1px solid var(--line2);
            font-size: 11px;
            letter-spacing:.14em;
            text-transform: uppercase;
            font-weight: 800;
            color: rgba(28,20,20,.72);
            box-shadow: 0 10px 20px rgba(35,18,18,.06);
            z-index:2;
        }

        /* Saved button per card */
        .save-btn{
            position:absolute; top:12px; right:12px;
            z-index:2;
            border: 1px solid var(--line2);
            background: rgba(255,255,255,.78);
            border-radius: 999px;
            padding: 8px 10px;
            font-size: 12px;
            font-weight: 800;
            cursor:pointer;
            opacity: .90;
            transition: opacity .12s ease, transform .12s ease, background .12s ease;
            display:flex;align-items:center;gap:8px;
        }
        .save-btn:hover{opacity:1;background: rgba(255,255,255,.88)}
        .save-btn:active{transform: translateY(1px)}
        .save-btn .heart{font-size: 13px}
        .save-btn.saved{
            background: linear-gradient(135deg, rgba(240,201,199,.80), rgba(231,183,182,.80));
            border-color: rgba(231,183,182,.35);
        }

        .card-body{padding: 14px 14px 16px;display:flex;flex-direction:column;gap:8px}
        .card-title{
            margin:0;
            font-family:"EB Garamond", Garamond, "Times New Roman", serif;
            font-size: 22px;
            font-weight: 600;
            letter-spacing:-.01em;
        }
        .card-desc{
            margin:0;
            font-size: 13px;
            line-height: 1.7;
            color: var(--muted);
            min-height: 44px;
        }
        .meta{display:flex;gap:8px;flex-wrap:wrap;margin-top:2px}
        .pill{
            padding: 8px 10px;border-radius:999px;
            border:1px solid var(--line2);
            background: rgba(255,255,255,.65);
            color: var(--muted);
            font-size: 12px;
            font-weight: 700;
        }
        .pill strong{color: rgba(28,20,20,.84);font-weight: 900}

        footer{
            padding: 26px 0 42px;
            border-top: 1px solid var(--line2);
            color: rgba(28,20,20,.55);
            font-size:12px;
            background: linear-gradient(180deg, rgba(255,255,255,0) 0%, rgba(255,247,246,.85) 100%);
        }

        /* POPUP (Modal) */
        .overlay{
            position:fixed; inset:0;
            display:none;
            align-items:center;
            justify-content:center;
            background: rgba(28,20,20,.42);
            backdrop-filter: blur(10px);
            z-index:100;
            padding: 18px;
        }

        /* OUTER arrows (outside the modal card) => change project */
        .outer-arrow{
            position:fixed;
            top: 50%;
            transform: translateY(-50%);
            width: 52px;
            height: 52px;
            border-radius: 999px;
            border: 1px solid rgba(255,255,255,.35);
            background: rgba(255,255,255,.20);
            display:grid;
            place-items:center;
            cursor:pointer;
            opacity: .72; /* not 100% */
            transition: opacity .12s ease, transform .12s ease, background .12s ease;
            z-index: 120;
        }
        .outer-arrow:hover{opacity:.95;background: rgba(255,255,255,.28)}
        .outer-arrow:active{transform: translateY(-50%) scale(.98)}
        .outer-arrow.left{left: 22px}
        .outer-arrow.right{right: 22px}
        .outer-arrow svg{width:18px;height:18px;opacity:.9}

        .modal{
            width: min(980px, 100%);
            border-radius: 24px;
            overflow:hidden;
            background: rgba(255,255,255,.94);
            border: 1px solid var(--line2);
            box-shadow: var(--shadow);
            position:relative;
        }
        .modal-top{
            padding: 14px 16px;
            border-bottom: 1px solid var(--line2);
            background: rgba(255,255,255,.82);
            display:flex;
            align-items:flex-start;
            justify-content:space-between;
            gap: 12px;
        }
        .modal-titlewrap{display:flex;flex-direction:column;gap:4px}
        .modal-title{
            margin:0;
            font-family:"EB Garamond", Garamond, "Times New Roman", serif;
            font-size: 26px;
            font-weight: 600;
            letter-spacing:-.01em;
        }
        .modal-sub{margin:0;color:var(--muted);font-weight:700;font-size: 13px}
        .modal-actions{display:flex;align-items:center;gap:10px}
        .modal-close{
            width: 40px;height:40px;border-radius:999px;
            border:1px solid var(--line2);
            background: rgba(255,255,255,.82);
            cursor:pointer;
            opacity:.85;
        }

        .modal-body{padding: 14px 14px 16px}
        .photo{
            position:relative;
            height: min(62vh, 540px);
            border-radius: 20px;
            overflow:hidden;
            border: 1px solid var(--line2);
            background: #fff;
            box-shadow: 0 18px 50px rgba(35,18,18,.10);
        }
        .photo img{
            width:100%;
            height:100%;
            object-fit: cover;
            display:block;
        }
        .photo::after{
            content:"";
            position:absolute; inset:0;
            background: linear-gradient(180deg, rgba(0,0,0,0) 50%, rgba(0,0,0,.18) 100%);
            pointer-events:none;
        }

        /* INNER arrows (inside photo) => change gallery slide */
        .inner-arrow{
            position:absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 46px;height:46px;border-radius:999px;
            border: 1px solid rgba(255,255,255,.40);
            background: rgba(255,255,255,.22);
            display:grid;place-items:center;
            cursor:pointer;
            opacity: .72;
            transition: opacity .12s ease, transform .12s ease, background .12s ease;
            z-index: 3;
        }
        .inner-arrow:hover{opacity:.98;background: rgba(255,255,255,.30)}
        .inner-arrow:active{transform: translateY(-50%) scale(.98)}
        .inner-arrow.left{left: 14px}
        .inner-arrow.right{right: 14px}
        .inner-arrow svg{width:18px;height:18px;opacity:.95}

        .photo-caption{
            position:absolute;
            left: 14px;
            right: 14px;
            bottom: 12px;
            z-index: 3;
            display:flex;
            justify-content:space-between;
            gap: 10px;
            color: rgba(255,255,255,.92);
            font-weight: 800;
            font-size: 12.5px;
            letter-spacing:.02em;
            text-shadow: 0 10px 30px rgba(0,0,0,.35);
        }

        .modal-bottom{
            margin-top: 12px;
            display:flex;
            justify-content:space-between;
            gap: 10px;
            flex-wrap:wrap;
            align-items:center;
        }
        .modal-tags{display:flex;gap:8px;flex-wrap:wrap;align-items:center}
        .idx{
            color: var(--muted);
            font-weight: 900;
            letter-spacing:.02em;
        }

        .toast{
            position: fixed;
            right: 16px;
            bottom: 16px;
            z-index: 200;
            background: rgba(255,255,255,.90);
            border: 1px solid var(--line2);
            border-radius: 16px;
            padding: 12px 14px;
            box-shadow: var(--shadow2);
            display:none;
            max-width: 420px;
            color: rgba(28,20,20,.90);
            font-size: 13px;
        }

        .brand{
            display:flex;
            align-items:center; /* changed from baseline so image aligns nicely */
            gap:10px;
            user-select:none;
            min-width: 240px;
        }

        .logo{
            width: 34px;         /* change size here */
            height: 34px;
            object-fit: contain;

        }
    </style>
</head>

<body>
@php

    $heroImage = asset('images/hero/hero.jpg'); // <- put your hero here

    $categories = [
      "Residential" => [
        [
          "title"=>"Blush Courtyard House",
          "slug"=>"blush-courtyard",
          "desc"=>"Soft nude palette, warm light, and minimal lines—designed for calm daily living.",
          "role"=>"Architecture",
          "location"=>"Zamboanga",
          "year"=>"2026",
          "gallery"=>["01.jpg","02.jpg","03.jpg","04.jpg"]
        ],
        [
          "title"=>"Stone + Oak Living",
          "slug"=>"stone-oak",
          "desc"=>"Organic stone textures with oak warmth—quietly elegant and timeless.",
          "role"=>"Interior",
          "location"=>"Davao",
          "year"=>"2025",
          "gallery"=>["01.jpg","02.jpg","03.jpg","04.jpg"]
        ],
        [
          "title"=>"Warm Minimal Bedroom",
          "slug"=>"warm-bedroom",
          "desc"=>"Balanced contrast, soft materials, and a gentle nude accent line.",
          "role"=>"Interior",
          "location"=>"Cagayan de Oro",
          "year"=>"2025",
          "gallery"=>["01.jpg","02.jpg","03.jpg"]
        ],
      ],
      "Commercial" => [
        [
          "title"=>"Boutique Café Mood",
          "slug"=>"boutique-cafe",
          "desc"=>"Nude & cream composition, soft lighting, and refined signage moments.",
          "role"=>"Interior",
          "location"=>"General Santos",
          "year"=>"2026",
          "gallery"=>["01.jpg","02.jpg","03.jpg","04.jpg"]
        ],
        [
          "title"=>"Studio Reception",
          "slug"=>"studio-reception",
          "desc"=>"Minimal reception wall with warm highlights and subtle texture rhythm.",
          "role"=>"Interior",
          "location"=>"Iligan",
          "year"=>"2025",
          "gallery"=>["01.jpg","02.jpg","03.jpg"]
        ],
      ],
      "Details & Materials" => [
        [
          "title"=>"Microcement Calm",
          "slug"=>"microcement",
          "desc"=>"Smooth surfaces and gentle shadows—architectural quietness in one finish.",
          "role"=>"Material Study",
          "location"=>"—",
          "year"=>"2025",
          "gallery"=>["01.jpg","02.jpg","03.jpg"]
        ],
        [
          "title"=>"Walnut Joinery",
          "slug"=>"walnut-joinery",
          "desc"=>"Precision lines and warm grain—details that make minimal spaces feel rich.",
          "role"=>"Detailing",
          "location"=>"—",
          "year"=>"2025",
          "gallery"=>["01.jpg","02.jpg","03.jpg","04.jpg"]
        ],
      ],
    ];

    $TARGET_PER_CATEGORY = 8; // set to 5–10 (ex: 8)

  foreach ($categories as $catName => $items) {
    $original = $items;

    // If category is empty, skip
    if (count($original) === 0) continue;

    // Duplicate items until we reach target
    while (count($items) < $TARGET_PER_CATEGORY) {
      foreach ($original as $it) {
        $items[] = $it;
        if (count($items) >= $TARGET_PER_CATEGORY) break;
      }
    }

    // Optional: if category has more than target, trim it
    $categories[$catName] = array_slice($items, 0, $TARGET_PER_CATEGORY);
  }
@endphp

<header class="nav">
    <div class="container">
        <div class="nav-inner">
            <div class="brand">
                <img class="logo" src="{{ asset('images/logo.png') }}" alt="Nove Interiors Logo">
                <div class="name">Nove Interiors</div>
            </div>

            <div class="nav-actions">
                <div class="search" title="Search projects">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="M21 21l-4.3-4.3m1.8-5.2a7 7 0 11-14 0 7 7 0 0114 0z" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                    <input id="search" type="text" placeholder="Search projects: loft, bedroom, café, microcement…" />
                </div>

                <button class="btn hide-sm" id="savedBtn" type="button">Saved <span id="savedCount" style="opacity:.75">(0)</span></button>
                <button class="btn btn-primary" id="ctaTop" type="button">Schedule a Consultation</button>
            </div>
        </div>
    </div>
</header>

<section class="hero" id="hero">
    <div class="hero-bg" style="background-image:url('{{ $heroImage }}');"></div>
    <div class="hero-overlay"></div>

    <div class="container">
        <div class="hero-content">
            <h1 class="hero-title">Elegant Spaces That Tell Your Story</h1>
            <p class="hero-sub">Thoughtful Design | Quiet Luxury | Spatial Alchemy</p>

            <div class="hero-cta">
                <button class="btn btn-primary" id="ctaHero" type="button">Book Now</button>
            </div>
        </div>
    </div>
</section>

<main class="section">
    <div class="container" id="rowsRoot">
        @foreach($categories as $catName => $items)
            <div class="row" data-row="{{ $catName }}">
                <div class="row-head">
                    <h2 class="row-title">
                        <span class="cat">{{ $catName }}</span>
                        <span class="desc">selected works</span>
                    </h2>
                </div>

                <div class="carousel" data-carousel>
                    <div class="fade-left"></div>
                    <div class="fade-right"></div>

                    <button class="arrow left" type="button" data-left aria-label="Scroll left">
                        <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                            <path d="M15 18l-6-6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>

                    <button class="arrow right" type="button" data-right aria-label="Scroll right">
                        <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                            <path d="M9 6l6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>

                    <div class="rail" data-rail>
                        @foreach($items as $idx => $it)
                            @php
                                $id = $catName."::".$idx;
                                $label = strtoupper($it['role']);
                                $galleryPaths = array_map(fn($f) => asset("images/projects/{$it['slug']}/{$f}"), $it['gallery']);
                                $thumb = $galleryPaths[0] ?? asset('images/placeholder.jpg');
                                $search = strtolower($it['title']." ".$it['desc']." ".$it['role']." ".$it['location']." ".$it['year']." ".$catName);
                            @endphp

                            <article class="card"
                                     data-id="{{ $id }}"
                                     data-cat="{{ $catName }}"
                                     data-title="{{ $it['title'] }}"
                                     data-desc="{{ $it['desc'] }}"
                                     data-role="{{ $it['role'] }}"
                                     data-location="{{ $it['location'] }}"
                                     data-year="{{ $it['year'] }}"
                                     data-search="{{ $search }}"
                                     data-gallery='@json($galleryPaths)'
                            >
                                <div class="thumb" style="background-image:url('{{ $thumb }}')">
                                    <div class="label">{{ $label }}</div>

                                    <!-- Saved button per card -->
                                    <button class="save-btn" type="button" data-save>
                                        <span class="heart">♡</span>
                                        <span class="txt">Save</span>
                                    </button>
                                </div>

                                <div class="card-body">
                                    <h3 class="card-title">{{ $it['title'] }}</h3>
                                    <p class="card-desc">{{ $it['desc'] }}</p>
                                    <div class="meta">
                                        <span class="pill"><strong>{{ $it['location'] }}</strong></span>
                                        <span class="pill">{{ $it['year'] }}</span>
                                        <span class="pill">{{ $catName }}</span>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</main>

<footer>
    <div class="container" style="display:flex; justify-content:space-between; gap:12px; flex-wrap:wrap;">
        <div>© {{ date('Y') }} Nove Interiors — Architecture & Interiors.</div>
        <div style="opacity:.85;"> Sample Sample Sample :)))</div>
    </div>
</footer>

<!-- POPUP overlay -->
<div class="overlay" id="overlay" aria-hidden="true" role="dialog" aria-modal="true">
    <!-- Outer arrows (project switch) OUTSIDE modal box -->
    <button class="outer-arrow left" id="projPrev" type="button" aria-label="Previous project">
        <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
            <path d="M15 18l-6-6 6-6" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
    </button>

    <button class="outer-arrow right" id="projNext" type="button" aria-label="Next project">
        <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
            <path d="M9 6l6 6-6 6" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
    </button>

    <div class="modal" role="document">
        <div class="modal-top">
            <div class="modal-titlewrap">
                <h3 class="modal-title" id="mTitle">Project</h3>
                <p class="modal-sub" id="mSub">Category • Location • Year</p>
            </div>

            <div class="modal-actions">
                <!-- Saved button inside modal -->
                <button class="btn" id="mSave" type="button">Save</button>
                <button class="modal-close" id="mClose" type="button" aria-label="Close">✕</button>
            </div>
        </div>

        <div class="modal-body">
            <div class="photo" id="photoStage">
                <img id="mImg" src="" alt="Project photo" />

                <!-- Inner arrows (gallery) inside the photo -->
                <button class="inner-arrow left" id="gPrev" type="button" aria-label="Previous image">
                    <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="M15 18l-6-6 6-6" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>

                <button class="inner-arrow right" id="gNext" type="button" aria-label="Next image">
                    <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="M9 6l6 6-6 6" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>

                <div class="photo-caption">
                    <div id="mCapLeft">—</div>
                    <div id="mCapRight">—</div>
                </div>
            </div>

            <div class="modal-bottom">
                <div class="modal-tags">
                    <span class="pill" id="mRole">Role</span>
                    <span class="pill" id="mLoc">Location</span>
                    <span class="pill" id="mYear">Year</span>
                </div>
                <div class="idx" id="mIdx">1 / 1</div>
            </div>
        </div>
    </div>
</div>

<div class="toast" id="toast"></div>

<script>
    (function(){
        // ===== Saved (localStorage) =====
        const SAVED_KEY = "nude_studio_saved_v2";
        const getSaved = () => { try { return JSON.parse(localStorage.getItem(SAVED_KEY) || "[]"); } catch(e){ return []; } };
        const setSaved = (arr) => localStorage.setItem(SAVED_KEY, JSON.stringify(arr));
        const isSaved = (id) => getSaved().includes(id);

        const toast = document.getElementById("toast");
        const showToast = (html) => {
            toast.innerHTML = html;
            toast.style.display = "block";
            clearTimeout(showToast._t);
            showToast._t = setTimeout(() => toast.style.display = "none", 2200);
        };

        const savedBtn = document.getElementById("savedBtn");
        const savedCount = document.getElementById("savedCount");

        const updateSavedCount = () => {
            if(!savedCount) return;
            savedCount.textContent = `(${getSaved().length})`;
        };

        if(savedBtn){
            savedBtn.addEventListener("click", () => {
                const n = getSaved().length;
                showToast(n ? `You have <b>${n}</b> saved project${n>1?"s":""}.` : `No saved projects yet.`);
            });
        }

        // ===== Hero CTA =====
        const ctaHero = document.getElementById("ctaHero");
        const ctaTop = document.getElementById("ctaTop");
        const browseBtn = document.getElementById("browseBtn");
        const rowsRoot = document.getElementById("rowsRoot");
        const search = document.getElementById("search");

        const goPortfolio = () => {
            rowsRoot.scrollIntoView({ behavior: "smooth" });
            setTimeout(() => search.focus(), 350);
        };

        if (browseBtn) browseBtn.addEventListener("click", goPortfolio);
        ctaHero.addEventListener("click", () => showToast(`Hook this CTA to your contact form / calendar link.`));
        ctaTop.addEventListener("click", () => showToast(`Hook this CTA to your contact form / calendar link.`));

        // ===== Carousels arrows + fades =====
        const carousels = Array.from(document.querySelectorAll("[data-carousel]"));
        carousels.forEach((c) => {
            const rail = c.querySelector("[data-rail]");
            const leftBtn = c.querySelector("[data-left]");
            const rightBtn = c.querySelector("[data-right]");

            const updateFades = () => {
                const maxScroll = rail.scrollWidth - rail.clientWidth;
                c.classList.toggle("has-left", rail.scrollLeft > 4);
                c.classList.toggle("has-right", rail.scrollLeft < maxScroll - 4);
            };

            const scrollByAmount = (dir) => {
                const amount = Math.min(rail.clientWidth * 0.82, 560);
                rail.scrollBy({ left: dir * amount, behavior: "smooth" });
            };

            leftBtn.addEventListener("click", () => scrollByAmount(-1));
            rightBtn.addEventListener("click", () => scrollByAmount(1));
            rail.addEventListener("scroll", updateFades, { passive: true });
            window.addEventListener("resize", updateFades);
            requestAnimationFrame(updateFades);
        });

        // ===== Cards + saved buttons per card =====
        const allCards = () => Array.from(document.querySelectorAll(".card"));
        const refreshCardSavedUI = () => {
            allCards().forEach(card => {
                const id = card.getAttribute("data-id");
                const btn = card.querySelector("[data-save]");
                if(!btn) return;
                const txt = btn.querySelector(".txt");
                const heart = btn.querySelector(".heart");

                if(isSaved(id)){
                    btn.classList.add("saved");
                    if(txt) txt.textContent = "Saved";
                    if(heart) heart.textContent = "♥";
                }else{
                    btn.classList.remove("saved");
                    if(txt) txt.textContent = "Save";
                    if(heart) heart.textContent = "♡";
                }
            });
        };

        // Prevent save button from opening modal
        document.addEventListener("click", (e) => {
            const saveBtn = e.target.closest("[data-save]");
            if(!saveBtn) return;

            e.stopPropagation();
            const card = saveBtn.closest(".card");
            if(!card) return;
            const id = card.getAttribute("data-id");

            const saved = getSaved();
            if(saved.includes(id)){
                setSaved(saved.filter(x => x !== id));
                showToast(`Removed from saved.`);
            }else{
                saved.push(id);
                setSaved(saved);
                showToast(`Saved project.`);
            }
            updateSavedCount();
            refreshCardSavedUI();
            refreshModalSaveUI(); // if open
        }, true);

        // ===== Search filter =====
        const applySearch = (q) => {
            q = (q || "").trim().toLowerCase();
            allCards().forEach(card => {
                const hay = (card.getAttribute("data-search") || "");
                card.style.display = (!q || hay.includes(q)) ? "" : "none";
            });

            // update fades after filter
            carousels.forEach((c) => {
                const rail = c.querySelector("[data-rail]");
                rail.dispatchEvent(new Event("scroll"));
            });
        };
        search.addEventListener("input", (e) => applySearch(e.target.value));

        // ===== Modal logic (project switching outer arrows) =====
        const overlay = document.getElementById("overlay");
        const mClose = document.getElementById("mClose");

        const projPrev = document.getElementById("projPrev");
        const projNext = document.getElementById("projNext");

        const mTitle = document.getElementById("mTitle");
        const mSub = document.getElementById("mSub");
        const mRole = document.getElementById("mRole");
        const mLoc = document.getElementById("mLoc");
        const mYear = document.getElementById("mYear");

        const mImg = document.getElementById("mImg");
        const mCapLeft = document.getElementById("mCapLeft");
        const mCapRight = document.getElementById("mCapRight");
        const mIdx = document.getElementById("mIdx");
        const mSave = document.getElementById("mSave");

        const gPrev = document.getElementById("gPrev");
        const gNext = document.getElementById("gNext");

        let visibleCards = [];
        let currentProjectIndex = 0;
        let currentGallery = [];
        let currentSlideIndex = 0;

        const getVisibleCards = () => allCards().filter(c => c.style.display !== "none");

        const refreshModalSaveUI = () => {
            if(overlay.style.display !== "flex") return;
            const card = visibleCards[currentProjectIndex];
            if(!card) return;
            const id = card.getAttribute("data-id");
            mSave.textContent = isSaved(id) ? "Saved ✓" : "Save";
            mSave.classList.toggle("btn-primary", isSaved(id));
        };

        const renderModalSlide = () => {
            const total = currentGallery.length || 1;
            const slideN = Math.min(currentSlideIndex + 1, total);

            const src = currentGallery[currentSlideIndex] || "";
            if(src){
                mImg.src = src;
            }else{
                mImg.removeAttribute("src");
            }

            mIdx.textContent = `${slideN} / ${total}`;
            const card = visibleCards[currentProjectIndex];
            const title = card?.getAttribute("data-title") || "Project";
            mCapLeft.textContent = title;
            mCapRight.textContent = `Gallery • Slide ${slideN}`;
        };

        const renderModalProject = () => {
            const card = visibleCards[currentProjectIndex];
            if(!card) return;

            const title = card.getAttribute("data-title") || "Project";
            const cat = card.getAttribute("data-cat") || "—";
            const loc = card.getAttribute("data-location") || "—";
            const year = card.getAttribute("data-year") || "—";
            const role = card.getAttribute("data-role") || "—";

            mTitle.textContent = title;
            mSub.textContent = `${cat} • ${loc} • ${year}`;
            mRole.textContent = role;
            mLoc.textContent = loc;
            mYear.textContent = year;

            try { currentGallery = JSON.parse(card.getAttribute("data-gallery") || "[]"); }
            catch(e){ currentGallery = []; }

            currentSlideIndex = 0;
            renderModalSlide();
            refreshModalSaveUI();
        };

        const openModalForCard = (card) => {
            visibleCards = getVisibleCards();
            const idx = visibleCards.indexOf(card);
            currentProjectIndex = Math.max(0, idx);

            overlay.style.display = "flex";
            overlay.setAttribute("aria-hidden", "false");
            document.body.style.overflow = "hidden";

            renderModalProject();
        };

        const closeModal = () => {
            overlay.style.display = "none";
            overlay.setAttribute("aria-hidden", "true");
            document.body.style.overflow = "";
            currentGallery = [];
            currentSlideIndex = 0;
        };

        // Clicking a card opens modal (but not when clicking its save button)
        rowsRoot.addEventListener("click", (e) => {
            const card = e.target.closest(".card");
            if(!card) return;
            if(e.target.closest("[data-save]")) return;
            openModalForCard(card);
        });

        // Close interactions
        mClose.addEventListener("click", closeModal);
        overlay.addEventListener("click", (e) => { if(e.target === overlay) closeModal(); });

        // Outer arrows (project switch)
        const prevProject = () => {
            if(!visibleCards.length) return;
            currentProjectIndex = (currentProjectIndex - 1 + visibleCards.length) % visibleCards.length;
            renderModalProject();
        };
        const nextProject = () => {
            if(!visibleCards.length) return;
            currentProjectIndex = (currentProjectIndex + 1) % visibleCards.length;
            renderModalProject();
        };
        projPrev.addEventListener("click", (e) => { e.stopPropagation(); prevProject(); });
        projNext.addEventListener("click", (e) => { e.stopPropagation(); nextProject(); });

        // Inner arrows (gallery slides)
        const prevSlide = () => {
            const total = currentGallery.length || 1;
            currentSlideIndex = (currentSlideIndex - 1 + total) % total;
            renderModalSlide();
        };
        const nextSlide = () => {
            const total = currentGallery.length || 1;
            currentSlideIndex = (currentSlideIndex + 1) % total;
            renderModalSlide();
        };
        gPrev.addEventListener("click", (e) => { e.stopPropagation(); prevSlide(); });
        gNext.addEventListener("click", (e) => { e.stopPropagation(); nextSlide(); });

        // Save inside modal
        mSave.addEventListener("click", (e) => {
            e.stopPropagation();
            const card = visibleCards[currentProjectIndex];
            if(!card) return;
            const id = card.getAttribute("data-id");

            const saved = getSaved();
            if(saved.includes(id)){
                setSaved(saved.filter(x => x !== id));
                showToast(`Removed from saved.`);
            }else{
                saved.push(id);
                setSaved(saved);
                showToast(`Saved project.`);
            }
            updateSavedCount();
            refreshCardSavedUI();
            refreshModalSaveUI();
        });

        // Keyboard support
        window.addEventListener("keydown", (e) => {
            if(overlay.style.display !== "flex") return;
            if(e.key === "Escape") closeModal();
            if(e.key === "ArrowLeft") prevProject();   // project switch
            if(e.key === "ArrowRight") nextProject();  // project switch
        });

        // Swipe in photo area for gallery slides
        const photoStage = document.getElementById("photoStage");
        let startX = 0;
        let dragging = false;

        const onStart = (x) => { dragging = true; startX = x; };
        const onEnd = (x) => {
            if(!dragging) return;
            dragging = false;
            const dx = x - startX;
            const threshold = 45;
            if(dx > threshold) prevSlide();
            if(dx < -threshold) nextSlide();
        };

        photoStage.addEventListener("touchstart", (e) => {
            const t = e.touches && e.touches[0];
            if(!t) return;
            onStart(t.clientX);
        }, { passive:true });

        photoStage.addEventListener("touchend", (e) => {
            const t = e.changedTouches && e.changedTouches[0];
            if(!t) return;
            onEnd(t.clientX);
        });

        // Init
        updateSavedCount();
        refreshCardSavedUI();
    })();
</script>
</body>
</html>
