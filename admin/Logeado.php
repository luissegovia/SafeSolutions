<?php
error_reporting(0);
session_start();
if (!isset($_SESSION['usuario']))
    header("location: ../index.php");
?>