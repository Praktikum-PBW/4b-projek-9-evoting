<?php
//membuat variabel
    //INFORMASI USER ACCOUNT PHPMYADMIN
    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    //nama database
    $db_name = "evoting";
//Panggil Fungsi MYSQL untuk mengkoneksikan database dengan PHP
    //Parameter mysqli_connect($servername, $username, $password, $database);
    $koneksi = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
/*
//MEMASTIKAN KONEKSI TEHUBUNG ATAU TIDAK
if($koneksi) { 
    //jika koneksi berhasil akan :
    echo "Koneksi MYSQL dengan PHP : BERHASIL";
} else {
    //jika koneksi tidak berhasil akan :
    echo "Koneksi MYSQL dengan PHP : GAGAL";
}
*/