<?php
include("connection.php");
$link = mysqli_connect("localhost", "root", "", "pf_ppi");
 
 $nombre = "";
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
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

    if (isset($_POST["givName"])) {
        $myusername = $_POST["givName"];
    }
    else
    {
        $myusername = null;
    }
    
    $query = mysqli_query($link, "SELECT * FROM usuarios WHERE correo = '$correo' AND contra = '$contra'");


    while($row = mysqli_fetch_array($query)) {
     $idu = $row['ID_USUARIO'];
     $nombre = $row['NOMBRE'];
     $apellido = $row['APELLIDO'];
     $correo = $row['CORREO'];
     $fechnac = $row['FECHNAC'];
   }

    $count = mysqli_num_rows($query);


     if($count == 1){
        session_start();
        $_SESSION['login_user'] = $nombre;
        $_SESSION['userid'] = $idu;
        $_SESSION['logged-in'] = true;
     	header('Location: index_pfppi.php');
    	//echo "Records inserted successfully.";
	} else{
    echo "ERROR: Could not able to execute. " . mysqli_error($link);
	}

?>