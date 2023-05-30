<?php
    session_start();
    define('URL', 'http://localhost');

    $conn = mysqli_connect('localhost', 'root', '', 'mydb') or die(mysqli_error());

error_reporting(E_ERROR | E_WARNING | E_PARSE);
?>