
<?php

$servername = "edo4plet5mhv93s3.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$username = "z4whsl2q06qpl5b2";
$password = "sn2b3kl82st9bvcx";
$dbname = "hp4w5e4r8da9o18r";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
