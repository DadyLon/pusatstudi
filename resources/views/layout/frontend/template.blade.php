<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pusat Studi Digitalisasi Budaya Bali</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="img/instiki.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="vendor/aos/aos.css" rel="stylesheet">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="css/style.css" rel="stylesheet">
  <style>
    #more {display: none;}
  </style>
    <style>
      #moreevent {display: none;}
    </style>

</head>

<body>
<main id="main">

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <!-- <h1 class="logo me-auto"><a href="index.html">PSDBB</a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="/" class="logo me-auto"><img src="img/pusat studi.png" alt=""></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#event">Event</a></li>
          <li><a class="nav-link   scrollto" href="#portfolio">Gallery</a></li>
          <li><a class="nav-link scrollto" href="#teams">Team</a></li>
          <li class="dropdown"><a href="/meta-data"><span>Meta Data</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/meta-data">Subak Selat</a></li>
              <li><a href="/meta-data">Batuan</a></li>
              <li><a href="/meta-data">Geopark</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          @auth
      		<a class="nav-link" href="{{ route('admin') }}">Dashboard</a>
      	@else
          <li><a class="getstarted scrollto" href="{{ route('login') }}">Login</a></li>
      	@endauth

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Pusat Studi Digitalisasi Budaya Bali</h1>
          <p align="justify">Pusat Studi Digitalisasi Budaya Bali merupakan lintas keilmuan yang bergerak dalam merancang, meneliti, mengkaji dan mempublikasikan berbagai temuan berbasis budaya yang sejalan dengan visi dan misi dari Institut Bisnis dan Teknologi Indonesia.</p>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" class="btn btn-outline-light scrollto">Get Started</a>
          </div>
        </div>
        <div class="col-lg-3 order-1 order-lg-1 hero-img" data-aos="zoom-in" data-aos-delay="200">
        </div>
        <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="img/instiki.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
            @yield('konten-about')
        </div>
    </section>


<section id="event" class="event">
    <div class="container" data-aos="fade-up">
        @yield('konten-event')
    </div>
  </section><!-- End event Section -->

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container" data-aos="fade-up">
        @yield('konten-galery')
</div>
  </section><!-- End Portfolio Section -->

  <section id="teams" class="teams section-bg">
    <div class="content-dosen">
      <div class="container" data-aos="fade-up">
<br>
        @yield('konten-team')
      </div>
    </div>
  </section>

  <section id="meta" class="meta">
    <div class="container" data-aos="fade-up">
        @yield('konten-meta')
    </div>
  </section>

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Contact</h2>
      </div>

      <div class="row">

        <div class="col-lg-5 d-flex align-items-stretch">
          <div class="info">
            <div class="address">
              <i class="bi bi-geo-alt"></i>
              <h4>Location:</h4>
              <p>Institut Bisnis dan Teknologi Indonesia</p>
            </div>

            <div class="email">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>info@example.com</p>
            </div>

            <div class="phone">
              <i class="bi bi-phone"></i>
              <h4>Call:</h4>
              <p>+62 245 535 32525</p>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.0078372972157!2d115.22411731416508!3d-8.690803390923376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd2410294415595%3A0xb9b6c94ad0c08b24!2sInstitut%20Bisnis%20dan%20Teknologi%20Indonesia%20(INSTIKI)!5e0!3m2!1sid!2sid!4v1668078100069!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>

        </div>

        <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="form-group col-md-6">
                <label for="name">Your Name</label>
                <input type="text" name="name" class="form-control" id="name" required>
              </div>
              <div class="form-group col-md-6">
                <label for="name">Your Email</label>
                <input type="email" class="form-control" name="email" id="email" required>
              </div>
            </div>
            <div class="form-group">
              <label for="name">Subject</label>
              <input type="text" class="form-control" name="subject" id="subject" required>
            </div>
            <div class="form-group">
              <label for="name">Message</label>
              <textarea class="form-control" name="message" rows="10" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->
  </main>

    {{-- alhir konten --}}
  <!-- ======= Footer ======= -->
  <footer id="footer">
<!-- <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Join Subscribe</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis!</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div> -->

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Pusat Studi Digitalisasi Budaya Bali</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://instagram.com/psdigdayabali_instiki/">Pusat Studi</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="vendor/aos/aos.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/glightbox/js/glightbox.min.js"></script>
  <script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="vendor/swiper/swiper-bundle.min.js"></script>
  <script src="vendor/waypoints/noframework.waypoints.js"></script>
  <script src="vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/js/main.js"></script>
</body>

</html>
