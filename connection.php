<?php
session_start();

$host = "localhost";
$user = "root";
$password = "";
$db = "pf_ppi";
$conn = mysqli_connect($host, $user, $password, $db) or die("DB not found.");


?>