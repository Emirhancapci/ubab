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

  <div class="hero_area">
    <!-- header section strats -->
    @include('layouts.header')
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section ">
      <div class="container">
        <div class="row">
          <div class="col-md-6 ">
            <div class="detail_box">
              <h1>
                ELEKTRONİK <br>
                SERVİS <br>
                HİZMETİ
              </h1>
              <p>
                Teknoloji sektöründe yılların vermiş olduğu tecrübeyle ve özveriyle çalışıp müşterilerine en iyi hizmeti verebilmek amacıyla yola çıkan bir firmayız. Kuruluşumuzun amacı müşteri memnuniyeti, teknik ve analitik çözümler, hızlı çözüm süresi, genç ve kaliteli ekip çalışmasıyla düşük maliyetli çözümler.
              </p>
              <a href="{{ url('contact') }}" class="">
                İletişime Geç
            </div>
          </div>
          <div class="col-lg-5 col-md-6 offset-lg-1">
            <div class="img_content">
              <div class="img_container">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <div class="img-box">
                        <img src="images/slider-img.jpg" alt="">
                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class="img-box">
                        <img src="images/slider-img.jpg" alt="">
                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class="img-box">
                        <img src="images/slider-img.jpg" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="sr-only">Next</span>
              </a>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>


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
        <div class="box">
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
        <div class="box ">
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
      <div class="btn-box">
        <a href="{{ url('services') }}">
          Daha Fazlası..
        </a>
      </div>
    </div>
  </section>
  <!-- end service section -->

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
            <a href="{{ url('about') }}">
              Daha Fazlası..
            </a>
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

  <!-- end contact section -->

  <!-- footer section -->
  @include('layouts.footer')
  <!-- footer section -->

  
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>

</body>

</html>