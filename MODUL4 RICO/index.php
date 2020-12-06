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
    <title>Index</title>

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
        include ('config.php');
        $database = new database();
        session_start();
        if (! isset($_SESSION['is_login'])) {
            header('location:login.php');
        }

        $current = $_SESSION['email'];
        $sql = "SELECT id FROM user WHERE email = '$current'";
        $user_id = mysqli_query($conn,$sql);
        $id_user=0;
        while ($user_ids = mysqli_fetch_assoc($user_id)) {
            $id_user = $user_ids['id'];
        }

        if(isset($_POST['item1'])){
            $sql = "INSERT INTO cart (user_id, nama_barang, harga) VALUES ('$id_user', 'LIMITED EDITION! SK-II TREATMENT ESSENCE', '169000')";
            $insert = mysqli_query($conn, $sql);
            if ($insert) {
                    header("Refresh:2");
                    echo '<div class="alert alert-warning" role="alert">';
                    echo 'Barang berhasil dimasukan cart';
                    echo '</div>';
            }
            else{
                    header("Refresh:2");
                    echo '<div class="alert alert-danger" role="alert">';
                    echo 'Oops! Barang gagal dimasukan cart';
                    echo '</div>';
            }
        }
        if(isset($_POST['item2'])){
            $sql = "INSERT INTO cart (user_id, nama_barang, harga) VALUES ('$id_user', 'SK-II DAY CREAM TREATMENT', '180000')";
            $insert = mysqli_query($conn, $sql);
            if ($insert) {
                    header("Refresh:2");
                    echo '<div class="alert alert-warning" role="alert">';
                    echo 'Barang berhasil dimasukan cart';
                    echo '</div>';
            }
            else{
                    header("Refresh:2");
                    echo '<div class="alert alert-danger" role="alert">';
                    echo 'Oops! Barang gagal dimasukan cart';
                    echo '</div>';
            }
        }

        if(isset($_POST['item3'])){
            $sql = "INSERT INTO cart (user_id, nama_barang, harga) VALUES ('$id_user', 'SK-II MACIG TISSUE MASK', '108000')";
            $insert = mysqli_query($conn, $sql);
            if ($insert) {
                    header("Refresh:2");
                    echo '<div class="alert alert-warning" role="alert">';
                    echo 'Barang berhasil dimasukan cart';
                    echo '</div>';
            }
            else{
                    header("Refresh:2");
                    echo '<div class="alert alert-danger" role="alert">';
                    echo 'Oops! Barang gagal dimasukan cart';
                    echo '</div>';
            }
        }
    ?>

</head>

<body style="background-color:#0077b6">
    <div class="container my-5">
        <div class="card mx-auto border-0" style="width:70%">
            <div class="border rounded" style="background: linear-gradient(to right, #33dbe4 20%, #feeb86);">
                <br>
                <h1 style="text-align: center;"><b>WAD BEAUTY</b></h1>
                <p style="text-align: center;">Tersedia Skincare dengan harga murah tapi bukan murahan dan berkualitas</p><br>
            </div>
            <form method="post" action="">
                <div class="card-body pt-0 px-3">
                    <div class="row border rounded">
                        <div class="col card border-3 px-3">
                            <img class="card-img-top" style="height:200px;height:200px" src="img/1.jfif"
                                alt="Card image cap">
                            <div class="card-body px-3">
                                <h5 class="card-title" style="text-align: center;">LIMITED EDITION! <br> SK-II TREATMENT
                                    ESSENCE</h5>
                                <p class="card-text" style="text-align: center;">Lorem ipsum dolor sit, amet consectetur
                                    adipisicing elit. Quidem dolore quasi dolorum sint illum amet animi voluptas fugiat
                                    minima earum perspiciatis placeat, tenetur corporis ullam facere rem? Praesentium,
                                    dolore unde.</p>
                                <hr>
                                <div class="card-text" style="text-align: center;">
                                    <br>
                                    <p><b>Rp 169.000</b></p>
                                    <button type="submit" name="item1"
                                        class="btn btn-block btn-primary btn-sm">Tambahkan ke Keranjang</button>
                                </div>
                            </div>
                        </div>
                        <div class="col card border-3 px-3">
                            <img class="card-img-top" style="height:200px;height:200px" src="img/2.jfif"
                                alt="Card image cap">
                            <div class="card-body px-3">
                                <h5 class="card-title" style="text-align: center;">SK-II DAY CREAM TREATMENT</h5>
                                <p class="card-text" style="text-align: center;">Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Incidunt corrupti reprehenderit reiciendis dignissimos, enim quam
                                    error necessitatibus dolorem qui harum obcaecati quaerat pariatur voluptatem
                                    sapiente dolorum debitis nostrum ipsam deleniti!
                                    <hr><br>
                                    <div class="card-text" style="text-align: center;">
                                        <p><b>Rp 180.000</b></p>
                                        <button type="submit" name="item2"
                                            class="btn btn-block btn-primary btn-sm">Tambahkan ke
                                            Keranjang</button>
                                    </div>
                            </div>
                        </div>
                        <div class="col card border-3 px-3">
                            <img class="card-img-top" style="height:200px;height:200px" src="img/3.jfif"
                                alt="Card image cap">
                            <div class="card-body px-3">
                                <h5 class="card-title" style="text-align: center;">SK-II MACIG TISSUE MASK</h5>
                                <p class="card-text" style="text-align: center;">Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Incidunt corrupti reprehenderit reiciendis dignissimos, enim quam
                                    error necessitatibus dolorem qui harum obcaecati quaerat pariatur voluptatem
                                    sapiente dolorum debitis nostrum ipsam deleniti!
                                    <hr><br>
                                    <div class="card-text" style="text-align: center;">
                                        <p><b>Rp 108.000</b></p>
                                        <button type="submit" name="item3"
                                            class="btn btn-block btn-primary btn-sm">Tambahkan ke
                                            Keranjang</button>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>