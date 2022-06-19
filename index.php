<?php
require_once("/server/data/ApacheData/timbotronics.xyz/login.php");
    echo <<<EOT

<!DOCTYPE html>
<html>
<head>
	<title>TimboTronics</title>
	<style>
	    .button {
            background-color: #23AEDF;
            border: none;
            color: black;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }
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
			background: url(/resources/mainPageBackground.jpg) no-repeat center center fixed;
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
			<h1>Welcome to TimboTronics!</h1>
			<p>A random webpage!</p>
			<h3>Helpful links listed below for your convenience.</h3>

            <!--target = '_blank' href = 'https://www.youtube.com/watch?v=atL2cpD4GdA&ab_channel=DigBarGayRaps-'>THEMESONG</a></li> -->
            <a target = '_blank' href = '/Cooking' class = "button">Cooking</a></li>
            <a target = '_blank' href = '/Memes' class = "button">Memes</a></li>
            <a target = '_blank' href = '/gameRankings' class = "button">Game Rankings</a></li>
            <a target = '_blank' href = '/Games' class = "button">Games</a></li>
            <a target = '_blank' href = '/ToDo' class = "button">ToDo</a></li>
            <a target = '_blank' href = '/amazonBot' class = "button">Check Prices</a></li>

			<h2 style ="color: lightcoral" id="timer"></h2>
			<script>
			    setInterval(function (){
                    let date = new Date("2022-06-20");
                    let now = new Date();
                    let difference = date.getTime() - now.getTime();
                    difference = difference / 1000;
                    let day = Math.floor(difference / (24 * 60 * 60));
                    let hours = Math.floor((difference - (day * 24 * 60 * 60)) / 3600);
                    let minute = Math.floor((difference - (day * 24 * 60 * 60) - (hours * 60 * 60)) / (60));
                    let seconds = Math.floor((difference - (day * 24 * 60 * 60) - (hours * 60 * 60) - (minute * 60)));
                    console.log(day,hours,minute,seconds);
                    document.getElementById("timer").innerHTML = (day + "") + ":" + (hours + "").padStart(2,"0") + ":" + (minute + "").padStart(2,"0") + ":" + (seconds + "").padStart(2,"0");
			    },100);
            </script>
		</div>
	</div>
</body>
</html>
EOT;
