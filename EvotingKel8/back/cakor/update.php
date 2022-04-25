<!-- 5 -->
<!-- FILE YG MEMPROSES DRI FORM EDIT -->

<!-- CRUD - UPDATE -->
<?php
if (isset($_POST['edit'])) {
    $id_ckr = htmlentities(htmlspecialchars(strip_tags(trim($_POST['id_ckr']))));
    $nu_ckr = htmlentities(htmlspecialchars(strip_tags(trim($_POST['nu_ckr']))));
    
    $query = mysqli_query($koneksi, "UPDATE cakor SET nu_ckr='$nu_ckr' WHERE id_ckr='$id_ckr'");

    if ($query) {
        echo("<script>window.location.href='index.php?page=cakor';</script>");
    } else {
        echo "Gagal";
    }
}