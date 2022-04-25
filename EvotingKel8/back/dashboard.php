<div class="row">
    <div class="col-md-12"><?php
                        if($_SESSION['jns_usr'] == "admin"){
                         ?>

        <div class="alert alert-success">
            Hallo, Selamat datang <?=$_SESSION['nm_usr']?> Pada Website E-Voting Pemilihan Calon Koordinator Kelas B!
        </div>
        <?php 
                         }
                          ?>
    </div>
</div>