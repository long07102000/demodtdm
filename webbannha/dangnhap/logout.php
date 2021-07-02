<?php
include 'config.php';
unset($_SESSION['username']);
header('Location:../index.php');
?>