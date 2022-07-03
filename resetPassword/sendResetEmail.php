<?php
require_once("/server/data/ApacheData/timbotronics.xyz/mysql_helper.php");

$usersEmail = $_POST['email'];

$database = new mysql_helper();

$userRecord = $database->fetch_assoc('SELECT email FROM User WHERE email = ?', [$usersEmail]);


if ($userRecord === NULL) {
    header('Location: /resetPassword?failed=1');
    exit();
}

require_once("/server/data/ApacheData/timbotronics.xyz/Email.php");
require_once("/server/data/ApacheData/timbotronics.xyz/Curl.php");

//code generator
$code = bin2hex(random_bytes(10));

$link = '<a href = "http://timbotronics.xyz/resetPassword/passwordReset.php?code=' . $code . '" >Reset Password</a>';

Email::send([
    'to' => $usersEmail,
    'subject' => 'Password Reset',
    'message' => "Click the below link to reset password.<br>{$link}"
]);

$database->insert('PasswordReset', ['code' => $code, 'email' => $usersEmail]);



echo 'Check Email!';

//2a8629fbace8f658dff2