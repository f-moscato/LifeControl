<?php
define('alt',  800);
define('larg', 700);
include 'phpgraphlib.php';
$graph=new PHPgraphLib(alt,larg); 
session_start();
$host='localhost'; // Host name 
$username='root'; // Mysql username 
$password=''; // Mysql password 
$db_name='live'; // Database name 
$tbl_name='dati'; // Table name 
// Connect to server and select databse.
$link=mysqli_connect((string)$host,(string)$username,(string)$password,(string)$db_name);
if($link){
$id=mysqli_real_escape_string($link,$_SESSION['username']);
$data=mysqli_real_escape_string($link,$_POST['mydatetime']);
$sito=mysqli_real_escape_string($link,$_POST['sito']);
$imp=mysqli_real_escape_string($link,$_POST['impianto']);
$dataArray=array();
$sql="SELECT valore,ora FROM $tbl_name d,sensori s,siti t,impianti i WHERE d.sensore=s.id_sensore AND s.sito=t.id_sito AND t.impianto=i.id_impianto AND i.gestore='$id' AND d.data='$data' AND i.id_impianto='$imp' AND t.id_sito='$sito' GROUP BY ora ;";
$result=mysqli_query($link,$sql);
if($result){
$number = mysqli_num_rows($result);
$i=0;
while($number>$i){
$row = mysqli_fetch_assoc($result); 

   $dataArray[$row['ora']]=$row['valore'];
 $i++;}   
//configure graph 
$graph->addData($dataArray);
$graph->setTitle('DATI');
$graph->setGradient('black', 'blue');
$graph->setBarOutlineColor('black');
$graph->createGraph();
}else{
echo'query fallita';}
}else{echo 'cannot connect';} 

?>
