@extends('Front.indexFront')

@section('title', 'CraftAlog')


@section('main')
<!-- Slider Section -->
<section id="slider" class="slider section bg-white">
    <div class="container position-relative z-0">
        <div class="row">
            <div class="col-12">
                <div class="bg-white py-5 px-3">
                    <div class="swiper init-swiper" data-aos="fade-up" data-aos-delay="100">
                        <script type="application/json" class="swiper-config">
                            {
                                "loop": true,
                                "speed": 600,
                                "autoplay": {
                                    "delay": 5000
                                },
                                "slidesPerView": "auto",
                                "centeredSlides": true,
                                "pagination": {
                                    "el": ".swiper-pagination",
                                    "type": "bullets",
                                    "clickable": true
                                },
                                "navigation": {
                                    "nextEl": ".swiper-button-next",
                                    "prevEl": ".swiper-button-prev"
                                }
                            }
                        </script>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" style="background-image: url('landing/assets/image1.png');">
                                <div class="content">
                                    <h2><a href="{{ route('login') }}">DIY Lip Balm in Three Scents</a></h2>
                                    <p>This DIY Lip Balm In Three Scents.</p>
                                </div>
                            </div>
                            <div class="swiper-slide" style="background-image: url('landing/assets/image2.png');">
                                <div class="content">
                                    <h2><a href="{{ route('login') }}">Catherine's Wheel Stitch Tutorial</a></h2>
                                    <p>This Crochet Pattern Looks Like Fireworks.</p>
                                </div>
                            </div>
                            <div class="swiper-slide" style="background-image: url('landing/assets/image3.png');">
                                <div class="content">
                                    <h2><a href="{{ route('login') }}">DIY Bird Feeder</a></h2>
                                    <p>Attract New Birds To Your Yard With This Colorful DIY Feeder.</p>
                                </div>
                            </div>
                            <div class="swiper-slide" style="background-image: url('landing/assets/image4.png');">
                                <div class="content">
                                    <h2><a href="{{ route('login') }}">14 Finger Knitting Projects</a></h2>
                                    <p>14 Finger Knitting Projects Anyone Can Do.</p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Slider Section -->


<!-- Statistic-->
<div class="container py-5">
    <div class="row justify-content-center text-center statistics-container">
        <div class="col-12">
            <div class="d-flex justify-content-around">
                <div class="statistics-item mb-4">
                    <a href="#" class="statistics-link">
                        <div class="icon-wrapper mb-3">
                            <img src="{{ asset('landing/assets/icon-million.png')}}" alt="Annual Readers Icon"
                                class="stats-icon">
                        </div>
                        <h2 class="number">1,000+</h2>
                        <p class="label">Annual Readers</p>
                    </a>
                </div>
                <div class="statistics-item mb-4">
                    <a href="#" class="statistics-link">
                        <div class="icon-wrapper mb-3">
                            <img src="{{ asset('landing/assets/icon-camera.png')}}" alt="Photos Icon"
                                class="stats-icon">
                        </div>
                        <h2 class="number">1,000+</h2>
                        <p class="label">Original Photos</p>
                    </a>
                </div>
                <div class="statistics-item mb-4">
                    <a href="#" class="statistics-link">
                        <div class="icon-wrapper mb-3">
                            <img src="{{ asset('landing/assets/icon-project.png')}}" alt="Projects Icon"
                                class="stats-icon">
                        </div>
                        <h2 class="number">1,000+</h2>
                        <p class="label">How-To Projects</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End Statistic-->

<!--Scrol panah-->
<button id="scrollTopButton" class="btn btn-primary">
    <i class="bi bi-arrow-up"></i>
</button>
<!--End Scrol Panah-->

<div class="container text-center my-5">
    <div class="title-wrapper">
        <p class="text-uppercase color-pink">DIY women's accessories</p>
        <h1 class="title">Accessorize Your Style with</h1>
        <h1 class="title">Accessories Full of Character</h1>
        <hr class="title-underline mx-auto">
        <hr class="title-underline mx-auto">
    </div>
</div>

<!--Gambar-->
<div class="container my-4">
    <div class="row">
        <!-- Card 1 -->
        <div class="col-12 col-md-4 mb-4">
            <div class="card my-card">
                <a href="{{ route('login') }}">
                    <img src="{{ asset('landing/image/ikat rambut.jpg')}}" class="card-img-top" alt="Image 1">
                </a>
                <div class="card-body">
                    <h6 class="text-uppercase text-pink mb-2">women's accessories</h6>
                    <h5 class="card-title underline-on-click" onclick="window.location.href='halaman1.html';">women's hair ties</h5>
                    <div class="action-icons">
                    </div>
                </div>
            </div>
        </div>
        <!-- Card 2 -->
        <div class="col-12 col-md-4 mb-4">
            <div class="card my-card">
                <a href="{{ route('login') }}">
                    <img src="{{ asset('landing/image/jeday.jpg')}}" class="card-img-top" alt="Image 2">
                </a>
                <div class="card-body">
                    <h6 class="text-uppercase text-pink mb-2">women's accessories</h6>
                    <h5 class="card-title underline-on-click" onclick="window.location.href='halaman2.html';">Quilled
                        breaking a woman's hair</h5>
                    <div class="action-icons">
                    </div>
                </div>
            </div>
        </div>
        <!-- Card 3 -->
        <div class="col-12 col-md-4 mb-4">
            <div class="card my-card">
                <a href="{{ route('login') }}">
                    <img src="{{ asset('landing/image/pita.jpg')}}" class="card-img-top" alt="Image 3">
                </a>
                <div class="card-body">
                    <h6 class="text-uppercase text-pink mb-2">women's accessories</h6>
                    <h5 class="card-title underline-on-click" onclick="window.location.href='halaman3.html';">women's ribbon decoration</h5>
                    <div class="action-icons">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End Gambar-->

<div class="container text-center my-5">
    <div class="title-wrapper">
        <p class="text-uppercase color-pink">DIY Home Decoration</p>
        <h1 class="title">A Beautiful Touch for Every</h1>
        <h1 class="title">Corner of Your Home</h1>
        <hr class="title-underline mx-auto">
        <hr class="title-underline mx-auto">
    </div>
</div>

<!--Gambar-->
<div class="container my-4">
    <div class="row">
        <!-- Card 1 -->
        <div class="col-12 col-md-4 mb-4">
            <div class="card my-card">
                <a href="{{ route('login') }}">
                    <img src="{{ asset('landing/image/doprise.jpg')}}" class="card-img-top" alt="Image 1">
                </a>
                <div class="card-body">
                    <h6 class="text-uppercase text-pink mb-2">home decoration</h6>
                    <h5 class="card-title underline-on-click" onclick="window.location.href='halaman4.html';">Simmer Pot
                        cute flower vase</h5>
                    <div class="action-icons">
                    </div>
                </div>
            </div>
        </div>
        <!-- Card 2 -->
        <div class="col-12 col-md-4 mb-4">
            <div class="card my-card">
                <a href="{{ route('login') }}">
                    <img src="{{ asset('landing/image/karpet.jpg')}}" class="card-img-top" alt="Image 3">
                </a>
                <div class="card-body">
                    <h6 class="text-uppercase text-pink mb-2">home decoration</h6>
                    <h5 class="card-title underline-on-click" onclick="window.location.href='halaman6.html';">home decoration carpet</h5>
                    <div class="action-icons">
                    </div>
                </div>
            </div>
        </div>
        <!-- Card 3 -->
        <div class="col-12 col-md-4 mb-4">
            <div class="card my-card">
                <a href="{{ route('login') }}">
                    <img src="{{ asset('landing/image/bingkai.jpg')}}" class="card-img-top" alt="Image 2">
                </a>
                <div class="card-body">
                    <h6 class="text-uppercase text-pink mb-2">home decoration</h6>
                    <h5 class="card-title underline-on-click" onclick="window.location.href='halaman5.html';">Fun Fall
                        floral frame</h5>
                    <div class="action-icons">
                    </div>
                </div>
            </div>
        </div>
        <!-- Card 3 -->
    </div>
</div>
<!--End Gambar-->

<div class="container text-center my-5">
    <div class="title-wrapper">
        <p class="text-uppercase color-pink">DIY Handycrafts</p>
        <h1 class="title">Handicrafts: From Hand to Heart,</h1>
        <h1 class="title">Creating Beauty</h1>
        <hr class="title-underline mx-auto">
        <hr class="title-underline mx-auto">
    </div>
</div>

<!--Gambar-->
<div class="container my-4">
    <div class="row">
        <!-- Card 1 -->
        <div class="col-12 col-md-4 mb-4">
            <div class="card my-card">
                <a href="{{ route('login') }}">
                    <img src="{{ asset('landing/image/buketbunga.jpg')}}" class="card-img-top" alt="Image 1">
                </a>
                <div class="card-body">
                    <h6 class="text-uppercase text-pink mb-2">handycrafts</h6>
                    <h5 class="card-title underline-on-click" onclick="window.location.href='halaman7.html';">
                        satin ribbon bouquet</h5>
                    <div class="action-icons">
                    </div>
                </div>
            </div>
        </div>
        <!-- Card 2 -->
        <div class="col-12 col-md-4 mb-4">
            <div class="card my-card">
                <a href="{{ route('login') }}">
                    <img src="{{ asset('landing/image/peri.jpg')}}" class="card-img-top" alt="Image 2">
                </a>
                <div class="card-body">
                    <h6 class="text-uppercase text-pink mb-2">handycrafts</h6>
                    <h5 class="card-title underline-on-click" onclick="window.location.href='halaman8.html';">fairy toy</h5>
                    <div class="action-icons">
                    </div>
                </div>
            </div>
        </div>
        <!-- Card 3 -->
        <div class="col-12 col-md-4 mb-4">
            <div class="card my-card">
                <a href="{{ route('login') }}">
                    <img src="{{ asset('landing/image/buketlucu.jpg')}}" class="card-img-top" alt="Image 3">
                </a>
                <div class="card-body">
                    <h6 class="text-uppercase text-pink mb-2">handycrafts</h6>
                    <h5 class="card-title underline-on-click" onclick="window.location.href='halaman9.html';">flowers Woolen thread</h5>
                    <div class="action-icons">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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
                <a href="https://www.tiktok.com/@dapoer.ummai?is_from_webapp=1&sender_device=pc" class="social-icon"><i
                        class="fab fa-tiktok"></i></a>
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
    function toggleSearchInput() {
        const searchInput = document.querySelector('.search-input');
        searchInput.classList.toggle('show');
    }
</script>

<!--End search-->

<script>
    window.onscroll = function() {
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
    document.addEventListener("DOMContentLoaded", function() {
        const swiperConfig = JSON.parse(document.querySelector(".swiper-config").textContent);
        new Swiper(".init-swiper", swiperConfig);
    });
</script>
<script>
    document.addEventListener("scroll", function() {
        const scrollTopButton = document.getElementById("scrollTopButton");
        if (window.scrollY > 100) {
            scrollTopButton.style.display = "block";
        } else {
            scrollTopButton.style.display = "none";
        }
    });
    document.getElementById("scrollTopButton").addEventListener("click", function() {
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

@endsection