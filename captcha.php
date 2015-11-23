<?php
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(-1);
session_start();
unset( $_SESSION['captcha_code']);
 
header( "Expires: Mon, 26 Jul 1997 05:00:00 GMT" );
header( "Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT" );
header( "Cache-Control: no-store, no-cache, must-revalidate" );
header( "Cache-Control: post-check=0, pre-check=0", false );
//header( "Pragma: no-cache" )
header('Content-Type: image/jpeg');
 
$Alphabet ="ABCDEFGHIJKLMNOPQRSTUVWXYZ123456789";
//Random Strings erzeugen
$RandomString1 = substr(str_shuffle($Alphabet), 0, 2);
$RandomString2 = substr(str_shuffle($Alphabet), 0, 2);
$RandomString3 = substr(str_shuffle($Alphabet), 0, 2);
$CompleteRandom = $RandomString1.$RandomString2.$RandomString3;
//Session mit md5 und Complete Random erstellen 'captcha_code'
$_SESSION['captcha_code'] = md5($CompleteRandom);
//Schriftarten
$Fonts  = array( "./fonts/zachary.ttf", "./fonts/mtcorsva.ttf", "./fonts/gilligan.ttf");
//Bild erstellen
$IMGCreate = imagecreatefrompng('background.png');
//Jeden Part Farbe zuweisen
$Colour1 = imagecolorallocate($IMGCreate, 0, 125, 0);
$Colour2 = imagecolorallocate($IMGCreate, 125, 0, 0);
$Colour3 = imagecolorallocate($IMGCreate, 0, 0, 125);
//Text und Bild zusammenfügen
imagettftext($IMGCreate, 12, 15, 3, 24, $Colour1, $Fonts[0],$RandomString1);
imagettftext($IMGCreate, 16, 0, 26, 15, $Colour2, $Fonts[1],$RandomString2);
imagettftext($IMGCreate, 14, -20, 53, 18, $Colour3, $Fonts[2],$RandomString3);
//An Browser senden
imagejpeg($IMGCreate);
//Zerstören
imagedestroy($IMGCreate);
 
 
 
?>