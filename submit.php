<?php session_start(); 
var_dump($_POST);
?>
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
$database = "opiceisis"; // CHANGE THIS
$hostname = "127.0.0.1"; // 127.0.0.1 == localhost
$username = ""; // AND THIS TOO
$password = "!"; // DONT FORGET THIS ONE
 
$db = new PDO("mysql:host=$hostname;dbname=$database;charset=utf8", $username, $password);
 
$stmt = $db->prepare('INSERT INTO isismembers(realname, twitter, facebook, homepage, other, dateadded) VALUES(:name, :twitter, :facebook, :homepage, :other, NOW())');
 
$req_fields = array(
        'name',
        'twitter',
        'facebook',
        'homepage',
        'other'
);
 
foreach($req_fields as $required_field) {
                if(!isset($_POST[$required_field])) {
                        $_POST[$required_field] = null;
                }
}
if ((md5($_POST['captcha']) == $_SESSION['captcha_code'])) {
                $success = $stmt->execute(array(
                        ':name'         =>      $_POST['name'],
                        ':twitter'      =>      $_POST['twitter'],
                        ':facebook'     =>      $_POST['fb'],
                        ':homepage'     =>      $_POST['hp'],
                        ':other'        =>      $_POST['other']
                ));
               
 
        if ($success){
                echo '<p style="text-align: center;">New records created successfully';
        }
        else {
                echo var_dump($stmt->errorInfo());;
        }
 
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