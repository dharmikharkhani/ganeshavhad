<?php
$server_name="localhost";
$name="root";
$password="";
$db="test";
$conn = new mysqli($server_name, $name, $password, $db);
    if($conn->connect_error){
    die("connection Error!!!!!!".$connect_error);
    }
?>