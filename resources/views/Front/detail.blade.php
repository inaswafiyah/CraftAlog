<?php
$kategori = \App\Models\Categori::all();
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

        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            color: #333;
            line-height: 1.6;
        }

        .header {
            text-align: center;
            padding: 15px;
            /* Ubah padding agar header lebih kecil */
            background: linear-gradient(to right, rgb(241, 121, 141), rgb(255, 159, 175));
            color: white;
            font-size: 18px;
            /* Perkecil ukuran font */
            font-weight: bold;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .container {
            max-width: 900px;
            margin: 20px auto;
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .image {
            text-align: center;
            margin: 0;
        }

        .image img {
            max-width: 100%;
            height: auto;
            border-bottom: 5px solid rgb(241, 121, 141);
        }

        .section {
            padding: 15px 20px;
            /* Perkecil padding section */
        }

        .section h2 {
            margin-bottom: 15px;
            color: rgb(241, 121, 141);
            font-size: 16px;
            /* Perkecil ukuran font pada subjudul */
        }

        .section ul {
            padding-left: 15px;
        }

        .section ul li {
            margin-bottom: 8px;
            list-style: disc;
        }

        .comments {
            background: #f9f9f9;
            padding: 20px 25px;
            /* Perkecil padding komentar */
            border-top: 3px solid rgb(241, 121, 141);
        }

        .comments h2 {
            margin-top: 0;
            margin-bottom: 8px;
            color: rgb(241, 121, 141);
            font-size: 14px;
            /* Perkecil ukuran font di bagian komentar */
        }

        .comments textarea {
            width: 100%;
            height: 100px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 10px;
            font-size: 12px;
            resize: none;
        }

        .comments button {
            background: rgb(241, 121, 141);
            color: white;
            border: none;
            padding: 8px 15px;
            /* Perkecil ukuran tombol */
            border-radius: 5px;
            cursor: pointer;
            font-size: 12px;
            /* Perkecil ukuran font tombol */
            transition: background 0.3s;
        }

        .comments button:hover {
            background: rgb(241, 121, 141);
        }

        .footer {
            text-align: center;
            padding: 8px;
            /* Perkecil padding footer */
            background: linear-gradient(to right, rgb(255, 159, 175), rgb(241, 121, 141));
            color: white;
            font-size: 10px;
            /* Perkecil ukuran font footer */
            box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
        }

        @media (max-width: 768px) {
            .container {
                margin: 15px;
            }

            .section {
                padding: 10px 15px;
            }

            .comments textarea {
                height: 80px;
            }
        }

        .judulkatalog {
            margin-top: 90px;
        }

        .juduldetail {
            font-size: 27px;
        }

        .dropdown-item:hover {
        background-color: #f1798d !important;
        color: white !important;
        transition: background-color 0.3s ease;
    }
    
    .header {
        text-align: center; 
        padding: 20px; 
    }

    .juduldetail {
    font-size: 3vw;
    margin: 0;
    line-height: 1.2;
    margin-top: 4px;
}

@media (max-width: 768px) {
    .juduldetail {
        font-size: 5vw;
        margin-top: 22px; 
    }
}

@media (max-width: 480px) {
    .juduldetail {
        font-size: 8vw;
        margin-top: 10px; 
    }
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
                                style="color: rgb(241, 121, 141); font-size: 0.875rem; font-weight: bold;">My Bookmark</a>
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

    <div class="aksesoris-list">
        <div class="aksesoris-item">
            <div class="header judulkatalog">
                <h1 class="juduldetail">{{ $produk->judul }}</h1>
            </div>
            <div class="container">
                <div class="image">
                    <img src="{{asset('storage/'.$produk->image)}}" alt="Foto {{ $produk->judul }}">
                </div>
                <div class="section">
                    <h2>Material:</h2>
                    @foreach ($produk->tutorials as $tutorial)
                   <p>{{ $tutorial->bahan }}</p>
                    @endforeach
                </div>
                <div class="section">
                    <h2>Step:</h2>
                    @foreach ($produk->tutorials as $tutorial)
                    <p>{{ $tutorial->langkah }}</p>
                    @endforeach
                </div>

                {{-- <div class="section">
                    <h2>Daftar Tutorial:</h2>
                    <ul>
                        @foreach ($produk->tutorials as $tutorial)
                        <li>
                            <a href="{{ route('tutorial.show', $tutorial->id) }}">
                        {{ $tutorial->judul }}
                        </a>
                        </li>
                        @endforeach
                    </ul>
                </div> --}}

                <div class="comments">
                    <h2>Comment:</h2>
                    <form action="{{ route('comments.store', $produk->id) }}" method="POST">
                        @csrf
                        <textarea placeholder="Add your comments here..." name="comment"></textarea>
                        <button type="submit">Send</button>
                    </form>
                    @if($comments->isEmpty())
                    <div class="belum d-flex flex-column justify-content-center align-items-center pt-5 pb-5">
                        <p>Belum ada komentar di Produk ini !</p>

                    </div>
                    @else
                    @foreach($comments as $comment)
                    <div class="d-flex align-items-center">
                        @if($comment->user->image)
                        <img src="{{ asset('storage/' . $comment->user->image) }}" alt="User Image" width="35"
                            height="35" class="rounded-circle">
                        @else
                        <img class="rounded-circle" width="35" height="35"
                            src="https://ui-avatars.com/api/?name={{ urlencode($comment->user->username) }}"
                            alt="User Avatar">
                        @endif

                        <div class="ms-3">
                            <p class="mt-3"><strong
                                    class="me-3">{{ $comment->user->username }}</strong>{{ $comment->comment }}
                            </p>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>

        </div>
    </div>
    </div>

    <div class="footer">
        <p>&copy; 2024 CraftAlog. All Rights Reserved.</p>
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
    </script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"></script>
</body>

</html>
