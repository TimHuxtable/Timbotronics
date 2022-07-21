<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/login.php");
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
            padding: 10px;
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

        .css-selector-demo {
            width:100px;
            height:100px;
            background-color: mediumpurple;
        }
        .css-block-two {
            width:100px;
            height:100px;
            background-color: gold;
        }
    </style>
</head>
<body>

<script src = 'index.js'></script>

<div class = 'css-selector-demo'></div>

<div class = 'css-block-two'></div>

<script>
    anime({
        targets: '.css-selector-demo',
        left: '0px',
        translateX: 1000,
        duration: 3000,
        easing: 'easeInOutQuad',
        direction: 'alternate',
        loop: true
    });

    anime({
        targets: '.css-block-two',
        left: '300px',
        translateX: 700,
        duration: 3000,
        easing: 'easeInOutQuad',
        direction: 'alternate',
        rotate: 540,
        width: '100%', // -> from '28px' to '100%',
        loop: true
    });
</script>

</body>
</html>
