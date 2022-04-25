<!-- 2. form menambahkan data -->
<!-- CRUD = CREATE -->
<div class="row">
    <div class="col-md-12">
        <div class="d-flex justify-content-between">
            <h4>Tambah Akun</h4>
        </div>
        <!-- pengecekkan berada di fil store.php yg di inisialkan user_store pada menu.php -->
        <form action="index.php?page=user_store" method="post">

            <!-- form create -->
            <div class="mb-2">
                <label for="id_usr" class="form-label">ID</label>
                <input type="number" name="id_usr" id="id_usr" class="form-control" placeholder="2010631170XXX">
            </div>

            <div class="mb-2">
                <label for="nm_usr" class="form-label">Nama Lengkap</label>
                <input type="text" name="nm_usr" id="nm_usr" class="form-control">
            </div>

            <div class="mb-2">
                <label for="email" class="form-label">Email</label>
                <input type="text" name="email" id="email" class="form-control" placeholder="NPM@student.unsika.ac.id">
            </div>

            <div class="mb-2">
                <label for="pass" class="form-label">Password</label>
                <input type="password" name="pass" id="pass" class="form-control">
            </div>

            <div class="mb-2">
                <label for="jns_usr" class="form-label">Jenis Akun</label>
                <select class="form-control" name="jns_usr" id="jns_usr">
                    <option value="admin">Admin</option>
                    <option value="mhs">Mahasiswa</option>
                </select>
            </div>

            <!-- tombol Tambah(submit) -->
            <input type="submit" value="Tambah" name="tambah" class="btn btn-dark">
        </form>
    </div>
</div>