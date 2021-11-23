<?php
    $age=$_POST['age'];
    echo($age);
    for($x=0;$x<=$age;$x++)
    {
        if($x%2==0 && $x!=0)
        echo("$x<br>");
    }
    // while($age)
    // {
        // echo("$age<br>");
        // $age--;
    // }
    // do{
    //     echo("$age<br>");
    //     $age--;
    // }
    // while($age);

?>