<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/mysql_helper.php");

$usersEmail = $_POST['email'];

$database = new mysql_helper();

$userRecord = $database->fetch_assoc('SELECT email FROM User WHERE email = ?', [$usersEmail]);


if ($userRecord === NULL) {
    header('Location: /resetPassword?failed=1');
    exit();
}

require_once($_SERVER["DOCUMENT_ROOT"] . "/Email.php");
require_once($_SERVER["DOCUMENT_ROOT"] . "/Curl.php");

Email::send([
    'to' => $usersEmail,
    'subject' => 'Password Reset',
    'message' => 'Test'
]);

echo 'password reset string';