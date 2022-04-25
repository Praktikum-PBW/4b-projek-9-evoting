<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- TEMPLATE CSS BOOSTRAP V5.1-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Evoting</title>

    <style>
      img {
        /* gambar bergerak membesar 1 detik ketika kursor di dekatkan gambar */
        transition: 0.3s;

        box-sizing: border-box;

        box-shadow: 0px 5px 14px rgb(168, 168, 168);
      }

      img:hover {
        /* animasi memperbesar gambar ketika kursor didekatkan */
        transform: scale(1.1);
      }
      </style>
</head>


<body>

    <!-- TEMPLATE JavaScript BOOSTRAP V5.1 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

<div class="container mt-5">
<div class="row">
            <?php
            // koneksi database
            include 'libraries/koneksidatabase.php';


            $query = mysqli_query($koneksi, "SELECT * FROM identitas JOIN cakor ON identitas.id_ckr = cakor.id_ckr");
            foreach ($query as $data) {
            ?>
                <div class="col-md-4">
                    <div class="card p-2" >
                        <img src="back/assets/img/<?= $data['foto']?>" alt="" class="img-fluid">

                        <!-- urutan cakor -->
                        <p class="text-secondary mt-3 mb-0">
                            <?= $data['nu_ckr'] ?>
                        </p>

                        <!-- nama cakor -->
                        <h3><?= $data['nama'] ?></h3>

                        <!-- sogan cakor -->
                        <p class="lead"><?= $data['slogan'] ?></p>

                        <!-- Button Pilih -->
                        <a href="#" class="btn btn-danger">Pilih</a>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
    </div>
</body>

</html>