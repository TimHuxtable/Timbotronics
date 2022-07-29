<?php

require_once("/Server/Data/ApacheData/timbotronics.xyz/mysql_helper.php");

$email = $_POST["email"];

if (isset($_GET['failed'])) {
    echo '<h2> Invalid Email! </h2>';
}

    echo <<<EOT
<!DOCTYPE html>
<html>
<head>
    <title>Reset Password</title>
    <style>
        .button {
            background-color: #23AEDF;
            border: none;
            color: black;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }
        body {
            text-align: center;
            background: url(/resources/LoginScreen.jpg) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        form {
            display: inline-block;
            margin-top: 22%;
        }
        input {
        margin-bottom: 3px;
        }
    </style>
</head>
<body>
<div class="container">
    <form action = "sendResetEmail.php" method = post>
        <div class="form-input">
            <input type="text" name="email" placeholder="Enter email address." required/>
        </div>
        <input type="submit" type="submit" value="Reset" class="btn-login"/>
    </form>
</div>
</body>
</html>
EOT;