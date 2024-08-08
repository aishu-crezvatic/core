<!DOCTYPE html>
<html lang="en">

<head>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<?php
// include 'header.php';
include 'navbar.php';
// define("BASEURL", "https://labindiadigital.com/coreCrushing/");
?>

<body>

  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-toggle="modal" data-bs-target="#contactFormModal">
        <img src="images/HomeSlider/Crusher-1.webp" class="d-block w-100 banner-desk" alt="Slider Image 1">
        <img src="images/HomeSlider/mob/Crushermob-1.png" class="d-block w-100 banner-mob" alt="Slider Image 1">
      </div>
      <div class="carousel-item " data-bs-toggle="modal" data-bs-target="#SandPlant">
        <img src="images/HomeSlider/Sand Plant-web-banner-2.webp" class="d-block w-100 banner-desk" alt="Slider Image 2">
        <img src="images/HomeSlider/mob/SandPlant-Mobileweb-banner-2.webp" class="d-block w-100 banner-mob" alt="Slider Image 2">
      </div>
      <div class="carousel-item " data-bs-toggle="modal" data-bs-target="#contactFormModal">
        <img src="images/HomeSlider/AggregateCrushing-3.webp" class="d-block w-100 banner-desk" alt="Slider Image 3">
        <img src="images/HomeSlider/mob/SuperiorCrushingMobwebanner.webp" class="d-block w-100 banner-mob" alt="Slider Image 3">
      </div>
      <div class="carousel-item" data-bs-toggle="modal" data-bs-target="#contactFormModal">
        <img src="images/HomeSlider/coreHFS-web-banner-4.webp" class="d-block w-100 banner-desk" alt="Slider Image 4">
        <img src="images/HomeSlider/mob/coreHFS-Mobileweb-banner-4.webp" class="d-block w-100 banner-mob" alt="Slider Image 4">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- About Us -->
  <!-- <div class="container-fluid">
    <div class=" py-5 container-custom-1 text-center row">
      <h1 class="h1-style fw-bold"> Empowering Excellence in Crushing Solutions since 1998</h1>
      <div class="col-md-6">
        <div class="papa-container">
          <h4 class="cust-h4"> Welcome to <span>CORE</span></h4>
          <p class="about-subtitle">Looking to establish a Crushing Plant? You've arrived at your destination!</p>
          <div class="col-md-6 for-mobile">
              <img src="images/5x5.png" alt=""> 
          </div>
          <p class="about-para">Efficient equipment investment is essential. Explore our brand, supported by years of experience and cutting-edge technology. With our expertise in manufacturing, erecting, and commissioning crushing plants, trust us for unparalleled support and performance. Let our equipment speak for itself!</p>
        </div>
      </div>
      <div class="col-md-6 for-desktop">

        <div class="image5x5">
          <img src="images/5x5.png" alt="">
          <div class="image3x3"> 
          </div>
        </div>
      </div>
    </div>
  </div> -->

  <div class="container-fluid about-us">
    <div>
      <h6 class="cust-h4"> Welcome to CORE</h6>
    </div>
    <div class="papa-container">
      <h1>Empowering Excellence in Crushing Solutions since 1998</h1>
      <h5 class="about-subtitle">Looking to establish a Crushing Plant? You've arrived at your destination!</h5>
      <p class="about-para">Efficient equipment investment is essential. Explore our brand, supported by years of experience and cutting-edge technology. With our expertise in manufacturing, erecting, and commissioning crushing plants, trust us for unparalleled support and performance. Let our equipment speak for itself!</p>
    </div>

  </div>

  <!-- Application -->
  <section class="container Applications text-center py-5" id="Our-products">
    <h2 class="fw-bold applications">Applications</h2>
    <div class="owl-carousel">
      <div class="item ">
        <!-- <div class="col-sm-4"> -->
        <div class="appcard productcard-item" style="background-color: #d3cfcf;">
          <img src="images/ApplicationIcons/AggregateCrushingAndScreeningPlant-01.webp" class="img-fluid productcard-img" alt="" />
          <h5 class="card-title">Aggregate Crushing And Screening Plant</h5>
          <p class="card-text">Efficiently process aggregates with our comprehensive crushing and screening plant, maximizing productivity and quality assurance.</p>
          <a class="btn inquire-now" data-bs-toggle="modal" data-bs-target="#contactFormModal">Enquire Now</a>
        </div>
        <!-- </div> -->
      </div>
      <div class="item">
        <!-- <div class="col-sm-4"> -->
        <div class="appcard appcard-sand productcard-item" style="background-color: #eedbdc;">
          <img src="images/ApplicationIcons/Classification-01.webp" class="img-fluid productcard-img" alt="" />
          <h5 class="card-title">Sand Plant</h5>
          <p class="card-text">Optimize sand production with our advanced sand plant solutions, delivering superior quality and efficiency for your material processing needs.</p>
          <a class="btn inquire-now" data-bs-toggle="modal" data-bs-target="#SandPlant">Enquire Now</a>
        </div>

        <!-- </div> -->
      </div>
      <div class="item ">
        <!-- <div class="col-sm-4"> -->
        <div class="appcard productcard-item" style="background-color: #d3cfcf;">
          <img src="images/ApplicationIcons/Sand Plant-01.webp" class="img-fluid productcard-img" alt="" />
          <h5 class="card-title">Classification</h5>
          <p class="card-text">Maximize material separation efficiency with our dry classification solutions, including high-frequency screens, ensuring precise sorting for optimal productivity.</p>
          <a class="btn inquire-now" data-bs-toggle="modal" data-bs-target="#contactFormModal">Enquire Now</a>
        </div>
        <!-- </div> -->
      </div>

    </div>
  </section>

  <!-- Our Products -->
  <section class="container OurProducts py-3" id="Our-products">
    <h2 class="fw-bold text-center">Our Products</h2>

    <!-- <div class="row"> -->
    <div class="row two-products">
      <!-- Product type 1 -->
      <div class="col-sm-6 col-12 col-md-3">
        <div class="productcard" style="position: relative;">
          <img src="images/products/Jaw-Crushers.webp" class="img-fluid" alt="Jaw Crushers">
          <a href="<?php echo BASEURL . 'Crushers/jaw-crushers'; ?>" class="btn readmore  " style="
    position: absolute;
    top: 72%;
    background-color: red;
    /* bottom: 5%; */
    padding: 0px 13px;
    left: 85%;
    text-decoration: none;
    color: #e9ecef;
    font-size: 28px;
">+</a>
        </div>
        <div class="row productcard-text-button">
          <div class="col-md-9">
            <h4 class="card-title">Jaw Crushers</h4>
          </div>
          <div class="col-md-3">
            <a href="<?php echo BASEURL . 'Crushers/jaw-crushers'; ?>" class="btn readmore">VIEW +</a>
          </div>
        </div>
      </div>
      <!-- Repeat similar structure for other product cards -->
      <div class="col-sm-6 col-12 col-md-3">
        <div class="productcard" style="position: relative;">
          <img src="images/products/Core-Cone-Crushing-LH-200.webp" class="img-fluid" alt="Cone Crushers">
          <a href="<?php echo BASEURL . 'Crushers/cone-crushers'; ?>" class="btn readmore" style="
    position: absolute;
    top: 72%;
    background-color: red;
    /* bottom: 5%; */
    padding: 0px 13px;
    left: 85%;
    text-decoration: none;
    color: #e9ecef;
    font-size: 28px;
">+</a>
        </div>
        <div class="row productcard-text-button">
          <div class="col-md-9">
            <h4 class="card-title">Cone Crushers</h4>
          </div>
          <div class="col-md-3">
            <a href="<?php echo BASEURL . 'cone-crushers'; ?>" class="btn readmore">VIEW +</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-12 col-md-3">
        <div class="productcard" style="position: relative;">
          <img src="images/products/Sane-cone.webp" class="img-fluid" alt="Sander Cone">
          <a href="<?php echo BASEURL . 'Crushers/sander-cone'; ?>" class="btn readmore" style="
    position: absolute;
    top: 72%;
    background-color: red;
    /* bottom: 5%; */
    padding: 0px 13px;
    left: 85%;
    text-decoration: none;
    color: #e9ecef;
    font-size: 28px;
">+</a>
        </div>
        <div class="row productcard-text-button">
          <div class="col-md-9">
            <h4 class="card-title">Sander Cone</h4>
          </div>
          <div class="col-md-3">
            <a href="<?php echo BASEURL . 'Crushers/sander-cone'; ?>" class="btn readmore">VIEW +</a>
          </div>
        </div>
      </div>
    </div>
    <br>
    <div class="row two-products">
      <!-- Add more product cards here -->
      <div class="col-sm-6 col-12 col-md-3">
        <div class="productcard" style="position: relative;">
          <img src="images/products/High-Frequency-Screen.webp" class="img-fluid" alt="High Frequency Screen(HFS)">
          <a href="<?php echo BASEURL . 'Classifiers/high-frequency-screens'; ?>" class="btn readmore  " style="
    position: absolute;
    top: 72%;
    background-color: red;
    /* bottom: 5%; */
    padding: 0px 13px;
    left: 85%;
    text-decoration: none;
    color: #e9ecef;
    font-size: 28px;
">+</a>
        </div>
        <div class="row productcard-text-button">
          <div class="col-md-9">
            <!-- <h4 class="card-title">High Frequency Screen(HFS)</h4> -->
            <h4 class="card-title">HFS</h4>
          </div>
          <div class="col-md-3">
            <a href="<?php echo BASEURL . 'Classifiers/high-frequency-screens'; ?>" class="btn readmore">VIEW +</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-12 col-md-3">
        <div class="productcard" style="position: relative;">
          <img src="images/products/Grizzly-Feeder.webp" class="img-fluid" alt="Grizzly Feeder">
          <a href="<?php echo BASEURL . 'Feeders_and_Screens/grizzly-feeders'; ?>" class="btn readmore  " style="
    position: absolute;
    top: 72%;
    background-color: red;
    /* bottom: 5%; */
    padding: 0px 13px;
    left: 85%;
    text-decoration: none;
    color: #e9ecef;
    font-size: 28px;
">+</a>
        </div>
        <div class="row productcard-text-button">
          <div class="col-md-9">
            <h4 class="card-title">Grizzly Feeder</h4>
          </div>
          <div class="col-md-3">
            <a href="<?php echo BASEURL . 'Feeders_and_Screens/grizzly-feeders'; ?>" class="btn readmore">VIEW +</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-12 col-md-3">
        <div class="productcard" style="position: relative;">
          <img src="images/products/Vibrating-screen.webp" class="img-fluid" alt="Vibrating Screen">
          <a href="<?php echo BASEURL . 'jaw-crushers'; ?>" class="btn readmore  " style="
    position: absolute;
    top: 72%;
    background-color: red;
    /* bottom: 5%; */
    padding: 0px 13px;
    left: 85%;
    text-decoration: none;
    color: #e9ecef;
    font-size: 28px;
">+</a>
        </div>
        <div class="row productcard-text-button">
          <div class="col-md-9">
            <h4 class="card-title">Vibrating Screen</h4>
          </div>
          <div class="col-md-3">
            <a href="<?php echo BASEURL . 'vibrating-screen'; ?>" class="btn readmore">VIEW +</a>
          </div>
        </div>
      </div>
    </div>
    <br>
    <div class="row two-products">
      <div class="col-sm-6 col-12 col-md-3">
        <div class="productcard" style="position: relative;">
          <img src="images/products/Vertical-Shaft-Impact-Crusher.webp" class="img-fluid" alt="Vertical Shaft Impact Crusher">
          <a href="<?php echo BASEURL . 'Crushers/jaw-crushers'; ?>" class="btn readmore " style="
    position: absolute;
    top: 72%;
    background-color: red;
    /* bottom: 5%; */
    padding: 0px 13px;
    left: 85%;
    text-decoration: none;
    color: #e9ecef;
    font-size: 28px;
">+</a>
        </div>
        <div class="row productcard-text-button">
          <div class="col-md-9">
            <!-- <h4 class="card-title">Vertical Shaft Impact Crusher</h4> -->
            <h4 class="card-title">VSI Crusher</h4>
          </div>
          <div class="col-md-3">
            <a href="<?php echo BASEURL . 'Crushers/vertical-shaft-impactor'; ?>" class="btn readmore">VIEW +</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Why Us? -->
  <section class="container text-center bg-why-us" id="why-us">
    <div class="about-us py-5 mx-auto">
      <h2 class="fw-bold">Why Us?</h2>
      <p>
        Choose Core Crushing for your stone-crushing needs and experience the difference. With a wealth of industry experience, cutting-edge technology, and a commitment to tailored solutions and quality, we stand as your premier choice. Our team's expertise ensures seamless project execution, while our dedication to innovation guarantees superior results. Trust Core Crushing for reliability, efficiency, and excellence in every endeavour.
      </p>

      <div class="row text-center">
        <div class="col-md-3 col-6 whyus">
          <img src="images/WhyUsIcons/Experience-01-01.webp" class="img-fluid why-us-icon-bg" alt="" />
          <div>
            <!-- <img src="https://dummyimage.com/100x100/000000/d2ad77" class="img-fluid" alt="" /> -->
          </div>
          <p>Experience</p>
        </div>
        <div class="col-md-3 col-6 whyus">
          <img src="images/WhyUsIcons/Technology-01.webp" class="img-fluid why-us-icon-bg" alt="" />
          <div>
            <!-- <img src="https://dummyimage.com/100x100/000000/d2ad77" class="img-fluid" alt="" /> -->
          </div>
          <p>Cutting-Edge Technology</p>
        </div>
        <div class="col-md-3 col-6 whyus">
          <img src="images/WhyUsIcons/Customized-01.webp" class="img-fluid why-us-icon-bg" alt="" />
          <div>
            <!-- <img src="https://dummyimage.com/100x100/000000/d2ad77" class="img-fluid" alt="" /> -->
          </div>
          <p>Customised Solutions </p>
        </div>
        <div class="col-md-3 col-6 whyus">
          <img src="images/WhyUsIcons/Quality-01.webp" class="img-fluid why-us-icon-bg" alt="" />
          <div>
            <!-- <img src="https://dummyimage.com/100x100/000000/d2ad77" class="img-fluid" alt="" /> -->
          </div>
          <p>Quality</p>
        </div>
      </div>
    </div>
  </section>
  <!-- CTA -->
  <?php include 'cta.php'; ?>

  <!-- Footer-->
  <?php include 'footer2.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <!-- Owl Carousel JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

  <script>
    $(document).ready(function() {
      $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        dots: true,
        autoplay: true,
        autoplayTimeout: 2500,
        autoplayHoverPause: true,
        responsive: {
          0: {
            items: 1
          },
          600: {
            items: 2
          },
          1000: {
            items: 3
          }
        }
      });
    });
  </script>