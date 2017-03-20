<?php 
	include('config/common.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Your Daily Menu</title>

    <!-- Bootstap-->
	<?php include('config/css.php');?>
	<?php include('config/js.php');?>


    <!-- Custom styles for this template -->
    <link href="css/navbar-fixed-footer-sticky.css" rel="stylesheet">

  </head>

  <body>
  	<?php include('template/navigation.php'); ?>




    <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h1>Your Menu for this week</h1>

      </div>

    </div> <!-- /container -->
    <?php include('template/footer.php') ?>
  </body>
</html>
