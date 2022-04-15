<!-- 4 -->
<!-- form edit -->

<?php

// 
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    //lakukan pemeriksaan id
    //Parameter = (mysql, query)
    $query = mysqli_query($koneksi, "SELECT * FROM user WHERE id_usr='$id'");

    // variabel dri query di tampung kedalam datanya
    $data = mysqli_fetch_array($query);

    //jika isi id = 1 , 
    if (mysqli_num_rows($query) == 1){
        // maka tampilkan datanya
?>

<div class="row">
    <div class="col-md-12">
        <div class="d-flex justify-content-between">
            <h4>Edit Akun Pengguna</h4>
        </div>


        <form action="index.php?page=user_update" method="post">

            <!-- FORM EDIT AKUN PENGGUNA -->
            <div class="mb-2">
                <label for="id_usr" class="form-label">ID</label>
                <input type="number" name="id_usr" id="id_usr" class="form-control" value="<?= $data['id_usr']?>">
            </div>

            <div class="mb-2">
                <label for="nm_usr" class="form-label">Nama Lengkap</label>
                <input type="text" name="nm_usr" id="nm_usr" class="form-control" value="<?= $data['nm_usr']?>">
            </div>


            <div class="mb-2">
                <label for="email" class="form-label">Email</label>
                <input type="text" name="email" id="email" class="form-control" value="<?= $data['email']?>">
            </div>

            <div class="mb-2">
                <label for="pass" class="form-label">Password</label>
                <input type="password" name="pass" id="pass" class="form-control">
            </div>

            <div class="mb-2">
                <label for="jns_usr" class="form-label">Jenis Akun</label>
                <select class="form-control" name="jns_usr" id="jns_usr">
                    <option value="admin" <?php if($data['jns_usr'] == "admin") echo "selected" ?>>Admin</option>
                    <option value="mhs" <?php if($data['jns_usr'] == "mhs") echo "selected" ?>>Mahasiswa</option>
                </select>
            </div>

            <!-- tombol Tambah(submit) -->
            <input type="submit" value="Edit" name="edit" class="btn btn-success">
        </form>
    </div>
</div>
<?php
    } else { //jika id tidak sama dengan 1, atau tidak ada maka kembali ke menu cakor
        echo("<script>window.location.href='index.php?page=user';</script>");
    }
} else {
    echo("<script>window.location.href='index.php?page=user';</script>");
}