<?php
session_start();
if(isset($_SESSION['username'])&&isset($_SESSION['pwd'])){
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="icona.ico" />
    <title>Live Control</title>
    <!-- CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<link rel="stylesheet" href="css/style.css" >
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->
<meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>



    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        <a class="navbar-brand" <a href="Home.html"> <img src="immagini/lclogo.png"  height="70" width="155" alt="Brand" ></a></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

          <ul class="nav navbar-nav navbar-right">
            <li><a href="Home.html">HOME <span class="sr-only">(current)</span></a></li>
            <li><a href="login.php">LOGIN</a></li>
			<li><a href="logout.php">LOGOUT</a></li
              </ul>
            </li>
          </ul>



        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

  
  <div class="amm">

	<div id="title">
				<h1><strong>Funzionalità</strong></h1>
			</div>
	<div id="control-group">
	<li><a href="login.php">Sensori</a></li>
	</div>
	<div id="control-group">
	<li><a href="login.php">Utenti</a></li>
	</div>
	<li><a href="login.php">Impianti</a></li>
	<li><a href="login.php">Siti</a></li>
	</form>

</div>


</div>

  <div id="footer" class="d-flex justify-content-center align-items-center">

      <b>Powered by</b> <a href="http://www.iot-inc.com/"> <img src="immagini/iotlogo.png" height="70" width="140" hspace=”20″></a>

  </div>

  </body>
</html>
<?php
}else{
echo 'NON SEI LOGGATO';}
	?>
