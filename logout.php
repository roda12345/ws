<?php 
include 'config.php';
session_start();
if (session_destroy) {
    header("location: login.php");
}
?>