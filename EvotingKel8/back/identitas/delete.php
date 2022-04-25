<!-- 6 -->
<!-- menghapus data yg ada dalam database -->

<!-- CRUD - DELETE -->
<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = mysqli_query($koneksi, "DELETE FROM identitas WHERE id_ckr='$id'");

    if ($query) {
        echo("<script>window.location.href='index.php?page=identitas';</script>");
    } else {
        echo "Gagal";
    }
}