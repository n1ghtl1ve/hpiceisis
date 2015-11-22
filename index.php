<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>#OpIceISIS</title>

    <!-- Bootstrap Core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="./css/simple-sidebar.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
		<br><center><img src="./img/face.png"/></center>
                <li class="sidebar-brand">
                    <a href="index.php?page=news">#OpIceISIS</b>
                </li>
                <li>
                    <a href="index.php?page=rules">Rules</a>
                </li>
                <li>
                    <a href="index.php?page=noob">Beginner-Guide</a>
                </li>
                <li>
                    <a href="index.php?page=add">Add IS Enthusiast</a>
                </li>
                <li>
                    <a href="index.php?page=search">Search IS Enthusiast</a>
                </li>
		<li>
		    <a href="index.php?page=archive">Archive</a>
		</li>
		<li>
		    <a href="index.php?page=json">JSON Dump</a>
		</li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                    <pre>
	   _  _               .__             .__       .__        
	__| || |______ ______ |__| ____  ____ |__| _____|__| ______
	\   __   /  _ \\____ \|  |/ ___\/ __ \|  |/  ___/  |/  ___/
	 |  ||  (  <_> )  |_> >  \  \__\  ___/|  |\___ \|  |\___ \ 
	/_  ~~  _\____/|   __/|__|\___  >___  >__/____  >__/____  >
	  |_||_|       |__|           \/    \/        \/        \/ 
	       			  Expect us
                    </pre>
                    
		    <hr>
		    <?php
		    	// get page and convert to type string
			$page = (string)$_GET['page'];
			
			// checks for pages and includes coresponding files
			// === are used for "loose comparisons"
			if($page === 'news' || $page === ''){
				include './pages/news.php';
			}
			elseif($page === 'noob'){
				include './pages/noobs.php';
			}
			elseif($page === 'rules'){
				include './pages/rules.php';
			}
			elseif($page === 'add'){
				include './pages/add.php';
			}
			elseif($page === 'archive'){
				include './pages/archive.php';
			}
			elseif($page === 'json'){
				include './pages/json.php';
			}
			// custom "fucking around message"
			else{
				echo "<center><h1>Stop fucking around!</h1></center>";
			}			
		    ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
</body>

</html>
