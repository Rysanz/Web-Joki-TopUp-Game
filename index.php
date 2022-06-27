<?php
session_start();
if($_SESSION['username']) {
} else {
    header("Location: login.php");
}
?>
<?php include 'header.php'; ?>


<body>

    <!-- <div class="card-row">
        <h2>Game</h2>
        <a href="window_topup.php">
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
        <div class="card-column">
            <div class="class">
                <img src="img/monster.jpg">
                <h3>Monster</h3>
            </div>
        </div>
        <div class="card-column">
            <div class="class">
                <img src="img/ludo.jpg">
                <h3>Ludo</h3>
            </div>
        </div>
        </a>
    </div>  -->

    <?php $posts = $conn->query("SELECT * FROM data");
    while($post = $posts->fetch_object()) {
    ?> 
    <div class="card-row">
        <a href="window_topup.php">
        <div class="card-column">
            <div class="class">
                <div><img src ="img/<?php echo $post->gambar ?>"width= "100%">
                <h3><?php echo $post->title ?></h3>
            </div>
        </div>
    </div>
    <?php
    }
    ?>
</body>
<?php include 'footer.php'; ?>