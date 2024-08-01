<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<!-- set the encoding of your site -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- set the page title -->
	<title>Methus Money solutions | Home</title>
	<!-- inlcude google nunito sans font cdn link -->
	<link rel="preconnect" href="https://fonts.gstatic.com/">
	<!-- inlcude google roboto font cdn link -->
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
	<!-- inlcude google fira sans font cdn link -->
	<link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">
	<!-- include the site bootstrap stylesheet -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="style.css">
	<!-- include theme color setting stylesheet -->
	<link rel="stylesheet" href="css/colors.css">
	<!-- include the site responsive stylesheet -->
	<link rel="stylesheet" href="css/responsive.css">
</head>
<body>
	<!-- pageWrapper -->
	<div id="pageWrapper">
		<!-- phStickyWrap -->
		<div class="phStickyWrap">
			<!-- pageHeader -->
			<header id="pageHeader" class="headerFixer">
				<!-- hdTopBar -->
				<div class="hdTopBar bg-dark position-relative">
					<div class="container">
						<div class="row">
							<div class="col-9 d-none d-md-flex align-items-center">
								<!-- hdScheduleList -->
								<ul class="list-unstyled d-flex mb-0 hdScheduleList fwMedium fontAlter mb-0">
									<li>
										<span class="icnWrap rounded d-flex align-items-center justify-content-center text-white flex-shrink-0 mr-1 mr-lg-3">
											<i class="bx bx-support"><span class="sr-only">icon</span></i>
										</span>
										<div class="descrWrap">
											<strong class="title d-block fwMedium text-white">Free Call:</strong>
											<p><a href="tel:+260967293082">+26 0967293082</a></p>
										</div>
									</li>
									<li>
										<span class="icnWrap rounded d-flex align-items-center justify-content-center text-white flex-shrink-0 mr-1 mr-lg-3">
											<i class="bx bx-at"><span class="sr-only">icon</span></i>
										</span>
										<div class="descrWrap">
											<strong class="title d-block fwMedium text-white">Email Us:</strong>
											<p><a href="mailto:perrydeedollarmethus.com">perrydeedollarmethus.com</a></p>
										</div>
									</li>
									
								</ul>
							</div>
							<div class="col-12 col-md-3 d-md-flex justify-content-md-end position-static">
								<!-- hdBtn -->
								<a href="https://wa.link/t9rlch" class="hdBtn d-flex align-items-center justify-content-center fwMedium fontAlter">Message Us On WhatsApp <i class="bx bx-right-arrow-alt icn ml-1"><span class="sr-only">icon</span></i></a>
							</div>
						</div>
					</div>
				</div>
				<!-- hdHolder -->
				<div class="hdHolder clearfix pt-2 pb-2 pt-lg-5 pb-lg-5 position-relative">
					<div class="container">
						<!-- logo -->
						<div class="logo">
							<a href="index.html"> <img src="images/logo.png">
							<!-- logo Mail@methusmsolutions.com	<img src="images/logo.png" class="img-fluid" alt="Consults | ">
							--></a>
						</div>
						<!-- pageNav -->
						<nav id="pageNav" class="navbar navbar-expand-md navbar-light justify-content-end position-static">
							<!-- pageMainNavCollapse -->
							<div class="collapse navbar-collapse pageMainNavCollapse justify-content-end" id="pageMainNavCollapse">
								<!-- mainNavigation -->
								<ul class="navbar-nav mainNavigation fwSemi fontAlter">
									<li class="nav-item active">
										<a class="nav-link" href="#pageWrapper">Home</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#scrollto2">About Us</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#scrollto3">Our Services</a>
									</li>
									
									<li class="nav-item">
										<a class="nav-link" href="#scrollto4">Testimonials</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#scrollto5">Contact Us</a>
									</li>
									<li class="nav-item">
										<a href="cal.php" style="font-size: 16px;">&emsp;Currency Converter</a>
									</li>
								</ul>
							</div>
							<!-- pageNavOpener -->
							<button class="navbar-toggler pageNavOpener position-relative" type="button" data-toggle="collapse" data-target="#pageMainNavCollapse" aria-controls="pageMainNavCollapse" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"><span class="sr-only">menu</span></span>
							</button>
						</nav>
					</div>
				</div>
			</header>
		</div> <br>

        <div style="text-align: center; display: flex; justify-content: center; align-items: center;">
<body style="font-family: Arial, sans-serif; background-color: #2c2c2c; color: #ffffff; display: flex; justify-content: center; align-items: center; height: 60vh; margin: 0;">
    <div style="text-align: center; background-color: #333333; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); width: 90%; max-width: 400px;">
        <h2>Set Exchange Rate</h2>
        <form method="POST" action="">
            <label for="rate">Exchange Rate (RMB to ZMW):</label>
            <input type="text" id="rate" name="rate" required style="padding: 10px; border-radius: 5px; border: none; margin: 10px 0; width: 100%; box-sizing: border-box;">
            <button type="submit" style="padding: 10px 20px; border-radius: 5px; border: none; background-color: #007BFF; color: #ffffff; cursor: pointer; width: 100%; box-sizing: border-box; margin: 10px 0;">Set Rate</button>
            <button type="button" onclick="window.location.href='index.html'" style="padding: 10px 20px; border-radius: 5px; border: none; background-color: #007BFF; color: #ffffff; cursor: pointer; width: 100%; box-sizing: border-box; margin: 10px 0;">Home</button>
            <button type="button" onclick="window.location.href='cal.php'" style="padding: 10px 20px; border-radius: 5px; border: none; background-color: #007BFF; color: #ffffff; cursor: pointer; width: 100%; box-sizing: border-box; margin: 10px 0;">Logout</button>
        </form>
        <div class="message" style="margin-top: 10px; color: #ff0000;">
            <?php
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $rate = $_POST['rate'];
                    if (is_numeric($rate) && $rate > 0) {
                        file_put_contents('rate.txt', $rate);
                        echo "Exchange rate updated successfully.";
                    } else {
                        echo "Invalid rate.";
                    }
                }
            ?>
        </div>
    </div>
            </div>
    
<!-- include jQuery library -->
<script src="js/jquery-3.4.1.min.js"></script>
	<!-- include bootstrap popper JavaScript -->
	<script src="js/popper.min.js"></script>
	<!-- include bootstrap JavaScript -->
	<script src="js/bootstrap.min.js"></script>
	<!-- include custom JavaScript -->
	<script src="js/jqueryCustom.js"></script>
	<!-- include fontAwesome -->