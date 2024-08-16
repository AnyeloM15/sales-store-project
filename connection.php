
<?php 
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "MAGE2004";
$dbname = "usuarios";

if(!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)){
    die("Failed to connect to database: " . mysqli_connect_error());
}
?>
