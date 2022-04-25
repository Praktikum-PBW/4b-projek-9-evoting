<!-- 3 -->
<?php
if (isset($_POST['tambah'])) {
    $id_usr     = $_POST['id_usr'];
    $nm_usr     = $_POST['nm_usr'];
    $email      = $_POST['email'];
    $pass       = $_POST['pass'];
    $jns_usr    = $_POST['jns_usr'];
    
    // // check terbaca atau tidak ketika klik simpan
    // echo $id_usr;
    // echo $nm_usr;
    // echo $email;
    // echo $pass;
    // echo $jns_usr;

    // password jadi pass encrypsy
    $pass = sha1($pass);

    $query = mysqli_query($koneksi, "INSERT INTO user VALUES('$id_usr','$nm_usr','$email','$pass','$jns_usr')");

    if ($query) {
        echo("<script>window.location.href='index.php?page=user';</script>");
    } else {
         echo "Gagal";
    }
}
?>