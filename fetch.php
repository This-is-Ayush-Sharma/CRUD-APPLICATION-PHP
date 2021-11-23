<?php

    include "connect.php";
    
    // if($getval)
    //  echo"got it";
    // else
    // echo "failed";
    // echo($values[0]." ".$values[1]." ".$values[2]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body{
            background: radial-gradient(blue,black);
        }
        table{
            background-color:pink;
            padding: 7px;
            border-radius:7px;
            border:2px solid red;
        }
        td{
            padding: 15px;
            border-radius:7px;
            background-color: orange;
            color:black;
            font-family: cursive;
            font-weight:bold;
            font-size:20px;
        }
        h1{
            color:white;
            font-family: cursive;
            font-weight:bold;
            font-size:20px;
        }
        #carry
        {
            padding: 10px 90px;
            border-radius: 7px;
            background-color: rgb(0, 255, 200);
            color: black;
            text-decoration:none;
            font-family: cursive;
            font-weight:bold;
            font-size:20px;
        }
        marquee{
            color:white;
            font-family: cursive;
            font-weight:bold;
            font-size:20px;
        }
        a{
            text-decoration:none;
            color:red;
        }
        a:hover
        {
            background-color: black;
            color:white;
        }
        button{
            padding: 5px 20px;
            font-family: cursive;
            font-weight:bold;
            font-size:15px;
            border-radius: 7px;
        }
        button:hover{
            background-color: black;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data in db</title>
</head>
<body>
    <center>
    <h1>Reg details</h1>
    <marquee>press edit to edit data and delete to delete data</marquee>
    <br><br><br>
    <a href="index.php" id="carry"> Enter new Data</a>
    <br><br><br>
    <table border="2">
        <tr>
            <td><center>Id No.</center></td>
            <td><center>Name</center></td>
            <td><center>Email</center></td>
            <td><center>Phone</center></td>
            <td><center>Message</center></td>
            <td><center>action-Edit</center></td>
            <td><center>action-Delete</center></td>
        </tr>
        <?php
            $query="SELECT * FROM `registration`;";
            $getval=mysqli_query($con,$query);
            
            while($data = mysqli_fetch_array($getval))
            {
                ?>
                <tr>
                   <td><center><?php echo $data['id']?></center></td>
                    <td><center><?php echo $data['fldName']?></center></td>
                    <td><center><?php echo $data['fldEmail']?></center></td>
                    <td><center><?php echo $data['fldPhone']?></center></td>
                    <td><center><?php echo $data['fldMessage']?></center></td>
                    <td><center><button><a href="edit.php?id=<?php echo $data['id']?>">edit</a></button></center></td>
                    <td><center><button><a href="delete.php?id=<?php echo $data['id']?>">Delete</a></button></center></td>
                <tr>
            <?php
            }
            ?>
    </table>
    </center>
</body>
<br><br>
</html>