<!-- 2 -->
<!-- form menambahkan data -->
<!-- CRUD = CREATE -->
<div class="row">
    <div class="col-md-12">
        <div class="d-flex justify-content-between">
            <h4>Tambah Data CAKOR</h4>
        </div>
        <form action="index.php?page=identitas_store" method="post" enctype="multipart/form-data">
            <!-- 
                 ketika upload file pake atribut :  enctype="multipart/form-data"
             -->
            <div class="mb-2">
                <!-- DATALIST BOOSTRAP -->
                <label for="id_ckr" class="form-label">Jenis Urutan</label>
                <!-- <input class="form-control" id="id_ckr" placeholder="Pilih cakor"> -->
                <select name="id_ckr" id="id_ckr" class="form-select">
                    <?php
                        // membuat query
                        $cakor = mysqli_query($koneksi, "SELECT * FROM cakor");

                        // perulangan
                        foreach ($cakor as $data) {
                            ?>
                    <option value=" <?= $data['id_ckr'] ?>"><?= $data['nu_ckr'] ?></option>
                    <?php
                        }
                        ?>
                </select>
            </div>

            <div class="mb-2">
                <label for="nama" class="form-label">Nama Lengkap</label>
                <input type="text" name="nama" id="nama" class="form-control">
            </div>

            <div class="mb-2">
                <label for="slogan" class="form-label">Slogan</label>
                <input type="text" name="slogan" id="slogan" class="form-control">
            </div>

            <!-- menambah file foto -->
            <!-- File input BOOSTRAP -->
            <div class="mb-2">
                <label for="foto" class="form-label">Foto</label>
                <input type="file" class="form-control" name="foto" id="foto">
            </div>

            <div class="mb-2">
                <label for="vm" class="form-label">Visi Misi</label>
                <textarea class="form-control" name=" vm" id="vm" placeholder="VISI:
MISI:"></textarea>
            </div>


            <!-- tombol Tambah(submit) -->
            <input type="submit" value="Tambah" name="tambah" class="btn btn-dark">
        </form>
    </div>
</div>