<?php

require_once("/server/data/ApacheData/timbotronics.xyz/mysql_helper.php");
require_once("/server/data/ApacheData/timbotronics.xyz/login.php");


$database = new mysql_helper();
//
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

