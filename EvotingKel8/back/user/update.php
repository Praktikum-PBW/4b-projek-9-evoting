<!-- CRUD - UPDATE -->
<?php
if (isset($_POST['edit'])) {
    $id_usr     = $_POST['id_usr'];
    $nm_usr     = $_POST['nm_usr'];
    $email      = $_POST['email'];
    $pass       = $_POST['pass'];
    $jns_usr    = $_POST['jns_usr'];
    
    // Merubah data tanpa merubah password, jika kolom password kosong saat di update 
    if(empty($pass)){
        $query = mysqli_query($koneksi, "UPDATE user SET nm_usr='$nm_usr', email='$email', jns_usr='$jns_usr' WHERE id_usr='$id_usr'");
    }else{

        // jika password ada saat di update 
        $pass = sha1($pass);
        $query = mysqli_query($koneksi, "UPDATE user SET nm_usr='$nm_usr', email='$email', pass='$pass' , jns_usr='$jns_usr' WHERE id_usr='$id_usr'");
    }
    
    if ($query) {
        echo("<script>window.location.href='index.php?page=user';</script>");
    } else {
        echo "Gagal";
    }
}