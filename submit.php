<html>

<head>
  <title></title>

  <link href="./css/style.css" rel="stylesheet">
</head>

<body>
  
  <div id="wrap">
    <header id="header">
      <a href="index.php" class="logo">#OpISIS</a>
      <nav>
        <li><a class="sel" href="#">Add</a></li>
        <li><a href="#">News</a></li>
        <li><a href="#">Guides</a></li>
      </nav>
    </header>
        <div id="content">
<?php
//Require

//Database
$dbname = "opiceisis_isis";
$servname = "localhost";
$username = "opiceisis_isis";
$pw = "musik4live";
$conn = new mysqli($servname, $username, $pw, $dbname);

//Check DB
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error); 
}
//DB-Entrys
$query = "INSERT INTO isismembers(realname, twitter, facebook, homepage, other, dateadded) VALUES(?, ?, ?, ?, ?, NOW())";
$stmt = $conn->prepare($query);
$stmt -> bind_param('sssss', $name, $twitter, $fb, $hp, $other);
$name = mysql_real_escape_string($_POST['name']);
$twitter = mysql_real_escape_string($_POST['twitter']);
$fb = mysql_real_escape_string($_POST['fb']);
$hp = mysql_real_escape_string($_POST['hp']);
$other = mysql_real_escape_string($_POST['other']);
$stmt -> execute();
if (mysqli_affected_rows($conn)== 1){
echo '<p style="text-align: center;">New records created successfully';
}
$stmt->close();
$conn->close();

//Captcha Outcomment on new Serv
/* 
if(isset($_POST['submit']) && !empty($_POST['submit'])){
  if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){
    //your site secret key
    $secret = '6LdTfBETAAAAAKQzS90A315TjFmEonxBbrhiiBc4';
    //get verify response data
    $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
    $responseData = json_decode($verifyResponse);
    if($responseData->success){
        //contact form submission code goes here

        $succMsg = 'Your contact request have submitted successfully.';
    }else{
        $errMsg = 'Robot verification failed, please try again.';
    }
  }else{
    $errMsg = 'Please click on the reCAPTCHA box.';
  }
} */


?>
</div>
    <footer>
    </footer>
  </div>

</body>

</html>