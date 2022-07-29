<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
require_once($_SERVER["DOCUMENT_ROOT"] . "/mysql_helper.php");
$database = new mysql_helper();

//checking if username is key in the $_POST array. If not send to login.

if (isset($_POST["username"])){
// see if typed in username is in the table of usernames. Table->column->filters.
//getting user record from given username, finds username and pulls up its "file"
    $database->select(
        "User",
        [
            "userId",
            "username",
            "passwordHash"
        ],
        [
            "username"=>$_POST["username"]
        ]
    );

    $userRecord = $database->fetch_assoc();
//hashing the input password and checking it with the hash that is inside the database.
//hashed passwords are one way, we will always get the same hashed password from the given one, can't go backwards.
    if ($userRecord === NULL || !password_verify($_POST["password"],$userRecord["passwordHash"])){
        displayLogin();
    }
    else {
        $sessionKey = bin2hex(random_bytes(32));
        $database->insert(
            "Session",
            [
                "userId" => $userRecord["userId"],
                "sessionKey" => $sessionKey
            ]
        );
        //sets cookie name and gives it an expiration date
        setcookie("Timbotronics",$sessionKey,time()+60*60*24*365,"/");
        $_COOKIE["Timbotronics"] = $sessionKey;
    }
}


if (!isset($_COOKIE["Timbotronics"])){
    displayLogin();
}
$database->select(
    "Session",
    [
        "userId",
    ],
    [
        "sessionKey"=>$_COOKIE["Timbotronics"]
    ]
);
$sessionRecord = $database->fetch_assoc();
if ($sessionRecord == NULL){
    displayLogin();
}

$database->select(
    "User",
    [
        "firstName",
        "lastName",
    ],
    [
        "userId"=>$sessionRecord["userId"]
    ]
);
$nameRecord = $database->fetch_assoc();

$database->insert(
    "accessLog",
    [
        "userId"=>$sessionRecord["userId"],
        "date"=>"getdate()",
        "url"=>$_SERVER["REQUEST_URI"],
        "name"=>$nameRecord["firstName"] . " " . $nameRecord["lastName"],
    ]
);

function displayLogin(){
    echo <<<EOT
<!DOCTYPE html>
<html>
<head>
    <title>Let me in plz</title>
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
    <form action = "" method = post>
        <div class="form-input">
            <input type="text" name="username" placeholder="Enter the User Name"/>
        </div>
        <div class="form-input">
            <input type="password" name="password" placeholder="password"/>
        </div>
        <input type="submit" type="submit" value="Login" class="btn-login"/>
    </form>
    <br><a href = '/createUser'><button >Create User</button></a>
    <br>   
    <br><a href = '/resetPassword'><button >Forgot Password!</button></a>
</div>
</body>
</html>
EOT;
    die();
}