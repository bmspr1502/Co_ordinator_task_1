<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "milkshake";

$con = new mysqli($host, $user, $password, $database);

if($con->connect_error){
    die("Connection failed");
}