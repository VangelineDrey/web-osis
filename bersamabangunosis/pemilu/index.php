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
        <div class="row">
            <div class="column">
                <img src="../assets/noprofile.jpg"/>
                <img src="../assets/noprofile.jpg"/>
                <img src="../assets/noprofile.jpg"/>
            </div>
        </div>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12">
					<div class="wrapper">
						<div class="row no-gutters">
							<div class="col-lg-6">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<h3>Kandidat 1</h3>
									<p class="mb-4">We're open for any suggestion or just to have a chat</p>
									<div id="form-message-warning" class="mb-4"></div> 
				      		<div id="form-message-success" class="mb-4">
				            Your message was sent, thank you!
				      		</div>
									<form method="POST" id="contactForm" name="contactForm" class="contactForm" action="">
										<input type="hidden" name="timestamps" value="<?php echo $now;?>"/>
										<input type="hidden" name="buhleidonea" value="1"/>
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
													<input type="submit" name="submit" value="Send Message" class="btn btn-primary">
													<div class="submitting"></div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
							<div class="col-lg-6 d-flex align-items-stretch">
								<div class="info-wrap w-100 p-5 img" style="background-image: url(images/img.jpg);">
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

	</body>
</html>

