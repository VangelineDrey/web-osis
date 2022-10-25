<!--
    Author: W3layouts
    Author URL: http://w3layouts.com
    -->

<?php

include 'admin/functions.php';

    if (isset($_POST["submit"])) { 

      if(contact($_POST) > 0){
          echo "<script>
    alert('Message Sent!');
    document.location.href='index.php';
          </script>
          ";
          
      } else {echo "<script>
          alert('Failed to send the message! Try again later..');
          document.location.href='index.php';
                    </script>;";
    }
    }
    
      $prokers = query("SELECT * FROM proker");
      $artikels = query("SELECT * FROM artikel");
?>
    <!doctype html>
    <html lang="en">
      <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="assets/images/oska.png" />
    
        <title>OSIS SMK CINTA KASIH TZU CHI | Home Page</title>
    
        
        <!-- space -->
        <link rel="stylesheet" href="assets-space/css/fontawesome.css">
        <link rel="stylesheet" href="assets-space/css/templatemo-space-dynamic.css">
        <link rel="stylesheet" href="assets-space/css/animated.css">
        <link rel="stylesheet" href="assets-space/css/owl.css">
    
        <link href="//fonts.googleapis.com/css?family=Nunito:400,700&display=swap" rel="stylesheet">
        <link href="//fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/style-starter.css">
        
      </head>
      <body>
    
    <header id="site-header" class="fixed-top">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark stroke">
            <img src="assets/images/logooska.png" style="max-width: 75px;">
          <h1>
            <a class="navbar-brand" href="index.php" style="font-size:0.6em;">
              OSIS SMK <span style="text-decoration: none;"><br>Cinta Kasih Tzu Chi</span></a>
          </h1>
          <!-- if logo is image enable this   
            <a class="navbar-brand" href="#index.html">
                <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
            </a> -->
          <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
            data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
            <span class="navbar-toggler-icon fa icon-close fa-times"></span>
            </span>
          </button>
    
          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mx-lg-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item @@about__active">
                <a class="nav-link" href="#top">About</a>
              </li>
              <li class="nav-item @@kegiatan__active">
                <a class="nav-link" href="#kegiatan">Kegiatan</a>
              </li>
              <li class="nav-item @@contact__active">
                <a class="nav-link" href="#proker">Program Kerja</a>
              </li>
              <li class="nav-item @@anggota__active">
                <a class="nav-link" href="#keanggotaan">Keanggotaan</a>
              </li>
            </ul>
    
            <!-- <div class="search-right">
              <a href="#search" title="search"><span class="fa fa-search" aria-hidden="true"></span></a>
              <div id="search" class="pop-overlay">
                <div class="popup">
    
    
                </div>
                <a class="close" href="#close">×</a>
              </div>
            </div> -->
            <div class="top-quote mr-lg-2 text-center">
              <a href="login/login.php" class="btn login mr-2"><span class="fa fa-user"></span> login</a>
            </div>
          </div>

          <!-- toggle switch for light and dark theme -->
      <div class="mobile-position">
        <nav class="navigation">
          <div class="theme-switch-wrapper">
            <label class="theme-switch" for="checkbox">
              <input type="checkbox" id="checkbox">
              <div class="mode-container py-1">
                <i class="gg-sun"></i>
                <i class="gg-moon"></i>
              </div>
            </label>
          </div>
        </nav>
      </div>
          
        </nav>
      </div>
    </header>
    
    <section class="w3l-main-slider" id="home">
        <div class="companies20-content">
            <div class="owl-one owl-carousel owl-theme">
                <div class="item">
                    <li>
                        <div class="slider-info banner-view bg bg2">
                            <div class="banner-info">
                                <div class="container">
                                    <div class="banner-info-bg">
                                        <h5>SMK HEBAT!</h5>
                                        <p class="mt-4 pr-lg-4">Takdir biarlah takdir, kita bertugas untuk berusaha sampai bisa!</p>
                                        <a class="btn btn-style btn-primary mt-sm-5 mt-4 mr-2" href="#top">Know us more!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
                <div class="item">
                    <li>
                        <div class="slider-info  banner-view banner-top1 bg bg2">
                            <div class="banner-info">
                                <div class="container">
                                    <div class="banner-info-bg">
                                        <h5>SMK JAYA!</h5>
                                        <p class="mt-4 pr-lg-4">Kesuksesan Hanya Didapat oleh Mereka yang Berani dan Bertindak</p>
                                        <a class="btn btn-style btn-primary mt-sm-5 mt-4 mr-2" href="#about">Know us more!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
                <div class="item">
                    <li>
                        <div class="slider-info banner-view banner-top2 bg bg2">
                            <div class="banner-info">
                                <div class="container">
                                    <div class="banner-info-bg">
                                        <h5>SMK BISA!</h5>
                                        <p class="mt-4 pr-lg-4">Kita Tak Akan Tau Sebelum Mencoba</p>
                                        <a class="btn btn-style btn-primary mt-sm-5 mt-4 mr-2" href="#about">Know us more!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
                <div class="item">
                    <li>
                        <div class="slider-info banner-view banner-top3 bg bg2">
                            <div class="banner-info">
                                <div class="container">
                                    <div class="banner-info-bg">
                                        <h5>SMK KEREN!</h5>
                                        <p class="mt-4 pr-lg-4">Sukses Bukan Datang Dari Coba-Coba, Tapi Berasal Dari Keseriusan</p>
                                        <a class="btn btn-style btn-primary mt-sm-5 mt-4 mr-2" href="about.html">Know us more!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
            </div>
        </div>
    
        <div class="waveWrapper waveAnimation">
            <svg viewBox="0 0 500 150" preserveAspectRatio="none">
                <path d="M-5.07,73.52 C149.99,150.00 299.66,-102.13 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none;"></path>
            </svg>
        </div>
    </section>
    
    <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="row">
                <div class="col-lg-6 align-self-center">
                  <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                    <h6>Welcome to the official site of</h6>
                    <h2>OSIS SMK <br>Cinta Kasih Tzu Chi</h2>
                    <p>OSIS SMK Cinta Kasih Tzu Chi merupakan sebuah wadah yang memfasilitasi para siswa SMK Cinta Kasih Tzu Chi untuk belajar berorganisasi dan 
                      bekerja sama sesuai tugasnya masing-masing sebagai perwakilan siswa demi kepentingan warga sekolah.</p>
                      <p>Para pengurus OSIS sendiri dipilih berdasarkan rangkaian seleksi yang dilakukan sebelumnya supaya terpilih siswa-siswi yang serius dan memiliki 
                      niat dalam organisasi. Untuk keanggotaan OSIS SMK Cinta Kasih Tzu Chi bisa kalian lihat juga <a href="#keanggotaan">disini</a></p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                    <img src="assets-space/images/banner-right-image.png" alt="team meeting">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    
    <section class="w3l-courses">
      <div id="kegiatan">
        <div class="blog pb-5" id="courses">
            <div class="container py-lg-5 py-md-4 py-2">
                <h5 class="title-small text-center mb-1">Kegiatan OSIS SMK CKTC</h5>
                <h3 class="title-big text-center mb-sm-5 mb-4">Artikel dan Berita Kegiatan <span>SMK</span></h3>
                <div class="row">
                <?php
                  $i = -4;//$i=-(x), x is the max number for display
                  foreach ($artikels as $artikel) {?>
                    <div class="col-lg-4 col-md-6 item mt-lg-0 mt-5">
                        <div class="card">
                            <div class="card-header p-0 position-relative">
                                <a href="#course-single" class="zoom d-block">
                                    <img class="card-img-bottom d-block" src="admin/images/<?=$artikel['image'];?>" style='max-height:250px;width:auto'
                                        alt="Card image cap">
                                </a>
                                <div class="post-pos">

                                </div>
                            </div>
                            <div class="card-body course-details">
                                <div class="price-review d-flex justify-content-between mb-1align-items-center">
                                </div>
                                <a href="<?=$artikel['link'];?>" class="course-desc"><?=$artikel['title'];?>
                                </a>
                            </div>
                            <div class="card-footer">
                                <div class="author align-items-center">
                                    <img src="assets/images/noprofile.jpg" alt="" class="img-fluid rounded-circle">
                                    <ul class="blog-meta">
                                        <li>
                                            <span class="meta-value mx-1">by</span> <a href="#author"> <?=$artikel['author'];?></a>
                                        </li>
                                        <!-- <li>
                                            <span class="meta-value mx-1">in</span> <a href="#author"> Programing</a>
                                        </li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                        if (++$i == 0){break;}
                    }
                    ?>
    
                </div>
                <div class="mt-5 text-more">
                    <p class="pt-md-3 sample text-center">
                        Penasaran dengan semua kegiatan yang diadakan SMK Cinta Kasih Tzu Chi? Langsung aja
                        <a href="https://smk.cintakasihtzuchi.sch.id/category/events/">Lihat Semua Kegiatan<span class="pl-2 fa fa-long-arrow-right"></span></a>
                    </p>
                </div>
            </div>
        </div>
      </div>
    </section>
    <section class="w3l-features py-5" id="proker">
        <div class="call-w3 py-lg-5 py-md-4 py-2">
            <div class="container">
                <div class="row main-cont-wthree-2">
                    <div class="col-lg-5 feature-grid-left">
                        <h5 class="title-small mb-1">Program OSIS SMK Cinta Kasih Tzu Chi </h5>
                        <h3 class="title-big mb-4">Program Kerja </h3>
                        <p class="text-para">Program Kerja OSIS SMK Cinta Kasih Tzu Chi dirancang dan dibentuk oleh pengurus OSIS dengan tujuan memaksimalkan potensi dan kreativitas para siswa agar bisa berprestasi dan meningkatkan kepercayaan diri.</p>
                        <p class="mt-3">Program Kerja yang sudah terlaksana ataupun yang masih dalam tahap perancangan hadir dalam beberapa bentuk. Seperti kegiatan, diskusi dan postingan media sosial, dan masih banyak lainnya.</p>
                        <a href="keanggotaan.php" class="btn btn-primary btn-style mt-md-5 mt-4">Lihat Kegiatan SMK Cinta Kasih Tzu Chi</a>
                    </div>
                    <div class="col-lg-7 feature-grid-right mt-lg-0 mt-5">
                        <div class="call-grids-w3 d-grid">
                          <?php
                            $i = -4;//$i=-(x), x is the max number for display
                            foreach ($prokers as $proker) {?>
                            <div class="grids-1 box-wrap">
                                <a href="#more" class="icon"><span class="fa fa-certificate"></span></a>
                                <h4><a href="<?=$proker['redirect'];?>" class="title-head"><?=$proker["name"];?></a></h4>
                                <p><?=$proker['detail'];?></p>
                            </div>
                            <?php
                                if (++$i == 0){break;}
                            }
                          ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- middle -->
    <div class="middle py-5">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="welcome-left text-center py-lg-4">
                <h5 class="title-small mb-1">Start learning about us</h5>
                <h3 class="title-big">Kenali kami lebih jauh dan beri kami saran atau kritik</h3>
                <a href="#started" class="btn btn-style btn-outline-light mt-sm-5 mt-4 mr-2">Get started now</a>
                <a href="#contact" class="btn btn-style btn-primary mt-sm-5 mt-4">Contact Us</a>
            </div>
        </div>
    </div>
    <!-- //middle -->
    <section class="w3l-team py-5" id="team">
        <div class="call-w3 py-lg-5 py-md-4" id="keanggotaan">
            <div class="container">
                <div class="row main-cont-wthree-2">
                    <div class="col-lg-5 feature-grid-left">
                        <h5 class="title-small mb-1">Anggota OSIS SMK Cinta Kasih Tzu Chi</h5>
                        <h3 class="title-big mb-4">Meet Our Members</h3>
                        <p class="text-para">Pengurus OSIS SMK Cinta Kasih Tzu Chi terbagi kedalam beberapa divisi dengan tugas yang berbeda. Berikut ini beberapa divisi yang ada di OSIS SMK Cinta Kasih Tzu Chi.</p>
                        <p class="mt-3">
                        </p>
                        <a href="#kegiatan" class="btn btn-primary btn-style mt-md-5 mt-4">Lihat lebih lanjut</a>
                    </div>
                    <div class="col-lg-7 feature-grid-right mt-lg-0 mt-5">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="box16">
                                    <a href="#url"><img src="assets/images/pincen.png" alt="" class="img-fluid radius-image" /></a>
                                    <div class="box-content">
                                        <h3 class="title"><a href="#url">Vincent Sutanto</a></h3>
                                        <span class="post">Ketua OSIS</span>
                                        <ul class="social">
                                            <li>
                                                <a href="#" class="facebook">
                                                    <span class="fa fa-facebook-f"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="twitter">
                                                    <span class="fa fa-twitter"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 mt-sm-0 mt-3">
                                <div class="box16">
                                    <a href="#url"><img src="assets/images/stefani.png" alt="" class="img-fluid radius-image" /></a>
                                    <div class="box-content">
                                        <h3 class="title"><a href="#url">Stefanny</a></h3>
                                        <span class="post">Wakil Ketua OSIS</span>
                                        <ul class="social">
                                            <li>
                                                <a href="#" class="facebook">
                                                    <span class="fa fa-facebook-f"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="twitter">
                                                    <span class="fa fa-twitter"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <div>
    <section class="w3l-team py-5" id="team">
    <div class="container">
      <div class="row row-cols-4">
        <!-- ?php for($i=0;$i<=6;$i++) :? -->
        <div class="col-sm-6 mt-lg-4" style="max-width:300px;margin-top:20px">
          <div class="box16">
            <a href="#url"><img src="assets/images/lala.png" alt="" class="img-fluid radius-image" /></a>
            <div class="box-content">
                <h3 class="title"><a href="#url">Hayyallah F.R.</a></h3>
                <span class="post">Kesenian</span>
                <ul class="social">
                    <li>
                        <a href="#" class="facebook">
                            <span class="fa fa-facebook-f"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="twitter">
                            <span class="fa fa-twitter"></span>
                        </a>
                    </li>
                </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-6 mt-lg-4" style="max-width:300px;margin-top:20px">
          <div class="box16">
            <a href="#url"><img src="assets/images/lorencia.png" alt="" class="img-fluid radius-image" /></a>
            <div class="box-content">
                <h3 class="title"><a href="#url">Lorencia M.P.</a></h3>
                <span class="post">Kesenian</span>
                <ul class="social">
                    <li>
                        <a href="#" class="facebook">
                            <span class="fa fa-facebook-f"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="twitter">
                            <span class="fa fa-twitter"></span>
                        </a>
                    </li>
                </ul>
            </div>
          </div>
        </div>
        
    <!-- ?php endfor;? -->
      </div>
    </div>
    </section>
        </div>
    
    <!-- testimonials -->
    
    
    
    <div id="contact" class="contact-us section">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 align-self-center wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.25s">
              <div class="section-heading">
                <h2>Feel Free To Send Us a Message About Your Ideas or Complain About Our Organization</h2>
                <p>Kami terbuka dengan segala kritik dan saran. Organisasi ini akan berkembang lebih jauh lagi jika ide brilian kalian bisa kami ketahui.</p>
                <div class="phone-info">
                  <h4><span><i class="fa fa-instagram"></i> <a href="https://www.instagram.com/osis_smktzuchi/?hl=ids">@osis_smktzuchi</a></span></h4>
                  <h4 style="margin-top:2%;"><span><i class="fa fa-google"></i> <a href="#">oskacktc@cintakasihtuchi.sch.id</a></span></h4>
                  <!-- <h4 style="margin-top:2%;"><span><i class="fa">Line</i> <a href="#">< idLine ></a></span></h4> -->
                </div>
              </div>
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.25s">
              <form id="contact" action="" method="post">
                <div class="row">
                  <div class="col-lg-6">
                    <fieldset>
                      <input type="text" name="name" id="name" placeholder="Nama" autocomplete="on" required>
                    </fieldset>
                  </div>
                  <div class="col-lg-6">
                    <fieldset>
                      <input type="text" name="title" id="kepentingan" placeholder="Kepentingan" autocomplete="on" required>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Email" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" type="text" class="form-control" id="message" placeholder="Pesan" required=""></textarea>  
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <input type="submit" name="submit" class="main-button " style="background-color:#2BD4FE;color:white;"/>
                    </fieldset>
                  </div>
                </div>
                <div class="contact-dec">
                  <img src="assets-space/images/contact-decoration.png" alt="">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    
      <footer>
        <div class="container">
          <div class="row">
            <div class="col-lg-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.25s">
              <p>© Copyright SMK Cinta Kasih Tzu Chi |<a href="#"> Kelompok 5</a> | All Rights Reserved. 
            </div>
          </div>
        </div>
      </footer>
    
        <button onclick="topFunction()" id="movetop" title="Go to top">
          &#10548;
        </button>
        <script>
            
          window.onscroll = function () {
            scrollFunction()
          };
    
          function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
              document.getElementById("movetop").style.display = "block";
            } else {
              document.getElementById("movetop").style.display = "none";
            }
          }
          function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
          }
        </script>
      </section>
    </section>
    
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    
    <script src="assets/js/theme-change.js"></script>
    
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/jquery.countup.js"></script>
    <script>
      $('.counter').countUp();
    </script>
    <script src="assets/js/owl.carousel.js"></script>
    <script>
      $(document).ready(function () {
        $('.owl-one').owlCarousel({
          loop: true,
          margin: 0,
          nav: false,
          dots: false,
          responsiveClass: true,
          autoplay: true,
          autoplayTimeout: 5000,
          autoplaySpeed: 1000,
          autoplayHoverPause: false,
          responsive: {
            0: {
              items: 1
            },
            480: {
              items: 1
            },
            667: {
              items: 1
            },
            1000: {
              items: 1,
              nav: true
            }
          }
        })
      })
    </script>
    <script>
      $(document).ready(function () {
          $("#owl-demo1").owlCarousel({
              loop: true,
              margin: 20,
              nav: false,
              responsiveClass: true,
              responsive: {
                  0: {
                      items: 1,
                      nav: false
                  },
                  768: {
                      items: 2,
                      nav: false
                  },
                  1000: {
                      items: 3,
                      nav: false,
                      loop: false
                  }
              }
          })
      })
    </script>
    <script>
      $(function () {
        $('.navbar-toggler').click(function () {
          $('body').toggleClass('noscroll');
        })
      });
    </script>
    <script>
      $(window).on("scroll", function () {
        var scroll = $(window).scrollTop();
    
        if (scroll >= 80) {
          $("#site-header").addClass("nav-fixed");
        } else {
          $("#site-header").removeClass("nav-fixed");
        }
      });
      $(".navbar-toggler").on("click", function () {
        $("header").toggleClass("active");
      });
      $(document).on("ready", function () {
        if ($(window).width() > 991) {
          $("header").removeClass("active");
        }
        $(window).on("resize", function () {
          if ($(window).width() > 991) {
            $("header").removeClass("active");
          }
        });
      });
    </script>
    <script src="assets/js/bootstrap.min.js"></script>
    
    
      <!-- Scripts -->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="assets-space/js/owl-carousel.js"></script>
      <script src="assets-space/js/animation.js"></script>
      <script src="assets-space/js/imagesloaded.js"></script>
      <script src="assets-space/js/templatemo-custom.js"></script>
    </body>
    
    </html>