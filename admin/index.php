<?php
session_start();
if($_SESSION['username']) {
} else {
    header("Location: login.php");
}
?>
<?php include 'header.php'; ?>
<?php include '../footer.php'; ?>
    <?php $posts = $conn->query("SELECT * FROM data");
    while($post = $posts->fetch_object()) {
    ?>

    <div class="card-row">
        <a href="../window_topup.php">
        <div class="card-column">
            <div class="class">
                <img src ="../img/<?php echo $post->gambar ?>"width= "100%">
                <h3><?php echo $post->title ?></h3>
                <a class="btn" style = "background-color: rgb(255, 170, 0);" href="update.php?id=<?php echo $post->id ?>">Edit</a>
                <a class="btn" style = "background-color: rgb(255, 170, 0);" href="delete.php?id=<?php echo $post->id ?>" onclick ="return confirm('Yakin mau dihapus?')">Delete</a>
            </div>
        </div>
    </div>
    <?php
    }
    ?>

