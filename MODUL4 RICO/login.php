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
    <title>Login</title>

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


    <?php
        session_start();
        include_once('config.php');
        $database = new database();

        if (isset($_SESSION['is_login'])) {
            header('location:index.php');
        }

        if (isset($_COOKIE['email'])) {
            $database->relogin($_COOKIE['email']);
            header('location:index.php');
        }

        if (isset($_POST['login'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            if (isset($_POST['remember'])) {
                $remember = TRUE;
            }
            else {
                $remember = FALSE;
            }

            if ($database->login($email,$password,$remember)) {
                header('location:index.php');
            }
        }
    ?>

</head>

<body style="background-color:#0077b6">
    <div class="container my-3">
        <div class="card centered mx-auto px-3" style="width: 26rem;">
            <div class="card-body">
                <h5 class="card-title" style="text-align: center;">Login</h5>
                <hr>
                </hr>
                <form method="post" action="">
                    <div class="form-group">
                        <label>E-mail</label>
                        <input require type="email" class="form-control" name="email" placeholder="Masukkan email">
                    </div>
                    <div class="form-group">
                        <label>Kata Sandi</label>
                        <input require type="password" class="form-control" name="password"
                            placeholder="Masukan password">
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input">
                        <label class="form-check-label" style="font-size: 14px; color: grey;">Remember me</label>
                    </div><br>
                    <div class="form-group" style="text-align: center;">
                        <button type="submit" name="login" class="btn btn-block btn-primary">Login</button>
                        <br>
                        <p style="font-size: 13px; color: grey;">Belum punya akun? <a href="register.php">Registrasi</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>