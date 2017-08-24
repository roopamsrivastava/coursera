<?php
$servername="localhost";
$username="root";
$password="";
$databasename="coursera";
//create connection
$conn = new mysqli($servername,$username,$password,$databasename);
//check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
