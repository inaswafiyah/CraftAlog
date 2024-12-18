<?php
$kategori = \App\Models\Categori::all();
$produk = \App\Models\Produk::all();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CraftAlog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('landing/mycss/style.css')}}">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.3/font/bootstrap-icons.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Lora:ital,wght@0,400..700;1,400..700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="shortcut icon" href="{{ asset('landing/assets/icongunting.png')}}">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        .btn-outline-custom {
            color: rgb(241, 121, 141);
            border-color: rgb(241, 121, 141);
            padding: 10px 20px;
            font-size: 16px;
            margin-left: 10px;
        }

        .btn-outline-custom:hover {
            background-color: rgb(241, 121, 141);
            color: white;
            border-color: rgb(200, 90, 110);
            box-shadow: 0 0 5px rgb(241, 121, 141);
        }

        .btn-outline-custom:focus {
            box-shadow: 0 0 5px rgb(241, 121, 141);
        }

        .form-control {
            border-color: rgb(241, 121, 141);
            transition: border-color 0.3s, box-shadow 0.3s;
        }

        .form-control:focus {
            border-color: rgb(241, 121, 141);
            box-shadow: 0 0 5px rgb(241, 121, 141);
            outline: none;
        }

        #slider .swiper-slide {
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 400px;
        }

        @media (max-width: 768px) {
            #slider .swiper-slide {
                height: 250px;
            }
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #f9f9f9;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            /* Agar semua elemen ada di tengah vertikal */
            min-height: 100vh;
            padding: 20px;
        }

        h1 {
            font-size: 36px;
            font-weight: bold;
            color: #030303;
            margin-bottom: 40px;
            /* Menambahkan jarak lebih besar antara judul dan grid video */
            text-align: center;
        }

        .video-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            /* 3 kolom */
            column-gap: 30px;
            /* Jarak antar kolom */
            row-gap: 80px;
            /* Jarak antar baris */
            width: 100%;
            max-width: 1400px;
        }

        .video-card {
            background-color: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }

        .video-card:hover {
            transform: scale(1.02);
        }

        .video-thumbnail {
            width: 100%;
            aspect-ratio: 16 / 9;
        }

        .video-thumbnail iframe {
            width: 100%;
            height: 100%;
        }

        .video-info {
            display: flex;
            padding: 12px;
        }

        .channel-icon {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background-color: #e0e0e0;
            margin-right: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .video-details {
            flex-grow: 1;
            overflow: hidden;
        }

        .video-title {
            font-size: 14px;
            font-weight: bold;
            color: #030303;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            margin-bottom: 4px;
        }

        .video-metadata {
            font-size: 12px;
            color: #606060;
        }

        @media (max-width: 768px) {
            .video-grid {
                grid-template-columns: 1fr;
                gap: 50px;
            }
        }

        .textkebawah {
            margin-top: 130px;
        }

        .textthe {
            margin-right: 188px;
        }

        .dropdown-item:hover {
            background-color: #f1798d !important;
            color: white !important;
            transition: background-color 0.3s ease;
        }

    </style>
</head>

<body>

    <nav class="navbar bg-body-tertiary fixed-top" style="border-bottom: 2px solid #f1798d; padding: 0.5rem 1rem;">
        <div class="container-fluid px-3">
            <a class="navbar-brand d-flex align-items-center" href="{{ route('Utama.index')}}" style="gap: 0.5rem;">
                <!-- Logo -->
                <img src="{{ asset('landing/assets/iconnav.png')}}" alt="Icon" class="icon-img"
                    style="height: 40px; width: 40px;" />
                <div class="d-inline-block">
                    <h1 class="brand-title m-0" style="font-size: 1rem; font-weight: bold; line-height: 1.2;">
                        <span class="text-black small-text textthe" style="font-size: 0.75rem;">the</span>
                        <span class="text-black">Katalog</span>
                        <span class="text-pink">CRAFTS</span>
                    </h1>
                    <p class="brand-tagline m-0" style="font-size: 0.75rem;">Create, Craft, Collect</p>
                </div>
            </a>
            <div class="d-flex align-items-center" style="gap: 1rem;">
                <form class="d-flex" action="{{ route('search.index') }}" method="GET">
                    <input class="form-control form-control-sm" type="search" name="query" placeholder="Search" aria-label="Search"
                        style="font-size: 0.875rem; padding: 0.375rem 0.75rem; border-radius: 0.25rem;">
                    <button class="btn btn-pink" type="submit"
                        style="background-color: #f1798d; color: white; font-size: 0.875rem; font-weight: bold; padding: 0.375rem 0.75rem; border-radius: 0.25rem; margin-left: 0.5rem;">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
                <!-- Button Katalog -->
                <a href="{{ route('katalog.index')}}" class="btn btn-pink"
                    style="background-color: #f1798d; color: white; font-size: 0.875rem; font-weight: bold; padding: 0.375rem 0.75rem; border-radius: 0.25rem; text-decoration: none;">
                    Katalog
                </a>
                <div class="nav-item dropdown">
                    <button class="btn btn-pink nav-link dropdown-toggle" type="button" id="kategoriDropdown"
                        data-bs-toggle="dropdown" aria-expanded="false"
                        style="background-color: #f1798d; color: white; font-size: 0.875rem; font-weight: bold; padding: 0.375rem 0.75rem; border-radius: 0.25rem;">
                        Kategori
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="kategoriDropdown">
                        @forelse($kategori as $row)
                            <li>
                                <a class="dropdown-item" href="{{ route('front.produk.kate', $row->slug) }}">{{ $row->nama_kategori }}</a>
                            </li>
                        @empty
                            <li><span class="dropdown-item">Kategori Tidak Tersedia</span></li>
                        @endforelse
                    </ul>
                </div>  
                <!-- Button Video -->
                <a href="{{ route('video.index')}}" class="btn btn-pink"
                    style="background-color: #f1798d; color: white; font-size: 0.875rem; font-weight: bold; padding: 0.375rem 0.75rem; border-radius: 0.25rem; text-decoration: none;">
                    Video
                </a>
                <!-- Hamburger Button -->
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel"
                        style="color: rgb(241, 121, 141); font-weight: bold;">CraftAlog</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        @guest
                        @if (Route::has('login'))
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        @endif

                        @if (Route::has('register'))
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                        @else
                        @if(Auth::user()->role == '1')
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{route('index.home')}}"
                                style="color: rgb(241, 121, 141); font-size: 0.875rem; font-weight: bold;">Dashboard</a>
                        </li>
                        @elseif(Auth::user()->role == '2')
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('Utama.index')}}"
                                style="color: rgb(241, 121, 141); font-size: 0.875rem; font-weight: bold;">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('my.bookmarks')}}"
                                style="color: rgb(241, 121, 141); font-size: 0.875rem; font-weight: bold;">My
                                Bookmark</a>
                        </li>
                        @endif

                        @endguest

                        <li class="nav-item">
                            <a class="nav-link"
                                href="https://shopee.co.id/search?keyword=toko%20bahan%20kerajinan%20tangan"
                                style="color: rgb(241, 121, 141); font-size: 0.875rem; font-weight: bold;">Material
                                Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.thesprucecrafts.com/about-us-4776806"
                                style="color: rgb(241, 121, 141); font-size: 0.875rem; font-weight: bold;"
                                target="_blank">About Us</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link"
                               href="{{ route('logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                               style="color: rgb(241, 121, 141); font-size: 0.875rem; font-weight: bold; transition: color 0.3s ease-in-out;">
                                {{ __('Log-Out') }}
                            </a>
                        </li>
                        
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            @csrf
                        </form>
                        
                    </ul>
                    <form action="{{ route('search.index')}}" class="d-flex mt-3" role="search">
                        <input name="query" class="form-control me-2" type="search" placeholder="Search"
                            aria-label="Search"
                            style="font-size: 0.875rem; color: rgb(241, 121, 141); border-color: rgb(241, 121, 141); outline: none;"
                            onfocus="this.style.borderColor='rgb(241, 121, 141)'; this.style.boxShadow='0 0 5px rgb(241, 121, 141)';"
                            onblur="this.style.borderColor=''; this.style.boxShadow='';" />
                        <button class="btn btn-outline-custom" type="submit"
                            style="font-size: 0.875rem; padding: 0.25rem 0.75rem;">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <h1 class="textkebawah">Make Handicrafts Through Videos</h1>
    <div class="video-grid">
        <!-- Video 1 -->
        <div class="video-card">
            <div class="video-thumbnail">
                <iframe src="https://www.youtube.com/embed/7jLGlHk7lyE" title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
            <div class="video-info">
                <div class="channel-icon">👤</div>
                <div class="video-details">
                    <div class="video-title">Tutorial make crafts through videos</div>
                    <div class="video-metadata">CraftAlog</div>
                </div>
            </div>
        </div>

        <!-- Video 2 -->
        <div class="video-card">
            <div class="video-thumbnail">
                <iframe src="https://www.youtube.com/embed/VGUesAmDOF4" title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
            <div class="video-info">
                <div class="channel-icon">👤</div>
                <div class="video-details">
                    <div class="video-title">Tutorial make crafts through videos</div>
                    <div class="video-metadata">CraftAlog</div>
                </div>
            </div>
        </div>

        <!-- Video 3 -->
        <div class="video-card">
            <div class="video-thumbnail">
                <iframe src="https://www.youtube.com/embed/jBwna3bHUtY" title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
            <div class="video-info">
                <div class="channel-icon">👤</div>
                <div class="video-details">
                    <div class="video-title">Tutorial make crafts through videos</div>
                    <div class="video-metadata">CraftAlog</div>
                </div>
            </div>
        </div>

        <!-- Video 4 -->
        <div class="video-card">
            <div class="video-thumbnail">
                <iframe src="https://www.youtube.com/embed/_3ibZtGFgZs" title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
            <div class="video-info">
                <div class="channel-icon">👤</div>
                <div class="video-details">
                    <div class="video-title">Tutorial make crafts through videos</div>
                    <div class="video-metadata">CraftAlog</div>
                </div>
            </div>
        </div>

        <!-- Video 5 -->
        <div class="video-card">
            <div class="video-thumbnail">
                <iframe src="https://www.youtube.com/embed/RtXH0DwP56o" title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
            <div class="video-info">
                <div class="channel-icon">👤</div>
                <div class="video-details">
                    <div class="video-title">Tutorial make crafts through videos</div>
                    <div class="video-metadata">CraftAlog</div>
                </div>
            </div>
        </div>

        <!-- Video 6 -->
        <div class="video-card">
            <div class="video-thumbnail">
                <iframe src="https://www.youtube.com/embed/EBxaNRV8bOg" title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
            <div class="video-info">
                <div class="channel-icon">👤</div>
                <div class="video-details">
                    <div class="video-title">Tutorial make crafts through videos</div>
                    <div class="video-metadata">CraftAlog</div>
                </div>
            </div>
        </div>
        <div class="video-card">
            <div class="video-thumbnail">
                <iframe src="https://www.youtube.com/embed/nRzCF65XMaM?si=Z7COb27VXsx-Heq2" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
            <div class="video-info">
                <div class="channel-icon">👤</div>
                <div class="video-details">
                    <div class="video-title">Tutorial make crafts through videos</div>
                    <div class="video-metadata">CraftAlog</div>
                </div>
            </div>
        </div>

        <!-- Video 5 -->
        <div class="video-card">
            <div class="video-thumbnail">
                <iframe src="https://www.youtube.com/embed/rP0nD5fV-Zc?si=--fUwB5IUxfTOLeJ" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
            <div class="video-info">
                <div class="channel-icon">👤</div>
                <div class="video-details">
                    <div class="video-title">Tutorial make crafts through videos</div>
                    <div class="video-metadata">CraftAlog</div>
                </div>
            </div>
        </div>

        <!-- Video 6 -->
        <div class="video-card">
            <div class="video-thumbnail">
                <iframe src="https://www.youtube.com/embed/AKcb_g0DPVA?si=MYp22wv8fMO0HBhw" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
            <div class="video-info">
                <div class="channel-icon">👤</div>
                <div class="video-details">
                    <div class="video-title">Tutorial make crafts through videos</div>
                    <div class="video-metadata">CraftAlog</div>
                </div>
            </div>
        </div>
        <div class="video-card">
            <div class="video-thumbnail">
                <iframe src="https://www.youtube.com/embed/ILaaPSmbGlk?si=0VVIUaNvqvetJHVs" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
            <div class="video-info">
                <div class="channel-icon">👤</div>
                <div class="video-details">
                    <div class="video-title">Tutorial make crafts through videos</div>
                    <div class="video-metadata">CraftAlog</div>
                </div>
            </div>
        </div>

        <!-- Video 5 -->
        <div class="video-card">
            <div class="video-thumbnail">
                <iframe src="https://www.youtube.com/embed/AX3TIP9Dqks?si=8FZdyV-cjKq91MoI" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
            <div class="video-info">
                <div class="channel-icon">👤</div>
                <div class="video-details">
                    <div class="video-title">Tutorial make crafts through videos</div>
                    <div class="video-metadata">CraftAlog</div>
                </div>
            </div>
        </div>

        <!-- Video 6 -->
        <div class="video-card">
            <div class="video-thumbnail">
                <iframe src="https://www.youtube.com/embed/rvbplUnHN5Q?si=gzvRfxx3DLpVVF-N" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
            <div class="video-info">
                <div class="channel-icon">👤</div>
                <div class="video-details">
                    <div class="video-title">Tutorial make crafts through videos</div>
                    <div class="video-metadata">CraftAlog</div>
                </div>
            </div>
        </div>
    </div>
    </script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
        < script src = "https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" >
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"></script>
    </script>
</body>

</html>
