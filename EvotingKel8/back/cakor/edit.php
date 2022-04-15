<!-- 4 -->
<!-- form edit -->

<?php

//Cari tau id tersebut ada apa tidak, jika ada akan pergi ke halaman utama direct cakor
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    //lakukan pemeriksaan id
    //Parameter = (mysql, query)
    $query = mysqli_query($koneksi, "SELECT * FROM cakor WHERE id_ckr='$id'");

    // variabel dri query di tampung kedalam datanya
    $data = mysqli_fetch_array($query);

    //jika isi id = 1 , 
    if (mysqli_num_rows($query) == 1){
        // maka tampilkan datanya
?>

<div class="row">
    <div class="col-md-12">
        <div class="d-flex justify-content-between">
            <h4>Edit Urutan Cakor</h4>
        </div>
        <!-- atribut action di isi dengan form yg akan di proses oleh file yang mana? -->
        <!-- pengecekkan berada di fil store.php yg di inisialkan cakor_store pada menu.php -->
        <form action="index.php?page=cakor_update" method="post">

            <!-- mengsisipkan id, untuk berfungsi sebagai where ketika di file update.php -->
            <input type="hidden" name="id_ckr" value="<?= $id ?>"> <!-- terlihat pake inspeksi -->


            <!-- method post lebih cocok untuk memanipulasi data ke database, 
                    seperti menambah data, mengubah data...
                    tidak akan di tampilkan parameternya seperti method get di URL
                -->
            <div class="mb-2">
                <label for="nu_ckr" class="form-label">CAKOR Ke : </label>
                <!-- id , for & name harus sama dengan kolom yg ada pada tabelnya -->
                <input type="text" name="nu_ckr" id="nu_ckr" class="form-control" value="<?= $data['nu_ckr']?>">
                <!-- value untuk menampilkan nama cakor yg terinput -->

            </div>
            <!-- tombol Tambah(submit) -->
            <input type="submit" value="Edit" name="edit" class="btn btn-success">
            <!-- pada name, berfngsi untuk mengetahui apakah data yang baru di tambah berasal dri tombl tambah atau tidak -->
        </form>
    </div>
</div>
<?php
    } else { //jika id tidak sama dengan 1, atau tidak ada maka kembali ke menu cakor
        echo("<script>window.location.href='index.php?page=cakor';</script>");
    }
} else {
    echo("<script>window.location.href='index.php?page=cakor';</script>");
}