<?php
require_once("/server/data/ApacheData/timbotronics.xyz/login.php");

echo <<<EOT
<!DOCTYPE html>
<html>
<head>
    <title>TimboTronics</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cambo&display=swap');
        .header{
            margin-top:10%;
            text-align: center;
            background-color: white;
            display: inline-block;
            padding: 50px;
            border-radius: 10px;
        }
        .outer{
            width:100%;
            display: flex;
            justify-content: center
        }
        h1, h3, p{
            font-family: 'Times New Roman', serif;
        }
        p{
            font-size:24px;
        }
        .list {
            display: inline-block;
            width:100%;
            display: flex;
            justify-content: center
        }
        ul {
            text-align: left;
        }
        body{
            background: url(/resources/PortlandHomie.png) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
    </style>
</head>
<body>
<div class = 'outer'>
    <div class = 'header'>
        <h1>Meme Storage</h1>
        <div class = 'list'>
            <ul>
                <li><a target = '_blank' href = "https://www.youtube.com/watch?v=BPcC7cHEhzw&list=WL&index=89&ab_channel=LivestreamCentral">Charles Cheese Says Poggers</a></li>
                <li><a target = '_blank' href = "https://twitter.com/iamsteveharvey/status/1293590381515268096">Drippy</a></li>
                <li><a target = '_blank' href = 'https://www.youtube.com/watch?v=DHFDmKeOwZo&ab_channel=Spongy'>Cosmo</a></li>
                <li><a target = '_blank' href = 'https://www.youtube.com/watch?v=QFgcqB8-AxE&list=WL&index=27&ab_channel=Kazwire'>But the people are...</a></li>
            </ul>
        </div>
    </div>
</div>
</body>
</html>
EOT;

