<?php
	require('config/consts.php');
	$page = ABOUT;
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
  <link rel="stylesheet" type="text/css" href="<?php echo SSTATIC; ?>css/about.css">
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
            <a class="nav-link active" href="#" style="color:red;">About</a>
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



  <div class="container">
    <div class="jumbotron">

      <p class="lead">

        You know my method. It is founded upon the observation of trifles.<br /><i style="font-size:13px;color:red;">Sherlock Holmes</i>
      </p>


    </div>

    <div class="jumbotron">

      <p align="justify">
        <strong><span style="color:red;">Treasherlocked</span></strong> is an online cryptic hunt to be organized by Microsoft Campus Club of National Institute of Techonlogy Rourkela. The competition tests one's power of logic, knowledge and creativity. Most signficantly, it assesses one's aptitude of making connection between discrete ideas.</p>
        <p align="justify">
          The simple idea of a string of clues conducive to their successors leading to the final puzzle is central to the competition, making it sophisticated and enjoyable. The players are usually given textual and/or visual questions in the game. The player cracks the picture/text to get an answer to the question using the Internet and hints, which will take her/him to the next question. The one who solves the last question first wins the game.</p>
          <p align="justify">
            The competition is open to anybody and everybody i.e. no restrictions on age, gender, concentration or geography have been implied. Participants can freely use the Internet (Google, Bing or any other search engine) or any other source at their disposal to get the right answer.</p>
            <p align="justify">
              Apart from offering an exciting experience, an online treasure hunt also provides you with a very good learning opportunity. It enables you to explore new areas of which you might have been unaware.
              It increases your general awareness in a wide range of randomly selected fields giving you an extra edge in various competitions or events, which require your ability for a comprehensive knowledge. And what’s more? – prizes worth Rs. 30000, goodies and T-shirts awaiting you.
            </p>

          </div>
        </div>





        <div class="footer">
          <ul class="nav justify-content-center">
            <li class="nav-item ">
              <a class="nav-link active foot" href="index.php">Home</a>
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
