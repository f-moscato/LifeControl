<?php
session_start();
if(isset($_SESSION['username'])&&isset($_SESSION['pwd'])){
header('location:login_success.php');
}else{
header('location:logout.php');}
?>
