<?php

session_start();

if (isset($_SESSION['user'])) {
	$nombre = $_SESSION['user']['nombre'];
	$apellido = $_SESSION['user']['apellido'];
}

?>