<?php
    include "connect.php";
    $fldId=$_POST['id'];
    $fldName=$_POST['name'];
    $fldEmail=$_POST['email'];
    $fldPhone=$_POST['number'];
    $fldMessage=$_POST['message'];

    $query = "UPDATE registration SET fldName='$fldName',fldEmail='$fldEmail',fldPhone=$fldPhone,fldMessage='$fldMessage' WHERE ID=$fldId;";
    if(mysqli_query($con,$query))
    echo("successfully updated into database\n");
    else
    echo("failed");
    header("location:fetch.php");
?>