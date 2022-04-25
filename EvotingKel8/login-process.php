<?php
if (isset($_POST['login'])) {

    // mengaktifkan session, session = menyimpan data
    session_start();

    // pengaktifan koneksi database
    include 'libraries/koneksidatabase.php';

    $id_usr = $_POST['id_usr'];
    $pass   = $_POST['pass'];

    // enkripsi password di deklarasikan
    $pass = sha1($pass);

    $query = mysqli_query($koneksi, "SELECT * FROM user WHERE id_usr='$id_usr' && pass='$pass'");

    // untuk data di terima pada autentikasi
    $data = mysqli_fetch_array($query);

    // (mengecheck jumlah data) jika data ada sama dengan 1
    if (mysqli_num_rows($query) == 1) {

        /* cara 1 - pop up :
         echo ("<script>alert('User Account ditemukan');history.go(-1);</script>");
        */
        
        // jika data ditemukan

        $_SESSION['id_usr'] = $data['id_usr'];
        $_SESSION['nm_usr'] = $data['nm_usr'];
        $_SESSION['jns_usr'] = $data['jns_usr'];

        // mengirim data menggnakan session pada folder back file index
        header("Location: back/index.php");
  } 
//   jika data tidak ditemukan
    else {
        /* cara 1 - pop up :
         echo ("<script>alert('User Account tidak ditemukan');history.go(-1);</script>");
        */

        //  cara 2 : di login.php tertampilnya
        $_SESSION['error'] = "Username atau password salah";

        // kembali ke halaman login
        header("Location: login.php"); 
    }
}