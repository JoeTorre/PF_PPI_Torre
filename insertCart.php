<?php
include("connection.php");
$link = mysqli_connect("localhost", "root", "", "pf_ppi");
 
 $nombre = "";
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
    
    if (isset($_SESSION["liq-prod"]))
    {
        $idproducto = $_SESSION["liq-prod"];
    }
    else
    {
        $idproducto = null;
    }
    echo $idproducto;
    $sql = "INSERT INTO carrito(ID_USUARIO, ID_PRODUCTO, CANTIDAD) VALUES ('" . $_SESSION['userid'] . "', '" . $idproducto . "', 1);";

     if(mysqli_query($link, $sql)){
     	header('Location: products_liq.php');
    	//echo "Records inserted successfully.";
	} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}
?>