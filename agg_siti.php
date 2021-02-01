<?php
  include_once __DIR__ .'\csrf\libs\csrf\csrfprotector.php';
  csrfProtector::init();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="LC.ico" />
    <title>Live Control</title>
    <!-- CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<link rel="stylesheet" href="css/style.css" >

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

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
          <a class="navbar-brand" <a href="Home.html"> <img src="immagini/lclogo.png"  height="50" width="150" alt="Brand" ></a></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

          <ul class="nav navbar-nav navbar-right">
            <li><a href="Home.html">HOME <span class="sr-only">(current)</span></a></li>
            <li><a href="logout.php">LOGOUT</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">MENÚ<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li> <a href="sensori.php">Sensori</a></li>
				   <li role="separator" class="divider"></li>
				 <li> <a href="utenti.php">Utenti</a></li>
				  <li role="separator" class="divider"></li>
				 <li> <a href="ambienti.php">Impianti</a></li>
				  <li role="separator" class="divider"></li>
				 <li> <a href="siti.php">Siti</a></li>
				  <li role="separator" class="divider"></li>
				 <li> <a href="marche.php">Marche</a></li>
              </ul>
            </li>
          </ul>



        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

  <div class="container">

<?php
if(!isset($_POST['submit'])){
	header('Location:new_siti.php');
}else{
session_start();
$host='localhost'; // Host name
$username='root'; // Mysql username
$password=''; // Mysql password
$db_name='live'; // Database name
$tbl_name='siti'; // Table name

// Connect to server and select databse.
$link=mysqli_connect((string)$host,(string)$username,(string)$password,(string)$db_name);
if(isset($link)){
$id=mysqli_real_escape_string($link,$_POST['id']);
$nome=mysqli_real_escape_string($link,$_POST['nome']);
$imp=mysqli_real_escape_string($link,$_POST['imp']);
$sql="INSERT INTO $tbl_name (id_sito, nome,impianto) VALUES ('$id','$nome','$imp');";
$result=mysqli_query($link,$sql);
if(isset($result)){
header('Location:siti.php');
}else{
echo'QUERY FALLITA';
}}else{echo 'cannot connect';}
}?>


</div>

</body>
</html>

<html>
