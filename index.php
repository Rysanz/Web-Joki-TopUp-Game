<?php
session_start();
if($_SESSION['username']) {
} else {
    header("Location: login.php");
}
?>
<?php include 'header.php'; ?>
<?php include 'footer.php'; ?>
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

