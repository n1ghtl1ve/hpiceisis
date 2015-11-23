
<html>

<head>
  <title></title>

  <link href="./css/style.css" rel="stylesheet">
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
      Please enter in information about potential ISIS Data:
      <form action="submit.php" method="POST">
        <input type="text" placeholder="Name" name="name"/><br />
        <input type="text" placeholder="Twitter" name="twitter"/><br />
        <input type="text" placeholder="Facebook" name="fb"/><br />
        <input type="text" placeholder="Homepage" name="hp" /><br />
        <textarea placeholder="More (please specify)" name="other"></textarea><br />
        <img src="captcha.php" alt="CaptchaPic" title="CaptchaPic" width="80" height="25" /><br />
        <input type="text" placeholder="Captcha" name="captcha" /><br />
        <input type="submit" text="Submit" name="submit" />
      </form>
    </div>
    <footer>
    </footer>
  </div>

</body>

</html>