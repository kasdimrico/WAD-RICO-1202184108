<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Cart</title>


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
        $sql = "SELECT id FROM user WHERE email = '$current'";
        $user_id = mysqli_query($conn,$sql);
        $id_user=0;
        while ($user_ids = mysqli_fetch_assoc($user_id)) {
            $id_user = $user_ids['id'];
        }

        $query = "SELECT * FROM cart WHERE user_id = '$id_user'";
        $select = mysqli_query($conn, $query);
    ?>

</head>

<body style="background-color: #0077b6;">
    <div class="container my-5">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <?php
                $i = 0;
                $totalharga = 0;
                while ($selects = mysqli_fetch_assoc($select)) {
                    echo '<tbody>';
                    echo '<tr>';
                    //
                    echo '<th scope="row">';
                    echo $i+=1;
                    echo '</th>';
                    // 
                    echo '<td>';
                    echo $selects['nama_barang'];
                    echo '</td>';

                    echo '<td>'; 
                    echo 'Rp ' . number_format($selects['harga'], 0, ",", ",");
                    $totalharga = $totalharga + $selects['harga'];
                    echo '</td>';

                    echo '<td>'; 
                    ?>

            <a href="delete.php?name=<?php echo $selects['id']; ?>" class="btn btn-danger btn-md"
                onclick="alert('Barang berhasil dihapus dari cart')">Hapus</a>

            <?php echo '</td>';
                    echo '</tr>';
                    echo '</tbody>';
                }
                    echo '<tbody>';
                    echo '<tr>';

                    echo '<th scope="row">';
                    echo 'Total';
                    echo '</th>';

                    echo '<td>';
                    echo '';
                    echo '</td>';

                    echo '<td>';
                    echo '<b>';
                    echo 'Rp ' . number_format($totalharga, 0, ",", ",");
                    echo '</b>';
                    echo '</td>';

                    echo '<td>';
                    echo '';
                    echo '</td>';
            ?>
        </table>
    </div>
    <footer class="page-footer" style="color: white; font-size: small; text-align: center;">
        <p>© 2020 Copyright:
            <a href="index.php" style="color: white;"> WAD BEAUTY</a>
        </p>
    </footer>
</body>
</html>