<?php 
if (!isset($_SESSION['username']) && !isset($_SESSION['uid']))
  {
    session_start();
  }
$host="sql202.epizy.com";
$user="epiz_21491325";
$pass="12357900";
$db_name="epiz_21491325_tinyplace";


$con=mysqli_connect($host,$user,$pass,$db_name) or die("<h1>Unable to connect todatabase</h1>");



?>