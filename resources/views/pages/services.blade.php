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

  <title>UBAB Elektronik @yield('title')</title>

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

<body>

  
    <!-- header section strats -->
    @include('layouts.header')
    <!-- end header section -->
   


  <!-- service section -->
  <section class="service_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Hizmetlerimiz
        </h2>
        <img src="images/plug.png" alt="">
      </div>

      <div class="service_container">
        <div class="box ">
          <div class="img-box">
            <img src="images/plckart.jpg" class="img1" alt="">
          </div>
          <div class="detail-box">
            <h5>
              PLC Tamiri
            </h5>
            <p>
              CPU, I/O modülleri ve Operatör Paneli kartlarının markadan bağımsız tamiri, bakım ve onarım işlemi teknik servisimiz bünyesinde gerçekleşmektedir.
            </p>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/hmi.jpg" class="img1" alt="">
          </div>
          <div class="detail-box">
            <h5>
              OPERATÖR PANEL TAMİRİ
            </h5>
            <p>
              Her markaya ait HMI cihazlarının yazılım ve donanımsal tamiri,bakım ve onarım işlemleri teknik servisimiz bünyesinde gerçekleşmektedir. 
            </p>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/endustriyel.jpg" class="img1" alt="">
          </div>
          <div class="detail-box">
            <h5>
              ENDÜSTRİYEL PC TAMİRİ
            </h5>
            <p>
              Marka bağımsız her türlü donanımsal ve yazılımsal çözümler ;
              BGA sorunlarının çözümü,yazılım revizyonları,yedekleme teknik servis bünyemizde gerçekleşmektedir.
            </p>
          </div>
        </div>
        <div class="box ">
          <div class="img-box">
            <img src="images/surucu.jpg" class="img1" alt="">
          </div>
          <div class="detail-box">
            <h5>
              SÜRÜCÜ TAMİRİ
            </h5>
            <p>
              Marka bağımsız motor sürücü ve invertör tamiri ve bakımları teknik servis bünyesinde gerçekleşmektedir.
            </p>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/elektronik.jpeg" class="img1" alt="">
          </div>
          <div class="detail-box">
            <h5>
              SAVUNMA SANAYİ HİZMETLERİ VE ELEKTRONİK KART TAMİRİ
            </h5>
            <p>
              Savunma ve askeri sistemelerine ait elektronik kart tamiri ve bakımları teknik servis bünyemizde gerçekleşmektedir.
            </p>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/arge.jpg" class="img1" alt="">
          </div>
          <div class="detail-box">
            <h5>
              AR-GE HİZMETLERİ
            </h5>
            <p>
              PCB kart tasarımı, elektronik kart dizgi işlemleri, yazılım ve revizyon işlemleri.
            </p>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/medikal.jpg" class="img1" alt="">
          </div>
          <div class="detail-box">
            <h5>
              MEDİKAL KART TAMİRİ
            </h5>
            <p>
              Medikal sektöründe kullanılan cihazların elektronik kart tamiri ve bakımı teknik servis bünyemizde gerçekleşmektedir. 
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end service section -->

  <!-- footer section -->
  @include('layouts.footer')
  <!-- footer section -->

  
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>

</body>

</html>