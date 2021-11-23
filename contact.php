<?php

    include "connect.php";

    $fldName=$_POST['name'];
    $fldEmail=$_POST['email'];
    $fldPhone=$_POST['number'];
    $fldMessage=$_POST['message'];

    $query = "INSERT INTO `registration` (`id`,`fldName`,`fldEmail`,`fldPhone`,`fldMessage`)
    VALUES ('0','$fldName','$fldEmail',$fldPhone,'$fldMessage');";
    if(mysqli_query($con,$query))
    echo("successfully inserted into database\n");
    else
    echo("failed");
    header("location:fetch.php");

?>