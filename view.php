<?php
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(-1);
?>
<html>

<head>
  <title>#OpIceIsis</title>

  <link href="../css/style.css" rel="stylesheet">
  <script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body>
<style>
    .report {
        border-bottom: solid 1px black;
        font-family: fantasy;
        padding-bottom: 5px;
        line-height: 130%;
    }
    .underline {
        text-decoration: underline;
    }
    .left {
        margin-right: 5%;
    }
    .right {
        overflow: hidden;
    }
    @media screen and (min-width : 1000px) {
        .left {
            float: left;
        }
    }

    .clearfix {
        clear: both;
    }

</style>

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
              //DB-Connection
          $database = "opiceisis"; // CHANGE THIS
          $hostname = "127.0.0.1"; // 127.0.0.1 == localhost
          $username = "root"; // AND THIS TOO
          $password = "Warez,Music,Life"; // DONT FORGET THIS ONE
        //UNCOMMENT THAT
          $db = new PDO("mysql:host=$hostname;dbname=$database;charset=utf8", $username, $password);
          //Read out the Data

          $select = $db->query("SELECT * FROM isismembers");

          $data = $select->fetchALL(PDO::FETCH_ASSOC);


          foreach ($data as $report) {?>
              <!-- One report -->
              <div class="report">
                  <div class="left">
                      <span class="underline">Name:</span>
                      <?php echo htmlspecialchars($report['realname']); ?><br />
                      <span class="underline">Twitter:</span>
                      <?php echo htmlspecialchars($report['twitter']); ?><br />
                      <span class="underline">Facebook:</span>
                      <?php echo htmlspecialchars($report['facebook']); ?><br />
                      <span class="underline">Homepage:</span>
                      <?php echo htmlspecialchars($report['homepage']); ?><br />
                  </div>
                  <div class="right">
                      <span class="underline">More:</span>
                      <?php echo htmlspecialchars($report['other']); ?><br /><br />
                      <a href="/delete/<?php echo $report['id']; ?>"
                          class="delete-button">Delete John Doe</a>
                  </div>
                  <div class="clearfix"></div>
              </div> <!-- End Report -->
          <?php } //End for ?>

        </div>
        <footer>
        </footer>
        </div>

</body>

</html>