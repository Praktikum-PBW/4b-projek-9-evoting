<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    </head>

<body class="bg-dark">

    <!-- aktif session -->
    <?php
    session_start();
    ?>

    <!-- Halaman Login -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 mx-auto">

                <?php 
            if(isset($_SESSION['error'])) {
             ?>
                <!-- menampilkan informasi ketika user salah meng inputkn npm/password -->
                <div class="alert alert-danger">
                    <?= $_SESSION['error']?>
                </div>
                <?php 
             }
              ?>

                <div <div class="card ">
                    <div class="card-header bg-dark text-light text-center">
                        <h3 class="card-title ">Login</h3>
                    </div>

                    <div class="card-body">
                        <form action="login-process.php" method="POST">
                            <div class="mb-2">
                                <label for="id_usr" class="form-label">NPM</label>
                                <input type="text" name="id_usr" id="id_usr" class="form-control">
                            </div>
                            <div class="mb-2">
                                <label for="pass" class="form-label">Password</label>
                                <input type="password" name="pass" id="pass" class="form-control">
                            </div>

                            <div class="btn-group">

                            <input type="submit" value="Login" name="login" class="btn btn-sm btn-outline-success">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>