<?php
session_start();
if($_SESSION['username']) {
} else {
    header("Location: login.php");
}
?>
<?php include 'header.php'; ?>

<body>
    <div class="w3-content w3-section" style="max-width:500px">
    <img class="mySlides" src="img/PBID.jpg" style="width:100%">
    <img class="mySlides" src="img/PBID.jpg" style="width:100%">
    <img class="mySlides" src="img/PBID.jpg" style="width:100%">
    </div> 

    <!-- <section class="category1">
        <div class="category1__container">
            <h1 class="category1__title">Populer</h1>
            <div class="category1__produk">
                <a href="#" class="category1_produk__container">
                    <img src="img/PUBG.jpg" class="category1_produk__img" alt="">
                    <p class="category1_produk__title">PUBG</p>
                </a>
                <a href="#" class="category1_produk__container">
                    <img src="img/PUBG.jpg" class="category1_produk__img" alt="">
                    <p class="category1_produk__title">PUBG</p>
                </a>
                <a href="#" class="category1_produk__container">
                    <img src="img/PUBG.jpg" class="category1_produk__img" alt="">
                    <p class="category1_produk__title">PUBG</p>
                </a>
                <a href="#" class="category1_produk__container">
                    <img src="img/PUBG.jpg" class="category1_produk__img" alt="">
                    <p class="category1_produk__title">PUBG</p>
                </a>
                <a href="#" class="category1_produk__container">
                    <img src="img/PUBG.jpg" class="category1_produk__img" alt="">
                    <p class="category1_produk__title">PUBG</p>
                </a>
            </div>
        </div>
    </section> -->

    <div class="card-row">
        <div class="card-column">
            <div class="class">
                <img src="img/ML.jpg">
                <h3>Mobile Legend</h3>

            </div>
        </div>
        <div class="card-column">
            <div class="class">
                <img src="img/free-fire-max.jpg">
                <h3>Free Fire</h3>
                
            </div>
        </div>
        <div class="card-column">
            <div class="class">
                <img src="img/PUBG.jpg">
                <h3>PUBG</h3>
                
            </div>
        </div>
        <div class="card-column">
            <div class="class">
                <img src="img/apex.png">
                <h3>Apex</h3>
                
            </div>
        </div>
    </div> 

</body>

<?php include 'footer.php'; ?>