<!-- 4 -->
<!-- form edit -->

<?php

//Cari tau id tersebut ada apa tidak, jika ada akan pergi ke halaman utama direct cakor
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = mysqli_query($koneksi, "SELECT * FROM identitas WHERE id_ckr='$id'");

    // variabel dri query di tampung kedalam datanya
    $data = mysqli_fetch_array($query);
    $data2 = mysqli_fetch_array($query);
    //jika isi id = 1 , 
    if (mysqli_num_rows($query) == 1){
        // maka tampilkan datanya
?>

<div class="row">
    <div class="col-md-12">
        <div class="d-flex justify-content-between">
            <h4>Edit Identitas Cakor</h4>
        </div>


        <form action="index.php?page=identitas_update" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id_ckr" value="<?= $id ?>"> <!-- terlihat pake inspeksi -->

            <!-- Form EDIT IDENTITAS CAKOR -->
            <div class="mb-2">
                <label for="id_ckr" class="form-label">Jenis Urutan Cakor</label>
                <select name="id_ckr" id="id_ckr" class="form-select">
                    <?php
                        // membuat query
                        $cakor = mysqli_query($koneksi, "SELECT * FROM cakor");

                        // perulangan
                        foreach ($cakor as $data2) {
                            ?>
                    <option value="<? = $data['id_ckr']?>">

                    </option>
                    <?php
                        } ?>
                </select>
            </div>

            <div class="mb-2">
                <label for="nama" class="form-label">Nama Lengkap</label>
                <input type="text" name="nama" id="nama" class="form-control" value="<?= $data['nama']?>">
            </div>

            <div class="mb-2">
                <label for="slogan" class="form-label">Slogan</label>
                <input type="text" name="slogan" id="slogan" class="form-control" value="<?= $data['slogan']?>">
            </div>

            <div class="mb-2">
                <label for="foto" class="form-label">Foto</label>
                <input type="file" class="form-control" name="foto" id="foto">
            </div>

            <div class="mb-2">
                <label for="vm" class="form-label">Visi Misi</label>
                <textarea class="form-control" name=" vm" id="vm"><?= $data['vm']?></textarea>
            </div>

            <!-- tombol Tambah(submit) -->
            <input type="submit" value="Edit" name="edit" class="btn btn-primary">
        </form>
    </div>
</div>
<?php
    } else { //jika id tidak sama dengan 1, atau tidak ada maka kembali ke menu cakor
        echo("<script>window.location.href='index.php?page=identitas';</script>");
    }
} else {
    echo("<script>window.location.href='index.php?page=identitas';</script>");
}