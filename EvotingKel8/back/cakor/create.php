<!-- 2 -->
<!-- form menambahkan data -->
<!-- CRUD = CREATE -->
<div class="row">
    <div class="col-md-12">
        <div class="d-flex justify-content-between">
            <h4>Tambah Urutan Jenis CAKOR</h4>
        </div>
        <!-- atribut action di isi dengan form yg akan di proses oleh file yang mana? -->
        <!-- pengecekkan berada di fil store.php yg di inisialkan cakor_store pada menu.php -->
        <form action="index.php?page=cakor_store" method="post">
            <!-- method post lebih cocok untuk memanipulasi data ke database, 
                 seperti menambah data, mengubah data...
                 tidak akan di tampilkan parameternya seperti method get di URL
             -->
            <div class="mb-2">
                <label for="nu_ckr" class="form-label">Urutan cakor</label>
                <!-- id , for & name harus sama dengan kolom yg ada pada tabelnya -->
                <input type="text" name="nu_ckr" id="nu_ckr" class="form-control">
            </div>
            <!-- tombol Tambah(submit) -->
            <input type="submit" value="Tambah" name="tambah" class="btn btn-dark">
            <!-- pada name, berfngsi untuk mengetahui apakah data yang baru di tambah berasal dri tombl tambah atau tidak -->
        </form>
    </div>
</div>