<?php
	require '../admin/functions.php';
	date_default_timezone_set('Asia/Jakarta');
	$now= date('Y/m/d H:i:s');

    if (isset($_POST["submit"])) { 

        if(vote($_POST) > 0){
            echo "<script>
        alert('Suara Berhasil Masuk');
        document.location.href='index.php';
            </script>
            ";
            
        } else {echo "<script>
            alert('Suara Invalid');
            document.location.href='index.php';
                        </script>;";
        }
        }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pemilu OSIS 2022/2022</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="shortcut icon" href="../assets/images/oska.png" />
  <link href="assets/kelompok/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=https://fonts.googleapis.com/css?family=Inconsolata:400,500,600,700|Raleway:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/kelompok/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/kelompok/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/kelompok/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/kelompok/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/kelompok/css/style.css" rel="stylesheet">

    <!-- space -->
    <link rel="stylesheet" href="../assets-space/css/fontawesome.css">
    <link rel="stylesheet" href="../assets-space/css/templatemo-space-dynamic.css">
    <link rel="stylesheet" href="../assets-space/css/animated.css">
    <link rel="stylesheet" href="../assets-space/css/owl.css">
    
    <link href="//fonts.googleapis.com/css?family=Nunito:400,700&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style-starter.css">

  <!-- =======================================================
  * Template Name: MyPortfolio - v4.9.1
  * Template URL: https://bootstrapmade.com/myportfolio-bootstrap-portfolio-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
    * {
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif
}

html, body {
    height: 100%;
    background: linear-gradient(to top, #c9c9ff 50%, #9090fa 90%);
    background-repeat: no-repeat;
    background-attachment: fixed;
}

.container {
    margin: 50px auto
}

.panel-heading {
    text-align: center;
    margin-bottom: 10px
}

#forgot {
    min-width: 100px;
    margin-left: auto;
    text-decoration: none
}

a:hover {
    text-decoration: none
}

.form-inline label {
    padding-left: 10px;
    margin: 0;
    cursor: pointer
}

.btn.btn-primary {
    margin-top: 20px;
    border-radius: 15px
}

.panel {
    min-height: 380px;
    box-shadow: 20px 20px 80px rgb(218, 218, 218);
    border-radius: 12px
}

.input-field {
    border-radius: 5px;
    padding: 5px;
    display: flex;
    align-items: center;
    cursor: pointer;
    border: 1px solid #ddd;
    color: #4343ff
}

input[type='text'],
input[type='password'] {
    border: none;
    outline: none;
    box-shadow: none;
    width: 100%
}

a[target='_blank'] {
    position: relative;
    transition: all 0.1s ease-in-out
}

.bordert {
    border-top: 1px solid #aaa;
    position: relative
}

.bordert:after {
    content: "or connect with";
    position: absolute;
    top: -13px;
    left: 33%;
    background-color: #fff;
    padding: 0px 8px
}

@media(max-width: 360px) {
    #forgot {
        margin-left: 0;
        padding-top: 10px
    }

    body {
        height: 100%
    }

    .container {
        margin: 30px 0
    }

    .bordert:after {
        left: 25%
    }
}

h2{
    margin-top:5%;
    text-align:center;
}
</style>

</head>

<body>


    <!-- ======= Works Section ======= -->
            <h2 style="">Pemilihan Ketua OSIS Masa Bakti 2022/2023</h2>
    <section class="section site-portfolio" style="padding:0;">
      <div class="container">
            <div>
            <form method="POST" id="contactForm" name="contactForm" class="contactForm" action="">
        <div id="portfolio-grid" class="row no-gutter" data-aos="fade-up" data-aos-delay="200">
          <div class="item web col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="https://drive.google.com/file/d/12xf1ExtYBgokH_qeNiZJkGxpnBIjtI4Z/view?usp=sharing" target="_blank" class="item-wrap fancybox">
              <div class="work-info">
                <h3>Kenneth Davis</h3>
                <span>Kandidat 1</span>
              </div>
              <img class="img-fluid" src="../admin/images/kenneth.png">
            </a>
          </div>
          <div class="item photography col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="https://drive.google.com/file/d/1xacbebUNZ4wlEKCGozCgNv2rqOtVUvqI/view?usp=share_link" target="_blank" class="item-wrap fancybox">
              <div class="work-info">
                <h3>Sintia Putri Ramanda</h3>
                <span>Kandidat 2</span>
              </div>
              <img class="img-fluid" src="../admin/images/sintia.png">
            </a>
          </div>
          <div class="item branding col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="https://drive.google.com/file/d/18nxwrAYFpsn_vA5JP4M-UO2egmEyLugQ/view?usp=share_link" target="_blank" class="item-wrap fancybox">
              <div class="work-info">
                <h3>Vinca Oktavia</h3>
                <span>Kandidat 3</span>
              </div>
              <img class="img-fluid" src="../admin/images/vinca.png">
            </a>
          </div>
        </div>
        <div class="container">
        <div class="row">
            <div class="col-sm">
            <center>
                <input type="radio" id="html" name="buhleidonea" value="1">
                <label for="html"><h4>1 - Kenneth Davis</h4></label>
                </center>
            </div>
            <div class="col-sm">
                <center>
                <input type="radio" id="css" name="buhleidonea" value="2">
                <label for="css"><h4>2 - Sintia Putri Ramanda</h4></label>
                </center>
            </div>
            <div class="col-sm">
                <center>
                <input type="radio" id="javascript" name="buhleidonea" value="3">
                <label for="javascript"><h4>3 - Vinca Oktavia</h4></label>
                </center>
            </div>
            <input type="hidden" name="timestamps" value="<?php echo $now;?>"/>
            <h5>
            <div class="panel-body p-3">
				<div class="row"style = "margin-top: 10px;">
					<div class="col-md-12">
                        <div class="form-group py-2">
                            <div class="input-field">
						        <input type="text" class="form-control" name="name" id="name" placeholder="Nama">
					        </div>
                        </div>
					</div>
					<div class="col-md-12">
                        <div class="form-group py-2">
                            <div class="input-field">
							    <input type="text" class="form-control" name="nik" id="nik" placeholder="NIK">
						    </div>
					    </div>
                    </div>
					<div class="col-md-12">
						<div class="form-group" style="text-align:center">
							<input type="submit" name="submit" value="Vote!" class="btn btn-primary">
							<div class="submitting"></div>
						</div>
					</div>
				</div>
            </div>
            </h5>
            </div>
            </form>
</div>
      </div>
      </section>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/kelompok/vendor/aos/aos.js"></script>
  <script src="../assets/kelompok/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/kelompok/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/kelompok/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/kelompok/vendor/php-email-form/validate.js"></script>

  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="../assets-space/js/owl-carousel.js"></script>
      <script src="../assets-space/js/animation.js"></script>
      <script src="../assets-space/js/imagesloaded.js"></script>
      <script src="../assets-space/js/templatemo-custom.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/kelompok/js/main.js"></script>

</body>

</html>