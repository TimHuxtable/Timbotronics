<?php

require_once($_SERVER["DOCUMENT_ROOT"] . "/mysql_helper.php");
require_once($_SERVER["DOCUMENT_ROOT"] . "/login.php");


$database = new mysql_helper();

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

$database->delete(
    "ToDo",
    [
        "Task"=>$_POST["task"],
        "userId"=>$sessionRecord["userId"],
    ]
);

