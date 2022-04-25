index

<!-- 3 -->
<!-- FILE YG MEMPROSES PADA FORM CREATE, dapat mengecek variabel yg telah di submit pada file create.php-->
<!-- TAMPILAN KETIKA KLIK Tombol TAMBAH -->
<?php
/*
    function isset = digunakan untuk memeriksa apakah ada atau tidaknya variabel

    lalu karna,
    pada file create.php menggunakan method post,
    maka tombol tamb ah pada file create dimisalkan menjadi $_POST

*/
if (isset($_POST['tambah'])) 
{
    /* 
        inputan yg dimasukkan pada file create.php, akan di tangkap nilainya terlebih dahulu.
        di liat dari atribut name ="nu_ckr" pada file create.php)
    */

        $id_ckr = $_POST['id_ckr'];
        $nama = $_POST['nama'];
        $slogan = $_POST['slogan'];
        $vm = $_POST['vm'];
        
        // foto, jenis file upload
            $ekstensi_diperbolehkan = array('png','jpg', 'jpeg');

            // yg tercatat pada database namanya saja bukan file fotonya
            $foto = $_FILES['foto']['name'];

            $x = explode('.',$foto);
            $ekstensi = strtolower(end($x));// memakai huruf kecil(string to lower)
            
            //batas jenis ukuran file
            $ukuran = $_FILES['foto']['size'];

            // mendapatkan file temporary(folder tmp pada xampp) atau file sementara tidk langsung masuk ke projek
                // dapatkan link temporarry(tmp) pada folder xampp
                $file_tmp = $_FILES['foto']['tmp_name'];

                // buat kondisi file, batasi jenis ukuran file penguploadan
                if (in_array($ekstensi,$ekstensi_diperbolehkan) === true) {
                    // di check ukuran dalam byte(binary),
                    
                    if($ukuran < 5242880){ 
                        //bila krang dari 5 mb
                            //pindahkan file tmp, agar bisa masuk ke folder img asset
                            move_uploaded_file($file_tmp,'./assets/img/'  . $foto);

                        // membuat query
                        $query = mysqli_query($koneksi, "INSERT INTO identitas VALUES(null,'$id_ckr','$nama','$slogan','$foto','$vm')");

                            //jika berhasil, pergi ke halaman atikel 
                            if ($query) {
                                echo("<script>window.location.href='index.php?page=identitas';</script>");
                            } else {
                                 echo "Gagal";
                            }
                    }else{ //bila lebih dari 5 mb
                        echo "Ukuran File Terlalu Besar Melebihi dari 5MB";
                    }
                }else{
                        echo " Ekstensi tidak diperbolehkan";
                }

}