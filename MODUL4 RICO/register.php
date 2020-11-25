<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Register</title>

    <?php
        include_once('config.php');
        $database = new database();
        if (isset($_POST['register'])) {
            $nama = $_POST['nama'];
            $email = $_POST['email'];
            $no_hp = $_POST['no_hp'];
            $password = password_hash($_POST['password'],PASSWORD_DEFAULT);

            if ($_POST['konfirmasi_password'] == $_POST['password']) {
                if ($database->register($nama,$nama,$no_hp,$password)) {
                    header("Refresh:2; url=login.php");
                    echo '<div class="alert alert-warning" role="alert">';
                    echo 'Berhasil registrasi';
                    echo '</div>';
                }
            }
            else {
                header("Refresh:2");
                echo '<div class="alert alert-danger" role="alert">';
                echo 'Gagal registrasi';
                echo '<br>';
                echo 'Periksa kembali password anda';
                echo '</div>';
            }
        }
    ?>

</head>

<body style="background-color:#0077b6">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand"><b>WAD BEAUTY</b></a>
            </div>
            <ul class="nav navbar-navbar navbar-right navbar-light bg-light">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php" style="color: #0077B6;">Login</a>
                </li>
                <li>
                    <a href="register.php" class="btn btn-outline-dark my-2 my-sm-0"
                        style="color: #0077b6;">Register</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container my-3">
        <div class="card my-4 mx-auto px-3" style="width: 26rem;">
            <div class="card-body">
                <h5 class="card-title" style="text-align: center;">Registrasi</h5>
                <hr>
                </hr>
                <form method="post" action="">
                    <div class="form-group">
                        <label>Nama</label>
                        <input require type="text" class="form-control" name="nama" placeholder="Masukkan Nama Lengkap">
                    </div>
                    <div class="form-group">
                        <label>E-mail</label>
                        <input require type="email" class="form-control" name="email" placeholder="Masukkan email">
                    </div>
                    <div class="form-group">
                        <label>No. Handphone</label>
                        <input require type="number" class="form-control" name="no_hp"
                            placeholder="Masukkan nomor handphone">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input require type="password" class="form-control" name="password" placeholder="Buat password">
                    </div>
                    <div class="form-group">
                        <label>Konfirmasi Password</label>
                        <input type="password" class="form-control" name="konfirmasi_password"
                            placeholder="Konfirmasi password">
                    </div> <br>
                    <div class="form-group" style="text-align: center;">
                        <button type="submit" name="register" class="btn btn-block btn-primary">Daftar</button>
                        <br>
                        <p style="font-size: 13px; color: grey;">Sudah punya akun? <a href="login.php">Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>