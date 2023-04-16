<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/login.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel = "stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timbotronics</title>
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

<div class="menu">
    <ul>
        <li><a href = "https://timbotronics.xyz/">Home</a></li>
        <li><a href = "https://www.msnbc.com/" target = "_blank">News</a></li>
        <li><a href = "https://valorantesports.com/schedule" target = "_blank">Valorant Schedule</a></li>
        <li><a href = "#">Blog</a></li>
    </ul>
</div>

<div class = 'outer'>
    <div class = 'header'>
        <h1>Tim's Favorite Cooking Recipes!</h1>

        <a target = '_blank' href = "https://www.youtube.com/watch?v=YPgoUhZwfFA&list=PLTBp-FhPVdRhZOSgdLQEe_sxzHRZ6vlGr&index=1&ab_channel=NatashasKitchen" class = "button">Creamy Lemon Chicken Pasta</a></li>
        <a target = '_blank' href = "https://www.youtube.com/watch?v=Fv6NnSrqZLI&list=WL&index=98s&ab_channel=SixSisters%27Stuff" class = "button">Instant Pot Mac and Cheese</a></li>
        <a target = '_blank' href = "https://www.youtube.com/watch?v=wwfOAfrCBWM&list=PLTBp-FhPVdRhZOSgdLQEe_sxzHRZ6vlGr&index=3&ab_channel=NatashasKitchen" class = "button">Instant Pot Chicken and Rice</a></li>
        <a target = '_blank' href = "https://damndelicious.net/2018/02/25/easy-thai-red-curry/" class = "button">Thai Style Red Curry</a></li>
        <a target = '_blank' href = "https://www.dinneratthezoo.com/instant-pot-chili/" class = "button">Instant Pot Chilli</a></li>

    </div>
</div>


<script>
    const menuToggle = document.querySelector('.toggle')
    const menu = document.querySelector('.menu')

    menuToggle.addEventListener('click', () => {
        menuToggle.classList.toggle('active')
        menu.classList.toggle('active')
    })
</script>


</body>
</html>