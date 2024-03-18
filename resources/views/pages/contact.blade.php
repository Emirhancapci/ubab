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

  
    <!-- header section strats -->
   @include('layouts.header')
    <!-- end header section -->
  


  <!-- contact section -->

  <section class="contact_section layout_padding">
    <div class="container ">
      <div class="heading_container">
        <h2>
          İletişim
        </h2>
        <img src="images/plug.png" alt="">
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <form action="{{ route('contact.form') }}" method="POST">
            @csrf
            <div>
              <input type="text" placeholder="İsim" name="name"/>
            </div>
            <div>
              <input type="email" placeholder="E-posta"  name="email"/>
            </div>
            <div>
              <input type="text" placeholder="Telefon Numarası" name="phone"/>
            </div>
            <div>
              <input type="text" class="message-box" placeholder="Mesaj" name="message"/>
            </div>
            <div class="d-flex ">
              <button>
                GÖNDER
              </button>
            </div>
          </form>
        </div>
        <div class="col-md-6">
          <div class="map_container">
            <div class="map-responsive">
              <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France" width="600" height="300" frameborder="0" style="border:0; width: 100%; height:100%" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- footer section -->
  @include('layouts.footer')


  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>

</body>

</html>