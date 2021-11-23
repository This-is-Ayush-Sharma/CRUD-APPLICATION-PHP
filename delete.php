<?php
    include "connect.php";
    $id=$_GET['id'];
    $query="DELETE FROM `registration` where id=$id;";
    $getval=mysqli_query($con,$query);
    header("location:fetch.php");
?>