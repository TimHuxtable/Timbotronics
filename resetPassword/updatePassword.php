<?php

require_once($_SERVER["DOCUMENT_ROOT"] . "/mysql_helper.php");

$database = new mysql_helper();

$userRecord = $database->fetch_assoc('SELECT email FROM PasswordReset WHERE code = ?', [$_POST['code']]);

$passwordHash = password_hash($_POST['newPassword'],PASSWORD_DEFAULT);

$database->update('User', ["passwordHash"=>$passwordHash], ['email'=>$userRecord['email']]);

header('Location: /login.php');
exit();