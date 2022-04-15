<!-- 1 -->
<!-- UNTUK MENAMPILKAN DATA, VIEWNYA -->
<?php
        if($_SESSION['jns_usr'] == "admin"){
        ?>
<div class="row">

    <div class="col-md-12">

        <div class="d-flex justify-content-between">
            <figure>
                <h1>User Account</h1>
                <blockquote class="blockquote">
                    <p> Berisi data User Account di database</p>
                </blockquote>
                <figcaption class="blockquote-footer">
                    CRUD <cite title="Source Title">Create Read Update Delete</cite>
                </figcaption>
                <a href="index.php?page=user_create" class="btn btn btn-outline-dark">Tambah</a>
            </figure>
        </div>

        <br>

        <div class="table-responsive">
            <table class="table table-light table-striped">
                <thead>
                    <tr class="table-dark">
                        <th>No.</th>
                        <th>Jenis Akun</th>
                        <th>ID</th>
                        <th>Nama Lengkap</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <!-- CRUD = READ -->
                <tbody>
                    <?php
                        // database 
                        $query = mysqli_query($koneksi, "SELECT * FROM user");
                        $no = 1;

                    // Menampilkan databse ke dalam tabel php.
                        //jika data ada atau lebih dari 0, maka tampilkan ...
                        if (mysqli_num_rows($query) > 0) {                            
                            foreach ($query as $data){
                    ?>
                    <!-- tampilkan ini -->
                    <tr>
                        <td><?= $no++ ?></td>

                        <td><?= $data['jns_usr'] ?></td>
                        <td><?= $data['id_usr'] ?></td>

                        <!-- sesuaikan dengan kolom di tabel user -->
                        <td><?= $data['nm_usr'] ?></td>
                        <td><?= $data['email'] ?></td>
                        <td><?= $data['pass'] ?></td>

                        <!-- aksi -->
                        <td>
                            <div class="btn-group ">
                                <!-- button edit -->
                                <a href="index.php?page=user_edit&id=<?= $data['id_usr'] ?>"
                                    class="btn btn-sm btn-outline-success">Ubah</a>


                                <!-- button  delete-->
                                <a href="index.php?page=user_delete&id=<?= $data['id_usr'] ?>"
                                    class="btn btn-sm btn btn-outline-danger"
                                    onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')">Hapus</a>
                            </div>
                        </td>
                    </tr>
                    <?php
                            }
                        } else { 
                        //jika data 0 atau kurang dari 0, maka tampilkan ...
                    ?>
                    <tr>
                        <td colspan="100%">
                            <div class="alert alert-danger">Tidak ditemukan Data Akun Pengguna!</div>
                        </td>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>

            </table>
        </div>
    </div>
</div>
<?php 
    } else if($_SESSION['jns_usr'] == "mhs") {
?> <script>
window.location.href = 'index.php';
</script>
<?php 
      }
       ?>