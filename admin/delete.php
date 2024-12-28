<?php 
include '../db.php'; 

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Hapus gambar dari folder uploads
    $result = $conn->query("SELECT image FROM blogs WHERE id = $id");
    $blog = $result->fetch_assoc();
    if (file_exists("../uploads/" . $blog['image'])) {
        unlink("../uploads/" . $blog['image']);
    }

    // Hapus data dari database
    $conn->query("DELETE FROM blogs WHERE id = $id");
    header("Location: index.php");
}
?>