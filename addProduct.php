<?php
include("connection.php");
$link = mysqli_connect("localhost", "root", "", "pf_ppi");
 
 $nombre = "";
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
    if (isset($_POST["nombre"]))
    {
        $nombre = $_POST["nombre"];
    }
    else
    {
        $nombre = null;
    }
    
    if (isset($_POST["medida"]))
    {
        $medida = $_POST["medida"];
    }
    else
    {
        $medida = null;
    }
    
    if (isset($_POST["descripcion"]))
    {
        $descripcion = $_POST["descripcion"];
    }
    else
    {
        $descripcion = null;
    }
   
    if (isset($_POST["imagen"]))
    {
        $imagen = $_POST["imagen"];
    }
    else
    {
        $imagen = null;
    }
   
    if (isset($_POST["precio"]))
    {
        $precio = $_POST["precio"];
    }
    else
    {
        $precio = null;
    }
   
    if (isset($_POST["existencia"]))
    {
        $existencia = $_POST["existencia"];
    }
    else
    {
        $existencia = null;
    }
   
    if (isset($_POST["marca"]))
    {
        $marca = $_POST["marca"];
    }
    else
    {
        $marca = null;
    }

    if (isset($_POST["origen"]))
    {
        $origen = $_POST["origen"];
    }
    else
    {
        $origen = null;
    }

    
    $utipo = "USER";
    $sql = "INSERT INTO productos(NOMBRE, MEDIDA, DESCRIPCION, IMAGEN, PRECIO, EXISTENCIA, MARCA, ORIGEN) VALUES ('" . $nombre . "', '" . $medida . "', '" . $descripcion . "', '" . $imagen . "', '" . $precio . "', '" . $existencia . "', '" . $marca . "', '" . $origen . "');";
    
     if(mysqli_query($link, $sql)){
     	header('Location: admin_home.php');
    	//echo "Records inserted successfully.";
	} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}

?>