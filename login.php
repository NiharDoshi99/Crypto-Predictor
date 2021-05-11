<?php
// Initialize the session
session_start();
// Check if the user is already logged in, if yes then redirect him to welcome page

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true){

      ?>
    <script>
window.location = "index.php";
</script>
    <?php

    //header("location: predic.php");
    exit;
}

// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = $message= "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }

    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }

    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = ?";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set parameters
            $param_username = $username;

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);

                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                 //           session_start();

                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;

                            // Redirect user to welcome page
                          //  header("location: predic.php");
                            ?>
                                <script>
                                window.location = "index.php";
                                </script>
                        <?php
                            
                            
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "No account found with that username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    $message=$username_err." ".$password_err;
    // Close connection
    mysqli_close($link);
}
?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Dgtaka-Crypto Currency HTML5 Template</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicons -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/icon.png">
	<!-- Google font (font-family: 'Source Sans Pro', sans-serif; font-family: 'Oswald', sans-serif;) -->
	<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,600,600i,700" rel="stylesheet">
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/plugins.css">
	<link rel="stylesheet" href="style.css">
	<!-- Cusom css -->
	<link rel="stylesheet" href="css/custom.css">

	<!-- Modernizer js -->
	<script src="js/vendor/modernizr-3.5.0.min.js"></script>
</head>

<body>
	<!-- Main wrapper -->
	<div id="wrapper" class="wrapper">
		<!-- Header -->
		  <header id="header" class="dg__header header--absolute space-right-left">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-xl-2 col-sm-6 col-12">
                        <div class="logo">
                            <a href="index.php">
                                <img src="images/logo/2.png" alt="logo images">
                            </a>
                        </div>
                    </div>
                   <div class="col-lg-8 col-xl-8 d-none d-lg-block">
						<nav class="mainmenu__nav">
							<ul class="mainmenu">
								<li class="drop">
									<a href="index.php">Home</a>
									<!--<ul class="dropdown">
										<li>
											<a href="index.html">Home Version 01</a>
										</li>
										<li>
											<a href="index-2.html">Home Version 02</a>
										</li>
										<li>
											<a href="index-3.html">Home Version 03</a>
										</li>
										<li>
											<a href="index-4.html">Home Version 04</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="about.html">About Us</a>
								</li>-->
								<li class="drop">
									<a href="">Predictions</a>
									<ul class="dropdown">
										<li>
											<a href="predic.php">Bitcoin Predictions</a>
										</li>
										<li>
											<a href="prediceth.php">Ethereum Predictions</a>
										</li>
                                        <li>
											<a href="predicxrp.php">Ripple Predictions</a>
										</li>
                                        <li>
											<a href="predicbch.php">Bitcoin Cash Predictions</a>
										</li>
                                        <li>
											<a href="predicxmr.php">Monero Predictions</a>
										</li>
                                        <li>
											<a href="predicbsv.php">Bitcoin SV Predictions</a>
										</li>
                                        <li>
											<a href="prediceos.php">EOS Predictions</a>
										</li>
                                        <li>
											<a href="predicltc.php">Litecoin Predictions</a>
										</li>
                                        <li>
											<a href="predicbnb.php">Binance Coin Predictions</a>
										</li>
                                        <li>
											<a href="predicxtz.php">Tezos Predictions</a>
										</li>
									</ul>
								</li>
                                <li>
									<a href="wishlist.php">wishlist</a>
								</li>
                                <li>
									<a href="portfolio.php">portfolio</a>
								</li>
								<!--<li>
									<a href="merchants.html">Merchants</a>
								</li>
								<li class="drop">
									<a href="blog.html">News</a>
									<ul class="dropdown">
										<li>
											<a href="blog.html">Blog Page</a>
										</li>
										<li>
											<a href="blog-right-sidebar.html">Blog Right Sidebar</a>
										</li>
										<li>
											<a href="blog-details.html">Blog Details</a>
										</li>
									</ul>
								</li>
								<li class="drop">
									<a href="#">Pages</a>
									<ul class="dropdown">
										<li>
											<a href="about-bitcoin.html">About Bitcoin</a>
										</li>
										<li>
											<a href="merchants.html">Merchants</a>
										</li>
										<li>
											<a href="team.html">Team Page</a>
										</li>
										<li>
											<a href="wallet.html">Wallet Page</a>
										</li>
										<li>
											<a href="login.html">Login</a>
										</li>
										<li>
											<a href="register.html">Register</a>
										</li>
										<li>
											<a href="contact.html">Contact</a>
										</li>
										<li>
											<a href=""></a>
										</li>
									</ul>
								</li>
								<li>
									<a href="contact.html">Contact</a>
								</li>-->

							</ul>
						</nav>
					</div>
					<?php if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) : ?>

					 <div class="col-lg-2 col-xl-2 col-sm-6 col-12">
						<ul class="accounts">
							<li class="active">
								<a href="logout.php">Logout</a>
							</li>
						</ul>
					</div>
                    
                    
                    <?php else : ?>
                   
                    <div class="col-lg-2 col-xl-2 col-sm-6 col-12">
						<ul class="accounts">
							<li>
								<a href="login.php">Log in</a>
							</li>
							<li class="active">
								<a href="register.php">Sign up</a>
							</li>
						</ul>
					</div>
                    
                    <?php endif; ?>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 d-none">
					<nav class="mobilemenu__nav">
						<ul class="mainmenu">
								<li class="drop">
									<a href="index.php">Home</a>
									<!--<ul class="dropdown">
										<li>
											<a href="index.html">Home Version 01</a>
										</li>
										<li>
											<a href="index-2.html">Home Version 02</a>
										</li>
										<li>
											<a href="index-3.html">Home Version 03</a>
										</li>
										<li>
											<a href="index-4.html">Home Version 04</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="about.html">About Us</a>
								</li>-->
								<li class="drop">
									<a href="">Predictions</a>
									<ul class="dropdown">
										<li>
											<a href="predic.php">Bitcoin Predictions</a>
										</li>
										<li>
											<a href="prediceth.php">Ethereum Predictions</a>
										</li>
									</ul>
								</li>
								<!--<li>
									<a href="merchants.html">Merchants</a>
								</li>
								<li class="drop">
									<a href="blog.html">News</a>
									<ul class="dropdown">
										<li>
											<a href="blog.html">Blog Page</a>
										</li>
										<li>
											<a href="blog-right-sidebar.html">Blog Right Sidebar</a>
										</li>
										<li>
											<a href="blog-details.html">Blog Details</a>
										</li>
									</ul>
								</li>
								<li class="drop">
									<a href="#">Pages</a>
									<ul class="dropdown">
										<li>
											<a href="about-bitcoin.html">About Bitcoin</a>
										</li>
										<li>
											<a href="merchants.html">Merchants</a>
										</li>
										<li>
											<a href="team.html">Team Page</a>
										</li>
										<li>
											<a href="wallet.html">Wallet Page</a>
										</li>
										<li>
											<a href="login.html">Login</a>
										</li>
										<li>
											<a href="register.html">Register</a>
										</li>
										<li>
											<a href="contact.html">Contact</a>
										</li>
										<li>
											<a href=""></a>
										</li>
									</ul>
								</li>
								<li>
									<a href="contact.html">Contact</a>
								</li>-->

							</ul>
					</nav>
				</div>
			</div>
			<!-- Mobile Menu -->
			<div class="mobile-menu d-block d-lg-none"></div>
            <!-- Mobile Menu -->
            <div class="mobile-menu d-block d-lg-none"></div>
            <!-- Mobile Menu -->
        </header>
		<!-- Header -->
		<!-- Start Bradcaump area -->
		<div id="bread__image" class="ht__bradcaump__area">
			<div class="ht__bradcaump__container">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="bradcaump__inner text-center">
								<h2 class="bradcaump-title">Account</h2>
								<nav class="bradcaump-inner">
									<a class="breadcrumb-item" href="index.php">Home</a>
									<span class="brd-separetor">/</span>
									<span class="breadcrumb-item active">Account</span>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="particles-js" class="particles-js"></div>
		</div>
		<!-- End Bradcaump area -->
		<!-- Start Log Area -->
		<div class="dg__account section-padding--xl">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="acount__nav nav justify-content-center" role="tablist">
							<a class="nav-item nav-link active" data-toggle="tab" href="#login" role="tab">Login</a>
				<!--			<a class="nav-item nav-link" data-toggle="tab" href="#register" role="tab">Register</a>-->
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="tab__container">
							<div class="single__account tab-pane fade show active" id="login" role="tabpanel">
                                <form action="login.php" method="post">
                                <div class="message"><?php if($message!="") { echo $message; } ?></div>
								<div class="input__box">
									<span>Username</span>
									<input type="text" name="username">
								</div>
								<div class="input__box">
									<span>Password</span>
									<input type="password" name="password">
								</div>
						<!--		<a class="forget__pass" href="#">Lost your password?</a>-->
								<button class="account__btn">Login</button>
                                </form>
							</div>

							<div class="single__account tab-pane fade" id="register" role="tabpanel">

								<div class="input__box">
									<span>First Name</span>
									<input type="text">
								</div>

								<div class="input__box">
									<span>Last Name</span>
									<input type="text">
								</div>

								<div class="input__box">
									<span>Email address</span>
									<input type="email">
								</div>

								<div class="input__box">
									<span>Password</span>
									<input type="password">
								</div>
								<button class="account__btn">Register</button>
							</div>

						</div>
					</div>
				</div>
			</div>

		</div>
		<!-- End Log Area -->

		<!-- Start Footer Area -->
		<div class="dgtaka__bottom">
			<!-- Start Banner Area -->
			<section class="dg__brand__area bg-image--6 pt--90">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="section__title--3 text-center">
								<h2 class="with__line">We work Together</h2>
								<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some
									form, by injected humour.</p>
							</div>
						</div>
					</div>
				</div>

				<div class="container-fluid space-between">
					<div class="row">
						<div class="col-lg-12">
							<div class="brand__inner">
								<ul class="brand__list brand__acivation owl-carousel">
									<li>
										<a href="#">
											<img src="images/brand/1.png" alt="brand images">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="images/brand/2.png" alt="brand images">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="images/brand/3.png" alt="brand images">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="images/brand/4.png" alt="brand images">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="images/brand/5.png" alt="brand images">
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>

			</section>
			<!-- End Banner Area -->
			<div class="newsletter__area">
				<div class="container space-between">
					<div class="row">
						<div class="col-lg-12">
							<div class="newsletter__container">
								<div class="newsletter__inner">
									<h2>Subscribe for latest updates</h2>
									<div class="input__box">
										<input type="email" placeholder="Enter your mail.">
										<button class="submit__btn">Subscribe</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Footer Area -->
			<footer id="footer" class="footer-area footer--2">
				<div class="dg__footer__container bg--white">
					<div class="container">
                        <div class="row">
                            <!-- Start Single Widget -->
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12 col-12">
                                <div class="footer__widget">
                                    <h4>Resources</h4>
                                    <div class="footer__inner">
                                        <ul class="ft__menu">
                                            <li>
                                                <a href="#">Bitcoin Price</a>
                                            </li>
                                            <li>
                                                <a href="#">Blog</a>
                                            </li>
                                            <li>
                                                <a href="#">Helps Portal</a>
                                            </li>
                                            <li>
                                                <a href="#">Privacy Policy</a>
                                            </li>
                                            <li>
                                                <a href="#">Buy Theme</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Widget -->
                            
                            <!-- Start Single Widget -->
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12 xs__mt--40">
                                <div class="footer__widget information">
                                    <h4>Information</h4>
                                    <div class="footer__inner">
                                        <ul class="ft__menu">
                                            <li>
                                                <a href="#">Currency Exchange</a>
                                            </li>
                                            <li>
                                                <a href="#">Todays Rate</a>
                                            </li>
                                            <li>
                                                <a href="#">About DG-Taka</a>
                                            </li>
                                            <li>
                                                <a href="#">Privacy Policy</a>
                                            </li>
                                            <li>
                                                <a href="#">How To Video</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Widget -->
                            <!-- Start Single Widget -->
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12 md__mt--40 sm__mt--40">
                                <div class="footer__widget support">
                                    <h4>Support</h4>
                                    <div class="footer__inner">
                                        <ul class="ft__menu">
                                            <li>
                                                <a href="#">Contact us</a>
                                            </li>
                                            <li>
                                                <a href="#">Support Center</a>
                                            </li>
                                            <li>
                                                <a href="#">Helps</a>
                                            </li>
                                            <li>
                                                <a href="#">Terms & Conditions</a>
                                            </li>
                                            <li>
                                                <a href="#">Live Chat</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Widget -->
                            <!-- Start Single Widget -->
                            <div class="col-lg-3 col-md-6 col-sm-6 md__mt--40 sm__mt--40">
                                <div class="footer__widget resources">
                                    <h4>COntact</h4>
                                    <div class="footer__inner">
                                        <ul>
                                            <li>dgtaka@example.info</li>
                                            <li>Address:
                                                <br> your address here</li>
                                            <li>Phone:
                                                <br> +11 1111 111 111</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Widget -->
                        </div>
                    </div>
				</div>
				<div class="copyright bg__color--1">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-lg-6 col-sm-6 col-12">
								<div class="copyright__inner">
									<p>CopyRIght © All Right Reserved</p>
								</div>
							</div>
							<div class="col-lg-6 col-sm-6 col-12">
								<ul class="footer__right social__icon">
									<li>
										<a href="#">
											<i class="fa fa-facebook-official"></i>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-twitter-square"></i>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-twitter-square"></i>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-vimeo-square"></i>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-tumblr-square"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</footer>
			<!-- Footer Area -->
		</div>
		<!-- End Footer Area -->
	</div>
	<!-- Main wrapper -->

	<!-- JS Files -->
	<script src="js/vendor/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/active.js"></script>
</body>

</html>