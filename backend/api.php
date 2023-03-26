<?php

error_reporting(E_ERROR | E_PARSE);

$l = $_GET['login'];
$p = $_GET['password'];

$base->login = $_GET['login'];
$base->pass = $_GET['password'];
$base->status = "failure";

$conn = mysqli_connect("localhost", "root", "", "obfuscator");
$result = mysqli_query($conn, "SELECT * FROM `obfuscator` WHERE `login`='$l' AND `password`='$p'");

if(mysqli_num_rows($result) > 0) {
    $base->status = "success";
}

$myJSON = json_encode($base);

echo $myJSON;
    
?>