<?php session_start(); ?>
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
//Database
$dbname = "opiceisis";
$servname = "localhost";
$username = "";
$pw = "!";
$conn = new mysqli($servname, $username, $pw, $dbname);

//Check DB
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error); 
}

if (md5($_POST['captcha']) != $_SESSION['captcha_code'])
{
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
}
else {
  echo "Wrong Captcha!";
}
?>
</div>
    <footer>
    </footer>
  </div>

</body>

</html>