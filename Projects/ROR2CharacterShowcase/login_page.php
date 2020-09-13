<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Page</title>
    <meta charset="utf-8">
    <script src="jslibs/jquery-2.1.4.min.js"></script> 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">

    <style>
        body{
            color: black;
            background-color: #00527e;
            background-image: url(tec_background.png);
            background-size:cover;
        }
        #main_wrapper{
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            margin-top: 15%;
            margin-bottom: 15%;
            margin-left: 30%;
            margin-right: 30%;
            text-align: center;
            background-color: #c6c6c6;
            border-radius: 10%;
            box-shadow: 0 0 10px 10px #0a0b0d;
            padding: 10px;
        }
        h1{
            margin: 0;
            margin-top: 20px;
            text-decoration: underline;
        }
        form{
            margin: 0;
            text-align: center;
        }
        #info_div{
            padding: 5%;
            text-align: center;
        }
        .info{
            margin-top: 3%;
            margin-bottom: 3%;
        }
        #error_div{
            color: red;
        }
    </style>
    
</head> 
<body>
    <div id="main_wrapper">
        <h1>Login</h1>
        <?php
            if ($error) {
                print "<div id='error_div'>$error</div>\n";
            }
        ?>
        <form action="login.php" method="POST">
            <input type="hidden" name="action" value="do_login">
            <div id="info_div">
                <div class="info">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" autofocus value="<?php print $username; ?>">
                </div>
                <div class="info">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password">
                </div>
                <div class="info">
                    <input type="submit" value="Submit">
                </div>
            </div>
        </form>
    </div>
</body>
</html>
