<?php
// Initialize the session
session_start();
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title> Cryptopredict </title>
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
     <script>
            function getJSON(url) {
        var resp ;
        var xmlHttp ;

        resp  = '' ;
        xmlHttp = new XMLHttpRequest();

        if(xmlHttp != null)
        {
            xmlHttp.open( "GET", url, false );
            xmlHttp.send( null );
            resp = xmlHttp.responseText;
        }

        return resp ;
    }
       
         
        var btcoin,ethcoin,xrpcoin,usdtcoin,bchcoin,ltccoin,btc2oth,eth2oth,xrp2oth,btc2oth2,eth2oth2,xrp2oth2;
        var btc2oth2=getJSON('https://min-api.cryptocompare.com/data/price?fsym=BTC&tsyms=USD,JPY,EUR,INR,GBP'); 
        var btc2oth=JSON.parse(btc2oth2);
        var eth2oth2=getJSON('https://min-api.cryptocompare.com/data/price?fsym=ETH&tsyms=USD,JPY,EUR,INR,GBP'); 
        var eth2oth=JSON.parse(eth2oth2);
        var eth2oth2=getJSON('https://min-api.cryptocompare.com/data/price?fsym=XRP&tsyms=USD,JPY,EUR,INR,GBP'); 
        var xrp2oth=JSON.parse(eth2oth2);
        var bch2oth2=getJSON('https://min-api.cryptocompare.com/data/price?fsym=BCH&tsyms=USD,JPY,EUR,INR,GBP'); 
        var bch2oth=JSON.parse(bch2oth2);
        var bsv2oth2=getJSON('https://min-api.cryptocompare.com/data/price?fsym=BSV&tsyms=USD,JPY,EUR,INR,GBP'); 
        var bsv2oth=JSON.parse(bsv2oth2); 
        var ltc2oth2=getJSON('https://min-api.cryptocompare.com/data/price?fsym=LTC&tsyms=USD,JPY,EUR,INR,GBP'); 
        var ltc2oth=JSON.parse(ltc2oth2);
        var xmr2oth2=getJSON('https://min-api.cryptocompare.com/data/price?fsym=XMR&tsyms=USD,JPY,EUR,INR,GBP'); 
        var xmr2oth=JSON.parse(xmr2oth2); 
        var bnb2oth2=getJSON('https://min-api.cryptocompare.com/data/price?fsym=BNB&tsyms=USD,JPY,EUR,INR,GBP'); 
        var bnb2oth=JSON.parse(bnb2oth2); 
        var xtz2oth2=getJSON('https://min-api.cryptocompare.com/data/price?fsym=XTZ&tsyms=USD,JPY,EUR,INR,GBP'); 
        var xtz2oth=JSON.parse(xtz2oth2); 
        var eos2oth2=getJSON('https://min-api.cryptocompare.com/data/price?fsym=EOS&tsyms=USD,JPY,EUR,INR,GBP'); 
        var eos2oth=JSON.parse(eos2oth2);  
        btcoin = getJSON('https://min-api.cryptocompare.com/data/price?fsym=BTC&tsyms=USD') ;
        ethcoin=getJSON('https://min-api.cryptocompare.com/data/price?fsym=ETH&tsyms=USD') ;
        xrpcoin=getJSON('https://min-api.cryptocompare.com/data/price?fsym=XRP&tsyms=USD') ;
        usdtcoin=getJSON('https://min-api.cryptocompare.com/data/price?fsym=XMR&tsyms=USD') ;
        bchcoin=getJSON('https://min-api.cryptocompare.com/data/price?fsym=BCH&tsyms=USD') ;
        bsvcoin=getJSON('https://min-api.cryptocompare.com/data/price?fsym=BSV&tsyms=USD') ;
        bnbcoin=getJSON('https://min-api.cryptocompare.com/data/price?fsym=BNB&tsyms=USD') ; 
        ltccoin=getJSON('https://min-api.cryptocompare.com/data/price?fsym=LTC&tsyms=USD') ;
        xtzcoin=getJSON('https://min-api.cryptocompare.com/data/price?fsym=XTZ&tsyms=USD') ; 
        eoscoin=getJSON('https://min-api.cryptocompare.com/data/price?fsym=EOS&tsyms=USD') ;
        trxcoin=getJSON('https://min-api.cryptocompare.com/data/price?fsym=TRX&tsyms=USD') ; 
        usdttcoin=getJSON('https://min-api.cryptocompare.com/data/price?fsym=USDT&tsyms=USD') ;
        btcoin=JSON.parse(btcoin);
        ethcoin=JSON.parse(ethcoin);
        xrpcoin=JSON.parse(xrpcoin);
        usdtcoin=JSON.parse(usdtcoin);
        bchcoin=JSON.parse(bchcoin);
        ltccoin=JSON.parse(ltccoin);
        bsvcoin=JSON.parse(bsvcoin);
        bnbcoin=JSON.parse(bnbcoin);
        xtzcoin=JSON.parse(xtzcoin);
        eoscoin=JSON.parse(eoscoin);
        usdttcoin=JSON.parse(usdttcoin);
        trxcoin=JSON.parse(trxcoin); 
     //   document.getElementById("btcval").innerHTML = gjson.rates.BTC;
        //alert(gjson.rates.BTC);
    </script>
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
		<!-- Header -->
		<!-- Start Slider Area -->
		<div class="dg__slider__area js-ripples slider--2 bg-image--3">
			<!-- Start Single Slide -->
			<div class="slide d-flex fullscreen align__center poss--relative">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-xl-7 col-md-12 col-sm-12 col-12 d-flex align-items-center">
							<div class="slide__inner">
								<h1>Cryptocurrency Prediction Website.</h1>
								<p>Visit pages under "Predictions" tab to get previous and future predictions.</p>
								<a class="slide__btn dg__btn btn--white btn--theme" href="learnmore.php">Learn More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Single Slide -->
		</div>
		<!-- End Slider Area -->
		<!-- Start Our Work Area 
		<section class="dg__work__area how__work">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-12 col-sm-12 col-12">
						<div class="thumb">
							<img src="images/about/4.png" alt="computer images">
						</div>
					</div>
					<div class="col-lg-6 col-md-12 col-sm-12 col-12 sm__mt--40 md__mt--40">
						<div class="content">
							<h2>How It Works?</h2>
							<h6>cryptocurrency is a digital asset designed to work as a medium of exchange</h6>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
								aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							<a class="slide__btn dg__btn" href="#">JOIN WITH US</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		 End Our Work Area -->
        <section class="bg__ticker__ares bg__color--5">
			<div class="conteiner-fluid">
				<div class="row">
					<div class="col-lg-2 col-md-4 col-sm-10 col-12 right_border">
						<div class="ticket">
							<h6>Bitcoin -1BTC</h6>
							<span id="btcval">0</span>
						</div>
					</div>
					<div class="col-lg-2 col-md-4 col-sm-10 col-12 right_border">
						<div class="ticket">
							<h6>Ethereum -1ETH</h6>
							<span id="ethval">0</span>
						</div>
					</div>
                   
                    
					<div class="col-lg-2 col-md-4 col-sm-10 col-12 right_border border-none">
						<div class="ticket">
							<h6>Ripple -1XRP</h6>
							<span id="xrpval">0</span>
						</div>
					</div>
					<div class="col-lg-2 col-md-4 col-sm-10 col-12 right_border">
						<div class="ticket">
							<h6>Monero -1XMR</h6>
							<span id='usdtval'>0</span>
						</div>
					</div>
					<div class="col-lg-2 col-md-4 col-sm-10 col-12 right_border">
						<div class="ticket">
							<h6>Bitcoin Cash -1BCH</h6>
							<span id='bchval'>0</span>
						</div>
					</div>
					<div class="col-lg-2 col-md-4 col-sm-10 col-12 right_border">
						<div class="ticket last">
							<h6>Litecoin -1LTC</h6>
							<span id='ltcval'>0</span>
						</div>
					</div>
                    <div class="col-lg-2 col-md-4 col-sm10 col-12 right_border">
						<div class="ticket last">
							<h6>Bitcoin SV -1BSV</h6>
							<span id='bsvval'>0</span>
						</div>
					</div>
                    <div class="col-lg-2 col-md-4 col-sm-10 col-12 right_border">
						<div class="ticket last">
							<h6>EOS Coin -1EOS</h6>
							<span id='eosval'>0</span>
						</div>
					</div>
                    <div class="col-lg-2 col-md-4 col-sm-10 col-12 right_border">
						<div class="ticket last">
							<h6>Binance Coin -1BNB</h6>
							<span id='bnbval'>0</span>
						</div>
					</div>
                    <div class="col-lg-2 col-md-4 col-sm-10 col-12 right_border">
						<div class="ticket last">
							<h6>Tezos -1XTZ</h6>
							<span id='xtzval'>0</span>
						</div>
					</div>
                    <div class="col-lg-2 col-md-4 col-sm-10 col-12 right_border">
						<div class="ticket last">
							<h6>TRON -1TRX</h6>
							<span id='trxval'>0</span>
						</div>
					</div>
                    <div class="col-lg-2 col-md-4 col-sm-10 col-12 right_border">
						<div class="ticket last">
							<h6>Tether -1USDT</h6>
							<span id='usdttval'>0</span>
						</div>
					</div>
                    <div></div>
				</div>
                
                
			</div>
            
            
             <script>
               //  btcoin,ethcoin,xrpcoin,usdtcoin,bchcoin,ltccoin
                 
                        btcoin=btcoin.USD;
                        btcoin=btcoin.toString();
                         btcoin=btcoin.substring(0, 8);
                        document.getElementById("btcval").innerHTML = btcoin;
            
                        ethcoin=ethcoin.USD;
                        ethcoin=ethcoin.toString();
                         ethcoin=ethcoin.substring(0, 8);
                        document.getElementById("ethval").innerHTML = ethcoin;
                 
                        xrpcoin=xrpcoin.USD;
                        xrpcoin=xrpcoin.toString();
                         xrpcoin=xrpcoin.substring(0, 8);
                        document.getElementById("xrpval").innerHTML = xrpcoin;
                        
                         usdtcoin=usdtcoin.USD;
                        usdtcoin=usdtcoin.toString();
                         usdtcoin=usdtcoin.substring(0, 8);
                        document.getElementById("usdtval").innerHTML = usdtcoin;
                        
                         bchcoin=bchcoin.USD;
                        bchcoin=bchcoin.toString();
                         bchcoin=bchcoin.substring(0, 8);
                        document.getElementById("bchval").innerHTML = bchcoin;
                 
                         ltccoin=ltccoin.USD;
                        ltccoin=ltccoin.toString();
                         ltccoin=ltccoin.substring(0, 8);
                        document.getElementById("ltcval").innerHTML = ltccoin;
                 
                         bsvcoin=bsvcoin.USD;
                        bsvcoin=bsvcoin.toString();
                         bsvcoin=bsvcoin.substring(0, 8);
                        document.getElementById("bsvval").innerHTML = bsvcoin;
                        
                         eoscoin=eoscoin.USD;
                        eoscoin=eoscoin.toString();
                         eoscoin=eoscoin.substring(0, 8);
                        document.getElementById("eosval").innerHTML = eoscoin;
                 
                         bnbcoin=bnbcoin.USD;
                        bnbcoin=bnbcoin.toString();
                         bnbcoin=bnbcoin.substring(0, 8);
                        document.getElementById("bnbval").innerHTML = bnbcoin;
                 
                         xtzcoin=xtzcoin.USD;
                        xtzcoin=xtzcoin.toString();
                         xtzcoin=xtzcoin.substring(0, 8);
                        document.getElementById("xtzval").innerHTML = xtzcoin;
                 
                        usdttcoin=usdttcoin.USD;
                        usdttcoin=usdttcoin.toString();
                         usdttcoin=usdttcoin.substring(0, 8);
                        document.getElementById("usdttval").innerHTML = usdttcoin;
                 
                        trxcoin=trxcoin.USD;
                        trxcoin=trxcoin.toString();
                         trxcoin=trxcoin.substring(0, 8);
                        document.getElementById("trxval").innerHTML = trxcoin;
            </script>
		</section>
        <!-- Start Converter Area -->
        
		<section class="dg__converter__area converter__wrapper bg--white section-padding--xl">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6 col-md-12 col-sm-12 col-12">
						<div class="thumb">
							<img src="images/about/5.png" alt="converter images">
						</div>
					</div>
					<div class="col-lg-6 col-md-12 col-sm-12 col-12">
						<div class="content">
							<h2>Currency Converter</h2>
							<p class="first">Enter cryptocurrency amount in left placeholder to get converted price in
								selected fiat currency.</p>
							
							<div class="bit__convert">
								<div class="single__convert">
									<select id="cryp">
										<option>BTC</option>
										<option>ETH</option>
										<option>XRP</option>
				                        <option>BCH</option>
										<option>BSV</option>
										<option>LTC</option>
                                        <option>XMR</option>
                                        <option>BNB</option>
                                        <option>XTZ</option>
                                        <option>EOS</option>
									</select>
									<input type="text" placeholder="0" id="ipcoin">
									<span>Cryptocurrency</span>
								</div>
								<div class="single__convert">
									<select id="fiat">
										<option>USD</option>
										<option>JPY</option>
										<option>EUR</option>
                                        <option>INR</option>
                                        <option>GBP</option>
									</select>
									<input type="text" placeholder="0" id="ipfiat">
									<span>Fiat Currency</span>
								</div>
							</div>
						</div>
                        <br>
                        <script>
                             function getJSON(url) {
        var resp ;
        var xmlHttp ;

        resp  = '' ;
        xmlHttp = new XMLHttpRequest();

        if(xmlHttp != null)
        {
            xmlHttp.open( "GET", url, false );
            xmlHttp.send( null );
            resp = xmlHttp.responseText;
        }

        return resp ;
    }
                            function convertcoin(){
                            
                            var x1 = document.getElementById("cryp").selectedIndex;
                            var numop=document.getElementsByTagName("option")[x1].value;
                            var x2 = document.getElementById("fiat").selectedIndex;
                            var numop2=document.getElementsByTagName("option")[x2+10].value;
                            if(numop=="BTC" && numop2=="USD"){
                                var r=parseFloat(document.getElementById("ipcoin").value)*parseFloat(btc2oth.USD);
                                document.getElementById("ipfiat").value=r.toString();
                            }else if(numop=="BTC" && numop2=="JPY"){
                                var r=parseFloat(document.getElementById("ipcoin").value)*parseFloat(btc2oth.JPY);
                                document.getElementById("ipfiat").value=r.toString();
                            }else if(numop=="BTC" && numop2=="EUR"){
                                var r=parseFloat(document.getElementById("ipcoin").value)*parseFloat(btc2oth.EUR);
                                document.getElementById("ipfiat").value=r.toString();
                            }else if(numop=="BTC" && numop2=="INR"){
                                var r=parseFloat(document.getElementById("ipcoin").value)*parseFloat(btc2oth.INR);
                                document.getElementById("ipfiat").value=r.toString();
                            }else if(numop=="BTC" && numop2=="GBP"){
                                var r=parseFloat(document.getElementById("ipcoin").value)*parseFloat(btc2oth.GBP);
                                document.getElementById("ipfiat").value=r.toString();
                            }
                                
                            else if(numop=="ETH" && numop2=="USD"){
                                var r=parseFloat(document.getElementById("ipcoin").value)*parseFloat(eth2oth.USD);
                                document.getElementById("ipfiat").value=r.toString();
                            }else if(numop=="ETH" && numop2=="JPY"){
                                var r=parseFloat(document.getElementById("ipcoin").value)*parseFloat(eth2oth.JPY);
                                document.getElementById("ipfiat").value=r.toString();
                            }else if(numop=="ETH" && numop2=="EUR"){
                                var r=parseFloat(document.getElementById("ipcoin").value)*parseFloat(eth2oth.EUR);
                                document.getElementById("ipfiat").value=r.toString();
                            }else if(numop=="ETH" && numop2=="INR"){
                                var r=parseFloat(document.getElementById("ipcoin").value)*parseFloat(eth2oth.INR);
                                document.getElementById("ipfiat").value=r.toString();
                            }else if(numop=="ETH" && numop2=="GBP"){
                                var r=parseFloat(document.getElementById("ipcoin").value)*parseFloat(eth2oth.GBP);
                                document.getElementById("ipfiat").value=r.toString();
                            }    
                                
                            else if(numop=="XRP" && numop2=="USD"){
                                var r=parseFloat(document.getElementById("ipcoin").value)*parseFloat(xrp2oth.USD);
                                document.getElementById("ipfiat").value=r.toString();
                            }else if(numop=="XRP" && numop2=="JPY"){
                                var r=parseFloat(document.getElementById("ipcoin").value)*parseFloat(xrp2oth.JPY);
                                document.getElementById("ipfiat").value=r.toString();
                            }else if(numop=="XRP" && numop2=="EUR"){
                                var r=parseFloat(document.getElementById("ipcoin").value)*parseFloat(xrp2oth.EUR);
                                document.getElementById("ipfiat").value=r.toString();
                            }else if(numop=="XRP" && numop2=="INR"){
                                var r=parseFloat(document.getElementById("ipcoin").value)*parseFloat(xrp2oth.INR);
                                document.getElementById("ipfiat").value=r.toString();
                            }else if(numop=="XRP" && numop2=="GBP"){
                                var r=parseFloat(document.getElementById("ipcoin").value)*parseFloat(xrp2oth.GBP);
                                document.getElementById("ipfiat").value=r.toString();
                            }
                                
                                
                            else if(numop=="BCH" && numop2=="USD"){
                                var r=parseFloat(document.getElementById("ipcoin").value)*parseFloat(bch2oth.USD);
                                document.getElementById("ipfiat").value=r.toString();
                            }else if(numop=="BCH" && numop2=="JPY"){
                                var r=parseFloat(document.getElementById("ipcoin").value)*parseFloat(bch2oth.JPY);
                                document.getElementById("ipfiat").value=r.toString();
                            }else if(numop=="BCH" && numop2=="EUR"){
                                var r=parseFloat(document.getElementById("ipcoin").value)*parseFloat(bch2oth.EUR);
                                document.getElementById("ipfiat").value=r.toString();
                            }else if(numop=="BCH" && numop2=="INR"){
                                var r=parseFloat(document.getElementById("ipcoin").value)*parseFloat(bch2oth.INR);
                                document.getElementById("ipfiat").value=r.toString();
                            }else if(numop=="BCH" && numop2=="GBP"){
                                var r=parseFloat(document.getElementById("ipcoin").value)*parseFloat(bch2oth.GBP);
                                document.getElementById("ipfiat").value=r.toString();
                            }     
                                
                            else if(numop=="BSV" && numop2=="USD"){
                                var r=parseFloat(document.getElementById("ipcoin").value)*parseFloat(bsv2oth.USD);
                                document.getElementById("ipfiat").value=r.toString();
                            }else if(numop=="BSV" && numop2=="JPY"){
                                var r=parseFloat(document.getElementById("ipcoin").value)*parseFloat(bsv2oth.JPY);
                                document.getElementById("ipfiat").value=r.toString();
                            }else if(numop=="BSV" && numop2=="EUR"){
                                var r=parseFloat(document.getElementById("ipcoin").value)*parseFloat(bsv2oth.EUR);
                                document.getElementById("ipfiat").value=r.toString();
                            }else if(numop=="BSV" && numop2=="INR"){
                                var r=parseFloat(document.getElementById("ipcoin").value)*parseFloat(bsv2oth.INR);
                                document.getElementById("ipfiat").value=r.toString();
                            }else if(numop=="BSV" && numop2=="GBP"){
                                var r=parseFloat(document.getElementById("ipcoin").value)*parseFloat(bsv2oths.GBP);
                                document.getElementById("ipfiat").value=r.toString();
                            }    
                                
                            else if(numop=="LTC" && numop2=="USD"){
                                var r=parseFloat(document.getElementById("ipcoin").value)*parseFloat(ltc2oth.USD);
                                document.getElementById("ipfiat").value=r.toString();
                            }else if(numop=="LTC" && numop2=="JPY"){
                                var r=parseFloat(document.getElementById("ipcoin").value)*parseFloat(ltc2oth.JPY);
                                document.getElementById("ipfiat").value=r.toString();
                            }else if(numop=="LTC" && numop2=="EUR"){
                                var r=parseFloat(document.getElementById("ipcoin").value)*parseFloat(ltc2oth.EUR);
                                document.getElementById("ipfiat").value=r.toString();
                            }else if(numop=="LTC" && numop2=="INR"){
                                var r=parseFloat(document.getElementById("ipcoin").value)*parseFloat(ltc2oth.INR);
                                document.getElementById("ipfiat").value=r.toString();
                            }else if(numop=="LTC" && numop2=="GBP"){
                                var r=parseFloat(document.getElementById("ipcoin").value)*parseFloat(ltc2oth.GBP);
                                document.getElementById("ipfiat").value=r.toString();
                            } 
                                
                            else if(numop=="XMR" && numop2=="USD"){
                                var r=parseFloat(document.getElementById("ipcoin").value)*parseFloat(xmr2oth.USD);
                                document.getElementById("ipfiat").value=r.toString();
                            }else if(numop=="XMR" && numop2=="JPY"){
                                var r=parseFloat(document.getElementById("ipcoin").value)*parseFloat(xmr2oth.JPY);
                                document.getElementById("ipfiat").value=r.toString();
                            }else if(numop=="XMR" && numop2=="EUR"){
                                var r=parseFloat(document.getElementById("ipcoin").value)*parseFloat(xmr2oth.EUR);
                                document.getElementById("ipfiat").value=r.toString();
                            }else if(numop=="XMR" && numop2=="INR"){
                                var r=parseFloat(document.getElementById("ipcoin").value)*parseFloat(xmr2oth.INR);
                                document.getElementById("ipfiat").value=r.toString();
                            }else if(numop=="XMR" && numop2=="GBP"){
                                var r=parseFloat(document.getElementById("ipcoin").value)*parseFloat(xmr2oth.GBP);
                                document.getElementById("ipfiat").value=r.toString();
                            }    
                                
                            else if(numop=="BNB" && numop2=="USD"){
                                var r=parseFloat(document.getElementById("ipcoin").value)*parseFloat(bnb2oth.USD);
                                document.getElementById("ipfiat").value=r.toString();
                            }else if(numop=="BNB" && numop2=="JPY"){
                                var r=parseFloat(document.getElementById("ipcoin").value)*parseFloat(bnb2oth.JPY);
                                document.getElementById("ipfiat").value=r.toString();
                            }else if(numop=="BNB" && numop2=="EUR"){
                                var r=parseFloat(document.getElementById("ipcoin").value)*parseFloat(bnb2oth.EUR);
                                document.getElementById("ipfiat").value=r.toString();
                            }else if(numop=="BNB" && numop2=="INR"){
                                var r=parseFloat(document.getElementById("ipcoin").value)*parseFloat(bnb2oth.INR);
                                document.getElementById("ipfiat").value=r.toString();
                            }else if(numop=="BNB" && numop2=="GBP"){
                                var r=parseFloat(document.getElementById("ipcoin").value)*parseFloat(bnb2oth.GBP);
                                document.getElementById("ipfiat").value=r.toString();
                            }  
                            
                            else if(numop=="XTZ" && numop2=="USD"){
                                var r=parseFloat(document.getElementById("ipcoin").value)*parseFloat(xtz2oth.USD);
                                document.getElementById("ipfiat").value=r.toString();
                            }else if(numop=="XTZ" && numop2=="JPY"){
                                var r=parseFloat(document.getElementById("ipcoin").value)*parseFloat(xtz2oth.JPY);
                                document.getElementById("ipfiat").value=r.toString();
                            }else if(numop=="XTZ" && numop2=="EUR"){
                                var r=parseFloat(document.getElementById("ipcoin").value)*parseFloat(xtz2oth.EUR);
                                document.getElementById("ipfiat").value=r.toString();
                            }else if(numop=="XTZ" && numop2=="INR"){
                                var r=parseFloat(document.getElementById("ipcoin").value)*parseFloat(xtz2oth.INR);
                                document.getElementById("ipfiat").value=r.toString();
                            }else if(numop=="XTZ" && numop2=="GBP"){
                                var r=parseFloat(document.getElementById("ipcoin").value)*parseFloat(xtz2oth.GBP);
                                document.getElementById("ipfiat").value=r.toString();
                            } 
                            
                            else if(numop=="EOS" && numop2=="USD"){
                                var r=parseFloat(document.getElementById("ipcoin").value)*parseFloat(eos2oth.USD);
                                document.getElementById("ipfiat").value=r.toString();
                            }else if(numop=="EOS" && numop2=="JPY"){
                                var r=parseFloat(document.getElementById("ipcoin").value)*parseFloat(eos2oth.JPY);
                                document.getElementById("ipfiat").value=r.toString();
                            }else if(numop=="EOS" && numop2=="EUR"){
                                var r=parseFloat(document.getElementById("ipcoin").value)*parseFloat(eos2oth.EUR);
                                document.getElementById("ipfiat").value=r.toString();
                            }else if(numop=="EOS" && numop2=="INR"){
                                var r=parseFloat(document.getElementById("ipcoin").value)*parseFloat(eos2oth.INR);
                                document.getElementById("ipfiat").value=r.toString();
                            }else if(numop=="EOS" && numop2=="GBP"){
                                var r=parseFloat(document.getElementById("ipcoin").value)*parseFloat(eos2oth.GBP);
                                document.getElementById("ipfiat").value=r.toString();
                            }     
                        }
                        </script>
                        <center>
                        <button type="button" class="btn btn-warning btn-lg btn-block" onclick="convertcoin()">Convert</button>
                        

                        </center>

					</div>
				</div>
			</div>
		</section>
        <script>
         
     
        
     //   document.getElementById("btcval").innerHTML = gjson.rates.BTC;
        /*alert(gjson.rates.BTC);
                        btcoin=btcoin.rates.BTC;
                        btcoin=btcoin.toString();
                         btcoin=btcoin.substring(0, 8);
                        document.getElementById("btcval").innerHTML = btcoin;*
            
        </script>
        
		<!-- End Converter Area -->
		<!-- Start Live Chart
		<div class="dg__live__chart bg__color--4 pb--140 pt--130">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="live__cart__wrapper">
							<div class="live__cart__header">
								<h2>Real Time Progress</h2>
							</div>
							<div class="chart__img mt--60">
								<img src="images/about/cart3.png" alt="chart images">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		 End Live Chart -->
		<!-- Start Working Process -->
	
		<!-- End Working Process -->
		<!-- Start Counterup Area -->
		
        
		<!-- End Counterup Area -->
		
		<!-- Start Download Software Area -->
		
		<!-- End Download Software Area -->
		<!-- Start Blog Area -->
	
		<!-- End Blog Area -->
		<!-- End Blog Area -->
		<div class="dgtaka__bottom">
			<!-- Start Banner Area -->
			<section class="dg__brand__area bg-image--6 pt--90">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="section__title--3 text-center">
								<h2 class="with__line">Top Cryptocurrencies</h2>
								
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
											<img src="images/brand/btcoin.png" alt="brand images">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="images/brand/ethcoin.png" alt="brand images">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="images/brand/btcash.png" alt="brand images">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="images/brand/udstcoin.png" alt="brand images">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="images/brand/xrpcoin.png" alt="brand images">
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
                                       
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Widget -->
                            
                            <!-- Start Single Widget -->
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12 xs__mt--40">
                                <div class="footer__widget information">
                                    <h4>Resources</h4>
                                    <div class="footer__inner">
                                        <ul class="ft__menu">
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