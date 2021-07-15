<?php 
session_start();

$hostname = "localhost";
$username = "root";
$password = "";
$database = "laksn_db";

$con = mysqli_connect($hostname, $username, $password, $database);
?>