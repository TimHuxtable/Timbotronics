<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/login.php");
    echo <<<EOT

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="https://timbotronics.xyz/favicon2.ico" type="image/x-icon">
<link rel="icon" href="https://timbotronics.xyz/favicon2.ico" type="image/x-icon">

    <title>TimboTronics</title>
	<style>
        .wrapper{
            width: 90%;
            margin: 0 auto;
        }
        .banner {
            position: relative;
            width: 100%;
            height: 100px;
            background: #3366cc;
            /*
            position: fixed;
            */
        }
        .logo2 {
            width: 30%;
            float: left;
            text-align: left;
            line-height: 50px;
        }
        .logo2 a{
            text-decoration: none;
            font-size: 30px;
            font-family: 'Poppins', sans-serif;
            color: #fff;
            letter-spacing: 4px;
        }
        .logo{
            width: 30%;
            float: left;
            text-align: left;
            line-height: 50px;
        }
        nav {
            float: right;
            /*padding-right: 10%;*/
            line-height: 50px;
        }
        nav a {
            text-decoration: none;
            font-family: 'Poppins', sans-serif;
            letter-spacing: 4px;
            font-size: 20px;
            color: #fff;
            padding: 36px 10px;
            margin: 0 1px;
            font-weight: 500;
        }
        nav a:hover {
            background: #fff;
            color: #130f40;
            font-weight: 700;
        }
        .banner {
            position: relative;
            top: 0;
            left: 0;
            width: 100%;
            /*padding: 40px 100px;*/
            z-index: 1000;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
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
        .css-block-two {
            position: absolute;
            background: url("/resources/peepohappy.jpg")  no-repeat center center fixed; 
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            width:300px;
            height:300px;
            top: 75%;
            left: 50%;
            border-radius: 50%;
        }
		@import url('https://fonts.googleapis.com/css2?family=Cambo&display=swap');
		.header{
			margin-top:3%;
			text-align: center;
			background-color: white;
			display: inline-block;
			padding: 20px;
			border-radius: 10px;
		}
		.outer{
			  width:100%;
			  display: flex;
			  justify-content: center
		}
		h3, p{
			font-family: 'Times New Roman', serif;
		}
		h1 {
        -webkit-text-stroke: 1px black;
        font-size: 48px;
        }
		/*h1 {*/
		/*text-shadow: 0 0 3px black;*/
		/*}*/
		.multicolortext {
        background-image: linear-gradient(to left, red, orange, yellow, green, blue, indigo, violet);
        -webkit-background-clip: text;
        color: transparent;
        }
		p{
			font-size:24px;
		}
		.list {
			width:100%;
			display: flex;
			justify-content: center
		}
		ul {
			text-align: left;
		}
		body {
			background: url(/resources/mainPageBackground.jpg) no-repeat center center fixed;
			margin: 0;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
            /*change the one below to cover*/
			background-size: cover;
			overflow: hidden;
		}
		@media (max-width: 991px) {
        .showcase,
        .showcase header
        {
            padding: 40px;
        }
        .text h2
        {
            font-size: 3em;
        }
        .text h3
        {
            font-size: 2em;
        }
	</style>
</head>
<body>

<div class = "box-area">
    <header class = "banner">
        <div class = "wrapper">
            <div class = "logo2">
                <a href = "https://timbotronics.xyz/">Timbotronics</a>
            </div>

            <nav>
                <a href = "https://timbotronics.xyz/Cooking">Cooking</a>
                <a href = "https://timbotronics.xyz/Memes">Memes</a>
                <a href = "https://timbotronics.xyz/beach.ico">Beach</a>
            </nav>
        </div>
        <div class="toggle"></div>
    </header>
</div>

<!--allows code to communicate with the anime.js library-->
<script src = 'animation/index.js'></script>
<div class = 'css-block-two'></div>
	<div class = 'outer'>
		<div class = 'header'>
			<h1>Welcome to TimboTronics!</h1>
			<p>Created by Tim!</p>
			<h3>Helpful links listed below for your convenience.</h3>

            <!--target = '_blank' href = 'https://www.youtube.com/watch?v=atL2cpD4GdA&ab_channel=DigBarGayRaps-'>THEMESONG</a></li> -->
            <!-- target = '_blank' is what makes the link open a new tab-->
            <a id = 'button1' target = '_blank' href = '/Cooking' class = "button">Cooking</a></li>
            <a id = 'button2' target = '_blank' href = '/Memes' class = "button">Memes</a></li>
            <a id = 'button3' target = '_blank' href = '/gameRankings' class = "button">Game Rankings</a></li>
            <a id = 'button4' target = '_blank' href = '/Games' class = "button">Games</a></li>
            <a id = 'button5' target = '_blank' href = '/ToDo' class = "button">ToDo</a></li>
            <a id = 'button6' target = '_blank' href = '/amazonBot' class = "button">Check Prices</a></li>
            <a id = 'button7' target = '_blank' href = 'https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstley' class = "button">Click here for $$$</a></li>



			<h1 class = "multicolortext">Countdown to Kyles Birthday!</h1>
			<h2 style ="color: lightcoral" id="timer"></h2>
			<script>
			//need to use this so that the countdown clock is
			//accurate to midnight when selecting a date to countdown to.
			function convertTZ(date, tzString) {
                return new Date((typeof date === "string" ? new Date(date) : date).toLocaleString("en-US", {timeZone: tzString}));
            }
			    setInterval(function () {
                    //more accurate countdown, explained above convertTZ.
                    let date = new Date(convertTZ("2023/07/15 05:00:00 +0000", "US/Central"));
                    let now = new Date();
                    let difference = date.getTime() - now.getTime();
                    difference = difference / 1000;
                    let day = Math.floor(difference / (24 * 60 * 60));
                    let hours = Math.floor((difference - (day * 24 * 60 * 60)) / 3600);
                    let minute = Math.floor((difference - (day * 24 * 60 * 60) - (hours * 60 * 60)) / (60));
                    let seconds = Math.floor((difference - (day * 24 * 60 * 60) - (hours * 60 * 60) - (minute * 60)));
                    //console.log(day,hours,minute,seconds);
                    document.getElementById("timer").innerHTML = (day + "") + ":" + (hours + "").padStart(2,"0") + ":" + (minute + "").padStart(2,"0") + ":" + (seconds + "").padStart(2,"0");
			    },100);
            </script>
		</div>
		<script>
            anime({
                targets: '.css-block-two',
                translateX: [-500, 500],
                duration: 3000,
                easing: 'easeInOutQuad',
                direction: 'alternate',
                rotate: 540,
                //width: '%', // -> from '28px' to '100%',
                loop: true
            });
            //let buttons = document.getElementsByClassName("button");
            //for(button in buttons) {
            //to loop through all buttons so they all move, make button7 button below.
            
            //setting the event to be fired when the button is hovered.
            button7.onmouseenter = function(event) {
                if(!event.target.hovered) {
                    //event.target.hovered = true;
                    let rotation = Math.random() * 360;
                    let radius = 200;
                    let x = Math.cos(Math.PI / 180 * rotation) * radius;
                    let y = Math.sin(Math.PI / 180 * rotation) * radius;
                    anime({
                        targets: "#button7",
                        translateX: [x],
                        translateY: [y],
                        duration: 1000,
                        easing: 'spring(1, 80, 10, 0)'
                    }); 
                }
            }
           //}
        </script>
	</div>
</body>
</html>
EOT;
