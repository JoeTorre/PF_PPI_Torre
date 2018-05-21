<?php

include("connection.php");
$link = mysqli_connect("localhost", "root", "", "pf_ppi");
 
 $nombre = "";
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
    $id_usuario = $_SESSION['userid'];

    $carrito = mysqli_query($link,"SELECT * FROM carrito WHERE id_usuario = $id_usuario");

    while($hist=mysqli_fetch_array($carrito)){

        $idprod = $hist['ID_PRODUCTO'];
        $cant = $hist['CANTIDAD'];

        $inserthist = mysqli_query($link, "INSERT INTO historial(ID_USUARIO, ID_PRODUCTO, COMPRA, CANTIDAD) VALUES('$id_usuario', '$idprod', 1, '$cant')");
        $producto=mysqli_query($link, "SELECT * FROM productos WHERE ID_PRODUCTO = $idprod");

                while($rowproducto=mysqli_fetch_array($producto)){

                       $nuevacantidad = $rowproducto['EXISTENCIA']-$cant;
                       $actualizar = mysqli_query($link,"UPDATE productos SET EXISTENCIA = $nuevacantidad WHERE ID_PRODUCTO = $idprod");

                }
    }

    $eliminarcarrito = mysqli_query($link,"DELETE FROM carrito WHERE ID_USUARIO = $id_usuario");
    header('Location: success.php');
?>