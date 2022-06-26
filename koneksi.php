<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_joki";

// Membuat Koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek Koneksi
if ($conn->connection_error){
    die("Koneksi Gagal: ". $conn->connection_error);
}
?>