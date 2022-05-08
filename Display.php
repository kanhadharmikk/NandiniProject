<?php

    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0px;
            padding: 0px;
            font-family: 'Merriweather', serif;
            /* background: linear-gradient(20deg, rgb(217, 255, 252), white) */
        }
        
        .main {
            display: flex;
        }
        
        .left {
            margin: 250px 90px;
        }
        
        .left p {
            font-size: 25px;
        }
        
        label {
            font-size: 50px;
        }
        
        span {
            color: rgb(72, 136, 255);
            font-weight: 600;
        }
        
        .right img {
            margin-top: 80px;
        }
        
        .btn {
            font-weight: 600;
            font-size: 15px;
            padding: 8px 40px;
            background-color: transparent;
            color: blue;
            border: 2px solid blue;
            border-radius: 2px;
            cursor: pointer;
            box-shadow: 2px 2px 2px rgb(151, 151, 255);
        }
        
        .btn:hover {
            border: none;
            color: white;
            background-color: blue;
        }
    </style>
</head>

<body>
   
    <div class="main">
        <div class="left">

            <label>Welcome to <span>ALL RIGHT</span></label>
            <p>We hope you and your's are well !!</p>
            <a href="login_form.php"><button class="btn">Next</button></a>

        </div>

        <div class="right">
            <img src="doctor2.jpg" alt="" srcset="">
        </div>
    </div>
</body>

</html>