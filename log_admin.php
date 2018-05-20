<?php
include("connection.php");
$link = mysqli_connect("localhost", "root", "", "pf_ppi");
 
 $nombre = "";
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
    
    if (isset($_POST["adminEmail"]))
    {
        $correo = $_POST["adminEmail"];
    }
    else
    {
        $correo = null;
    }
   
    if (isset($_POST["adminPassword"]))
    {
        $contra = $_POST["adminPassword"];
    }
    else
    {
        $contra = null;
    }

    if (isset($_POST["adminName"])) {
        $myusername = $_POST["adminName"];
    }
    else
    {
        $myusername = null;
    }
    
    $query = mysqli_query($link, "SELECT * FROM usuarios WHERE correo = '$correo' AND contra = '$contra' AND utipo = 'ADMIN'");


    while($row = mysqli_fetch_array($query)) {
     $idu = $row['ID_USUARIO'];
     $nombre = $row['NOMBRE'];
     $apellido = $row['APELLIDO'];
     $correo = $row['CORREO'];
     $utipo = $row['UTIPO'];
   }

    $count = mysqli_num_rows($query);


     if($count == 1){
        session_start();
        $_SESSION['login_user'] = $nombre;
        $_SESSION['userid'] = $idu;
        $_SESSION['logged-in'] = true;
        $_SESSION['power'] = true;
     	header('Location: admin_home.php');
    	//echo "Records inserted successfully.";
	} else{
    echo "ERROR: Not able to execute. " . mysqli_error($link);
	}

?>