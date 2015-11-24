//DB Connection
<?php
$DB_HOST = "127.0.0.1"; //Host-Address
$DB_NAME = "opiceisis"; //Name of Database
$DB_USER = "n1ght"; //Username
$DB_PASSWORD = "Musik4live!"; //Password


try {
	$connection = new PDO(mysql:host=" . $DB_HOST . "; dbname=".$DB_NAME", $DB_BUSER, $DB_PASSWORD);
}
catch (PDOException $e) {
	exit("Connection-Error". $e -> getMessage());
}

?>
