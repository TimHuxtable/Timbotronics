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

$database->select(
    "ToDo",
    [
        "Task",
    ],
    [
        "userId"=>$sessionRecord["userId"],
    ]
);

$listOfTasks = $database->fetch_all_assoc();

$listOfTasks = json_encode($listOfTasks);

echo $listOfTasks;