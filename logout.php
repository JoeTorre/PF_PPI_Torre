<?php
session_start();
session_destroy();
$_SESSION["logged-in"] == false;
header("Location: index_pfppi.php");
?>
