<?php require "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Up & Joki Game</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="slide.css">
    <link rel="stylesheet" href="sidenav.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
</head>



<body>
    <header class="header">
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
        <div class="header_container">
            <div class="header__nav">
                <div class="text-header" style="display:flex;">
                    <h1>Top Up & Joki Game</h1>
                    <p style="margin-top: 45px; margin-left: 20px;">Selamat datang di website Top Up & Joki Game</p>
                </div>
            </div>
        </div>
    </header>

    <script>
        function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
        }

        /* Set the width of the side navigation to 0 */
        function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.body.style.backgroundColor = "white";
        } 
    </script>


</body>

<div id="mySidenav" class="sidenav">
        <a href="index.php">HOME</a>
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="about.php">About</a>
        <a class="dropdown" href="#">Contact
        <div class="dropdown-content">
            <p>+0361-12387</p>
    </div>
