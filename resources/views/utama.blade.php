<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Nusantara Restaurant</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link rel="icon" type="image/png" href="{{ asset('assets/images/logo/5.png') }}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=forest" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=dine_in" />
  {{-- <link href="asst/img/favicon.png" rel="icon">
  <link href="asst/img/apple-touch-icon.png" rel="apple-touch-icon"> --}}

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="asst/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="asst/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="asst/vendor/aos/aos.css" rel="stylesheet">
  <link href="asst/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="asst/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="asst/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Dewi
  * Template URL: https://bootstrapmade.com/dewi-free-multi-purpose-html-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="{{route('utama')}}" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets/images/logo/5.png" alt="">
        <h1 class="sitename">Nusantara Restaurant</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Food Menu</a></li>
          {{-- <li><a href="#reservation">Reservation</a></li> --}}
          {{-- <li><a href="#team">Team</a></li> --}}
          {{-- <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li> --}}
          <li><a href="#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="cta-btn" href="{{route('book')}}">Book Now</a>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <img src="asst/img/3.jpeg" alt="" data-aos="fade-in">

      <div class="container d-flex flex-column align-items-center">
        <h2 data-aos="fade-up" data-aos-delay="100">Authentic Taste, Timeless Experience.</h2>
        <p data-aos="fade-up" data-aos-delay="200">One Table, Many Flavors, One Story of Indonesia.</p>
        <div class="d-flex mt-4" data-aos="fade-up" data-aos-delay="300">
          <a href="{{route('book')}}" class="btn-get-started">Book Now</a>
          <a href="https://youtu.be/YxI7_Yn2-Qc?si=-8jtEGQbZpcEA60u" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container">

        <div class="row gy-4">
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <h3>Nusantara Restaurant</h3>

            <p>Nusantara Restaurant is a culinary destination that brings the rich and diverse flavors of Indonesia to your table. Inspired by the incredible cultural and culinary heritage of the Indonesian archipelago, we aim to create a dining experience that combines authentic traditional flavors with a modern and elegant atmosphere.</p>

              <img src="asst/img/klc.jpg" class="img-fluid rounded-4 mb-4" alt="" style="size: 8cm">
        </div>
          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="250">
            <div class="content ps-0 ps-lg-5">
                <p>Indonesia is home to hundreds of unique culinary traditions, each with its own distinctive ingredients, spices, cooking techniques, and stories. At Nusantara Restaurant, we celebrate this diversity by serving a variety of traditional dishes inspired by different regions across Indonesia, from the rich and flavorful cuisine of Sumatra and the comforting dishes of Java to the fresh flavors of Sundanese cuisine and the unique specialties of Eastern Indonesia.</p>
              <p>
                Every dish is carefully prepared using selected ingredients and traditional cooking methods to preserve the authentic character of Indonesian cuisine. At the same time, we add a modern touch to the presentation and dining experience, creating dishes that remain faithful to their roots while being enjoyable for today's guests.
              </p>

              <p>
                For us, food is more than just something to eat. Every dish carries a story about culture, tradition, history, and heritage that has been passed down through generations. Through our menu, we want our guests to discover the beauty of Indonesia, one delicious dish at a time.
              </p>
              <p>
                Whether you are enjoying a meal with family, spending time with friends, or simply looking for a memorable culinary experience, Nusantara Restaurant offers a warm and welcoming place to gather, enjoy authentic Indonesian flavors, and create meaningful moments together.
              </p>

              <h1>
                Nusantara Restaurant — One Table, Many Flavors, One Story of Indonesia.
              </h1>

              {{-- <div class="position-relative mt-4">
                <img src="asst/img/about-2.jpg" class="img-fluid rounded-4" alt="">
                <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn"></a>
              </div> --}}
            </div>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section light-background">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-emoji-smile color-blue flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                <p>Happy Clients</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="fa-solid fa-utensils color-orange flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="40" data-purecounter-duration="1" class="purecounter"></span>
                <p>Menu</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-headset color-green flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="24" data-purecounter-duration="1" class="purecounter"></span>
                <p>Hours Of Support</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-people color-pink flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="25" data-purecounter-duration="1" class="purecounter"></span>
                <p>Hard Workers</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>

    </section><!-- /Stats Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Services</h2>
        <p>Featured Srvices<br></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-5">

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="asst/img/n1.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                    <i class="bi bi-calendar-check"></i>
                </div>
                {{-- <a href="service-details.html" class="stretched-link"> --}}
                  <h3>VIP Table Reservation</h3>
                {{-- </a> --}}
                <p>Priority table reservation service, perfect for romantic dinners or important business meals.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="service-item">
              <div class="img">
                <img src="asst/img/13.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-tree"></i>
                </div>
                {{-- <a href="service-details.html" class="stretched-link"> --}}
                  <h3>Scenic Riverside Dining</h3>
                {{-- </a> --}}
                <p>A dining experience with a calm and aesthetic natural/riverside atmosphere.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
            <div class="service-item">
              <div class="img">
                <img src="asst/img/r.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                <i class="fa fa-utensils"></i>
                </div>
                {{-- <a href="service-details.html" class="stretched-link"> --}}
                  <h3>Chef’s Signature & Fusion Menu</h3>
                {{-- </a> --}}
                <p>An experience featuring everything from premium, exceptional, and authentic Indonesian dishes.   </p>
              </div>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services Section -->

    <!-- Clients Section -->
    <section id="clients" class="clients section light-background">

      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          {{-- <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="asst/img/clients/client-1.png" class="img-fluid" alt="">
          </div><!-- End Client Item --> --}}

          {{-- <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="asst/img/clients/client-2.png" class="img-fluid" alt="">
          </div><!-- End Client Item --> --}}

          {{-- <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="asst/img/clients/client-3.png" class="img-fluid" alt="">
          </div><!-- End Client Item --> --}}

          {{-- <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="asst/img/clients/client-4.png" class="img-fluid" alt="">
          </div><!-- End Client Item --> --}}

          {{-- <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="asst/img/clients/client-5.png" class="img-fluid" alt="">
          </div><!-- End Client Item --> --}}

          {{-- <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="asst/img/clients/client-6.png" class="img-fluid" alt="">
          </div><!-- End Client Item --> --}}

        </div>

      </div>

    </section><!-- /Clients Section -->

    <!-- Features Section -->
    {{-- <section id="features" class="features section">

      <div class="container">

        <ul class="nav nav-tabs row  d-flex" data-aos="fade-up" data-aos-delay="100">
          <li class="nav-item col-3">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-1">
              <i class="bi bi-binoculars"></i>
              <h4 class="d-none d-lg-block">Modi sit est dela pireda nest</h4>
            </a>
          </li>
          <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2">
              <i class="bi bi-box-seam"></i>
              <h4 class="d-none d-lg-block">Unde praesenti mara setra le</h4>
            </a>
          </li>
          <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3">
              <i class="bi bi-brightness-high"></i>
              <h4 class="d-none d-lg-block">Pariatur explica nitro dela</h4>
            </a>
          </li>
          <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-4">
              <i class="bi bi-command"></i>
              <h4 class="d-none d-lg-block">Nostrum qui dile node</h4>
            </a>
          </li>
        </ul><!-- End Tab Nav -->

        <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

          <div class="tab-pane fade active show" id="features-tab-1">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
                <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i>
                    <spab>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</spab>
                  </li>
                  <li><i class="bi bi-check2-all"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit</span>.</li>
                  <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</span></li>
                </ul>
                <p>
                  Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                  culpa qui officia deserunt mollit anim id est laborum
                </p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="asst/img/working-1.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content Item -->

          <div class="tab-pane fade" id="features-tab-2">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Neque exercitationem debitis soluta quos debitis quo mollitia officia est</h3>
                <p>
                  Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                  culpa qui officia deserunt mollit anim id est laborum
                </p>
                <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Provident mollitia neque rerum asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</span></li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="asst/img/working-2.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content Item -->

          <div class="tab-pane fade" id="features-tab-3">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Voluptatibus commodi ut accusamus ea repudiandae ut autem dolor ut assumenda</h3>
                <p>
                  Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                  culpa qui officia deserunt mollit anim id est laborum
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Provident mollitia neque rerum asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</span></li>
                </ul>
                <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="asst/img/working-3.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content Item -->

          <div class="tab-pane fade" id="features-tab-4">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Omnis fugiat ea explicabo sunt dolorum asperiores sequi inventore rerum</h3>
                <p>
                  Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                  culpa qui officia deserunt mollit anim id est laborum
                </p>
                <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</span></li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="asst/img/working-4.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content Item -->

        </div>

      </div>

    </section><!-- /Features Section --> --}}

    <!-- Services 2 Section -->
    <section id="services-2" class="services-2 section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Services</h2>
        <p>CHECK OUR SERVICES</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

         <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
    <div class="service-item d-flex position-relative h-100">
        <i class="material-symbols-outlined icon flex-shrink-0 d-flex align-items-center justify-content-center"
           style="font-size: 36px; width: 65px; height: 65px;">
            dine_in
        </i>

        <div>
            <h4 class="title">
                <a href="#" class="stretched-link">Dine-In Experience</a>
            </h4>
            <p class="description">
                Enjoy Indonesian cuisine in a comfortable and elegant restaurant atmosphere.
            </p>
        </div>
    </div>
</div><!-- End Service Item -->

          <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item d-flex position-relative h-100">
              <i class="bi bi-card-checklist icon flex-shrink-0"></i>
              <div>
                <h4 class="title"><a href="#" class="stretched-link">Table Reservation</a></h4>
                <p class="description">Enjoy Indonesian cuisine in a comfortable and elegant restaurant atmosphere.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item d-flex position-relative h-100">
             <i class="bi bi-box icon flex-shrink-0 d-flex align-items-center justify-content-center"style="font-size: 36px; width: 65px; height: 65px;"></i>
              <div>
                <h4 class="title"><a href="#" class="stretched-link">Take Away</a></h4>
                <p class="description">Enjoy our delicious meals to go in a convenient and hassle-free manner.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item d-flex position-relative h-100">
              <i class="bi bi-truck icon flex-shrink-0 d-flex align-items-center justify-content-center"></i>
              <div>
                <h4 class="title"><a href="#" class="stretched-link">Food Delivery</a></h4>
                <p class="description">Enjoy the convenience of having our delicious meals delivered right to your doorstep.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item d-flex position-relative h-100">
              <i class="bi bi-brightness-high icon flex-shrink-0"></i>
              <div>
                <h4 class="title"><a href="#" class="stretched-link">Private Events</a></h4>
                <p class="description">Host your special occasions in our elegant venue with personalized service and exquisite cuisine.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-item d-flex position-relative h-100">
              <i class="bi bi-person icon flex-shrink-0 d-flex align-items-center justify-content-center"></i>
              <div>
                <h4 class="title"><a href="#" class="stretched-link">Chef's Special Menu</a></h4>
                <p class="description">Enjoy a selection of special dishes featuring the distinctive flavors of the Indonesian archipelago, prepared by our chefs.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services 2 Section -->

    <!-- Testimonials Section -->
   <section id="testimonials" class="testimonials section dark-background">

  <img src="asst/img/g.jpg" class="testimonials-bg" alt="Restaurant Background">

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="swiper init-swiper">

      <script type="application/json" class="swiper-config">
        {
          "loop": true,
          "speed": 600,
          "autoplay": {
            "delay": 5000
          },
          "slidesPerView": "auto",
          "pagination": {
            "el": ".swiper-pagination",
            "type": "bullets",
            "clickable": true
          }
        }
      </script>

      <div class="swiper-wrapper">

        <!-- Review 1 -->
        <div class="swiper-slide">
          <div class="testimonial-item">

            <img src="asst/img/testimonials/testimonials-1.jpg"
                 class="testimonial-img"
                 alt="Customer">

            <h3>Emily Johnson</h3>
            <h4>Food Lover</h4>

            <div class="stars">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
            </div>

            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span>
                The traditional Indonesian dishes were absolutely delicious.
                The flavors were rich, authentic, and beautifully presented.
                Definitely one of the best dining experiences I have had.
              </span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>

          </div>
        </div>

        <!-- Review 2 -->
        <div class="swiper-slide">
          <div class="testimonial-item">

            <img src="asst/img/testimonials/testimonials-2.jpg"
                 class="testimonial-img"
                 alt="Customer">

            <h3>Michael Anderson</h3>
            <h4>Restaurant Guest</h4>

            <div class="stars">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
            </div>

            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span>
                I really enjoyed the traditional drinks here. The flavors
                were refreshing and perfectly balanced. The presentation
                was also beautiful and made the experience even better.
              </span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>

          </div>
        </div>

        <!-- Review 3 -->
        <div class="swiper-slide">
          <div class="testimonial-item">

            <img src="asst/img/testimonials/testimonials-3.jpg"
                 class="testimonial-img"
                 alt="Customer">

            <h3>Sophia Williams</h3>
            <h4>Food Enthusiast</h4>

            <div class="stars">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
            </div>

            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span>
                The atmosphere is warm, comfortable, and full of Indonesian
                character. It is a perfect place to enjoy a meal with
                family and friends while experiencing local culture.
              </span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>

          </div>
        </div>

        <!-- Review 4 -->
        <div class="swiper-slide">
          <div class="testimonial-item">

            <img src="asst/img/testimonials/testimonials-4.jpg"
                 class="testimonial-img"
                 alt="Customer">

            <h3>Daniel Smith</h3>
            <h4>Regular Customer</h4>

            <div class="stars">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
            </div>

            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span>
                The food was fresh, flavorful, and served at the perfect
                temperature. I especially loved the traditional main course.
                The service was friendly and very welcoming.
              </span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>

          </div>
        </div>

        <!-- Review 5 -->
        <div class="swiper-slide">
          <div class="testimonial-item">

            <img src="asst/img/testimonials/testimonials-5.jpg"
                 class="testimonial-img"
                 alt="Customer">

            <h3>Olivia Brown</h3>
            <h4>Travel Blogger</h4>

            <div class="stars">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
            </div>

            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span>
                A wonderful place to experience Indonesian cuisine.
                Everything from the food and drinks to the traditional
                decoration creates a memorable dining experience.
                I would definitely come back again.
              </span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>

          </div>
        </div>

      </div>

      <div class="swiper-pagination"></div>

    </div>

  </div>

</section><!-- /Testimonials Section -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Menu List</h2>
        <p>CHECK OUR MENU</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">Food</li>
            {{-- <li data-filter=".filter-product">Drink</li> --}}
            <li data-filter=".filter-branding">Dessert</li>
            <li data-filter=".filter-books">Coffee</li>
          </ul><!-- End Portfolio Filters -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <div class="portfolio-content h-100">
                <img src="asst/img/portfolio/1.jpeg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Food</h4>
                  <p>Bebek bumbu hitam</p>
                  <a href="asst/img/portfolio/1.jpeg" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            {{-- <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <div class="portfolio-content h-100">
                <img src="asst/img/portfolio/product-1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Product 1</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="asst/img/portfolio/product-1.jpg" title="Product 1" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item --> --}}

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <div class="portfolio-content h-100">
                <img src="asst/img/portfolio/7.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Dessert</h4>
                  <p>Gelato
                  </p>
                  <a href="asst/img/portfolio/7.jpg" title="Branding 1" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
              <div class="portfolio-content h-100">
                <img src="asst/img/portfolio/2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Coffe</h4>
                  <p>Cappucino</p>
                  <a href="asst/img/portfolio/2.jpg" title="Branding 1" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <div class="portfolio-content h-100">
                <img src="asst/img/portfolio/5.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Food</h4>
                  <p>Iga bakar madur</p>
                  <a href="asst/img/portfolio/5.jpg" title="App 2" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            {{-- <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <div class="portfolio-content h-100">
                <img src="asst/img/portfolio/product-2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Product 2</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="asst/img/portfolio/product-2.jpg" title="Product 2" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item --> --}}

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <div class="portfolio-content h-100">
                <img src="asst/img/portfolio/8.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Dessert</h4>
                  <p>Chocolate Mayonnaise Cake</p>
                  <a href="asst/img/portfolio/8.jpg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
              <div class="portfolio-content h-100">
                <img src="asst/img/portfolio/1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Coffe</h4>
                  <p>Espresso</p>
                  <a href="asst/img/portfolio/1.jpg" title="Branding 2" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <div class="portfolio-content h-100">
                <img src="asst/img/portfolio/6.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Food</h4>
                  <p>Nasi gorng seafood </p>
                  <a href="asst/img/portfolio/6.jpg" title="App 3" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            {{-- <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <div class="portfolio-content h-100">
                <img src="asst/img/portfolio/product-3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Product 3</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="asst/img/portfolio/product-3.jpg" title="Product 3" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item --> --}}

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
              <div class="portfolio-content h-100">
                <img src="asst/img/portfolio/3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Coffe</h4>
                  <p>Coffe Latte</p>
                  <a href="asst/img/portfolio/3.jpg" title="Branding 3" data-gallery="3" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
              <div class="portfolio-content h-100">
                <img src="asst/img/portfolio/3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Coffe</h4>
                  <p>Coffe Latte</p>
                  <a href="asst/img/portfolio/3.jpg" title="Branding 3" data-gallery="3" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->
          </div><!-- End Portfolio Container -->
        </div>
      </div>
    </section><!-- /Portfolio Section -->

    {{-- <!-- Reservation Section --> --}}
    {{-- <section id="reservation" class="reservation section light-background">


      <div class="container section-title" data-aos="fade-up">
        <h2>Reservation</h2>
        <p>Book Your Table</p>
      </div>]

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-6">
            <div class="row gy-4">

              <div class="col-lg-12">
                <div class="row gy-6">
                  <div class="col-md-6">
                    <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="100">
                      <i class="bi bi-clock"></i>
                      <h3>Opening Hours</h3>
                      <p>Every Day 11:00 - 22:00</p>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
                      <i class="bi bi-people"></i>
                      <h3>Group Reservation</h3>
                      <p>Available for up to 20 guests</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <a href="https://wa.me/085711489232?text=Halo%20Nusantara%20Restaurant,%20saya%20ingin%20melakukan%20reservasi%20meja.">
                <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="300">
                  <i class="bi bi-whatsapp"></i>
                  <h3>Quick Booking</h3>
                  <p>+62 857 1148 9232</p>
                </div>
                </a>
              </div>

              <div class="col-md-6">
                <a link href="https://maps.app.goo.gl/hUiBuBnCRpsa8i7BA">
                  <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="400">
                    <i class="bi bi-geo-alt"></i>
                    <h3>Address</h3>
                    <p>8MH2+HQ Kebumen, Kabupaten Kebumen, Jawa Tengah</p>
                  </div>
                </a>
              </div>

            </div>
          </div>

          <div class="col-lg-6">
            <form action="forms/reservation.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="500">
              <div class="row gy-4">
                <h3><b>Reserve a Table</b></h3>

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                </div>

                <div class="col-md-6">
                  <input type="tel" name="phone" class="form-control" placeholder="Phone Number" required="">
                </div>

                <div class="col-md-12">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                </div>

                <div class="col-md-4">
                  <input type="date" name="reservation_date" class="form-control" placeholder="Date" required="">
                </div>

                <div class="col-md-4">
                  <input type="time" name="reservation_time" class="form-control" placeholder="Time" required="">
                </div>

                <div class="col-md-4">
                  <input type="number" name="guests" class="form-control" placeholder="Guests" min="1" max="20" required="">
                </div>

                <div class="col-md-12">
                  <select name="occasion" class="form-control">
                    <option value="" selected disabled>Occasion (optional)</option>
                    <option value="casual">Casual Dining</option>
                    <option value="birthday">Birthday</option>
                    <option value="anniversary">Anniversary</option>
                    <option value="business">Business Meal</option>
                    <option value="other">Other</option>
                  </select>
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="4" placeholder="Special Request (optional)"></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your reservation has been received. We will contact you shortly to confirm. Thank you!</div>

                  <button type="submit">Book Now</button>
                </div>

              </div>
            </form>
          </div><!-- End Reservation Form -->

        </div>

      </div>

    </section><!-- /Reservation Section --> --}}

    <!-- Team Section -->
    {{-- <section id="team" class="team section light-background">
      <div class="container section-title" data-aos="fade-up">
        <h2>Team</h2>
        <p>CHECK OUR TEAM</p>
      </div>

      <div class="container">

        <div class="row gy-5">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="pic"><img src="asst/img/team/team-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="pic"><img src="asst/img/team/team-2.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="pic"><img src="asst/img/team/team-3.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>CTO</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>  --}}

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Necessitatibus eius consequatur</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <div class="col-lg-6 ">
            <div class="row gy-4">

              <div class="col-lg-12">
                <div class="row gy-6">
                    <a link href="https://maps.app.goo.gl/hUiBuBnCRpsa8i7BA">
                        <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">

                                <i class="bi bi-geo-alt"></i>

                        <h3>Address</h3>
                        <p>8MH2+HQ Kebumen, Kabupaten Kebumen, Jawa Tengah</p>
                        </div>
                    </a>
                </div>

              </div><!-- End Info Item -->

              <div class="col-md-6">
                <a href="https://wa.me/085711489232?text=Halo%20Nusantara%20Restaurant,%20saya%20ingin%20bertanya%20tentang%20menu%20dan%20reservasi.">
                <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="300">
                  <i class="bi bi-whatsapp"></i>
                  <h3>Chat Us</h3>
                  <p>+62 857 1148 9232</p>
                </div>
                </a>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="400">
                  <i class="bi bi-envelope"></i>
                  <h3>Email Us</h3>
                  <p>lizamganteng602@gmail.com</p>
                </div>
              </div><!-- End Info Item -->

            </div>
          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="500">
              <div class="row gy-4">
                <h3><b>Review</b></h3>

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="4" placeholder="Message" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer dark-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">Nusantara Restaurant</span>
          </a>
          <div class="footer-contact pt-3">
            <p>Muhamad Lizam Muhtar</p>
            <p>Kebumen, Central Java</p>
            <p class="mt-3"><strong>Phone:</strong> <span>+62 857 1148 9232</span></p>
            <p><strong>Email:</strong> <span>lizamganteng602@gmail.com</span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-tiktok"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Food menu</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Contact</a></li>
          </ul>
        </div>

        {{-- <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Graphic Design</a></li>
          </ul>
        </div> --}}

        {{-- <div class="col-lg-4 col-md-12 footer-newsletter">
          <h4>Our Newsletter</h4>
          <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
          <form action="forms/newsletter.php" method="post" class="php-email-form">
            <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe"></div>
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your subscription request has been sent. Thank you!</div>
          </form>
        </div> --}}

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Dewi</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> Distributed by <a href=“https://themewagon.com>ThemeWagon
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="asst/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="asst/vendor/php-email-form/validate.js"></script>
  <script src="asst/vendor/aos/aos.js"></script>
  <script src="asst/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="asst/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="asst/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="asst/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="asst/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="asst/js/main.js"></script>

</body>

</html>
