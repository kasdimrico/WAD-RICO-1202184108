<!DOCTYPE html>
<html>

<head>
    <title>EAD EVENTS</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


    <nav class="navbar navbar-inverse navbar-dark" style="background-color: #0077b6;">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand">EAD EVENTS</a>
            </div>
            <ul class="nav navbar-navbar navbar-right navbar-dark" style="background-color: #0077b6;">
                <li>
                    <a class="nav-link active" href="Home.php" style="color: white;">Home</a>
                </li>
                <li>
                    <a href="BuatEvent.php" class="btn btn-outline-light my-2 my-sm-0">Buat Event</a>
                </li>
            </ul>
        </div>
    </nav>


    <div class="text-primary text-center mt-4" style="margin-top:30px;">
        <h2 class="text-center" style="color: #0077b6;">WELCOME TO EAD EVENTS!</h2>
        <div class="row">

</head>

<body>

    <?php
    include ('config.php');
    $query = "SELECT * FROM event_table";
    $select = mysqli_query($conn, $query);
    $empty = true;
    while ($selects = "") {
    $empty = false;
    ?>

    <div class="card-columns col-sm-10">
        <div class="card">
            <img class="card-img-top" src="gambar/<?= $selects['gambar']; ?>">
            <div class="card-body">
                <h5 class="card-title"><?= $selects["name"];?></h5>
                <p><?= $selects["tanggal"];?></p>
                <p><?= $selects["tempat"];?></p>
                <p>Kategori: <?= $selects["kategori"];?></p>
            </div>
            <div class="card-footer text-right">
                <a href="./DetailEvent.php?id=<?= $selects['id'];?>">
                    <button class="btn btn-primary">Detail</button>
                </a>
            </div>
        </div>
    </div>
    <?php } 
            if ($empty) {
                echo "No event found";
            }
            ?>

    </div>
    </div>
</body>

</html>