<?php
include("connection.php");
$link = mysqli_connect("localhost", "root", "", "pf_ppi");
 
 $nombre = "";
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
    
    if (isset($_POST["delete"]))
    {
        $idprod = $_POST["delete"];
    }
    else
    {
        $idprod = null;
    }

    if (isset($_POST["update"]))
    {
        $cantidad = $_POST["update"];
    }
    else
    {
        $cantidad = null;
    }

    echo $idprod;
    $sql = "UPDATE carrito SET cantidad = '$cantidad' WHERE id_producto = '$idprod';";

     if(mysqli_query($link, $sql)){
     	header('Location: cart.php');
    	//echo "Records inserted successfully.";
	} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}
?>