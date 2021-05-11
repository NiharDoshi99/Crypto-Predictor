<?php
// Initialize the session
session_start();
require_once "config.php";

//echo $_POST["Ethereum"];
?>
<?php if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) : ?>

					 
         
<script>
window.location = "login.php";
</script>
                
                    
                    <?php endif; ?>

<?php
require_once "config.php";

$btcpre="SELECT btc from users WHERE username='".$_SESSION["username"]."';";
$btcpree=    $link -> query($btcpre);

$ethpre="SELECT eth from users WHERE username='".$_SESSION["username"]."';";
$ethpree=    $link -> query($ethpre);

$xrppre="SELECT xrp from users WHERE username='".$_SESSION["username"]."';";
$xrppree=    $link -> query($xrppre);

$usdtpre="SELECT usdt from users WHERE username='".$_SESSION["username"]."';";
$usdtpree=    $link -> query($usdtpre);

$bchpre="SELECT bch from users WHERE username='".$_SESSION["username"]."';";
$bchpree=    $link -> query($bchpre);

$ltcpre="SELECT ltc from users WHERE username='".$_SESSION["username"]."';";
$ltcpree=    $link -> query($ltcpre);

$bsvpre="SELECT bsv from users WHERE username='".$_SESSION["username"]."';";
$bsvpree=    $link -> query($bsvpre);

$bnbpre="SELECT bnb from users WHERE username='".$_SESSION["username"]."';";
$bnbpree=    $link -> query($bnbpre);

$eospre="SELECT eos from users WHERE username='".$_SESSION["username"]."';";
$eospree=    $link -> query($eospre);

$xtzpre="SELECT xtz from users WHERE username='".$_SESSION["username"]."';";
$xtzpree=    $link -> query($xtzpre);

while ($row = $btcpree->fetch_assoc()) {
    $btcpref= $row['btc'];
}
while ($row = $ethpree->fetch_assoc()) {
    $ethpref= $row['eth'];
}
while ($row = $xrppree->fetch_assoc()) {
    $xrppref= $row['xrp'];
}
while ($row = $usdtpree->fetch_assoc()) {
    $usdtpref= $row['usdt'];
}
while ($row = $bchpree->fetch_assoc()) {
    $bchpref= $row['bch'];
}
while ($row = $ltcpree->fetch_assoc()) {
    $ltcpref= $row['ltc'];
}
while ($row = $bsvpree->fetch_assoc()) {
    $bsvpref= $row['bsv'];
}
while ($row = $bnbpree->fetch_assoc()) {
    $bnbpref= $row['bnb'];
}
while ($row = $eospree->fetch_assoc()) {
    $eospref= $row['eos'];
}
while ($row = $xtzpree->fetch_assoc()) {
    $xtzpref= $row['xtz'];
}
if (isset($_GET['remove'])) {
    
     $sql = "UPDATE users SET ".$_GET['remove']."=0 WHERE username='".$_SESSION["username"]."';";
    $link -> query($sql);
    ?>
<script>
window.location = "wishlist.php";
</script>
<?php
    
  }
if($_SERVER["REQUEST_METHOD"] == "POST"){
/*if(!empty(trim($_POST["Bitcoin"]))){
   
       $btcchk = trim($_POST["Bitcoin"]);
      $sql = "UPDATE users SET BTC=1 WHERE username='hshah';";
    $link -> query($sql);
    }
if(!empty(trim($_POST["Ethereum"]))){
   
       $ethchk = trim($_POST["Ethereum"]);

    }
    */
    
    $name = $_POST['Curr'];

foreach ($name as $color){ 
   // echo $color."<br />";
     $sql = "UPDATE users SET ".$color."=1 WHERE username='".$_SESSION["username"]."';";
    $link -> query($sql);
    
}
    ?>
<script>
window.location = "wishlist.php";
</script>
<?php
}
//fetch predictions json info
//$herokulink = file_get_contents('http://crypto-predictions.herokuapp.com');
//$fp = fopen('results.json', 'w');
//$asx=json_decode($herokulink, true); 
//fwrite($fp, json_encode($asx));
//fclose($fp);
//echo $herokulink;
$json_data_file = file_get_contents('results.json');
$herojson = json_decode($json_data_file, true); 
$json_data_file = file_get_contents('resultsxrpusdt.json');
$herojson2 = json_decode($json_data_file, true); 
$json_data_file3 = file_get_contents('resultsbchbsv.json');
$herojson3 = json_decode($json_data_file3, true); 
$json_data_file4 = file_get_contents('resultsltceos.json');
$herojson4 = json_decode($json_data_file4, true); 
$json_data_file5 = file_get_contents('resultsbnbxtz.json');
$herojson5 = json_decode($json_data_file5, true); 
//echo $herojson["BTC"]["actual"][1]["close"];
//echo count($herojson["BTC"]["actual"]);
$btcdate_predic10=[];
$btcval_predic10=[];
$ethdate_predic10=[];
$ethval_predic10=[];
$xrpdate_predic10=[];
$xrpval_predic10=[];
$usdtdate_predic10=[];
$usdtval_predic10=[];
$bchdate_predic10=[];
$bchval_predic10=[];
$ltcdate_predic10=[];
$ltcval_predic10=[];
$bsvdate_predic10=[];
$bsvval_predic10=[];
$bnbdate_predic10=[];
$bnbval_predic10=[];
$eosdate_predic10=[];
$eosval_predic10=[];
$xtzdate_predic10=[];
$xtzval_predic10=[];
$tomorobtc=0;
$tomoroeth=0;
$tomoroxrp=0;
$tomorousdt=0;
$tomorobch=0;
$tomoroltc=0;
$tomorobsv=0;
$tomorobnb=0;
$tomoroeos=0;
$tomoroxtz=0;
for($x=0;$x<count($herojson["BTC"]["next_days"]);$x++){
    
    array_push($btcdate_predic10,$herojson["BTC"]["next_days"][$x]["index"]);
    array_push($btcval_predic10,$herojson["BTC"]["next_days"][$x]["values"]);
    array_push($ethdate_predic10,$herojson["ETH"]["next_days"][$x]["index"]);
    array_push($ethval_predic10,$herojson["ETH"]["next_days"][$x]["values"]);
    if($x==0){
        $tomorobtc= $btcval_predic10[$x];
        if (strlen($tomorobtc) > 12){
            $tomorobtc =substr($tomorobtc, 0, 11);
        }
        $tomoroeth= $ethval_predic10[$x];
            if (strlen($tomoroeth) > 12){
            $tomoroeth =substr($tomoroeth, 0, 11);
        }

    }
}

for($x=0;$x<count($herojson2["XRP"]["next_days"]);$x++){
    
    array_push($xrpdate_predic10,$herojson2["XRP"]["next_days"][$x]["index"]);
    array_push($xrpval_predic10,$herojson2["XRP"]["next_days"][$x]["values"]);
   array_push($usdtdate_predic10,$herojson2["XMR"]["next_days"][$x]["index"]);
    array_push($usdtval_predic10,$herojson2["XMR"]["next_days"][$x]["values"]);
    if($x==0){
        $tomoroxrp= $xrpval_predic10[$x];
        if (strlen($tomoroxrp) >= 12){
            
            $tomoroxrp =substr($tomoroxrp, 0, 11);
        }
        
        $tomorousdt= $usdtval_predic10[$x];
        if (strlen($tomorousdt) >= 12){
            
            $tomorousdt =substr($tomorousdt, 0, 11);
        }
     
     

    }
}

for($x=0;$x<count($herojson3["BCH"]["next_days"]);$x++){
    
    array_push($bchdate_predic10,$herojson3["BCH"]["next_days"][$x]["index"]);
    array_push($bchval_predic10,$herojson3["BCH"]["next_days"][$x]["values"]);
    array_push($bsvdate_predic10,$herojson3["BSV"]["next_days"][$x]["index"]);
    array_push($bsvval_predic10,$herojson3["BSV"]["next_days"][$x]["values"]);
    if($x==0){
        $tomorobch= $bchval_predic10[$x];
        if (strlen($tomorobch) >= 12){
            
            $tomorobch =substr($tomorobch, 0, 11);
        }
        
         $tomorobsv= $bsvval_predic10[$x];
        if (strlen($tomorobsv) >= 12){
            
            $tomorobsv =substr($tomorobsv, 0, 11);
        }
        
     
     

    }
}

for($x=0;$x<count($herojson4["LTC"]["next_days"]);$x++){
    
    array_push($ltcdate_predic10,$herojson4["LTC"]["next_days"][$x]["index"]);
    array_push($ltcval_predic10,$herojson4["LTC"]["next_days"][$x]["values"]);
    array_push($eosdate_predic10,$herojson4["EOS"]["next_days"][$x]["index"]);
    array_push($eosval_predic10,$herojson4["EOS"]["next_days"][$x]["values"]);
    if($x==0){
        $tomoroltc= $ltcval_predic10[$x];
        if (strlen($tomoroltc) >= 12){
            
            $tomoroltc =substr($tomoroltc, 0, 11);
        }
        $tomoroeos= $eosval_predic10[$x];
        if (strlen($tomoroeos) >= 12){
            
            $tomoroeos =substr($tomoroeos, 0, 11);
        }
        
     
     

    }
}

for($x=0;$x<count($herojson5["BNB"]["next_days"]);$x++){
    
    array_push($bnbdate_predic10,$herojson5["BNB"]["next_days"][$x]["index"]);
    array_push($bnbval_predic10,$herojson5["BNB"]["next_days"][$x]["values"]);
    array_push($xtzdate_predic10,$herojson5["XTZ"]["next_days"][$x]["index"]);
    array_push($xtzval_predic10,$herojson5["XTZ"]["next_days"][$x]["values"]);
    if($x==0){
        $tomorobnb= $bnbval_predic10[$x];
        if (strlen($tomorobnb) >= 12){
            
            $tomorobnb =substr($tomorobnb, 0, 11);
        }
        $tomoroxtz= $xtzval_predic10[$x];
        if (strlen($tomoroxtz) >= 12){
            
            $tomoroxtz =substr($tomoroxtz, 0, 11);
        }
        
     
     

    }
}
/*
$datelast="";
for($x=0;$x<count($herojson["BTC"]["actual"]);$x++){
    
    array_push($date_acval,$herojson["BTC"]["actual"][$x]["time"]);
    array_push($val_predic100,$herojson["BTC"]["actual"][$x]["close"]);
    array_push($val_ac100,$herojson["BTC"]["predicted"][$x]["values"]);
    if($x==count($herojson["BTC"]["actual"])-1){
        $datelast= $date_acval[$x];

    }

}*/
//echo $date_predic10[5];
//echo isset($date_acval[$date_acval[count($herojson["BTC"]["actual"])-1]]);

?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <style>
      
    /* Hiding the checkbox, but allowing it to be focused */
.badgebox
{
    opacity: 0;
}

.badgebox + .badge
{
    /* Move the check mark away when unchecked */
    text-indent: -999999px;
    /* Makes the badge's width stay the same checked and unchecked */
	width: 27px;
}

.badgebox:focus + .badge
{
    /* Set something to make the badge looks focused */
    /* This really depends on the application, in my case it was: */
    
    /* Adding a light border */
    box-shadow: inset 0px 0px 5px;
    /* Taking the difference out of the padding */
}

.badgebox:checked + .badge
{
    /* Move the check mark back when checked */
	text-indent: 0;
}</style>
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
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!-- Modernizer js -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/data.js"></script>
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
    
         var btcoin,ethcoin,xrpcoin,usdtcoin,bchcoin,ltccoin;
        btcoin = getJSON('https://min-api.cryptocompare.com/data/price?fsym=BTC&tsyms=USD') ;
        ethcoin=getJSON('https://min-api.cryptocompare.com/data/price?fsym=ETH&tsyms=USD') ;
        xrpcoin=getJSON('https://min-api.cryptocompare.com/data/price?fsym=XRP&tsyms=USD') ;
        usdtcoin=getJSON('https://min-api.cryptocompare.com/data/price?fsym=XMR&tsyms=USD') ;
        bchcoin=getJSON('https://min-api.cryptocompare.com/data/price?fsym=BCH&tsyms=USD') ;
        ltccoin=getJSON('https://min-api.cryptocompare.com/data/price?fsym=LTC&tsyms=USD') ;
        bsvcoin=getJSON('https://min-api.cryptocompare.com/data/price?fsym=BSV&tsyms=USD') ;
        bnbcoin=getJSON('https://min-api.cryptocompare.com/data/price?fsym=BNB&tsyms=USD') ;
        eoscoin=getJSON('https://min-api.cryptocompare.com/data/price?fsym=EOS&tsyms=USD') ;
        xtzcoin=getJSON('https://min-api.cryptocompare.com/data/price?fsym=XTZ&tsyms=USD') ;    
        btcoin=JSON.parse(btcoin);
        ethcoin=JSON.parse(ethcoin);
        xrpcoin=JSON.parse(xrpcoin);
        usdtcoin=JSON.parse(usdtcoin);
        bchcoin=JSON.parse(bchcoin);
        ltccoin=JSON.parse(ltccoin);
        bsvcoin=JSON.parse(bsvcoin);
        bnbcoin=JSON.parse(bnbcoin);
        eoscoin=JSON.parse(eoscoin);
        xtzcoin=JSON.parse(xtzcoin);
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
									</ul>
								</li>
								<li>
									<a href="wishlist.php">wishlist</a>
								</li>
				<!--				<li class="drop">
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
                                <h2 class="bradcaump-title">My Wishlist</h2>
                                <nav class="bradcaump-inner">
                                    <a class="breadcrumb-item" href="index.html">Home</a>
                                    <span class="brd-separetor">/</span>
                                    <span class="breadcrumb-item active">wishlist</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="particles-js" class="particles-js"></div>
        </div>
        <!-- End Bradcaump area -->
        <!-- Start Contact Area -->
        <br>
        <center>
                     <div class="shadow p-3 mb-5 bg-white rounded" style="width:85%">

   <table class="table">
  <thead>
    <tr>
      <th scope="col">Currency</th>
      <th scope="col">Price</th>
      <th scope="col">Prediction for tomorrow</th>
      <th scope="col">Detailed Predictions</th>
       <th scope="col">Remove</th> 
    </tr>
  </thead>
  <tbody>
      <?php if($btcpref=='1') : ?>
    <tr>
      <th scope="row">Bitcoin</th>
      <td ><span id="btcval">0</span></td>
      <td><span><?php echo json_encode($tomorobtc);?></span></td>
      <td><button type="button" class="btn btn-primary btn-sm" onclick="location.href='predic.php'">Detailed BTC Predictions</button></td>
        <td><button type="button" class="btn btn-danger btn-sm " onclick="location.href='wishlist.php?remove=btc'">Remove</button></td>
    </tr>
                          <?php endif; ?>
      <?php if($ethpref==1) : ?>

    <tr>
      <th scope="row">Ethereum</th>
      <td><span id="ethval">0</span></td>
      <td><span><?php echo json_encode($tomoroeth);?></span></td>
      <td><button type="button" class="btn btn-primary btn-sm" onclick="location.href='prediceth.php'">Detailed ETH Predictions</button></td>
                <td><button type="button" class="btn btn-danger btn-sm" onclick="location.href='wishlist.php?remove=eth'"  >Remove</button></td>

    </tr>
                             <?php endif; ?>
      
     <?php if($xrppref==1) : ?>

    <tr>
      <th scope="row">Ripple</th>
      <td><span id="xrpval">0</span></td>
      <td><span><?php echo json_encode($tomoroxrp);?></span></td>
      <td><button type="button" class="btn btn-primary btn-sm" onclick="location.href='predicxrp.php'">Detailed XRP Predictions</button></td>
                <td><button type="button" class="btn btn-danger btn-sm" onclick="location.href='wishlist.php?remove=xrp'"  >Remove</button></td>

    </tr>
                             <?php endif; ?>  
      
      <?php if($usdtpref==1) : ?>

    <tr>
      <th scope="row">Monero</th>
      <td><span id="usdtval">0</span></td>
      <td><span><?php echo json_encode($tomorousdt);?></span></td>
      <td><button type="button" class="btn btn-primary btn-sm" onclick="location.href='predicxmr.php'">Detailed XMR Predictions</button></td>
                <td><button type="button" class="btn btn-danger btn-sm" onclick="location.href='wishlist.php?remove=usdt'"  >Remove</button></td>

    </tr>
                             <?php endif; ?>  
      
      <?php if($bchpref==1) : ?>

    <tr>
      <th scope="row">Bitcoin Cash</th>
      <td><span id="bchval">0</span></td>
      <td><span><?php echo json_encode($tomorobch);?></span></td>
      <td><button type="button" class="btn btn-primary btn-sm" onclick="location.href='predicbch.php'">Detailed BCH Predictions</button></td>
                <td><button type="button" class="btn btn-danger btn-sm" onclick="location.href='wishlist.php?remove=bch'"  >Remove</button></td>

    </tr>
                             <?php endif; ?>  
      
      <?php if($ltcpref==1) : ?>

    <tr>
      <th scope="row">Litecoin</th>
      <td><span id="ltcval">0</span></td>
      <td><span><?php echo json_encode($tomoroltc);?></span></td>
      <td><button type="button" class="btn btn-primary btn-sm" onclick="location.href='predicltc.php'">Detailed LTC Predictions</button></td>
                <td><button type="button" class="btn btn-danger btn-sm" onclick="location.href='wishlist.php?remove=ltc'"  >Remove</button></td>

    </tr>
                             <?php endif; ?>  

       
      <?php if($bsvpref==1) : ?>

    <tr>
      <th scope="row">Bitcoin SV</th>
      <td><span id="bsvval">0</span></td>
      <td><span><?php echo json_encode($tomorobsv);?></span></td>
      <td><button type="button" class="btn btn-primary btn-sm" onclick="location.href='predicbsv.php'">Detailed BSV Predictions</button></td>
                <td><button type="button" class="btn btn-danger btn-sm" onclick="location.href='wishlist.php?remove=bsv'"  >Remove</button></td>

    </tr>
                             <?php endif; ?>  

       
      <?php if($bnbpref==1) : ?>

    <tr>
      <th scope="row">Binance Coin</th>
      <td><span id="bnbval">0</span></td>
      <td><span><?php echo json_encode($tomorobnb);?></span></td>
      <td><button type="button" class="btn btn-primary btn-sm" onclick="location.href='predicbnb.php'">Detailed BNB Predictions</button></td>
                <td><button type="button" class="btn btn-danger btn-sm" onclick="location.href='wishlist.php?remove=bnb'"  >Remove</button></td>

    </tr>
                             <?php endif; ?>  

       
      <?php if($eospref==1) : ?>

    <tr>
      <th scope="row">EOS Coin</th>
      <td><span id="eosval">0</span></td>
      <td><span><?php echo json_encode($tomoroeos);?></span></td>
      <td><button type="button" class="btn btn-primary btn-sm" onclick="location.href='prediceos.php'">Detailed EOS Predictions</button></td>
                <td><button type="button" class="btn btn-danger btn-sm" onclick="location.href='wishlist.php?remove=eos'">Remove</button></td>

    </tr>
                             <?php endif; ?>  

       
      <?php if($xtzpref==1) : ?>

    <tr>
      <th scope="row">Tezos</th>
      <td><span id="xtzval">0</span></td>
      <td><span><?php echo json_encode($tomoroxtz);?></span></td>
      <td><button type="button" class="btn btn-primary btn-sm" onclick="location.href='predicxtz.php'">Detailed XTZ Predictions</button></td>
                <td><button type="button" class="btn btn-danger btn-sm" onclick="location.href='wishlist.php?remove=xtz'"  >Remove</button></td>

    </tr>
                             <?php endif; ?>  

  </tbody>
</table>
        <script>var options = [];

$( '.dropdown-menu a' ).on( 'click', function( event ) {

   var $target = $( event.currentTarget ),
       val = $target.attr( 'data-value' ),
       $inp = $target.find( 'input' ),
       idx;

   if ( ( idx = options.indexOf( val ) ) > -1 ) {
      options.splice( idx, 1 );
      setTimeout( function() { $inp.prop( 'checked', false ) }, 0);
   } else {
      options.push( val );
      setTimeout( function() { $inp.prop( 'checked', true ) }, 0);
   }

   $( event.target ).blur();
      
   console.log( options );
   return false;
});</script>
                         
                         
        </div> 
            <div class="container">
  <h2>Cryptocurrency List</h2>
  <p>The form below contains list of all available cryptocurrencies. Select your favourite and submit:</p>
              
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
       
      <!--  <label for="default" class="btn btn-default">Bitcoin <input type="checkbox" name="Curr[]" id="deffault" class="badgebox" value="Bitcoin"><span class="badge">&check;</span></label>
          &nbsp;-->
       Bitcoin <input type="checkbox" name="Curr[]" id="defafult" value="btc">

        Ethereum <input type="checkbox" name="Curr[]" id="defafult" value="eth">

        Ripple <input type="checkbox" name="Curr[]" id="defafult" value="xrp">

        Bitcoin Cash <input type="checkbox" name="Curr[]" id="defafult" value="bch">
        
        Monero <input type="checkbox" name="Curr[]" id="defafult" value="usdt">
        
        Litecoin <input type="checkbox" name="Curr[]" id="defafult" value="ltc">
      
        Bitcoin Cash <input type="checkbox" name="Curr[]" id="defafult" value="bsv">
        
        Binance Coin <input type="checkbox" name="Curr[]" id="defafult" value="bnb">
      
        EOS Coin <input type="checkbox" name="Curr[]" id="defafult" value="eos">
      
        Tezos <input type="checkbox" name="Curr[]" id="defafult" value="xtz">
      <div >
<br>
      <input class="btn btn-primary" type="submit">
      </div>

  </form>
                <br>
</div>

            
        </center>
        
        <br/>
<div class="container">
  <div class="row">
       <div class="col-lg-12">
     <div class="button-group">
        <button type="button" class="btn btn-default btn-lg dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicn-cog"></span> <span class="caet"></span></button>
<ul class="dropdown-menu">
  <li><a href="#" class="small" data-value="option1" tabIndex="-1"><input type="checkbox"/>&nbsp;Option 1</a></li>
  <li><a href="#" class="small" data-value="option2" tabIndex="-1"><input type="checkbox"/>&nbsp;Option 2</a></li>
  <li><a href="#" class="small" data-value="option3" tabIndex="-1"><input type="checkbox"/>&nbsp;Option 3</a></li>
  <li><a href="#" class="small" data-value="option4" tabIndex="-1"><input type="checkbox"/>&nbsp;Option 4</a></li>
  <li><a href="#" class="small" data-value="option5" tabIndex="-1"><input type="checkbox"/>&nbsp;Option 5</a></li>
  <li><a href="#" class="small" data-value="option6" tabIndex="-1"><input type="checkbox"/>&nbsp;Option 6</a></li>
</ul>
  </div>
</div>
  </div>
</div>
        <!-- End Contact Area -->
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
    <!-- Google Map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmGmeot5jcjdaJTvfCmQPfzeoG_pABeWo"></script>
    <script>
        // When the window has finished loading create our google map below
        google.maps.event.addDomListener(window, 'load', init);

        function init() {
            // Basic options for a simple Google Map
            // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
            var mapOptions = {
                // How zoomed in you want the map to start at (always required)
                zoom: 12,

                scrollwheel: false,

                // The latitude and longitude to center the map (always required)
                center: new google.maps.LatLng(-34.397, 150.644), // New York

                // How you would like to style the map. 
                // This is where you would paste any style found on Snazzy Maps.
                styles: [

                    {
                        "featureType": "all",
                        "elementType": "all",
                        "stylers": [{
                                "invert_lightness": true
                            },
                            {
                                "saturation": 10
                            },
                            {
                                "lightness": 30
                            },
                            {
                                "gamma": 0.5
                            },
                            {
                                "hue": "#004fb6"
                            }
                        ]
                    }
                ]
            };

            // Get the HTML DOM element that will contain your map 
            // We are using a div with id="map" seen below in the <body>
            var mapElement = document.getElementById('googleMap');

            // Create the Google Map using our element and options defined above
            var map = new google.maps.Map(mapElement, mapOptions);

            // Let's also add a marker while we're at it
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(-34.397, 150.644),
                map: map,
                title: 'Dcare!',
                animation: google.maps.Animation.BOUNCE

            });
        }
    </script>


    <script src="js/active.js"></script>
    
           
      <?php if($btcpref=='1') : ?>
          <script>

                 btcoin=btcoin.USD;
                        btcoin=btcoin.toString();
                         btcoin=btcoin.substring(0, 8);
                        document.getElementById("btcval").innerHTML = btcoin;
                          </script>

         <?php endif; ?>
      <?php if($ethpref=='1') : ?>
          <script>
          ethcoin=ethcoin.USD;
                        ethcoin=ethcoin.toString();
                         ethcoin=ethcoin.substring(0, 8);
                        document.getElementById("ethval").innerHTML = ethcoin;
            </script>
                 <?php endif; ?>
    <?php if($xrppref=='1') : ?>
          <script>
          xrpcoin=xrpcoin.USD;
                        xrpcoin=xrpcoin.toString();
                         xrpcoin=xrpcoin.substring(0, 8);
                        document.getElementById("xrpval").innerHTML = xrpcoin;
        </script>
                 <?php endif; ?>
    
     <?php if($usdtpref=='1') : ?>
          <script>
          usdtcoin=usdtcoin.USD;
                        usdtcoin=usdtcoin.toString();
                         usdtcoin=usdtcoin.substring(0, 8);
                        document.getElementById("usdtval").innerHTML = usdtcoin;
        </script>
                 <?php endif; ?>
    
    <?php if($bchpref=='1') : ?>
          <script>
          bchcoin=bchcoin.USD;
                        bchcoin=bchcoin.toString();
                         bchcoin=bchcoin.substring(0, 8);
                        document.getElementById("bchval").innerHTML = bchcoin;
        </script>
                 <?php endif; ?>
    
    <?php if($ltcpref=='1') : ?>
          <script>
          ltccoin=ltccoin.USD;
                        ltccoin=ltccoin.toString();
                         ltccoin=ltccoin.substring(0, 8);
                        document.getElementById("ltcval").innerHTML = ltccoin;
        </script>
                 <?php endif; ?>
    
    <?php if($bsvpref=='1') : ?>
          <script>
          bsvcoin=bsvcoin.USD;
                        bsvcoin=bsvcoin.toString();
                         bsvcoin=bsvcoin.substring(0, 8);
                        document.getElementById("bsvval").innerHTML = bsvcoin;
        </script>
                 <?php endif; ?>
    
    <?php if($bnbpref=='1') : ?>
          <script>
          bnbcoin=bnbcoin.USD;
                        bnbcoin=bnbcoin.toString();
                         bnbcoin=bnbcoin.substring(0, 8);
                        document.getElementById("bnbval").innerHTML = bnbcoin;
        </script>
                 <?php endif; ?>
    
    <?php if($eospref=='1') : ?>
          <script>
          eoscoin=eoscoin.USD;
                        eoscoin=eoscoin.toString();
                         eoscoin=eoscoin.substring(0, 8);
                        document.getElementById("eosval").innerHTML = eoscoin;
        </script>
                 <?php endif; ?>
    
    <?php if($xtzpref=='1') : ?>
          <script>
          xtzcoin=xtzcoin.USD;
                        xtzcoin=xtzcoin.toString();
                         xtzcoin=xtzcoin.substring(0, 8);
                        document.getElementById("xtzval").innerHTML = xtzcoin;
        </script>
                 <?php endif; ?>
        
    
</body>

</html>