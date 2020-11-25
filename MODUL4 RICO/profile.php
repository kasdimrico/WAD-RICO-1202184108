<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <script src="https://kit.fontawesome.com/fe18d29869.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Profile</title>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand"><b>WAD BEAUTY</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse mx-auto">
            <ul class="navbar-nav ml-auto" style="color: #0077b6;">
                <li class="nav-item active mr-3">
                    <a class="nav-link" href="cart.php"><i class="fa fa-shopping-basket" style="font-size:20px"></i></a>
                </li>
                <li class="nav-item active mr-3">
                    <div class="dropdown">
                        <button class="btn btn-light dropdown-toggle" type="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Selamat datang
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="profile.php">Profile</a>
                            <a class="dropdown-item" href="logout.php">Logout</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <?php
        include_once('config.php');
        $database = new database();
        session_start();
        if (! isset($_SESSION['is_login'])) {
            header('location:login.php');
        }

        $current = $_SESSION['email'];
        $sql = "SELECT * FROM user WHERE email = '$current'";
        $data = mysqli_query($conn,$sql);

        if (isset($_POST['update'])) {
            $nama = $_POST['nama'];
            $email = $_POST['email'];
            $no_hp = $_POST['no_hp'];
            $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
            
            if ($_POST['confirm_password'] == $_POST['password']){
                try {
                    $sql = "UPDATE user SET nama='$nama', email='$email', no_hp='$no_hp', password='$password' WHERE email='$email'";
                    $stmt = $conn->prepare($stmt);
                    $stmt->execute();
                    header('Refresh:2');
                    echo '<div class="alert alert-warning" role="alert">';
                    echo 'Berhasil di update!';
                    echo '</div>';
                } catch (PDOException $e) {
                    echo $sql . "<br>" . $e->getMessage();
                }
                $conn = null;
            }
            else{
                    header('Refresh:2');
                    echo '<div class="alert alert-danger" role="alert">';
                    echo 'Gagal di update!';
                    echo '</div>';
            }
            }
        else{
            if(isset($_POST['cancel'])){
                header('location: index.php');
            }
        }
    ?>

</head>

<body style="background-color: #0077b6">
    <div class="container my-5">
        <div class="card centered mx-auto" style="width: 70%;">
            <div class="card-body">
                <h2 class="card-title" style="text-align: center;">Profile</h2>
                <form method="post" action="">
                    <?php
                        while ($datas = mysqli_fetch_assoc($data)) {
                    ?>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control-plaintext" value="<?php echo $datas['email'] ?>"
                                readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Nama</label>
                        <div class="col sm-5">
                            <input type="text" class="form-control" value="<?php echo $datas['nama'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Handphone</label>
                        <div class="col sm-5">
                            <input type="number" class="form-control" name="no_hp"
                                value="<?php echo $datas['no_hp'] ?>">
                        </div>
                    </div>
                    <hr>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Password</label>
                        <div class="col sm-5">
                            <input type="password" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Konfirmasi Password</label>
                        <div class="col sm-5">
                            <input type="password" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Warna Navbar</label>
                        <div class="col sm-5">
                            <select id="select-color">
                                <option value="#f8f9fa">Light</option>
                                <option value="#343a40">Dark</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        <button type="submit" class="btn btn-light btn-block">Cancel</button>
                    </div>
                    <?php } ?>
                </form>

            </div>
        </div>
    </div>
    <footer class="page-footer" style="color: white; font-size: small; text-align: center;">
        <p>© 2020 Copyright:
            <a href="index.php" style="color: white;"> WAD BEAUTY</a>
        </p>
    </footer>
</body>
</html>