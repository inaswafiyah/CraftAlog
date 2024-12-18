<?php
$kategori = \App\Models\Categori::all();
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.0/css/all.min.css"
        integrity="sha512-9xKTRVabjVeZmc+GUW8GgSmcREDunMM+Dt/GrzchfN8tkwHizc5RP4Ok/MXFFy5rIjJjzhndFScTceq5e6GvVQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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

        .star-rating {
            display: flex;
            flex-direction: row-reverse;
            justify-content: center;
            gap: 5px;
        }

        .star-rating input {
            display: none;
        }

        .star-rating label {
            font-size: 20px;
            color: #ddd;
            cursor: pointer;
        }

        .star-rating input:checked~label,
        .star-rating label:hover,
        .star-rating label:hover~label {
            color: #f1798d;
        }

        .bookmark-btn {
            background-color: transparent;
            color: #f1798d;
            border: 1px solid #f1798d;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            /* Memastikan tombol tetap bundar */
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background-color 0.3s, transform 0.2s;
            outline: none;
            /* Menghapus garis fokus */
            box-shadow: none;
            /* Menghapus bayangan garis */
        }

        .bookmark-btn:focus {
            outline: none;
            /* Menghapus garis fokus pada saat tombol di-fokuskan */
            box-shadow: none;
            /* Pastikan tidak ada efek fokus */
        }

        .bookmark-btn:hover {
            background-color: #f1798d;
            color: white;
            transform: scale(1.1);
        }

        .bookmark-btn.bookmarked i {
            color: white;
        }

        .bookmark-btn i {
            font-size: 1.4rem;
        }

        .like-btn i {
            font-size: 24px;
            color: #f1798d;
            transition: color 0.3s ease;
        }

        .like-btn.liked i {
            color: #f1798d;
        }

        .dropdown-item:hover {
            background-color: #f1798d !important;
            color: white !important;
            transition: background-color 0.3s ease;
        }

    </style>
    <style>
        /* Dropdown container styling */
        .nav-item {
            position: relative;
            display: inline-block;
        }
        
        /* Dropdown button styling */
        .dropdown-toggle {
            background-color: #f1798d;
            color: white;
            font-size: 0.875rem;
            font-weight: bold;
            padding: 0.375rem 0.75rem;
            border-radius: 0.25rem;
            border: none;
            cursor: pointer;
        }
        
        /* Dropdown menu styling */
        .dropdown-menu {
            display: none; /* Hidden by default */
            position: absolute;
            background-color: white;
            min-width: 160px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
            padding: 0;
            margin: 0;
            list-style: none;
            border-radius: 0.25rem;
            overflow: hidden;
        }
        
        /* Dropdown items styling */
        .dropdown-menu .dropdown-item {
            padding: 0.5rem 1rem;
            text-decoration: none;
            color: black;
            display: block;
            cursor: pointer;
        }
        
        .dropdown-menu .dropdown-item:hover {
            background-color: #f1798d;
            color: white;
        }
        
        /* Show dropdown menu when active */
        .nav-item.show .dropdown-menu {
            display: block;
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

                <div class="nav-item">
                    <button class="dropdown-toggle" id="kategoriDropdown">Kategori</button>
                    <ul class="dropdown-menu" id="kategoriMenu">
                        <!-- Example data, replace with server-side logic -->
                        @forelse($kategori as $row)
                        <li>
                            <a class="dropdown-item"
                                href="{{ route('front.produk.kate', $row->slug) }}">{{ $row->nama_kategori }}</a>
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
    <br>
    <br>
    <br>
    <br>

    

    <section class="container dashboard">
        <div class="text-center" style="text-align: center">
            <span style="color: #f1798d; margin-bottom: 20px; display: inline-block;">CraftAlog</span>
            <h1 class="text-center">{{ $cate->nama_kategori }}</h1>
        </div>

        <div class="container my-4">
            <div class="row">
                @foreach ($produk as $row)
                <div class="col-12 col-md-4 mb-4">

                    <div class="card my-card">
                        <a href="{{ route('produk.show', $row->id)}}">
                            <img src="{{asset('storage/'.$row->image)}}" class="card-img-top" alt="Image 1">
                        </a>
                        <div class="card-body">
                            <h6 class="text-uppercase text-pink mb-2">{{ $row->judul }}</h6>
                            <h5 class="card-title underline-on-click"
                                onclick="window.location.href='PomMonsters.html';">
                                {{ $row->deskripsi}}</h5>
                            <div class="star-rating" data-rating="{{ $userRatings[$row->id] ?? 0 }}"
                                data-produk-id="{{ $row->id }}">
                                @for ($i = 5; $i >= 1; $i--)
                                <input type="radio" id="star{{ $i }}-{{ $row->id }}" name="rating-{{ $row->id }}"
                                    value="{{ $i }}" />
                                <label for="star{{ $i }}-{{ $row->id }}"><i class="fa fa-star"></i></label>
                                @endfor
                            </div>
                            <div class="action-icons">
                                <button class="like-btn" data-product-id="{{$row->id}}">
                                    <i class="fa-regular fa-heart"></i>
                                </button>
                                <a href="{{ route('produk.show', $row->id)}}" style="text-decoration: none;">
                                    <button class="btn comment-btn">
                                        <i class="bi bi-chat-dots"></i>
                                    </button>
                                </a>
                                <!-- Bookmark Icon -->
                                <button class="bookmark-btn" data-product-id="{{ $row->id }}">
                                    <i
                                        class="fa {{ auth()->user()->bookmarks->contains('product_id', $row->id) ? 'fa-solid fa-bookmark' : 'fa-regular fa-bookmark' }}"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <div class="horizontal-lines">
        <div class="line"></div>
        <div class="line"></div>
    </div>

    <!--Footer-->
    <div class="container footer">
        <div class="row">
            <div class="col-md-4">
                <div class="logo">Craft<span>Alog</span></div>
                <div class="description">Make Your Favorite Crafts, Find VariousCcreative Iideas.</div>
            </div>
            <div class="col-md-4">
                <div class="newsletter">
                    <div>DISCOVER YOUR CREATIVITY, GROW YOUR TALENTS</div>
                    <div class="d-flex mt-2">
                        <!-- Menambahkan disabled untuk mencegah input -->
                        <input type="email" placeholder="YOUR DREAMS" disabled>
                        <button>CRAFTALOG</button>
                    </div>
                </div>
            </div>            
            <div class="col-md-2">
                <div>FOLLOW US</div>
                <div class="social-icons mt-2">
                    <a href="https://www.instagram.com/belajar_masak_harian?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                        class="social-icon"><i class="fab fa-instagram"></i></a>
                    <a href="https://t.me/dapoerummai" class="social-icon"><i class="fab fa-telegram"></i></a>
                    <a href="https://www.tiktok.com/@dapoer.ummai?is_from_webapp=1&sender_device=pc"
                        class="social-icon"><i class="fab fa-tiktok"></i></a>
                    <a href="https://www.youtube.com/@dapoerummai9351" class="social-icon"><i
                            class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="col-md-2">
                <div>CALL US</div>
                <div class="contact mt-2">+Love</div>
            </div>
        </div>

    </div>

    <!--End Footer-->



<script>
    // Dropdown toggle functionality
    const dropdownButton = document.getElementById('kategoriDropdown');
    const dropdownMenu = document.getElementById('kategoriMenu');
    const navItem = dropdownButton.closest('.nav-item');
    
    // Toggle dropdown menu visibility on button click
    dropdownButton.addEventListener('click', () => {
        navItem.classList.toggle('show');
    });
    
    // Close dropdown menu when clicking outside
    document.addEventListener('click', (event) => {
        if (!navItem.contains(event.target)) {
            navItem.classList.remove('show');
        }
    });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"></script>
    <script>
        document.querySelectorAll('.bookmark-btn').forEach(button => {
            button.addEventListener('click', function () {
                const productId = this.dataset.productId;
                const isBookmarked = this.querySelector('i').classList.contains('fa-solid');

                fetch('/bookmark', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({
                            product_id: productId
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.status === 'bookmarked') {
                            this.querySelector('i').classList.remove('fa-regular');
                            this.querySelector('i').classList.add('fa-solid');
                        } else {
                            this.querySelector('i').classList.remove('fa-solid');
                            this.querySelector('i').classList.add('fa-regular');
                        }
                    });
            });
        });

    </script>

    {{-- rating --}}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Inisialisasi rating setelah halaman dimuat
            document.querySelectorAll('.star-rating').forEach(ratingElement => {
                const currentRating = parseInt(ratingElement.dataset.rating, 10) ||
                0; // Nilai rating dari dataset
                const produkId = ratingElement.dataset.produkId; // ID produk dari dataset

                if (currentRating > 0) {
                    // Set input ke checked berdasarkan rating yang disimpan
                    const inputToCheck = ratingElement.querySelector(`input[value="${currentRating}"]`);
                    if (inputToCheck) {
                        inputToCheck.checked = true;
                        // Warnai ulang bintang sesuai rating
                        updateStarColors(ratingElement, currentRating);
                    }
                }
            });

            // Tambahkan event listener untuk perubahan rating
            document.querySelectorAll('.star-rating input').forEach(radio => {
                radio.addEventListener('change', function () {
                    const produkId = this.name.split('-')[1]; // Ambil ID produk dari nama input
                    const rating = parseInt(this.value, 10); // Ambil nilai rating yang dipilih
                    const parent = this.closest('.star-rating'); // Elemen rating parent

                    // Update warna bintang langsung setelah perubahan
                    updateStarColors(parent, rating);

                    // Kirim data rating ke server menggunakan fetch
                    fetch('{{ route('rate') }}', {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/json',
                                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                },
                                body: JSON.stringify({
                                    produk_id: produkId,
                                    rating: rating
                                })
                            })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                alert('Rating berhasil disimpan!');
                            } else {
                                alert('Gagal menyimpan rating.');
                            }
                        })
                        .catch(error => {
                            console.error('Error:', error);
                        });
                });
            });

            // Tambahkan hover effect pada label
            document.querySelectorAll('.star-rating label').forEach(label => {
                label.addEventListener('mouseover', function () {
                    const parent = this.closest('.star-rating'); // Elemen rating parent
                    const value = parseInt(this.htmlFor.split('star')[1].split('-')[0],
                    10); // Nilai rating dari for attribute
                    updateStarColors(parent, value); // Update warna bintang sesuai hover
                });

                label.addEventListener('mouseout', function () {
                    const parent = this.closest('.star-rating'); // Elemen rating parent
                    const currentRating = parseInt(parent.querySelector('input:checked') ?
                        .value || 0, 10); // Nilai rating yang disimpan
                    updateStarColors(parent,
                    currentRating); // Reset warna ke rating yang disimpan
                });
            });

            /**
             * Fungsi untuk memperbarui warna bintang
             * @param {HTMLElement} ratingElement - Elemen rating
             * @param {Number} rating - Nilai rating
             */
            function updateStarColors(ratingElement, rating) {
                const labels = [...ratingElement.querySelectorAll('label')]; // Ambil semua label
                labels.forEach((label, index) => {
                    const labelValue = 5 - index; // Hitung nilai rating dari urutan label
                    label.style.color = labelValue <= rating ? '#f1798d' : '#ddd'; // Warnai bintang
                });
            }
        });

    </script>

    <script>
        function toggleSearchInput() {
            const searchInput = document.querySelector('.search-input');
            searchInput.classList.toggle('show');
        }

    </script>

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

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
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
    <script>
        document.addEventListener('DOMContentLoaded', () => {

            const buttons = document.querySelectorAll('.like-btn');

            fetch('/get-likes', {
                    method: 'GET',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {

                        buttons.forEach(button => {
                            const produkId = button.getAttribute('data-product-id');
                            const heartIcon = button.querySelector('i');

                            if (data.likedProdukIds.includes(parseInt(produkId))) {
                                button.classList.add('liked');
                                heartIcon.classList.add('fa-solid');
                                heartIcon.classList.remove('fa-regular');
                            }
                        });
                    }
                })
                .catch(error => console.error('Error loading likes:', error));

            buttons.forEach(button => {
                button.addEventListener('click', function () {
                    const produkId = this.getAttribute('data-product-id');
                    const heartIcon = this.querySelector('i');
                    const isLiked = this.classList.contains('liked');
                    const url = isLiked ? '/unlike' : '/like';

                    fetch(url, {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': document.querySelector(
                                    'meta[name="csrf-token"]').content
                            },
                            body: JSON.stringify({
                                produk_id: produkId
                            })
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                this.classList.toggle('liked', !isLiked);
                                heartIcon.classList.toggle('fa-solid');
                                heartIcon.classList.toggle('fa-regular');
                            } else {
                                alert(data.message || 'Terjadi kesalahan.');
                            }
                        })
                        .catch(error => {
                            console.error('Error:', error);
                            alert('Gagal mengirim permintaan.');
                        });
                });
            });
        });

    </script>
</body>

</html>
