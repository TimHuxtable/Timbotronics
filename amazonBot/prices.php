<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/mysql_helper.php");

$inputs = file_get_contents("php://input");
$inputs = json_decode($inputs, TRUE);

$price = $inputs['price'];
$price = str_replace("$", "", $price);
$price = floatval($price);

$link = $inputs['link'];
$item = trim($inputs['item']);

$database = new mysql_helper();

$database->insert(
    "Price",
    [
        "price"=>$price,
        "date"=>"getDate()",
        "item"=>$item,
        "link"=>$link
    ]
);

exit();