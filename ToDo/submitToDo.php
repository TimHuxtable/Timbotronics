<?php
require_once("/server/data/ApacheData/timbotronics.xyz/mysql_helper.php");
require_once("/server/data/ApacheData/timbotronics.xyz/login.php");
// the "Task" here refers to this part -><input name = "Task" type="text" id="myInput" placeholder="Title...">
$task = $_POST["Task"];

$database = new mysql_helper();

//reads users from the table
$database->select(
    "Session",
    [
        "userId",
    ],
    [
        //key is "sessionKey" right side is value
        "sessionKey"=>$_COOKIE["Timbotronics"]
    ]
);
$sessionRecord = $database->fetch_assoc();
//This "inserts" info into the database based on the table name and column name
$database->insert(
    "ToDo",
    [
        //"Task" is the name of the column in the database.
        "Task"=>$task,
        "userId"=>$sessionRecord["userId"],
        "dateCreated" => "getdate()",
    ]
);
header("Location: /ToDo");
exit();