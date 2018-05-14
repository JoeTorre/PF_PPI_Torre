<?php
include("connection.php");
$link = mysqli_connect("localhost", "root", "", "pf_ppi");
 
 $nombre = "";
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
    if (isset($_POST["givName"]))
    {
        $nombre = $_POST["givName"];
    }
    else
    {
        $nombre = null;
    }
    
    if (isset($_POST["givSurname"]))
    {
        $apellido = $_POST["givSurname"];
    }
    else
    {
        $apellido = null;
    }
    
    if (isset($_POST["givEmail"]))
    {
        $correo = $_POST["givEmail"];
    }
    else
    {
        $correo = null;
    }
   
    if (isset($_POST["givPassword"]))
    {
        $contra = $_POST["givPassword"];
    }
    else
    {
        $contra = null;
    }
   
    if (isset($_POST["givDate"]))
    {
        $fechnac = $_POST["givDate"];
    }
    else
    {
        $fechnac = null;
    }
   
    if (isset($_POST["givCC"]))
    {
        $num_tarjeta = $_POST["givCC"];
    }
    else
    {
        $num_tarjeta = null;
    }
   
    if (isset($_POST["givAddress"]))
    {
        $direccion = $_POST["givAddress"];
    }
    else
    {
        $direccion = null;
    }
    
    $utipo = "USER";
    $sql = "INSERT INTO usuarios(NOMBRE, APELLIDO, CORREO, CONTRA, FECHNAC, NUM_TARJETA, DIRECCION, UTIPO) VALUES ('" . $nombre . "', '" . $apellido . "', '" . $correo . "', '" . $contra . "', '" . $fechnac . "', '" . $num_tarjeta . "', '" . $direccion . "', '" . $utipo . "');";
     if(mysqli_query($link, $sql)){
     	header('Location: login.php');
    	//echo "Records inserted successfully.";
	} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}

?>