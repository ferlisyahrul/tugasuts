<?php 
$server = "localhost";
$user = "root";
$pass = "";
$db = "db_tugasuts";

$koneksi = mysqli_connect($server,$user,$pass,$db) or die("Error" . mysqli_error($conn));
?>