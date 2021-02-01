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

<table border="0">
<a href='guia.php'><img src='immagini/indietro.jpg' height='30' width='25'>				</a>


<?php
  include_once __DIR__ .'\csrf\libs\csrf\csrfprotector.php';
  csrfProtector::init();
$host='localhost'; // Host name
$username='root'; // Mysql username
$password=''; // Mysql password
$db_name='live'; // Database name
$tbl_name='dati'; // Table name

// Connect to server and select databse.
$link=mysqli_connect((string)$host,(string)$username,(string)$password,(string)$db_name);
if(isset($link)){
$id=mysqli_real_escape_string($link,$_POST['id']);
$str=mysqli_real_escape_string($link,$_POST['stringa']);
$txt=mysqli_real_escape_string($link,$_POST['testo']);
$s=$str{strlen($str)-1};
switch($s){
	case '1'://temperatura
	$val=substr($str, 0, 3);
	$ora=substr($str, 3, 2);
	$min=substr($str, 5, 2);
	$sec=substr($str, 7, 2);
$sql="INSERT INTO dati (`sensore`, `valore`, `data`, `ora`, `descrizione`) VALUES ('$id', '$val', CURDATE(), '$ora:$min:$sec', '$txt')";
$result=mysqli_query($link,$sql);
	if(isset($result)){
header('Location:adattatore.html');
}else{
echo'QUERY FALLITA';}
	break;
	case '2'://prossimità
	$val=substr($str, 0, 3);
	$ora=substr($str, 3, 2);
	$min=substr($str, 5, 2);
	$sec=substr($str, 7, 2);
$sql="INSERT INTO dati (`sensore`, `valore`, `data`, `ora`, `descrizione`) VALUES ('$id', '$val', CURDATE(), '$ora:$min:$sec', '$txt')";
$result=mysqli_query($link,$sql);
	if(isset($result)){
header('Location:adattatore.html');
}else{
echo'QUERY FALLITA';}

	break;
	case '3'://forza
	$val=substr($str, 0,4);
$sql="INSERT INTO dati (`sensore`, `valore`, `data`, `ora`, `descrizione`) VALUES ('$id', '$val', CURDATE(), CURTIME(), '$txt')";
$result=mysqli_query($link,$sql);
	if(isset($result)){
header('Location:adattatore.html');
}else{
echo'QUERY FALLITA';}

break;
case '4'://pressione
	$val=substr($str, 0, 5);
	$ora=substr($str, 3, 2);
	$min=substr($str, 5, 2);
	$sec=substr($str, 7, 2);
$sql="INSERT INTO dati (`sensore`, `valore`, `data`, `ora`, `descrizione`) VALUES ('$id', '$val', CURDATE(), '$ora:$min:$sec', '$txt')";
$result=mysqli_query($link,$sql);
	if(isset($result)){
header('Location:adattatore.html');
}else{
echo'QUERY FALLITA';}

break;
case '5'://velocità
	$val=substr($str, 5, 3);
	$ora=substr($str, 0, 2);
	$min=substr($str, 2, 2);
	$sec=substr($str, 5, 2);
$sql="INSERT INTO dati (`sensore`, `valore`, `data`, `ora`, `descrizione`) VALUES ('$id', '$val', CURDATE(), '$ora:$min:$sec', '$txt')";
$result=mysqli_query($link,$sql);
	if(isset($result)){
header('Location:adattatore.html');
}else{
echo'QUERY FALLITA';}
break;
case '6'://peso
	$val=substr($str, 0, 3);
$sql="INSERT INTO dati (`sensore`, `valore`, `data`, `ora`, `descrizione`) VALUES ('$id', '$val', CURDATE(), CURTIME(), '$txt')";
$result=mysqli_query($link,$sql);
	if(isset($result)){
header('Location:adattatore.html');
}else{
echo'QUERY FALLITA';}
break;
case '7'://direzione
	$val=substr($str, 0, 2);
$sql="INSERT INTO dati (`sensore`, `valore`, `data`, `ora`, `descrizione`) VALUES ('$id', '$val', CURDATE(), CURTIME(), '$txt')";
$result=mysqli_query($link,$sql);
	if(isset($result)){
header('Location:adattatore.html');
}else{
echo'QUERY FALLITA';}
break;
case '8'://luminosità
	$val=substr($str, 0, 2);
	$ora=substr($str, 3, 2);
	$min=substr($str, 6, 2);
	$sec=substr($str, 7, 2);

$sql="INSERT INTO dati (`sensore`, `valore`, `data`, `ora`, `descrizione`) VALUES ('$id', '$val', CURDATE(), '$ora:$min:$sec', '$txt')";
$result=mysqli_query($link,$sql);
	if(isset($result)){
header('Location:adattatore.html');
}else{
echo'QUERY FALLITA';}
break;
default:
      echo "Errore tipo sensore";
}
}else{
echo 'cannot connect';}
?>

      </td>
    </tr>
</table>
</div>

</body>
</html>
