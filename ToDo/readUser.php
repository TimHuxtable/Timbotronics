<?php


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
    "User",
    [
        "username",
    ],
    [
        "userId"=>$sessionRecord["userId"]
    ]
);

$userRecord = $database->fetch_assoc();

echo $userRecord["username"];
