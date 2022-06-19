<?php

require_once("/server/data/ApacheData/timbotronics.xyz/mysql_helper.php");
require_once("/server/data/ApacheData/timbotronics.xyz/login.php");


$database = new mysql_helper();

$database->select(
    "Price",
    [
        "price",
        "date",
        "item",
        "link"
    ],
    [],
    "ORDER BY date DESC"
);

$prices = $database->fetch_all_assoc();

foreach($prices as &$price) {
    $price['date'] = date("n/j/Y h:i a", strtotime($price['date']));
    $price['price'] = "$" . number_format($price['price'], 2);
}

$prices = json_encode($prices);

echo $prices;