<?php
require_once("/server/data/ApacheData/timbotronics.xyz/login.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Timbotronics</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            margin: 0;
            min-width: 250px;
        }

        * {
            box-sizing: border-box;
        }
        table, tr, th, td {
            border: black 1px solid;
            border-collapse: collapse;
            padding:10px;
        }
        tbody th {
            background-color: #36c;
            color: #fff;
            text-align: left;
        }
        tbody tr:nth-child(odd) {
            background-color: #fff;
        }

        tbody tr:nth-child(even) {
            background-color: #D3D3D3;
        }
        table {
            width: 100%;
        }
        a {
            color: inherit;
            text-decoration: inherit;
        }
    </style>
</head>
<body>

<div id="myDIV" class="header">
    <h2 style="margin:5px">Item prices</h2>
</div>

<table id = "table" class = 'table'>
    <tbody id = "tbody">
        <tr><th>Date</th><th>Item (click name to open)</th><th>Price</th></tr>
    <tbody>
</table>


<script>
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
            let response = JSON.parse(xhttp.responseText);
            for (i of response) {
                let row = document.createElement("tr");
                let date = document.createElement("td");
                date.innerText = i.date;
                row.appendChild(date);

                let item = document.createElement("td");
                let itemElement = document.createElement("a");
                itemElement.innerText = i.item;
                itemElement.setAttribute("href", i.link);
                itemElement.setAttribute("target", "_blank");
                item.appendChild(itemElement);
                row.appendChild(item);

                let price = document.createElement("td");
                price.innerText = i.price;
                row.appendChild(price);

                document.getElementById("tbody").appendChild(row);
            }
        }
    };

    xhttp.open("POST", "pullAmazonBot.php", true);
    xhttp.send();
</script>

</body>
</html>


