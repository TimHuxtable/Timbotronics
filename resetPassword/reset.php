<?php
require_once("/Server/Data/ApacheData/timbotronics.xyz/mysql_helper.php");

$usersEmail = $_POST['email'];

$database = new mysql_helper();

$userRecord = $database->fetch_assoc('SELECT email FROM User WHERE email = ?', [$usersEmail]);


if ($userRecord === NULL) {
    header('Location: /resetPassword?failed=1');
    exit();
}

require_once("/Server/Data/ApacheData/timbotronics.xyz/Email.php");
require_once("/Server/Data/ApacheData/timbotronics.xyz/Curl.php");

Email::send([
    'to' => $usersEmail,
    'subject' => 'Password Reset',
    'message' => 'Test'
]);

echo 'password reset string';