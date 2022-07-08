<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
    <title>Rental Mobil</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css')?>" >
    <!-- Icon -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fonts/line-icons.css')?>">
    <!-- Slicknav -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/slicknav.css')?>">
    <!-- Nivo Lightbox -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/nivo-lightbox.css')?>" >
    <!-- Animate -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/animate.css')?>">
    <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/main.css')?>">
    <!-- Responsive Style -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/responsive.css')?>">

  </head>
  <body>

    <!-- Header Area wrapper Starts -->
    <header id="header-wrap">
      <!-- Navbar Start -->
      <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              <span class="icon-menu"></span>
              <span class="icon-menu"></span>
              <span class="icon-menu"></span>
            </button>
            <a class="navbar-brand" href="index.html"><img src="<?php echo base_url('assets/img/logo.png')?>" alt=""></a>
          </div>
          <div class="collapse navbar-collapse" id="main-navbar">
            <ul class="navbar-nav mr-auto w-100 justify-content-end">
              <li class="nav-item active">
                <a class="nav-link" href="#header-wrap">
                  Home
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">
                  About
                </a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link" href="#schedules">
                  Team
                </a>
              </li> -->
              <li class="nav-item">
                <a class="nav-link" href="#team">
                  Team
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#daf_mobil">
                  Daftar Mobil
                </a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link" href="#faq">
                  Faq
                </a>
              </li> -->
              <li class="nav-item">
                <a class="nav-link" href="#sponsors">
                  Sponsors
                </a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link" href="#pricing">
                  pricing
                </a> -->
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('index.php/login')?>" >
                  Login
                </a>
              </li>
            </ul>
          </div>
        </div>

        <!-- Mobile Menu Start -->
        <ul class="mobile-menu">
          <li>
            <a class="page-scrool" href="#header-wrap">Home</a>
          </li>
          <li>
            <a class="page-scrool" href="#about">About</a>
          </li>
          <li>
             <!-- <a class="page-scroll" href="#schedules">Team</a> -->
          </li>
          <li>
            <a class="page-scroll" href="#team">Team</a>
          </li>
          <li>
            <a class="page-scroll" href="#daf_mobil">Daftar Mobil</a>
          </li>
          <li>
            <!-- <a class="page-scroll" href="#faq">Faq</a> -->
          </li>
          <li>
            <a class="page-scroll" href="#sponsors">Sponsors</a>
          </li>
          <li>
            <!-- <a class="page-scroll" href="#pricing">pricing</a> -->
          </li>
          <li>
            <a class="page-scroll" href="#google-map-area">Contact</a>
          </li>
        </ul>
        <!-- Mobile Menu End -->

      </nav>
      <!-- Navbar End -->

      <!-- Main Carousel Section Start -->
      <div id="main-slide" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#main-slide" data-slide-to="0" class="active"></li>
          <li data-target="#main-slide" data-slide-to="1"></li>
          <li data-target="#main-slide" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="<?php echo base_url('assets/img/slider/mobil5.jpg')?>" alt="First slide">
            <div class="carousel-caption d-md-block">
              <p class="fadeInUp wow text-danger" data-wow-delay=".6s"><b>Rental Mobil Murah</b></p>
              <h1 class="wow fadeInDown heading text-danger" data-wow-delay=".4s">Rental Mobil STT-NF</h1>
              <a href="#daf_mobil" class="fadeInRight wow btn btn-common btn-lg" data-wow-delay=".6s">Lihat Lebih Banyak</a>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo base_url('assets/img/slider/mobil6.jpg')?>" alt="Second slide">
            <div class="carousel-caption d-md-block">
              <p class="fadeInUp wow text-danger" data-wow-delay=".6s"><b>Rental Mobil Murah</b></p>
              <h1 class="wow bounceIn heading text-danger" data-wow-delay=".7s">Berbagai Jenis Mobil</h1>
              <a href="#daf_mobil" class="fadeInUp wow btn btn-common btn-lg" data-wow-delay=".8s">Pesan Online Sekarang</a>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo base_url('assets/img/slider/mobil7.jpg')?>" alt="Third slide">
            <div class="carousel-caption d-md-block">
              <p class="fadeInUp wow text-danger" data-wow-delay=".6s"><b>Rental Mobil Murah</b></p>
              <h1 class="wow fadeInUp heading text-danger" data-wow-delay=".6s">Pesan Mobil Rental Anda Sekarang!</h1>
              <a href="#daf_mobil" class="fadeInUp wow btn btn-common btn-lg" data-wow-delay=".8s">Lihat</a>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#main-slide" role="button" data-slide="prev">
          <span class="carousel-control" aria-hidden="true"><i class="lni-chevron-left"></i></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#main-slide" role="button" data-slide="next">
          <span class="carousel-control" aria-hidden="true"><i class="lni-chevron-right"></i></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <!-- Main Carousel Section End -->

    </header>
    <!-- Header Area wrapper End -->

    <!-- Coundown Section Start -->
    <section id="about" class="section-padding">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="heading-count">
              <h2 class="wow fadeInDown" data-wow-delay="0.2s">About</h2>
            </div>
          </div>
          <div class="container">
            <div>
                <h5>Mengapa menyewa mobil Anda harus di NF Rental Mobil?</h5><br>
                Apakah Anda ingin menavigasi salah satu kota paling populer di Indonesia, atau memulai perjalanan darat ke negara berbagai wisata? Penyewaan Mobil siap membantu.
                Penyewaan mobil di Nf Rental Mobil memberi Anda rasa kebebasan dan fleksibilitas yang tak tertandingi, mengundang Anda untuk menggali jauh ke dalam kekayaan
                budaya dan sejarah kota yang indah ini. Sewa mobil yang paling sesuai dengan perjalanan Anda menggunakan panel pemesanan langsung kami. 
                Menyewa mobil tidak pernah semudah ini, dan Anda bisa menikmati berbagai keuntungan.
            </div>
            <br>
          <!-- </div> -->
          
          <div class="container ">
            <div class="row">
              <div class="col-sm">
                <!-- <h1>1253</h1>
                Trip -->
                <div class="section-title-header text-center">
                  <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">1253</h1>
                  <p class="wow fadeInDown" data-wow-delay="0.2s">Trip</p>
                </div>
              </div>
              <div class="col-sm">
                <div class="section-title-header text-center">
                  <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">58</h1>
                  <p class="wow fadeInDown" data-wow-delay="0.2s">Members</p>
                </div>
              </div>
              <div class="col-sm">
                <div class="section-title-header text-center">
                  <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">857</h1>
                  <p class="wow fadeInDown" data-wow-delay="0.2s">Cars</p>
                </div>
              </div>
            </div>
          </div>
          <!-- <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="row time-countdown justify-content-center wow fadeInUp" data-wow-delay="0.2s">
              <div id="clock" class="time-count"></div>
            </div>
            <a href="pricing.html" class="btn btn-common wow fadeInUp" data-wow-delay="0.3s">Add to My Calender</a>
          </div> -->
        <!-- </div> -->
      </div>
    </section>
    <!-- Coundown Section End -->

    <!-- Team Section Start -->
    <section id="team" class="section-padding text-center">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title-header text-center">
              <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Team Develover</h1>
              <p class="wow fadeInDown" data-wow-delay="0.2s">NF Rental Mobil</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-md-6 col-lg-6">
            <!-- Team Item Starts -->
            <div class="team-item wow fadeInUp" data-wow-delay="0.2s">
              <div class="team-img">
                <img class="img-fluid" src="<?php echo base_url('assets/img/team/amdah.jpeg')?>" alt="">
                <div class="team-overlay">
                  <div class="overlay-social-icon text-center">
                    <ul class="social-icons">
                      <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-linkedin-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-behance" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="info-text">
                <h3><a href="#">Siti Amdah</a></h3>
                <p>Back-end Developer</p>
              </div>
            </div>
            <!-- Team Item Ends -->
          </div>
          <div class="col-sm-6 col-md-6 col-lg-6">
            <!-- Team Item Starts -->
            <div class="team-item wow fadeInUp" data-wow-delay="0.4s">
              <div class="team-img">
                <img class="img-fluid" src="<?php echo base_url('assets/img/team/rehana.jpg')?>" alt="">
                <div class="team-overlay">
                  <div class="overlay-social-icon text-center">
                    <ul class="social-icons">
                      <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-linkedin-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-behance" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="info-text">
                <h3><a href="#">Rehanah Yulianti</a></h3>
                <p>Front-end Developer</p>
              </div>
            </div>
            <!-- Team Item Ends -->
          </div>

          <!-- <div class="col-sm-6 col-md-6 col-lg-4"> -->
           

          <div class="col-sm-6 col-md-6 col-lg-6">
            <!-- Team Item Starts -->
            <div class="team-item wow fadeInUp" data-wow-delay="0.8s">
              <div class="team-img">
                <img class="img-fluid" src="<?php echo base_url('assets/img/team/hana.jpg')?>" alt="">
                <div class="team-overlay">
                  <div class="overlay-social-icon text-center">
                    <ul class="social-icons">
                      <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-linkedin-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-behance" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="info-text">
                <h3><a href="#">Raihanah Tsabitah</a></h3>
                <p>Back-end Developer</p>
              </div>
            </div>
            <!-- Team Item Ends -->
          </div>
          <div class="col-sm-6 col-md-6 col-lg-6">
            <!-- Team Item Starts -->
            <div class="team-item wow fadeInUp" data-wow-delay="1s">
              <div class="team-img">
                <img class="img-fluid" src="<?php echo base_url('assets/img/team/yasmin.png')?>" alt="">
                <div class="team-overlay">
                  <div class="overlay-social-icon text-center">
                    <ul class="social-icons">
                      <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-linkedin-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-behance" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="info-text">
                <h3><a href="#">Hana Yasmin Nazhifah</a></h3>
                <p>Back-end Developer</p>
              </div>
            </div>
            <!-- Team Item Ends -->
    </section>
    <!-- Team Section End -->

    <!-- Gallary Section Start -->
    <section id="daf_mobil" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title-header text-center">
              <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Daftar Mobil</h1>
              <p class="wow fadeInDown" data-wow-delay="0.2s">NF Rental Mobil</p>
            </div>
          </div> 
        </div>
        <?php
              foreach($get_mobil as $obj){
            ?>
            <div class="container jumbotron">
              <div class="row">
                <div class="col-sm">
                  <?php
                  $filegambar = base_url('uploads/'.$obj->foto);
                  $array = get_headers($filegambar);
                  $string = $array[0];
                  if(strpos($string,"200")){
                    //echo url exis
                    echo '<img src="'.base_url('uploads/'.$obj->foto).'"class="img-thumbnail" alt="foto"/>';
                  }
                  else{
                  //echo url doesnt exis
                  echo '<img src="'.base_url('/uploads/no_gambar.jpg').'"class="img-thumbnail" alt="foto"/>';
                  }
                  ?>
                  
                </div>
                <div class="col">
                  <h2><?=$obj->nama?> <?=$obj->produk?></h2> 
                </div>
                <div class="col-md-3 offset-md-3 text-right">
                  <div class="direct-chat-msg">
                    <p class="direct-chat-infos">Mulai dari</p>
                    <div class="d-flex justify-content-end">
                      <h3><?=$obj->biaya_sewa?></h3>
                      <p class="direct-chat-infos">/hari</p>
                    </div>
                  </div>
                      <?php
                      ?>
                      <a href="<?php echo base_url('index.php/sewa/create/')?>" onclick= "if(!$this->session->has_userdata('USERNAME')){ 
                        redirect(base_url().'index.php/login' ); //dipaksa harus login
                        }else{
                          redirect(base_url().'index.php/sewa/create/?mobil_id=<?=$obj->id?>' );}" role="button" class="btn btn-primary">Pilih</a>
                    <!-- <a href="mahasiswa/mobil_id?id=" onclick= "if(!confirm('Anda Yakin Hapus Mahasiswa NIM ')){return false}" role="button" class="btn btn-primary">Delete</a> -->
                </div>
              </div>
            </div>
            <?php
              }
            ?> 
        <div class="row justify-content-center mt-3">
          <div class="col-xs-12">
            <a href="#" class="btn btn-common">Lihat Semua</a>
          </div>
        </div>
      </div>
    </section>
    <!-- Gallary Section End -->

    <!-- Sponsors Section Start -->
    <section id="sponsors" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title-header text-center">
              <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Sponsor</h1>
              <p class="wow fadeInDown" data-wow-delay="0.2s">NF Rental Mobil</p>
            </div>
          </div>
        </div>
        <div class="row mb-30 text-center wow fadeInDown" data-wow-delay="0.3s">
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="spnsors-logo">
              <a href="#"><img class="img-fluid" src="<?php echo base_url('assets/img/sponsors/sponsor1.png')?>" alt=""></a>
            </div>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="spnsors-logo">
              <a href="#"><img class="img-fluid" src="<?php echo base_url('assets/img/sponsors/sponsor2.png')?>" alt=""></a>
            </div>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="spnsors-logo">
              <a href="#"><img class="img-fluid" src="<?php echo base_url('assets/img/sponsors/sponsor3.png')?>" alt=""></a>
            </div>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="spnsors-logo">
              <a href="#"><img class="img-fluid" src="<?php echo base_url('assets/img/sponsors/sponsor4.png')?>" alt=""></a>
            </div>
          </div>
          <!-- <div class="col-12 text-center">
            <a href="#" class="btn btn-common">become a sponsor</a>
          </div> -->
        </div>
      </div>
    </section>
    <!-- Sponsors Section End -->

    <!-- Map Section Start -->
    <section id="google-map-area">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div id="conatiner-map"></div>
          </div>
        </div>
      </div>
    </section>
    <!-- Map Section End -->

    <!-- Contact Us Section -->
    <!-- Contact Us Section End -->

    <!-- Footer Section Start -->
    <footer class="footer-area section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.2s">
            <h3><img src="<?php echo base_url('assets/img/logo.png')?>" alt=""></h3>
            <p>
              Rencanakan Perjalanan Anda Dengan Sewa Mobil. Sewa Mobil Online Sekarang & Nikmati Penawaran, Tarif & Aksesori Terbaik
            </p>
          </div>
          <div class="col-md-6 col-lg-3 col-sm-6 col-xs-12 wow fadeInUp text-white" data-wow-delay="0.4s">
            <h3>SEWA KENDARAAN</h3>
            <ul>
              <li><h6>Mobil & Crossover</h6></li>
              <li><h6>Mobil mewah</h6></li>
              <li><h6>Van & SUV</h6></li>
              <!-- <li><a href="#">Event Photo Gallery</a></li> -->
            </ul>
          </div>
          <div class="col-md-6 col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.4s">
            <h3>QUICK LINKS</h3>
            <ul>
              <li><a href="#">About Conference</a></li>
              <li><a href="#">Our Speakers</a></li>
              <li><a href="#">Event Shedule</a></li>
              <li><a href="#">Latest News</a></li>
              <li><a href="#">Event Photo Gallery</a></li>
            </ul>
          </div>

          <div class="col-md-6 col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.8s">
            <h3>SUBSCRIBE US</h3>
            <div class="widget">
              <div class="newsletter-wrapper">
                <form method="post" id="subscribe-form" name="subscribe-form" class="validate">
                  <div class="form-group is-empty">
                    <input type="email" value="" name="Email" class="form-control" id="EMAIL" placeholder="Your email" required="">
                    <button type="submit" name="subscribe" id="subscribes" class="btn btn-common sub-btn"><i class="lni-pointer"></i></button>
                    <div class="clearfix"></div>
                  </div>
                </form>
              </div>
            </div> 
            <!-- /.widget -->
            <div class="widget">
              <h5 class="widget-title">FOLLOW US ON</h5>
              <ul class="footer-social">
                <li><a class="facebook" href="#"><i class="lni-facebook-filled"></i></a></li>
                <li><a class="twitter" href="#"><i class="lni-twitter-filled"></i></a></li>
                <li><a class="linkedin" href="#"><i class="lni-linkedin-filled"></i></a></li>
                <li><a class="google-plus" href="#"><i class="lni-google-plus"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer Section End -->

    <div id="copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="site-info">
              <p>© Designed and Developed by <a href="http://uideck.com" rel="nofollow">Mahasiswa STTT-NF</a></p>
            </div>      
          </div>
        </div>
      </div>
    </div>

    <!-- Go to Top Link -->
    <a href="#" class="back-to-top">
    	<i class="lni-chevron-up"></i>
    </a>

    <div id="preloader">
      <div class="sk-circle">
        <div class="sk-circle1 sk-child"></div>
        <div class="sk-circle2 sk-child"></div>
        <div class="sk-circle3 sk-child"></div>
        <div class="sk-circle4 sk-child"></div>
        <div class="sk-circle5 sk-child"></div>
        <div class="sk-circle6 sk-child"></div>
        <div class="sk-circle7 sk-child"></div>
        <div class="sk-circle8 sk-child"></div>
        <div class="sk-circle9 sk-child"></div>
        <div class="sk-circle10 sk-child"></div>
        <div class="sk-circle11 sk-child"></div>
        <div class="sk-circle12 sk-child"></div>
      </div>
    </div>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo base_url('assets/js/jquery-min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/popper.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.countdown.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.nav.js')?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.easing.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/wow.js')?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.slicknav.js')?>"></script>
    <script src="<?php echo base_url('assets/js/nivo-lightbox.js')?>"></script>
    <script src="<?php echo base_url('assets/js/main.js')?>"></script>
    <script src="<?php echo base_url('assets/js/form-validator.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/contact-form-script.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/map.js')?>"></script>
    <script type="text/javascript" src="//maps.googleapis.com/maps/api/js?key=AIzaSyCsa2Mi2HqyEcEnM1urFSIGEpvualYjwwM"></script>
      
  </body>
</html>
