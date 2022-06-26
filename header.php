<?php require "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Up & Joki Game</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="slide.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
</head>

<body>
    <header class="header">
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
        var myIndex = 0;
        carousel();

        function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}    
        x[myIndex-1].style.display = "block";  
        setTimeout(carousel, 2000); // Change image every 2 seconds
        }
    </script>
</body>