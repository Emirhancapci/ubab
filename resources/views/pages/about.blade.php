<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>UBAB Elektronik</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">

  <div class="hero_area">
    <!-- header section strats -->
    @include('layouts.header')
    <!-- end header section -->
  </div>



  <!-- about section -->
  <section class="about_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                Hakkımızda
              </h2>
              <img src="images/plug.png" alt="">
            </div>
            <p>
              Hakkımızda yazısı burada olacak.
            </p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="img_container">
            <div class="img-box b1">
              <img src="images/about-img1.jpg" alt="" />
            </div>
            <div class="img-box b2">
              <img src="images/about-img2.jpg" alt="" />
            </div>
          </div>

        </div>

      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- footer section -->
  @include('layouts.footer')
  <!-- footer section -->


  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>

</body>

</html>