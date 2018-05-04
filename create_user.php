<?php

include("connection.php");

$link = mysqli_connect("localhost", "root", "", "pf_ppi");
 
 $nombre = "";
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

    $nombre = $_POST["givName"] ?? "";
    $apellido = $_POST["givSurname"] ?? "";
    $correo = $_POST["givEmail"] ?? "";
    $contra = $_POST["givPassword"] ?? "";
    $contra2 = $_POST["givPassword2"] ?? "";
    $fechnac = $_POST["givDate"] ?? "";
    $num_tarjeta = $_POST["givCC"] ?? "";
    $direccion = $_POST["givAddress"] ?? "";
    $utipo = "USER";

    $sql = "INSERT INTO usuarios(NOMBRE, APELLIDO, CORREO, CONTRA, FECHNAC, NUM_TARJETA, DIRECCION, UTIPO) VALUES ('$nombre', '$apellido', '$correo', '$contra', '$fechnac', '$num_tarjeta', '$direccion', '$utipo');";
    if (!mysqli_query($conn, $sql)) {
    	die('Error: ' . mysqli_error($conn));
    }
    //header('Location: login.php');

    if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
	} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}

?>