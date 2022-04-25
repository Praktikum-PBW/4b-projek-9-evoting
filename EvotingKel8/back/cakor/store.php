index

<!-- 3 -->
<!-- FILE YG MEMPROSES PADA FORM CREATE, dapat mengecek variabel yg telah di submit pada file create.php-->
<!-- TAMPILAN KETIKA KLIK Tombol TAMBAH -->
<?php
/*
    function isset = digunakan untuk memeriksa apakah ada atau tidaknya variabel

    lalu karna,
    pada file create.php menggunakan method post,
    maka tombol tambah pada file create dimisalkan menjadi $_POST

*/
if (isset($_POST['tambah'])) 
{
    /* 
        inputan yg dimasukkan pada file create.php, akan di tangkap nilainya terlebih dahulu.
        di liat dari atribut name ="nu_ckr" pada file create.php)
    */

    /* 
        Pilihan cara 1, hanya menangkap apa adanya  
            $name = $_POST['nu_ckr']; 
    */


    // pilihan cara 2
        $nu_ckr= htmlentities(htmlspecialchars(strip_tags(trim($_POST['nu_ckr']))));   
            /*
                htmlentities        = html akan di ubah jdi karakter biasa
                htmlspecialchars    = mengubah beberapa karakter yg telah ditentukan jadi entitas atau jadi karakter yang biasa lagi den
                strip_tags          = menghapus string html, jadi string biasa.php
                trim                = menghapus karakter sprti spasi untuk di hapus.
            */

    // -----------------------------------------------------------------

    // check dahulu, sebelum menambahkan data ke database untuk memanipulasi data
    /* 
        Pilihan cara 1 : 
            echo $name;
    */
    //Pilihan cara 2
        //parameter = mysql, query
        $query = mysqli_query($koneksi, "INSERT INTO cakor VALUES(null, '$nu_ckr')");//jika data pada database auto increment(menambah data otomatis)

            //jika query berhasil menambahkan database, maka akan di rederect ke halaman index
            if ($query) {
                //Cara 1 : header("Location: index.php?page=cakor");

                 //Cara 2
                echo("<script>window.location.href='index.php?page=cakor';</script>");
            } else {
                echo "Gagal";
            }
}echo("<script>window.location.href='index.php?page=cakor';</script>");