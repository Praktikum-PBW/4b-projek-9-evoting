<!-- 5 -->
<!-- FILE YG MEMPROSES DRI FORM EDIT -->

<!-- CRUD - UPDATE -->
<?php
if (isset($_POST['edit'])) {

    $id_ckr     = $_POST['id_ckr'];
    $nama       = $_POST['nama'];
    $slogan     = $_POST['slogan'];
    $foto       = $_POST['foto'];
    $vm         = $_POST['vm'];

    if(empty($foto)){
        $query = mysqli_query($koneksi, "UPDATE identitas SET id_ckr='$id_ckr', nama='$nama', slogan='$slogan', vm='$vm',  WHERE id_ckr='$id_ckr'");
    }else{

        // jika password ada saat di update 
        $pass = sha1($pass);
        $query = mysqli_query($koneksi, "UPDATE identitas SET id_ckr='$id_ckr', nama='$nama', slogan='$slogan', foto='$foto', vm='$vm',  WHERE id_ckr='$id_ckr'");
    }

    if ($query) {
        echo("<script>window.location.href='index.php?page=identitas';</script>");
    } else {
        echo "Gagal";
    }
}