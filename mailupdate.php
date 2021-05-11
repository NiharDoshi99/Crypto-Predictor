<?php
use PHPMailer\PHPMailer\PHPMailer;
require_once 'PHPMailer/Exception.php';
require_once 'PHPMailer/PHPMailer.php';
require_once 'PHPMailer/SMTP.php';
require_once "config.php";
$selectall="SELECT * from users;";
$alldata=    $link -> query($selectall);

while ($row = $alldata->fetch_assoc()) {
    $mybtc=$myeth=$mybch=$mybsv=$myusdt=$mybnb=$myeos=$myxrp=$myxtz=$myltc=0.0;
    $btcprofit=$ethprofit=$bsvprofit=$bchprofit=$usdtprofit=$bnbprofit=$eosprofit=$xrpprofit=$xtzprofit=$ltcprofit=0.0;
    $jsonbtc=file_get_contents('https://min-api.cryptocompare.com/data/price?fsym=BTC&tsyms=USD');
    $jsonbtcd=json_decode($jsonbtc);
    $jsoneth=file_get_contents('https://min-api.cryptocompare.com/data/price?fsym=ETH&tsyms=USD');
    $jsonethd=json_decode($jsoneth);
    $currbtc=floatval($jsonbtcd->USD);
    $curreth=floatval($jsonethd->USD);
    
    $jsonv=file_get_contents('https://min-api.cryptocompare.com/data/price?fsym=XRP&tsyms=USD');
    $jsonvd=json_decode($jsonv);
    $currxrp=floatval($jsonvd->USD);
    
    $jsonv=file_get_contents('https://min-api.cryptocompare.com/data/price?fsym=XMR&tsyms=USD');
    $jsonvd=json_decode($jsonv);
    $currusdt=floatval($jsonvd->USD);
    
    $jsonv=file_get_contents('https://min-api.cryptocompare.com/data/price?fsym=BCH&tsyms=USD');
    $jsonvd=json_decode($jsonv);
    $currbch=floatval($jsonvd->USD);
    
    $jsonv=file_get_contents('https://min-api.cryptocompare.com/data/price?fsym=BSV&tsyms=USD');
    $jsonvd=json_decode($jsonv);
    $currbsv=floatval($jsonvd->USD);
    
    $jsonv=file_get_contents('https://min-api.cryptocompare.com/data/price?fsym=BNB&tsyms=USD');
    $jsonvd=json_decode($jsonv);
    $currbnb=floatval($jsonvd->USD);
    
    $jsonv=file_get_contents('https://min-api.cryptocompare.com/data/price?fsym=EOS&tsyms=USD');
    $jsonvd=json_decode($jsonv);
    $curreos=floatval($jsonvd->USD);
    
    $jsonv=file_get_contents('https://min-api.cryptocompare.com/data/price?fsym=LTC&tsyms=USD');
    $jsonvd=json_decode($jsonv);
    $currltc=floatval($jsonvd->USD);
    
    $jsonv=file_get_contents('https://min-api.cryptocompare.com/data/price?fsym=XTZ&tsyms=USD');
    $jsonvd=json_decode($jsonv);
    $currxtz=floatval($jsonvd->USD);
    
    
    
    if($row['btcpbool']==1){
        $mybtc=$row['btcp'];
        $btcqty=$row['qty'];
        $btcprofit=floatval($currbtc*$btcqty-$mybtc*$btcqty);
       // echo strval($btcprofit);
    }
    if($row['ethpbool']==1){
        $myeth=$row['ethp'];
        $ethqty=$row['qtyeth'];
        $ethprofit=floatval(($curreth*$ethqty)-($myeth*$ethqty));
    }
    if($row['usdtbool']==1){
        $myvalu=$row['usdtp'];
        $myqty=$row['usdtq'];
        $usdtprofit=floatval(($currusdt*$myqty)-($myqty*$myvalu));
    }
    if($row['xrpbool']==1){
        $myvalu=$row['xrpp'];
        $myqty=$row['xrpq'];
        $xrpprofit=floatval(($currxrp*$myqty)-($myqty*$myvalu));
    }
    if($row['bsvbool']==1){
        $myvalu=$row['bsvp'];
        $myqty=$row['bsvq'];
        $bsvprofit=floatval(($currbsv*$myqty)-($myqty*$myvalu));
    }
    if($row['bchbool']==1){
        $myvalu=$row['bchp'];
        $myqty=$row['bchq'];
        $bchprofit=floatval(($currbch*$myqty)-($myqty*$myvalu));
    }
    if($row['bnbbool']==1){
        $myvalu=$row['bnbp'];
        $myqty=$row['bnbq'];
        $bnbprofit=floatval(($currbnb*$myqty)-($myqty*$myvalu));
    }
    if($row['ltcbool']==1){
        $myvalu=$row['ltcp'];
        $myqty=$row['ltcq'];
        $ltcprofit=floatval(($currltc*$myqty)-($myqty*$myvalu));
    }
    if($row['eosbool']==1){
        $myvalu=$row['eosp'];
        $myqty=$row['eosq'];
        $eosprofit=floatval(($curreos*$myqty)-($myqty*$myvalu));
    }
    if($row['xtzbool']==1){
        $myvalu=$row['xtzp'];
        $myqty=$row['xtzq'];
        $xtzprofit=floatval(($currxtz*$myqty)-($myqty*$myvalu));
    }
   
    $mail = new PHPMailer(true);


if($row['ethpbool']==1 || $row['btcpbool']==1 || $row['xrpbool']==1 || $row['usdtbool']==1 || $row['bsvbool']==1 || $row['bchbool']==1 || $row['bnbbool']==1 || $row['ltcbool']==1 || $row['eosbool']==1 || $row['xtzbool']==1){
  $alert = '';
  $email = $row['email'];
  $message = '';

  try{
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'cryptopredictdjsc@gmail.com'; // Gmail address which you want to use as SMTP server
    $mail->Password = '#Crypto99'; // Gmail address Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';

    $mail->setFrom('cryptopredictdjsc@gmail.com'); // Gmail address which you used as SMTP server
    $mail->addAddress($email); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)

    $mail->isHTML(true);
    $mail->Subject = 'Portfolio Status';
    if($row['btcpbool']==1){
    $message=$message."<h3>Bitcoin</h3><br>Buying Price:".$mybtc."<br>Current Rate:".$currbtc."<br>Current Profit/Loss:".$btcprofit;
    
    } 
    if($row['ethpbool']==1){
    $message=$message."<h3>Ethereum</h3><br>Buying Price:".$myeth."<br>Current Rate:".$curreth."<br>Current Profit/Loss:".$ethprofit;
    
    }
    if($row['xrpbool']==1){
    $message=$message."<h3>Ripple</h3><br>Buying Price:".$row['xrpp']."<br>Current Rate:".$currxrp."<br>Current Profit/Loss:".$xrpprofit;
    
    }
    if($row['usdtbool']==1){
    $message=$message."<h3>Monero</h3><br>Buying Price:".$row['usdtp']."<br>Current Rate:".$currusdt."<br>Current Profit/Loss:".$usdtprofit;
    
    }
    if($row['bchbool']==1){
    $message=$message."<h3>Bitcoin Cash</h3><br>Buying Price:".$row['bchp']."<br>Current Rate:".$currbch."<br>Current Profit/Loss:".$bchprofit;
    
    }
    if($row['bsvbool']==1){
    $message=$message."<h3>Bitcoin SV</h3><br>Buying Price:".$row['bsvp']."<br>Current Rate:".$currbsv."<br>Current Profit/Loss:".$bsvprofit;
    
    }
    if($row['ltcbool']==1){
    $message=$message."<h3>Litecoin</h3><br>Buying Price:".$row['ltcp']."<br>Current Rate:".$currltc."<br>Current Profit/Loss:".$ltcprofit;
    
    }
    if($row['eosbool']==1){
    $message=$message."<h3>EOS Coin</h3><br>Buying Price:".$row['eosp']."<br>Current Rate:".$curreos."<br>Current Profit/Loss:".$eosprofit;
    
    }
    if($row['bnbbool']==1){
    $message=$message."<h3>Binance Coin</h3><br>Buying Price:".$row['bnbp']."<br>Current Rate:".$currbnb."<br>Current Profit/Loss:".$bnbprofit;
    
    }
    if($row['xtzbool']==1){
    $message=$message."<h3>Tezos</h3><br>Buying Price:".$row['xtzp']."<br>Current Rate:".$currxtz."<br>Current Profit/Loss:".$xtzprofit;
    
    }  
    $mail->Body = $message;
    
    $mail->send();
    $alert = '<div class="alert-success">
                 <span>Message Sent! Thank you for contacting us.</span>
                </div>';
  } catch (Exception $e){
    $alert = '<div class="alert-error">
                <span>'.$e->getMessage().'</span>
              </div>';
    
  }
    }
}

?>
