<?php
/*$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "cricguru";
$dBName = "shopping";

$connection = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if(!$connection){
    die("Connection Failed: ".mysqli_connect_error());
}*/

$connection = new PDO("mysql:host=localhost;dbname=shopping", "root", "cricguru");

?>