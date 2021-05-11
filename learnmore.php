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
		</header>
		<!-- Start Bradcaump area -->
        <div id="bread__image" class="ht__bradcaump__area">
            <div class="ht__bradcaump__container">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">Learn More</h2>
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.html">Home</a>
                                  <span class="brd-separetor">/</span>
                                  <span class="breadcrumb-item active">Learn More</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="particles-js" class="particles-js"></div>
        </div>
        <!-- End Bradcaump area -->

        <!-- Start what is crypto-->
        <section class="about__dgtaka about--2 section-padding--xs">
        	<div class="container">
        		<div class="row align-items-center">
        			<div class="col-lg-7 col-12 col-sm-12 col-md-12">
        				<div class="dg__secure__inner">
        				<a href="https://www.investopedia.com/terms/c/cryptocurrency.asp#:~:text=A%20cryptocurrency%20is%20a%20digital,a%20disparate%20network%20of%20computers.">	<h3 class="section__title--4">What is Crypto Currency?</h3></a>
        					<p>A cryptocurrency is a digital or virtual currency that is secured by cryptography, which makes it nearly impossible to counterfeit or double-spend. Many cryptocurrencies are decentralized networks based on blockchain technology—a distributed ledger enforced by a disparate network of computers. A defining feature of cryptocurrencies is that they are generally not issued by any central authority, rendering them theoretically immune to government interference or manipulation.<p>
									<p>Cryptocurrencies hold the promise of making it easier to transfer funds directly between two parties, without the need for a trusted third party like a bank or credit card company.</p>
        				</div>
        			</div>
        			<div class="col-lg-5 col-12 col-sm-12 col-md-12 sm__mt--40 md__mt--40">
        				<div class="dg__secure__thumb">
        					<img src="images/download.jpg" alt="secure images">
        				</div>
        			</div>
        		</div>
        	</div>
		</section>
		<!-- End what is crypto-->

		<!-- Start Is it legal -->
		<section class="about__dgtaka about--2 section-padding--xs">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-7 col-12 col-sm-12 col-md-12">
						<div class="dg__secure__inner">
						<a href="https://news.bitcoin.com/indian-supreme-court-cryptocurrency-rbi-ban-lifted/">	<h3 class="section__title--4">Is it legal?</h3></a>
							<p>As of February 2020, Bitcoin was legal in the U.S., Japan, the U.K., Canada, and most other developed countries. In general, it is necessary to look at Bitcoin laws in specific countries. In the U.S., the IRS has taken an increasing interest in Bitcoin and issued guidelines for taxpayers.</p>
							<p>The Indian supreme court has ruled that the RBI circular which bans banks from providing services to crypto businesses is unconstitutional. The RBI banking ban on the crypto industry has now been lifted.</p>
						</div>
					</div>
					<div class="col-lg-5 col-12 col-sm-12 col-md-12 sm__mt--40 md__mt--40">
						<div class="dg__secure__thumb">
							<img src="images/cryptolaw.png" alt="secure images">
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- End is it legal -->

		<!-- Start where to buy -->
		<section class="about__dgtaka about--2 section-padding--xs">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-7 col-12 col-sm-12 col-md-12">
						<div class="dg__secure__inner">
                            <a href="https://www.coinbase.com/">		<h3 class="section__title--4">Where to buy cryptocurrencies?</h3></a>
							<p> Coinbase is the biggest and most popular cryptocurrency broker exchange. It is secure and accepts bank transfer, credit/debit card, and PayPal. Here is a list of other places where you can buy cryptocurrencies.</p>
								<ul>
							<a href="https://www.coinbase.com/"><li>Coinbase: Best Overall </li></a>
                                    <a href="https://robinhood.com/us/en/">	<li>Robinhood: Best for Low Cost</li></a>
                                    <a href="https://cash.app/"><li>Square Cash: Best for Versatility</li></a>
                                    <a href="https://www.binance.com/en/">	<li>Binance: Best for Low Rates in Other Currencies</li></a>
                                    <a href="https://pro.coinbase.com/">	<li>Coinbase Pro: Best for Active Traders</li></a>
                                    <a href="https://www.coinmama.com/">	<li>Coinmama: Best for Quick and Easy Transactions</li></a>
							</ul>
						
						</div>
					</div>
					<div class="col-lg-5 col-12 col-sm-12 col-md-12 sm__mt--40 md__mt--40">
						<div class="dg__secure__thumb">
							<img src="images/trading.jpeg" alt="secure images">
						</div>
					</div>
				</div>
			</div>
		</section>

        <!-- End Where to buy -->

				<!-- Start Types of crypto -->
				<section class="about__dgtaka about--2 section-padding--xs">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-lg-7 col-12 col-sm-12 col-md-12">
								<div class="dg__secure__inner">
							<a href="https://www.sofi.com/learn/content/understanding-the-different-types-of-cryptocurrency/">		<h3 class="section__title--4">Types of cryptocurrencies</h3></a>
										<ul>
										<li>Ethereum (ETH) </li>
										<li>Ripple (XRP)</li>
										<li>Litecoin (LTC)</li>
										<li>Tether (USDT)</li>
										<li>Bitcoin Cash (BCH)</li>
										<li>Libra (LIBRA)</li>
										<li>Monero (XMR) </li>
										<li>EOS (EOS)</li>
										<li> Bitcoin SV (BSV)</li>
										<li>Binance Coin (BNB)</li>

									</ul>
								</p>
								</div>
							</div>
							<div class="col-lg-5 col-12 col-sm-12 col-md-12 sm__mt--40 md__mt--40">
								<div class="dg__secure__thumb">
									<img src="images/types.jpg" alt="secure images">
								</div>
							</div>
						</div>
					</div>
				</section>
						<!-- End type of crypto-->

		<!-- Start Video Area -->
		<section class="dg__video__area bg-image--8">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="dg__video__inner">
							<h2>Cryptocurrencies Explained</h2>
							<!-- <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</p> -->
							<div class="play__video">
								<a class="play__btn" href="https://www.youtube.com/watch?v=8NgVGnX4KOw&ab_channel=Simplilearn"><img src="images/about/play.png" alt="play icon">Play Now</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Video Area -->

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
																							<a href="#">Bitcoin Predictions</a>
																					</li>
																					<li>
																							<a href="#">Ethereum Predictions</a>
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
																							<a href="#">About Us</a>
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
																							<a href="#">Support</a>
																					</li>
																					<li>
																							<a href="#">Helps</a>
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
																					<li>cryptopredict@example.info</li>
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
										<i class="fa fa-linkedin-square"></i>
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
