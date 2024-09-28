<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Booking System</title>

    <!--custom boostrep link -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!--google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&display=swap" rel="stylesheet" />
    <!-- font-family: "Cinzel", serif;-->
    <!--second font family-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet" />
    <!--font awesom-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
   <!-- Slick Slider CSS -->
   <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
   <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

</head>

<body>
    <!--header section start-->
    <header class="header-view">
        <div class="logo-view">
            <a href="#">
                <img src="./images/taj.png" alt="Booking" />
            </a>
        </div>
        <!--toggle btn add-->
        <div class="toggle-btn">
            <i class="fa-solid fa-bars"></i>
        </div>
        {{-- <div class="close-nav toggle-btn">
            <i class="fa-solid fa-times"></i>
        </div> --}}


        <!--toggle btn end-->
        <div class="right-part">
            <ul class="nav-view m-0 p-0">
                <li class="nav-item">
                    <a href="#" class="nav-link">destinations</a>
                </li>
                <li class="nav-item"><a href="#" class="nav-link">hotels</a></li>
                <li class="nav-item"><a href="#" class="nav-link">dining</a></li>
                <li class="nav-item"><a href="#" class="nav-link">offers</a></li>
                <li class="nav-item">
                    <a href="#" class="nav-link">destinations</a>
                </li>
                <li class="nav-item"><a href="#" class="nav-link">more</a></li>
            </ul>
            <div class="btn-view">
                <a href="#" class="login-btn">Login/join</a>
                <a href="#" class="primary-btn mx-2">book a stay</a>
            </div>
        </div>
    </header>
    <!--header section end-->

    <!--banner section start-->
    <section class="banner-section">
        <div class="banner-video-view">
            <video autoplay muted loop>
                <source
                    src="https://assets-cug1-825v2.tajhotels.com/video/TAJ%20WEBSITE%20FILM_1920%20X%20930_148mb.mp4?Impolicy=Medium_High"
                    type="video/mp4" />
            </video>
        </div>
    </section>
    <!--banner section end-->

    <!--Latest offer section start-->
    <section class="latest-offer margin-view">
        <div class="container-fluid">
            <div class="row mx-5">
                <div class="col-lg-6">
                    <h5 class="main-title"><span class="border-title"></span>Latest Offers</h5>
                </div>
                <div class="col-lg-6">
                    <div class="text-content">
                        Hotel management ensures efficient operations, providing guests with high-quality services,
                        comfort, and hospitality.
                    </div>
                </div>

            </div>
            <div class="your-class mt-5">
                <div class="offer-content-box">
                    <div class="offer-img">
                          <img src="{{ asset('images/p1.jpg') }}" alt="">
                    </div>
                    <div class="offer-content">
                           Pool Booking
                    </div>
                </div>
                <div class="offer-content-box">
                    <div class="offer-img">
                          <img src="{{ asset('images/p2.jpg') }}" alt="">
                    </div>
                    <div class="offer-content">
                           Hotel Booking
                    </div>
                </div>
                <div class="offer-content-box">
                    <div class="offer-img">
                          <img src="{{ asset('images/p3.jpg') }}" alt="">
                    </div>
                    <div class="offer-content">
                           Hotel Booking
                    </div>
                </div>
                <div class="offer-content-box">
                    <div class="offer-img">
                          <img src="{{ asset('images/p4.jpg') }}" alt="">
                    </div>
                    <div class="offer-content">
                           Beacth Booking
                    </div>
                </div>
                {{-- <div class="offer-content-box">
                    <div class="offer-img">
                          <img src="{{ asset('images/p5.jpg') }}" alt="">
                    </div>
                    <div class="offer-content">
                           Hotel Booking
                    </div>
                </div> --}}
                <div class="offer-content-box">
                    <div class="offer-img">
                          <img src="{{ asset('images/p6.jpg') }}" alt="">
                    </div>
                    <div class="offer-content">
                           villa booking
                    </div>
                </div>
                <div class="offer-content-box">
                    <div class="offer-img">
                          <img src="{{ asset('images/p7.jpg') }}" alt="">
                    </div>
                    <div class="offer-content">
                           Vila Booking
                    </div>
                </div>
                <div class="offer-content-box">
                    <div class="offer-img">
                          <img src="{{ asset('images/p8.jpg') }}" alt="">
                    </div>
                    <div class="offer-content">
                           Hotel Booking
                    </div>
                </div>
                {{-- <div class="offer-content-box">
                    <div class="offer-img">
                          <img src="{{ asset('images/p1.jpg') }}" alt="">
                    </div>
                    <div class="offer-content">
                           Pool Booking
                    </div>
                </div>

                <div class="offer-content-box">
                    <div class="offer-img">
                          <img src="{{ asset('images/p1.jpg') }}" alt="">
                    </div>
                    <div class="offer-content">
                           Pool Booking
                    </div>
                </div> --}}


            </div>

        </div>
    </section>
    <!--Latest offer section end-->



  <!-- jQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <!-- Slick Slider JS -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="{{ asset('js/sliders.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
