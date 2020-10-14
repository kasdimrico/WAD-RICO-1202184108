<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>My Booking</title>

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
        #MyBooking{
            margin-top: 50px;
            margin-left: 50px;
            margin-right: 100px;
        }
    </style>

</head>

<body>

    <!-- Deklarasi Variable -->
    <?php
        $Booknumber = rand(); //random number
        $Name = $_POST['Name'];
        $PhoneNumber =$_POST['PhoneNumber'];
        $Type = $_POST['room']; //tipe room
        $Date = $_POST['Checkin'];
        $ServiceOption = $_POST['services'];
        $Duration = $_POST['Duration'];
        $CheckIn = date('d/m/Y', strtotime($Date));
        $CheckOut = date('d/m/Y', strtotime("+$Duration days", strtotime($Date)));
        
        $Price = 0; //untuk deklarasi variable price
        
        $ServiceOption = $_POST['services'];

        switch ($Type){
            case 'Standard':
                $Price= 100;
                    break;
            case 'Superior':
                $Price= 200;
                    break;
            case 'Luxury':
                $Price= 300;
                    break; 
                }

        $OtherPrice = 0;
            if (empty($ServiceOption)){
                $Choose = 0;
            }else{
                $Choose = $ServiceOption;
                $OtherPrice= count($Choose)*20; 
            }

        $Bill= ($Duration**$Price) + $OtherPrice;
        
    ?>

        <div class="container justify-content-center" id="MyBooking">
            <table class="table">

                <!-- Baris 1 -->
                <thead>
                    <tr>
                        <th>Booking Number</th>
                        <th>Name</th>
                        <th>Check In</th>
                        <th>Check Out</th>
                        <th>Room Type</th>
                        <th>Phone Number</th>
                        <th>Service</th>
                        <th>Total Price</th>
                    </tr>
                </thead>

                <!-- Baris 2 == Hasil -->
                <tbody>
                    <tr>
                        <th><?= $Booknumber?></th>
                        <td><?= $Name ?></td>
                        <td><?= $CheckIn ?></td>
                        <td><?= $CheckOut ?></td>
                        <td><?= $Type ?></td>
                        <td><?= $PhoneNumber ?></td>
                        <td>
                            <?php
                                echo'  
                                <ul>';
                                    if ($Choose != 0){
                                        echo 'NO SERVICES';
                                    } else{
                                        for ($i = 0; $i<count($Choose); $i++);{
                                            echo '<li>' . $Choose[$i] . '</li>' ;
                                        }
                                    }
                                    echo'
                                </ul>'
                            ?>   
                        </td>
                        <td>$<?= $Bill ?></td> 
                    </tr>
                </tbody>

            </table>
        </div>

</body>

</html>