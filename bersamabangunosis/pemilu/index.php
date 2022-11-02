<?php
	require '../admin/functions.php';
	date_default_timezone_set('Asia/Jakarta');
	$now= date('Y/m/d H:i:s');

    if (isset($_POST["submit"])) { 

        if(vote($_POST) > 0){
            echo "<script>
        alert('Data berhasil diubah');
        document.location.href='index.php';
            </script>
            ";
            
        } else {echo "<script>
            alert('Data gagal diubah(fileubah)');
            document.location.href='index.php';
                        </script>;";
        }
        }
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Pemilu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="../assets/images/oska.png" />

	
	<link rel="stylesheet" href="css/style.css">
    <style>
        .row {
        display: flex;
        flex-wrap: wrap;
        padding: 0 4px;
        }

        /* Create four equal columns that sits next to each other */
        .column {
        flex: 25%;
        max-width: 25%;
        padding: 0 4px;
        }

        .column img {
        margin-top: 8px;
        vertical-align: middle;
        width: 100%;
        }

        /* Responsive layout - makes a two column-layout instead of four columns */
        @media screen and (max-width: 800px) {
        .column {
            flex: 50%;
            max-width: 50%;
        }
        }

        /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {
        .column {
            flex: 100%;
            max-width: 100%;
        }
        }
    </style>

	</head>
	<body>
	<section class="ftco-section">
		<div class="container" style = "margin-top: -50px;">
			<div class="row justify-content-center">
				<div class="col-md-12">
					<div class="wrapper">
						<div class="row no-gutters">
							<div>
                                    <center>
									<h3>Pemilihan Ketua OSIS Masa Bakti 2022/2023</h3>
									<form method="POST" id="contactForm" name="contactForm" class="contactForm" action="">
                                    <div class="row" style="margin: auto;">
                                    <div class="column mb-4" style="margin: auto;">
                                        <img src="../assets/kelompok/img/ferdii.png" alt="Snow" style="width:100%">
                                    </div>
                                    <div class="column mb-4" style="margin: auto;">
                                        <img src="../assets/kelompok/img/pincenn.png" alt="Forest" style="width:100%">
                                    </div>
                                    <div class="column mb-4" style="margin: auto;">
                                        <img src="../assets/kelompok/img/reynald.png" alt="Mountains" style="width:100%">
                                    </div>
                                    </div>
                                    
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                            <input type="radio" id="html" name="buhleidonea" value="1">
                                                                            <label for="html">1 - Vincent Sutanto</label>
                                            </div>
                                            <div class="col-sm">
                                            <input type="radio" id="css" name="buhleidonea" value="2">
                                                                            <label for="css">2 - Vinsen Su</label>
                                            </div>
                                            <div class="col-sm">
                                            <input type="radio" id="javascript" name="buhleidonea" value="3">
                                                                            <label for="javascript">3 - Vincen Susanto</label>
                                            </div>
                                        </div>
                                    </div>
                                    </center>
										<input type="hidden" name="timestamps" value="<?php echo $now;?>"/>
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<input type="text" class="form-control" name="name" id="name" placeholder="Nama">
												</div>
											</div>
											<div class="col-md-12"> 
												<div class="form-group">
													<input type="text" class="form-control" name="nik" id="nik" placeholder="NIK">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="submit" name="submit" value="Vote!" class="btn btn-primary">
													<div class="submitting"></div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.validate.min.js"></script>
    <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}    
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";  
        dots[slideIndex-1].className += " active";
        setTimeout(showSlides, 2000); // Change image every 2 seconds
        }
    </script>
	</body>
</html>
