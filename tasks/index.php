<?php 
    session_start();
    if(!isset($_SESSION['user'])){header("Location: ../login.php");}else{require_once('dashboard.php');}
?>