    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">YourDailyMenu</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
			<li><a href="weeklymenu.php">Weekly Menu</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>

          </ul>
          <ul class="nav navbar-nav navbar-right">

            <?php
              if(isset($_SESSION['access_token'])) {           	
              	?>
             <li class="dropdown">
       <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="padding-top: 6px;padding-bottom: 2px;" role="button" aria-haspopup="true" aria-expanded="false" >
         <img id="id_p" class="img-circle" width="42px" height="40px" src="$imgURL" title="$firstName" aria-label="Profile Picture">
        $firstName
      <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="logout.php">Logout</a></li>
              </ul>
            </li>
              <?php }
              else {
              	?>
              	<li><a href="login.php">Login</a></li>
              	<?php
              }
            ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>