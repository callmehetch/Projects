
<?php

$servername = "sql308.epizy.com";
$username = "epiz_22073457";
$password = "playboy7891";
$dbname = "epiz_22073457_leave";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
