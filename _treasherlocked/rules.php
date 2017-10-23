<?php
	require( 'config/consts.php' );
	$page = RULES;
	session_start();

	require_once( DOCUMENT_ROOT . 'classes/LoginHelper.php' );
	require_once( DOCUMENT_ROOT . 'config/db.php' );

	/* Check if the user is logged in/Login the user if presence cookie is present */
	$loginHelper = new LoginHelper($db);
	$loggedIn = $loginHelper->IsLoggedIn();
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
  <link rel="stylesheet" type="text/css" href="<?php echo SSTATIC; ?>css/rules.css">
  <!-- font -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto" rel="stylesheet">
</head>
<body>

  <!-- navbar -->
  <nav class="navbar fixed-top navbar-expand-md navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#"><img src="<?php echo SSTATIC; ?>img/ts/treasherlocked.png" /></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span><img src="<?php echo SSTATIC; ?>img/menu.svg" height="25" width="25" /></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item link">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item link">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item link">
            <a class="nav-link" href="howtoplay.php">How to Play</a>
          </li>
          <li class="nav-item link">
            <a class="nav-link active" href="#" style="color:red;">Rules</a>
          </li>
        </ul>
        <div class="btn-toolbar">
          <button type="button" class="btn btn-danger">LOGIN</button>
          <button type="button" class="btn btn-danger">SIGN UP</button>
        </div>
      </div>
    </div>
  </nav>



  <div class="container">
    <div class="jumbotron">
      <h3 align="center">RULES</h3><br />
      <ul class="rules">
        <li>The event entails an Online Cryptic Treasure Hunt in which participants make their way through a series of cryptic levels.</li>
        <li>The event shall be held over 3 days, starting from 28th October 2016. Check this page for regular updates.</li>
        <li>Participation is open to everyone. Each participant represents himself/herself only.</li>
        <li>The participants' aim is to crack the levels as quickly as they can so as to place themselves at the top of the leaderboard. They can make unlimited number of attempts at any level until they get the correct answer.</li>
        <li>At each level, the participants will encounter a number of clues which shall all, together, point to one answer. Each level has one and only one correct answer. The answer will be limited to a word or a phrase sometimes.</li>
        <li>The participants should beware of the spelling they enter, we cannot auto correct your spellings.</li>
        <li>Sharing of answers with other participants in any form is banned. This also includes providing hints towards the clues/answer. The organizers reserve the right to disqualify or refuse participation to any participant without prior notice.</li>


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



      </body>
      </html>
