<!-- 6 -->
<!-- menghapus data yg ada dalam database -->

<!-- CRUD - DELETE -->
<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = mysqli_query($koneksi, "DELETE FROM user WHERE id_usr='$id'");

    if ($query) {
        echo("<script>window.location.href='index.php?page=user';</script>");
    } else {
        echo "Gagal";
    }
}