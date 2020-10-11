<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Home</title>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-primary">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse nav justify-content-center">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="Home.php">Home </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="Booking.php">Booking <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>

    <style>
        #Form {
            margin-top: 50px;
            margin-bottom: 50px;
        }
    </style>

</head>

<body>

    <div class="container" id="Form">
        <div class="row">
            <div class="col sm-5">

                <form action="My Booking.php" method="post">
                    <fieldset class="form-group">

                        <!-- Nama -->
                        <div class="form-group">
                            <label> Nama </label>
                            <div class="col-sm-15">
                                <input required type="text" class="form-control" name="Name">
                            </div>
                        </div>

                        <!-- Check In -->
                        <div class="form-group">
                            <label>Check-in</label>
                            <div class="col-sm-15">
                                <input required type="date" class="form-control" value="<?php echo date('Y-m-d'); ?>"
                                    name="Checkin">
                            </div>
                        </div>

                        <!-- Duration -->
                        <div class="form-group">
                            <label>Duration</label>
                            <div class="col-sm-15">
                                <input type="number" class="form-control" placeholder="Day(s)" name="Duration">
                                <small class="text-muted">Day(s)</small>
                            </div>
                        </div>

                        <!-- Room Type -->
                        <div class="form-group">
                            <label for="sel1"> Room Type </label>
                            <div class="col-sm-15">
                                <?php
                                    if (empty($_GET['type'])) {
                                        echo
                                            '<select name="room" class="form-control">
                                                <option value="Standard"> Standard </option>
                                                <option value="Superior"> Superior </option>
                                                <option value="Luxury"> Luxury </option>
                                            </select>';
                                    } else {
                                        $roomType = $_GET['type'];
                                        $stat = is_null($roomType);
                                        if ($stat != 1){
                                            echo '<input readonly name="room" type="text" class="form-control disabled" value="'.$roomType.'">';
                                        } else {
                                            echo   
                                                '<select name="room" class="form-control">
                                                    <option value="Standard"> Standard </option>
                                                    <option value="Superior"> Superior </option>
                                                    <option value="Luxury"> Luxury </option>
                                                </select>';
                                        }
                                    }
                                ?>
                            </div>
                        </div>

                        <!-- Service -->
                        <div class="form-group">
                            <label for="sel1">Add Service(s)</label><br>
                            <small class="text-muted">$ 20/Service</small><br>
                            <input type="checkbox" name="services[]" value="Room Service"> Room Services <br>
                            <input type="checkbox" name="services[]" value="Breakfast"> Breakfast <br>
                        </div>

                        <!-- Phone Number -->
                        <div class="form-gorup">
                            <label>Phone Number</label>
                            <div class="col-sm-15">
                                <input class="form-control" name="PhoneNumber">
                            </div>
                        </div>
                        <br><br>

                        <!-- Button book -->
                        <div class="col-sm-15">
                            <input type="submit" value="Book" class="btn btn-primary btn-block"></input>
                        </div>

                    </fieldset>
                </form>
            </div>

            <!-- Image -->
            <div class="col-sm-15">
                <div class="container">
                    <div class="img-card">
                        <?php
                            if (empty($_GET['img'])){
                                echo '<img class="img" style="height: 400px; width: 600px;" src="2.jpg">';
                            }else{
                                echo '<img class="img" style="height: 400px; width: 600px;" src="'.$_GET['img'].'.jpg">';
                            }
                        ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>