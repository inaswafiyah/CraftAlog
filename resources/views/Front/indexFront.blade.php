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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
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

        .btn-sign-in {
            background-color: white;
            color: rgb(241, 121, 141);
            border: 1px solid rgb(241, 121, 141);
            padding: 10px 20px;
            font-size: 14px;
            font-weight: bold;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;

            margin-left: 40px;
            margin-right: 40px;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .btn-sign-in:hover {
            background-color: rgb(241, 121, 141);
            color: white;
        }

        .btn-sign-in:focus {
            outline: none;
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
                        <span class="text-black small-text" style="font-size: 0.75rem;">the</span>
                        <span class="text-black">Katalog</span>
                        <span class="text-pink">CRAFTS</span>
                    </h1>
                    <p class="brand-tagline m-0" style="font-size: 0.75rem;">Create, Craft, Collect</p>
                </div>
            </a>
            <div class="d-flex align-items-center">
                @guest
                @if (Route::has('login'))
                <a class=" nav-link btn btn-sign-in rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white" href="{{ route('login') }}">{{ __('Sign In') }}</a>
                @endif

                <!-- @if (Route::has('register'))
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                @endif -->
                @else
                @if(Auth::user()->role == '1')
                <a href="{{ route('index.home') }}"
                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#e05b8c] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                    style="color: #f1798d; border-color: #f1798d; text-decoration: none ">
                    Dashboard
                </a>
                @elseif(Auth::user()->role == '2')
                <a href="{{ route('index.home') }}"
                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#e05b8c] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                    style="color: #f1798d; border-color: #f1798d; text-decoration: none ">
                    My Profile
                </a>
                @endif
                <div>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
                @endguest

                <!-- @if (Route::has('login'))
                @auth
                <a href="{{ route('index.home') }}"
                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                    style="color: #f1798d; border-color: #f1798d; text-decoration: none ">
                    Dashboard
                </a>
                @else
                <a href="{{ route('login') }}"
                    class="btn btn-sign-in rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                    style="text-decoration: none">Sign In</a>
                @endauth
                @endif -->

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
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="halamanUtama.html"
                                style="color: rgb(241, 121, 141); font-size: 0.875rem; font-weight: bold;">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="halamanUtama.html"
                                style="color: rgb(241, 121, 141); font-size: 0.875rem; font-weight: bold;">My Bookmark</a>
                        </li> 
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
                            <a class="nav-link" href="{{route('register')}}"
                                style="color: rgb(241, 121, 141); font-size: 0.875rem; font-weight: bold;"
                                target="_blank">Sign Up</a>
                        </li>
                    </ul>
                    <form action="{{ route('search.index')}}" class="d-flex mt-3" role="search">
                    <input name="query" class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
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
    <br>
    <br>
    <br>

    @yield('main')



    @yield('script')

    <script>
        function toggleSearchInput() {
            const searchInput = document.querySelector('.search-input');
            searchInput.classList.toggle('show');
        }
        

    </script>

    <!--End search-->

    <script>
        window.onscroll = function () {
            const button = document.getElementById("scrollTopButton");
            if (document.documentElement.scrollTop > 100) {
                button.style.display = "flex";
            } else {
                button.style.display = "none";
            }
        };

    </script>

    <script>
        function toggleBookmark(button) {
            const icon = button.querySelector("i");
            icon.classList.toggle("bi-bookmark");
            icon.classList.toggle("bi-bookmark-fill");
        }

    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const swiperConfig = JSON.parse(document.querySelector(".swiper-config").textContent);
            new Swiper(".init-swiper", swiperConfig);
        });

    </script>
    <script>
        document.addEventListener("scroll", function () {
            const scrollTopButton = document.getElementById("scrollTopButton");
            if (window.scrollY > 100) {
                scrollTopButton.style.display = "block";
            } else {
                scrollTopButton.style.display = "none";
            }
        });
        document.getElementById("scrollTopButton").addEventListener("click", function () {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        });

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
    </script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"></script>
</body>

</html>
