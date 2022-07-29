<?php
require_once("/Server/Data/ApacheData/timbotronics.xyz/login.php");
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
            /*this is the background color for the main part of the page*/
            background: #f9f9f9;
        }

        /* Include the padding and border in an element's total width and height */
        * {
            box-sizing: border-box;
        }

        /* Remove margins and padding from the list */
        ul {
            margin: 0;
            padding: 0;
        }

        /* Style the list items */
        ul li {
            cursor: pointer;
            position: relative;
            padding: 12px 8px 12px 40px;
            list-style-type: none;
            background: #C0C0C0;
            font-size: 18px;
            transition: 0.2s;

            /* make the list items unselectable */
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        /* Set all odd list items to a different color (zebra-stripes) */
        ul li:nth-child(odd) {
            background: #f9f9f9;
        }

        /* Darker background-color on hover */
        ul li:hover {
            background: #ddd;
        }

        /* When clicked on, add a background color and strike out text */
        ul li.checked {
            background: #888;
            color: #fff;
            text-decoration: line-through;
        }

        /* Add a "checked" mark when clicked on */
        ul li.checked::before {
            content: '';
            position: absolute;
            border-color: #fff;
            border-style: solid;
            border-width: 0 2px 2px 0;
            top: 10px;
            left: 16px;
            transform: rotate(45deg);
            height: 15px;
            width: 7px;
        }

        /* Style the close button */
        .close {
            position: absolute;
            right: 0;
            top: 0;
            padding: 12px 16px 12px 16px;
        }

        .close:hover {
            background-color: #f44336;
            color: black;
        }

        /* Style the header */
        .header {
            background-color: #33FFF9;
            padding: 30px 40px;
            color: Black;
            text-align: center;
        }

        /* Clear floats after the header */
        .header:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Style the input */
        input {
            margin: 0;
            border: none;
            border-radius: 0;
            width: 75%;
            padding: 10px;
            float: left;
            font-size: 16px;
        }

        /* Style the "Add" button */
        .addBtn {
            padding: 10px;
            width: 25%;
            background: #d9d9d9;
            color: #555;
            float: left;
            text-align: center;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
            border-radius: 0;
        }

        .addBtn:hover {
            background-color: #bbb;
        }
    </style>
</head>
<body>

<div id="myDIV" class="header">
    <h2 style="margin:5px">Things To Do Today</h2>
    <form method = post action = "/ToDo/submitToDo.php">
        <input name = "Task" type="text" id="myInput" placeholder="Title..." required>
        <!--<span onclick="newElement()" class="addBtn">Add</span>-->
        <input type="submit" id="submit" value="Save" class="addBtn"/>
    </form>
</div>



<ul id="Tasks">
<!--list of tasks added to list-->
</ul>

<script>
    // Create a "close" button and append it to each list item
    var myNodelist = document.getElementsByTagName("LI");
    var i;
    for (i = 0; i < myNodelist.length; i++) {
        var span = document.createElement("SPAN");
        var txt = document.createTextNode("\u00D7");
        span.className = "close";
        span.appendChild(txt);
        myNodelist[i].appendChild(span);
    }

    // Click on a close button to hide the current list item
    var close = document.getElementsByClassName("close");
    var i;
    for (i = 0; i < close.length; i++) {
        close[i].onclick = function() {
            var div = this.parentElement;
            div.style.display = "none";
            console.log(div);
        }
    }

    // Add a "checked" symbol when clicking on a list item
    var list = document.querySelector('ul');
    list.addEventListener('click', function(ev) {
        if (ev.target.tagName === 'LI') {
            ev.target.classList.toggle('checked');
        }
    }, false);

    // Create a new list item when clicking on the "Add" button
    function newElement(task) {
        var li = document.createElement("li");
        var inputValue = task;
        var t = document.createTextNode(inputValue);
        li.appendChild(t);
        if (inputValue === '') {
            alert("You must write something!");
        } else {
            document.getElementById("Tasks").appendChild(li);
        }
        document.getElementById("myInput").value = "";

        var span = document.createElement("SPAN");
        var txt = document.createTextNode("\u00D7");
        span.className = "close";
        span.appendChild(txt);
        li.appendChild(span);

        for (i = 0; i < close.length; i++) {
            close[i].onclick = function() {
                var div = this.parentElement;
                div.style.display = "none";
                console.dir(div);

                var xhttp = new XMLHttpRequest();

                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {

                    }
                };

                xhttp.open("POST", "deleteToDo.php", true);
                xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhttp.send("task=" + div.textContent.substring(0,div.textContent.length - 1));
            }
        }
    }
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            let response = JSON.parse(xhttp.responseText);
            for (i of response) {
                console.log(i.Task);
                newElement(i.Task);
            }
        }
    };

    xhttp.open("POST", "pullToDo.php", true);
    xhttp.send();
</script>

</body>
</html>

