<html>

<head>
  <title>#OpIceIsis</title>

  <link href="/css/style.css" rel="stylesheet">
  <script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body>
  
  	<div id="wrap">
	<header id="header">
      <a href="/index.php" class="logo">#OpISIS</a>
	<nav>
        <li><a class="sel" href="/index.php">Add</a></li>
        <li><a href="#">News</a></li>
        <li><a href="/admin/view.php">View</a></li>
	</nav>
    </header>
        <div id="content">
        <?php
        $dbname = "opiceisis";
		$servname = "localhost";
		$username = "";
		$pw = "";
		$conn = new mysqli($servname, $username, $pw, $dbname);
        $select = "SELECT * FROM isismembers";
        $result = mysqli_query($conn,$select);
        if (!$result) 
        	{
        	die ("Error".mysqli_error());
        	}
        echo '<table border= "1"';
        while 
        	{
        		echo "<tr>";
        		echo "<td>". $zeile['id'] . "</td>";
  				echo "<td>". $zeile['realname'] . "</td>";
  				echo "<td>". $zeile['twitter'] . "</td>";
 				echo "<td>". $zeile['fb'] . "</td>";
  				echo "<td>". $zeile['hp'] . "</td>";
  				echo "<td>". $zeile['other'] . "</td>";
  				echo "<td>". $zeile['dateadded'] . "</td>";
  				echo "</tr>";
        	}
        echo "</table>";
        mysqli_free_result($result);
        ?>
        </div>
	<footer>
	</footer>
 	</div>

</body>

</html>
