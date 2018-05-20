<?php

include("connection.php");
$link = mysqli_connect("localhost", "root", "", "pf_ppi");
 
 $nombre = "";
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


	$query = mysqli_query($link, "SELECT ALL FROM carrito WHERE ID_USUARIO = '". $_SESSION['userid'] ."'");


    while($row = mysqli_fetch_array($query)) {
     $idu = $row['ID_USUARIO'];
     $idprod = $row['ID_PRODUCTO'];
     $cantidad = $row['CANTIDAD'];
     $compra = 1;

     
     $queryy = mysqli_query($link, "INSERT INTO historial(ID_USUARIO, ID_PRODUCTO, COMPRA, CANTIDAD) VALUES ('" . $_SESSION['userid'] . "', '$idprod', '$compra', '$cantidad');");

     $count = mysqli_num_rows($queryy);

    if($count == 1){
    	echo "Records inserted successfully.";
	} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}

}


     	//header('Location: index_pfppi.php');


?>