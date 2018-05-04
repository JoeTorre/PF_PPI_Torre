<?php
session_start(); // Starting Session
$messlog = $messreg = '';

$nombre = $apellido = $correo = $contra = $fechnac = $num_tarjeta = $direccion = $utipo = ''; //Initializing column variables.

if (isset($_POST['submit_login'])) {
  if (empty($_POST['givEmail']) || empty($_POST['givPassword'])) {
    $messlog = "<BR><div class=\"alert alert-danger\"><strong>ERROR:</strong> Wrong email or password.</div>";
  }else{
    // Define $username and $password
    $Emailgiv = $_POST['givEmail'];
    $Passwordgiv = $_POST['givPassword'];
    // Establishing Connection with Server by passing server_name, user_id and password as a parameter
    $connection = mysqli_connect("localhost", "root", "", "pf_ppi");
    // SQL query to fetch information of registerd users and finds user match.
    $query = mysqli_query($connection, "SELECT nombre FROM usuarios WHERE contra = '$Passwordgiv' AND correo ='$Emailgiv'");
    $rows = mysqli_num_rows($query);
    if ($rows == 1) {
      $_SESSION['login_user'] = $Emailgiv; // Initializing Session
      header("location: index_pfppi.html"); // Redirecting To Other Page
    } else {
      $messlog = "<div class=\"alert alert-danger\"><strong>ERROR:</strong>Invalid email or password.</div>";
    }
    mysqli_close($connection); // Closing Connection
  }
  }else if (isset($_POST['submit_register'])){
    $nombre = $_POST["givName"];
    $apellido = $_POST["givSurname"];
    $correo = $_POST["givEmail"];
    $contra = $_POST["givPassword"];
    $contra2 = $_POST["givPassword2"];
    $fechnac = $_POST["givDate"];
    $num_tarjeta = $_POST["givCC"];
    $direccion = $_POST["givAddress"];
    $utipo = "USER";

  if (empty($_POST['givName']) || empty($_POST['givSurname']) || empty($_POST['givEmail']) || empty($_POST['givPassword']) || empty($_POST['givDate'])
        || empty($_POST['givCC']) || empty($_POST['givAddress'])) {
    // verificar si los campos no estan en blanco
    $messreg = "<div class=\"alert alert-danger\"><strong>ERROR:</strong> Fill in all the inputs.</div>";
  }else{
    // verificar si los campos tienen los datos correctos
    if (!preg_match("/^[a-zA-Z ]*$/",$nombre) || !preg_match("/^[a-zA-Z ]*$/",$apellido)) {
      $nombre = $apellido = '';
      $messreg = "<div class=\"alert alert-danger\"><strong>ERROR:</strong> Solo se permiten letras y espacios en blanco en nombre y apellido.</div>";
    }else if ($givPassword != $givPassword2){
      $givPassword = $givPassword2 = '';
      $messreg = "<div class=\"alert alert-danger\"><strong>ERROR:</strong>Passwords don't match.</div>";
    }else if ( strlen($num_tarjeta) < 15) {
      $num_tarjeta = '';
      $messreg = "<div class=\"alert alert-danger\"><strong>ERROR:</strong>Wrong Credit Card Number.</div>";
    }else{
      // agregar los datos a la base de datos
      $connectionreg = mysqli_connect("localhost", "root", "", "pf_ppi");
      $queryreg = mysqli_query($connectionreg, "SELECT * FROM usuarios WHERE correo ='$correo'");
      $rowsreg = mysqli_num_rows($queryreg);
      if ($rowsreg == 1) {
        $correo = '';
        $messreg = "<div class=\"alert alert-danger\"><strong>ERROR:</strong>The given Email is already registered.</div>";
        mysqli_close($connectionreg);
      }else{
        $queryreg = mysqli_query($connectionreg, "INSERT INTO usuarios (nombre, apellido,
            correo, contra, fechnac, num_tarjeta, direccion, utipo) VALUES ('$nombre', '$apellido',
            '$correo', '$contra', '$fechnac', '$num_tarjeta', '$direccion', '$utipo')");
        mysqli_close($connectionreg);
        $messreg = "<div class=\"alert alert-success\"><strong>FELICIDADES:</strong> Success!.</div>";
      }
    }
  }
}
?>