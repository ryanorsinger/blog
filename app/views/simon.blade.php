<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Simple Simon</title>
    <link rel="stylesheet" href="">
    <style>
        main {
            width: 400px;
        }

        .active {
            opacity: 1;
        }
        .tile {
            border: 1px solid black;
            margin: 1px;
            height: 180px;
            width: 180px;
            float: left;
            opacity: 0.2;
        }

        div[data-color="green"] {
            background-color: green;
        }

        div[data-color="red"] {
            background-color: red;
        }

        div[data-color="blue"] {
            background-color: blue;
        }

        div[data-color="yellow"] {
            background-color: yellow;
        }
    </style>
</head>
<body>
    <h1>Simple Simon Game!</h1>
    <button id="start">Start</button>
    <p>Score:&nbsp;<span id="score"></span></p>
    <main>
        <div data-color="green" class="tile"></div>
        <div data-color="red" class="tile"></div>
        <div data-color="blue" class="tile"></div>
        <div data-color="yellow" class="tile"></div>
    </main>
    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <script>
        "use strict";


    </script>
</body>
</html>
