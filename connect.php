<?php

$servernm="localhost";
$user="root";
$password="";
$databaseName="registration";

$con = new mysqli($servernm,$user,$password,$databaseName);
if($con->connect_error)
die("connected failed ". $con->connect_error);
else
echo("connected\n");
?>