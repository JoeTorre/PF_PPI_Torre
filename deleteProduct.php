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
    echo $idprod;
    $sql = "DELETE FROM carrito WHERE id_producto = '$idprod';";

     if(mysqli_query($link, $sql)){
     	header('Location: cart.php');
    	//echo "Records inserted successfully.";
	} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}
?>