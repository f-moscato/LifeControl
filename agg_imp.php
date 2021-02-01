<?php
  include_once __DIR__ .'\csrf\libs\csrf\csrfprotector.php';
  csrfProtector::init();
if(!isset($_POST['submit'])){
	header('Location:new_imp.html');
}else{
session_start();
$host='localhost'; // Host name 
$username='root'; // Mysql username 
$password=''; // Mysql password 
$db_name='live'; // Database name 
$tbl_name='impianti'; // Table name 

// Connect to server and select databse.
$link=mysqli_connect((string)$host,(string)$username,(string)$password,(string)$db_name);
if(isset($link)){ 
$id_impianto=mysqli_real_escape_string($link,$_POST['id']);
$nome=mysqli_real_escape_string($link,$_POST['nome']);
$via=mysqli_real_escape_string($link,$_POST['via']);
$civico=mysqli_real_escape_string($link,$_POST['civico']);
$cap=mysqli_real_escape_string($link,$_POST['cap']);
$gestore=mysqli_real_escape_string($link,$_POST['gestore']);
$sql="INSERT INTO $tbl_name (id_impianto,nome,CAP,via,n_civico,gestore) VALUES ('$id_impianto','$nome','$cap','$via','$civico','$gestore');";
$result=mysqli_query($link,$sql);
if(isset($result)){
$sql='SELECT * FROM $tbl_name;';
$result=mysqli_query($link,$sql) ;
if(isset($result)){
header('Location:ambienti.php');
}else{
echo'QUERY FALLITA';}
}else{
echo'QUERY FALLITA';}
}else{
echo 'cannot connect';}}
?>
