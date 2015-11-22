<!DOCTYPE html>
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
        <li><a class="sel" href="#">Add</a></li>
        <li><a href="#">News</a></li>
        <li><a href="#">Guides</a></li>
      </nav>
    </header>
    <div id="content">
      Please enter in information about potential ISIS peoplez:
      <form action="submit.php" method="POST">
        <input type="text" placeholder="Name" name="name"/><br />
        <input type="text" placeholder="Twitter" name="twitter"/><br />
        <input type="text" placeholder="Facebook" name="fb"/><br />
        <input type="text" placeholder="Homepage" name="hp" /><br />
        <textarea placeholder="More (please specify)" name="other"></textarea>
        <br />
        <div class="g-recaptcha" data-sitekey="6LdTfBETAAAAALWssyHxulEl90QipfFYEybzCY_p"></div>
        <input type="submit" text="Submit" name="submit" />
      </form>
    </div>
    <footer>
    </footer>
  </div>

</body>

</html>