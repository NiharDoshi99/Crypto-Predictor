
<?php
// Initialize the session

error_reporting(0);
session_start();
?>

<?php if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) : ?>

					 
         
<script>
//window.location = "login.php";
</script>
                
                    
                    <?php endif; ?>

<?php
// Check if the user is logged in, if not then redirect him to login page
/*if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}*/

//fetch predictions json info
//$herokulink = file_get_contents('http://crypto-predictions.herokuapp.com');
//$fp = fopen('results.json', 'w');
//$asx=json_decode($herokulink, true); 
//fwrite($fp, json_encode($asx));
//fclose($fp);
//echo $herokulink;
$json_data_file = file_get_contents('resultsbnbxtz.json');
$herojson = json_decode($json_data_file, true); 
//echo $herojson["BTC"]["actual"][1]["close"];
//echo count($herojson["BTC"]["actual"]);
$date_predic10=[];
$val_predic10=[];
$date_acval=[];
$val_predic100=[];
$val_ac100=[];
for($x=0;$x<count($herojson["BNB"]["next_days"]);$x++){
    
    array_push($date_predic10,$herojson["BNB"]["next_days"][$x]["index"]);
    array_push($val_predic10,$herojson["BNB"]["next_days"][$x]["values"]);
}

$datelast="";

for($x=0;$x<count($herojson["BNB"]["actual"]);$x++){
    
    array_push($date_acval,$herojson["BNB"]["actual"][$x]["time"]);
    array_push($val_predic100,$herojson["BNB"]["actual"][$x]["close"]);
    array_push($val_ac100,$herojson["BNB"]["predicted"][$x]["values"]);
    if($x==count($herojson["BNB"]["actual"])-1){
        $datelast= $date_acval[$x];

    }
}
//echo $date_predic10[5];
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <title>BINANCE COIN PRICE PREDICTIONS
</title>
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/plugins.css">
    <link rel="stylesheet" href="style.css">
    <!-- Cusom css -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Modernizer js -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/data.js"></script>

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
					<?php if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true) : ?>

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
                                <h2 class="bradcaump-title">Binance Coin Price Predictions</h2>
                                <nav class="bradcaump-inner">
                                    <a class="breadcrumb-item" href="index.php">Home</a>
                                    <span class="brd-separetor">/</span>
                                    <span class="breadcrumb-item active">BNB</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="particles-js" class="particles-js"></div>
        </div>
        <!-- End Bradcaump area -->
        <!-- Start Secure Transaction Area -->
       <!-- <section class="about__dgtaka about--2 pt--140 pb--130">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                        <div class="dg__secure__inner">
                            <h3 class="section__title--4">World Best Cryptocurrency</h3>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                                alteration in some form, by injected humour, or randomised words which don't look even slightly
                                believable. </p>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                                alteration in some form, by injected humour, or randomised words which don't look even slightly
                                believable.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12 col-sm-12 col-12 sm__mt--40 md__mt--40">
                     
                            onright
                    </div>
                </div>
            </div>
        </section>-->
        <!-- End Secure Transaction Area -->
        <!-- Start Service Area  -->
               <br><br>

        <center> <h3 class="section__title--4">Prediction for next 10 days</h3>
             <div class="shadow p-3 mb-5 bg-white rounded" style="width:900px">
        <div id="container2" style="width:850px; height:400px;"></div>
            </div>
        <!--    <div class="shadow p-3 mb-5 bg-white rounded" style="width:900px">
            
            <div class="container">
    <canvas id="myChart2"></canvas>
  </div>
            
            </div>-->
        <!--Highchart body -->
        
        </center>
        <center> 
                        <h3 class="section__title--4">Actual vs Previous Predictions</h3>

            <div class="shadow p-3 mb-5 bg-white rounded" style="width:900px">
        <div id="containerr" style="width:850px; height:400px;"></div>
            </div>
            
        <!--   <div class="shadow p-3 mb-5 bg-white rounded" style="width:900px">
            
            <div class="container">
    <canvas id="myChart"></canvas>
  </div>
            
            </div>--></center>
     
         <br><br>
        
     
       

       
        
        <!-- Add section Here -->
        
        <!-- End Service Area  -->
        <!-- Start Footer Area -->
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
    
    <?php
    $actualdate=[];
    $actualvalue=[];
$file = fopen('100days_actual.csv', 'r');
while (($line = fgetcsv($file)) !== FALSE) {
  //$line is an array of the csv elements
    array_push($actualdate,$line[0]);
    array_push($actualvalue,$line[1]);
 // print_r($line);
}
fclose($file);
    
    $predicdate=[];
    $predicvalue=[];
$file = fopen('100days_predicted.csv', 'r');
while (($line = fgetcsv($file)) !== FALSE) {
  //$line is an array of the csv elements
    array_push($predicdate,$line[0]);
    array_push($predicvalue,$line[1]);
 // print_r($line);
}
fclose($file);
    
    $predicdaten=[];
    $predicvaluen=[];
$file = fopen('next_10days.csv', 'r');
while (($line = fgetcsv($file)) !== FALSE) {
  //$line is an array of the csv elements
    array_push($predicdaten,$line[0]);
    array_push($predicvaluen,$line[1]);
 // print_r($line);
}
fclose($file);
    
    
    ?>
    <script>
        
      function convertDate(inputFormat) {
  function pad(s) { return (s < 10) ? '0' + s : s; }
  var d = new Date(inputFormat)
  return [pad(d.getDate()), pad(d.getMonth()+1), d.getFullYear()].join('/')
}
//   var ctx = document.getElementById('myChart');
       // $date_acval=[];
//$val_predic100=[];
//$val_ac100=[];
      var acdate=[];
            acdate=<?php echo json_encode($date_acval);?>;

      for (i = 0; i < acdate.length; i++) {
          acdate[i]=convertDate(new Date(acdate[i]));
      }
      var acval=[];
        
      acval=<?php echo json_encode($val_ac100);?>;
      
      var pddate=[];
            pddate=<?php echo json_encode($date_acval);?>;

      for (i = 0; i < pddate.length; i++) {
          pddate[i]=convertDate(new Date(pddate[i]));
      }
      var pdval=[];
      var flopdval=[]; 
      var floacval=[];      
      pdval=<?php echo json_encode($val_predic100);?>;
     
      for (i = 0; i < pdval.length; i++) {
          flopdval[i]=parseFloat(pdval[i]);
      }
         for (i = 0; i < acval.length; i++) {
          floacval[i]=parseFloat(acval[i]);
      }
                
/*var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        
        labels: acdate,
        datasets: [
                  {
            label: 'Prediction',
            data: pdval,
            backgroundColor: 'rgba(244, 144, 128, 0.6)',
          borderWidth:2,
          borderColor:'#777',
          hoverBorderWidth:3,
          hoverBorderColor:'#000',
        }, 
        {
            label: 'Actual',
            data: acval,
            backgroundColor: 'rgba(128, 182, 244, 0.6)',
          borderWidth:2,
          borderColor:'#777',
          hoverBorderWidth:3,
          hoverBorderColor:'#000',
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: false
                }
            }]
        }
    }
});*/
  </script>
    
    
    <!--second chart-->
    <script>
        
      function convertDate(inputFormat) {
  function pad(s) { return (s < 10) ? '0' + s : s; }
  var d = new Date(inputFormat)
  return [pad(d.getDate()), pad(d.getMonth()+1), d.getFullYear()].join('/')
}
   //var ctx = document.getElementById('myChart2').getContext("2d");
  //  $date_predic10=[];
//$val_predic10=[];
      var pddaten=[];
            pddaten=<?php echo json_encode($date_predic10);?>;

      for (i = 0; i < pddaten.length; i++) {
          pddaten[i]=convertDate(new Date(pddaten[i]));
      }
      var pdvaln=[];
      var flopdvaln=[]; 
      pdvaln=<?php echo json_encode($val_predic10);?>;
      
      for (i = 0; i < pdvaln.length; i++) {
          flopdvaln[i]=parseFloat(pdvaln[i]);
      }
   /*   
      var gradientStroke = ctx.createLinearGradient(500, 0, 100, 0);
gradientStroke.addColorStop(0, 'rgba(128, 182, 244, 0.6)');
gradientStroke.addColorStop(1, 'rgba(244, 144, 128, 0.6)');*/
        
/*var myChart2 = new Chart(ctx, {
    type: 'line',
    data: {
        
        labels: pddaten,
        datasets: [
                  {
            label: 'Prediction',
            data: pdvaln,
             borderColor: gradientStroke,
           // pointRadius: 1,
            fill: true,
            backgroundColor: gradientStroke,
                      borderWidth:2,
          borderColor:'#777',
          hoverBorderWidth:3,
          hoverBorderColor:'#000',
            fillOpacity: 1, 
           
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: false
                }
            }]
        }
    }
});*/
  </script>
    
     <script>
         console.log(pddate);
            //Highcharts 
        document.addEventListener('DOMContentLoaded', function () {
        var myChart = Highcharts.chart('containerr', {
            chart: {
                type: 'line',
                zoomType:'x'
            },
            title: {
                text: 'BNB'
            },
            xAxis: {
                categories: pddate
            },
            yAxis: {
                startOnTick: false,    
                min: 0,
                startOnTick: false,
                title: {
                    text: 'USD'
                },
            },
            series: [
                {
                name: 'Actual',
                data: floacval,
                fillColor: {
                linearGradient: [500, 0, 200, 0],
                stops: [
                    [0, 'rgb(249,217,118,0.4)'],
                    [1, 'rgb(243,159,134,0.4)']
                ]
                }
              
            },{
                name: 'Predictions',
                data: flopdval,
                fillColor: {
                linearGradient: [500, 0, 200, 300],
                stops: [
                    [0, 'rgba(244, 144, 128, 0.7)'],
                    [1, 'rgba(128, 182, 244, 0.7)' ]
                ]
                }
            }]
        });
    });
        </script>

    
    <script>
            //Highcharts 
        document.addEventListener('DOMContentLoaded', function () {
        var myChart = Highcharts.chart('container2', {
            chart: {
                type: 'area',
                zoomType:'x'
            },
            title: {
                text: 'BNB'
            },
            xAxis: {
                categories: pddaten
            },
            yAxis: {
                startOnTick: false,    
                min: 0,
                startOnTick: false,
                title: {
                    text: 'USD'
                },
            },
            series: [
                {
                name: 'Predictions',
                data: flopdvaln,
                fillColor: {
                linearGradient: [500, 0, 200, 0],
                stops: [
                    [0, 'rgb(249,217,118,0.4)'],
                    [1, 'rgb(243,159,134,0.4)']
                ]
                }
              
            }]
        });
    });
        </script>
</html>

<?php
function validateDate($date, $format = 'd-m-y')
{
    $d = DateTime::createFromFormat($format, $date);
    // The Y ( 4 digits year ) returns TRUE for any integer with any number of digits so changing the comparison from == to === fixes the issue.
    return $d && $d->format($format) === $date;
}
$datenotnull=0;
$refreshit=0;
$today= new DateTime(strtotime("d/m/y"));
$time = strtotime($datelast);
$lastdateinarray = new DateTime($datelast);
$interval = $lastdateinarray->diff($today);
$num=(int)$interval->format('%R%a');

if($datelast==""){
    $datenotnull=1;
    
}

if($num>=1 || ($num==0 && $datenotnull==1)){
    $herokulink = file_get_contents('https://cryptopredictbnbxtz.herokuapp.com/');
$fp = fopen('resultsbnbxtz.json', 'w');
$asx=json_decode($herokulink, true); 
fwrite($fp, json_encode($asx));
fclose($fp);
$refreshit=1;
//echo $herokulink;
}


?>


<?php if($refreshit==1) : ?>

					 

    <script>
    location.reload();
    </script>
                
<?php endif; ?>