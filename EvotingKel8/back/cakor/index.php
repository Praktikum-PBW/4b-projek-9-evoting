<!-- 1 -->
<!-- UNTUK MENAMPILKAN DATA, VIEWNYA -->

<?php
        if($_SESSION['jns_usr'] == "admin"){
        ?>
<div class="row">
    <div class="col-md-12">

        <div class="d-flex justify-content-between">
            <h4>Urutan Cakor</h4>
            <a href="index.php?page=cakor_create" class="btn btn-dark">Tambah</a>
        </div>

        <br>

        <div class="table-responsive">
            <table class="table table-light table-striped">
                <thead>
                    <tr class="table-dark">
                        <th>No Urut Calon Koordinator</th>
                        <th>Ubah</th>
                    </tr>
                </thead>
                <!-- CRUD = READ -->
                <tbody>
                    <!-- KODE PSP -->
                    <?php
                        // database cakor
                        $query = mysqli_query($koneksi, "SELECT * FROM cakor ORDER BY nu_ckr DESC");
                        $no = 1;

                        if (mysqli_num_rows($query) > 0) {
                            // Menampilkan databse ke dalam tabel php.
                            //jika data ada atau lebih dari 0, maka tampilkan ...
                            foreach ($query as $data){
                                //quer dimisalkan jadi data
                    ?>
                    <!-- tampilkan ini -->
                    <tr>

                        <td><?= $data['nu_ckr'] ?></td>

                        <!-- aksi -->
                        <td>
                            <div class="btn-group">

                                <!-- button edit -->
                                <a href="index.php?page=cakor_edit&id=<?= $data['id_ckr'] ?>"
                                    class="btn btn-sm btn-success border-light">Edit</a>


                                <!-- button  delete-->
                                <a href="index.php?page=cakor_delete&id=<?= $data['id_ckr'] ?>"
                                    class="btn btn-sm btn-danger border-light"
                                    onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')">Delete</a>
                            </div>
                        </td>
                    </tr>

                    <?php
                            }
                        } else { 
                        //jika data 0 atau kurang dari 0, maka tampilkan ...
                    ?>
                    <tr>
                        <td colspan="3">
                            <div class="alert alert-danger">Tidak ada data urutan!</div>
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