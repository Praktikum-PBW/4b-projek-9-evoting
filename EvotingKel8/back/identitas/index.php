<!-- 1 -->
<!-- UNTUK MENAMPILKAN DATA, VIEWNYA -->
<?php
        if($_SESSION['jns_usr'] == "admin"){
        ?>
<div class="row">
    <div class="col-md-12">


        <div class="d-flex justify-content-between">
            <figure>
                <h1>Data Calon Koordinator</h1>
                <blockquote class="blockquote">
                    <p> Berisi data Identitas Calon Koordinator di database</p>
                </blockquote>
                <figcaption class="blockquote-footer">
                    CRUD <cite title="Source Title">Create Read Update Delete</cite>
                </figcaption>
                <a href="index.php?page=identitas_create" class="btn btn btn-outline-dark">Tambah</a>
            </figure>
        </div>

        <br>

        <div class="table-responsive-xxl">
            <table class="table table-light table-striped">
                <thead>

                    <tr class="table-dark">
                        <th>No.</th>
                        <th width="100">No Urut</th>
                        <th>Foto</th>
                        <th>Nama</th>
                        <th>Slogan</th>
                        <th>Visi Misi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <!-- CRUD = READ -->
                <tbody>
                    <!-- KODE PSP -->
                    <?php
                        $query = mysqli_query($koneksi, "SELECT * FROM identitas JOIN cakor ON identitas.id_ckr = cakor.id_ckr"); 

                        $no = 1;
                        if (mysqli_num_rows($query) > 0) {
                            // Menampilkan databse ke dalam tabel php.
                            foreach ($query as $data){
                    ?>

                    <!-- tampilkan ini -->
                    <tr>
                        <td><?= $no++ ?></td>

                        <!-- no urut cakor -->
                        <td>
                            <a class="btn btn-sm btn-success""><?= $data['nu_ckr'] ?></a>
                        </td>

                        <!-- menampilkan file gambar yg ke input -->
                        <td>
                            <!-- menampilkan gambar ketika gambar di klik -->
                            <a href=" ./assets/img/<?=$data['foto']?>">
                                <img src="./assets/img/<?=$data['foto']?>" class="img-fluid" width="100%" alt="">
                            </a>
                        </td>

                        <td><?=$data['nama'] ?></td>
                        <td><?=$data['slogan'] ?></td>
                        <td><?=$data['vm'] ?></td>


                        <!-- aksi Button-->
                        <td>
                            <div class="btn-group ">

                                <!-- button edit -->
                                <a href="index.php?page=identitas_edit&id=<?= $data['id_ckr'] ?>"
                                    class="btn btn-sm btn-outline-success">Ubah</a>


                                <!-- button  delete-->
                                <a href="index.php?page=identitas_delete&id=<?= $data['id_ckr'] ?>"
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
                        <td colspan="3">
                            <div class="alert alert-danger">Tidak ditemukan data CAKOR!</div>
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