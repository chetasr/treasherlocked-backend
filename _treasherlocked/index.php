<?php
	require('config/consts.php' );

	$page = HOME;
	session_start();

	require_once( DOCUMENT_ROOT . 'classes/LoginHelper.php' );
	require_once( DOCUMENT_ROOT . 'config/db.php' );

	/* Check if the user is logged in/Login the user if presence cookie is present */
	$loginHelper = new LoginHelper($db);
	$loggedIn = $loginHelper->IsLoggedIn();

	/*	Get the event status	*/
	require( 'classes/Event.php' );
	$event = new Event();
	$event_status = $event->get_event_status();

	/*	Countdown to be sent to the client	*/
	if ( $event_status == EVENT_NOT_STARTED )
		$countdown = EVENT_START - time();
	elseif ( $event_status == EVENT_STARTED )
		$countdown = EVENT_END - time();
	else
		$countdown = null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->

  <!-- Title -->
  <title>Treasherlocked - 5.0</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- favicon -->
  <link rel="icon" type="image/gif" href="<?php echo SSTATIC; ?>img/ts/favicon.png" />
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?php echo SSTATIC; ?>css/bootstrap.min.css">
  <!-- styling -->
  <link rel="stylesheet" type="text/css" href="<?php echo SSTATIC; ?>css/index.css">
  <!-- font -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto" rel="stylesheet">
</head>
<body>

  <!-- navbar -->
  <nav class="navbar fixed-top navbar-expand-md navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="#"><img src="<?php echo SSTATIC; ?>img/ts/treasherlocked.png" /></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span><img src="<?php echo SSTATIC; ?>img/menu.svg" height="25" width="25" /></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item link">
            <a class="nav-link" style="color:red;">Home</a>
          </li>
          <li class="nav-item link">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item link">
            <a class="nav-link" href="howtoplay.php">How to Play</a>
          </li>
          <li class="nav-item link">
            <a class="nav-link" href="rules.php">Rules</a>
          </li>
        </ul>
        <div class="btn-toolbar">
          <button type="button" class="btn btn-danger">LOGIN</button>
          <button type="button" class="btn btn-danger">SIGN UP</button>
        </div>
      </div>
    </div>
  </nav>

  <!-- header img -->
  <section class="first">
    <div class="container">
      <!-- Nikhil avatar -->
      <div class="avatar text-center">
        <img src="<?php echo SSTATIC; ?>img/ts/logo.png" class="img-fluid"/>
        <p class="hunt">
          because the hunt is on
        </p>
        <hr>
        <p class="date">
          27-29 OCTOBER 2017
        </p>
        <button type="button" class="btn btn-danger">REGISTER NOW</button>
      </div>
    </div>
  </section>


  <div class="huntend">
    <p>THE HUNT HAS ENDED</p>
    <button type="button" class="btn btn-danger">SEE LEADERBOARD</button>
  </div>


<div class="admin">
  <div class="container">
    <ul class="nav justify-content-center">
      <li class="nav-item social">
        <img src="<?php echo SSTATIC; ?>img/ts/acd.jpg" class="img-fluid rounded" alt="img1"><br />
        <p class="adminname">Admin ACD</p>
      </li>
      <li class="nav-item social">
        <img src="<?php echo SSTATIC; ?>img/ts/sherlock.jpg" class="img-fluid rounded" alt="img2"/><br />
        <p class="adminname">Admin Sherlock</p>

      </li>
      <li class="nav-item social">
        <img src="<?php echo SSTATIC; ?>img/ts/watson.jpg" class="img-fluid rounded" alt="img3"><br />
        <p class="adminname">Admin Watson</p>

      </li>
      <li class="nav-item social">
        <img src="<?php echo SSTATIC; ?>img/ts/moriarty.jpg" class="img-fluid rounded" alt="img1"><br />
        <p class="adminname">Admin Moriarty</p>

      </li>
      <li class="nav-item social">
        <img src="<?php echo SSTATIC; ?>img/ts/mycroft.jpg" class="img-fluid rounded" alt="img2"/><br />
        <p class="adminname">Admin Mycroft</p>

      </li>
    </ul>
  </div>
</div>


<div class="sponsor">
  <div class="container">
    <h2>Sponsors</h2>
    <ul class="nav justify-content-center">
      <li class="nav-item">
        <img src="<?php echo SSTATIC; ?>img/ts/msclublogo.png" class="img-fluid" alt="msclublogo"/>

      </li>
    </ul>
  </div>
</div>



<div class="footer">
  <ul class="nav justify-content-center">
  <li class="nav-item ">
    <a class="nav-link active foot" href="#">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link foot" href="#">About</a>
  </li>
  <li class="nav-item">
    <a class="nav-link foot" href="#">Treasherlocked's Facebook</a>
  </li>
  <li class="nav-item">
    <a class="nav-link foot" href="#">Privacy Policy</a>
  </li>
  <li class="nav-item">
    <a class="nav-link foot" href="#">Contact Us</a>
  </li>
</ul>
<ul class="nav justify-content-center foot">
  <li>
    2013 - 2017 &copy; <a href="http://www.microsoftcampusclub.in/" target="_blank">Microsoft Campus Club</a>
    <em>(based in <a href="http://nitrkl.ac.in" target="_blank">National Institute of Technology Rourkela</a>)</em>
  </li>
</ul>
</div>







<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="<?php echo SSTATIC; ?>js/jquery-3.2.1.slim.min.js"></script>
<script src="<?php echo SSTATIC; ?>js/popper.min.js"></script>
<script src="<?php echo SSTATIC; ?>js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo SSTATIC; ?>js/index.js"></script>

</body>
</html>
