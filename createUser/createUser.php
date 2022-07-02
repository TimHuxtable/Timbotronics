<?php
//Showing me the errors.
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

//path the php file with the helper function, we are calling a function
//from a different file so we need "require_once" to give this file access to another file.
require_once("/server/data/ApacheData/timbotronics.xyz/mysql_helper.php");
$username = $_POST["username"];
$password = $_POST["password"];
$firstname = $_POST["firstName"];
$lastname = $_POST["lastName"];
$email = $_POST["email"];
//making password encoded for safety of account.
$passwordHash = password_hash($password,PASSWORD_DEFAULT);
$database = new mysql_helper();

//inserting into the database table. We give it the name of the table
//and the info that we are putting into the columns of the table
//ex "username" is the key, $username is the value. these are dictionaries but called associative array.
$database->insert(
    "TimboTronics.User",
    [
        "username"=>$username,
        "passwordHash"=>$passwordHash,
        "firstName"=>$firstname,
        "lastName"=>$lastname,
        "email" => $email
    ]
);
//takes you back to initial page.
header("Location: /");
exit();