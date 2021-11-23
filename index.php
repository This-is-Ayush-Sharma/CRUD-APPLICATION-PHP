<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        body{
            background: radial-gradient(blue,black);
        }

        fieldset{
            width: 400px;
            background-color: rgba(170, 166, 166, 0.479);
            padding: 30px;
        }
        input{
            padding: 7px 60px;
            background-color: orange;
            color:black;
            font-family: cursive;
            font-weight:bold;
            font-size:20px;
        }
        textarea{
            height:70px;
            width:300px;
            background-color: orange;
            color:black;
            font-family: cursive;
            font-weight:bold;
            font-size:20px;
        }
        button{
            padding: 10px 90px;
            border-radius: 7px;
            background-color: rgb(0, 255, 200);
            color: black;
        }
        legend{
            color: white;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact form</title>
</head>

<body>
    <br><br><br><br><br><br><br>
    <center>
        <fieldset>
            <legend>Contact Form</legend>
            <form action="contact.php" method="post">
                <center>
                    <input type="text" name="name" placeholder="Name" /><br><br>
                    <input type="email" name="email" placeholder="email" /><br><br>
                    <input type="number" name="number" placeholder="number" /><br><br>
                    <textarea name="message" placeholder="Message" cols="30" rows="10"></textarea><br><br>
                    <button>Send</button>
                </center>
            </form>
        </fieldset>
    </center>
</body>
</html>