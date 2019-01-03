<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="theme-color" content="#00274c" />
	<link rel="apple-touch-icon-precomposed" href="apple-touch-icon.png"/>
	<link rel="apple-touch-icon-precomposed" sizes="40x40" href="mobile-icons/apple-touch-icon-40x40.png"/>
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="mobile-icons/apple-touch-icon-72x72.png"/>
	<link rel="apple-touch-icon-precomposed" sizes="80x80" href="mobile-icons/apple-touch-icon-80x80.png"/>
	<link rel="apple-touch-icon-precomposed" sizes="120x120" href="mobile-icons/apple-touch-icon-120x120.png"/>
	<link rel="apple-touch-icon-precomposed" sizes="152x152" href="mobile-icons/apple-touch-icon-152x152.png"/>
	<link rel="apple-touch-icon-precomposed" sizes="167x167" href="mobile-icons/apple-touch-icon-167x167.png"/>
	<link rel="apple-touch-icon-precomposed" sizes="180x180" href="mobile-icons/apple-touch-icon-180x180.png"/>
	
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:700,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oleo+Script' rel='stylesheet' type='text/css'>

    <link rel='shortcut icon' href='icons/favicon.ico'>
    <!--<link rel="icon" href="icons/favicon.ico">-->
    <meta property="og:image" content="icons/mrun_social_media_icon.png"/>
    <meta property="og:image:secure_url" content="icons/mrun_social_media_icon.png" />

    <title>U-M Running Club</title>

    <!-- Bootstrap core CSS -->
	<script async defer src="https://maps.googleapis.com/maps/api/js?v=3.&key=AIzaSyBudQgCNO-pHwi243R6Hd-L0KJzp8K86kM" type="text/javascript"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="/style-1.css">
	<!--JQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	

  </head>

<body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <!--Mobile Menu Button-->
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        
        <!--MRun logo and Title-->
        <a href="/"><img class="navbar-brand visible-xs" src="icons/mrun.png" />
        <a class="navbar-brand visible-lg" style="text-transform:uppercase;font-size:14px;" href="/">University of Michigan Running Club</a>
      
      </div>

      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          
          <li id="index"><a href="/">Home</a></li>
          
          <li id="news"><a href="news.php?date=0">News</a></li>
      
          <li id="members" class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Info <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="/prospective.php">Prospective Members</a></li>
              <li><a href="/current.php">Current Members</a></li>
			  <li><a href="/features.php">Featured Alumni</a></li>
			  <li><a href="/routes.php">Routes</a></li>
            </ul>
          </li>
      
          <li id="races" class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Races <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="/xc.php">Cross-Country</a></li>
              <li><a href="/tf.php">Track &amp; Field</a></li>
            </ul>
          </li>
      
          <li id="community" class="dropdown hidden-sm">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Community Service <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="/community.php">Service Works</a></li>
              <li><a href="/ram/">RAM</a></li>
            </ul>
          </li>
      
          <li id="community" class="dropdown visible-sm">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Service <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="/community.php">Community Service</a></li>
              <li><a href="/ram/">RAM</a></li>
            </ul>
          </li>
          
          <li id="sponsors"><a href="/sponsors.php">Sponsors</a></li>
      
          <li id="contact"><a href="/contact.php">Contact/Board</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </nav>
