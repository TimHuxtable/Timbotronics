<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/mysql_helper.php");
$game = $_POST["game"];
$score = $_POST["score"];

$database = new mysql_helper();

$database->insert(
    "GameRanking",
    [
        "game"=>$game,
        "score"=>$score,
    ]
);
header("Location: /gameRankings");
exit();