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
        <li class="nav-item active">
          <a class="nav-link" href="Home.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Booking.php">Booking</a>
        </li>
      </ul>
    </div>
  </nav>

  <style>
    #Card {
      margin-bottom: 50px;

    }
  </style>


  <br>
  <h3 style="text-align: center; color: orange;">EAD HOTEL</h3>
  <h4 style="text-align: center; color: orange;">Welcome to 5 Star Hotel</h4>
  <br>

</head>

<body>

  <div class="container" id="Card">
    <div class="card-deck">

      <!-- Standard -->
      <div class="col md-5">
        <div class="card card text-center" style="width: 18rem; ">
          <img src="2.jpg" class="card-img-top" width="250" height="250" alt="Standard"> <br>
          <br>
          <h3> Standard </h3>
          <h4 style="color:dodgerblue ;"> $90/Day </h1>
            <br>
            <div class="card-header">
              Facilities
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">1 Single Bed</li>
              <li class="list-group-item">1 Bathroom</li>
            </ul>
            <div class="card-body card-footer">
              <a href="Booking.php?type=<?php  'Standard&img=2' ?>" class="btn btn-primary">Book Now</a>
            </div>
        </div>
      </div>

      <!-- Superior -->
      <div class="col md-5">
        <div class="card card text-center" style="width: 18rem;">
          <img src="3.jpg" class="card-img-top" width="250" height="250" alt="Superior"> <br>
          <br>
          <h3> Superior </h3>
          <h4 style="color:dodgerblue ;"> $150/Day </h1>
            <br>
            <div class="card-header">
              Facilities
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">1 Double Bed</li>
              <li class="list-group-item">1 Television and Wi-Fi</li>
              <li class="list-group-item">1 Bathroom with hot water</li>
            </ul>
            <div class="card-body card-footer">
              <a href="Booking.php?type=<?php 'Superior&img=3' ?>" class="btn btn-primary">Book Now</a>
            </div>
        </div>
      </div>

      <!-- Luxury -->
      <div class="col md-5">
        <div class="card card text-center" style="width: 18rem;">
          <img src="1.jpg" class="card-img-top" width="250" height="250" alt="Luxury"> <br>
          <br>
          <h3> Luxury </h3>
          <h4 style="color:dodgerblue ;"> $200/Day </h1>
            <br>
            <div class="card-header">
              Facilities
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">2 Double Bed</li>
              <li class="list-group-item">2 Bathroom with hot water</li>
              <li class="list-group-item">1 kitchen</li>
              <li class="list-group-item">1 Television and Wi-Fi</li>
              <li class="list-group-item">1 Workroom </li>
            </ul>
            <div class="card-body card-footer">
              <a href="Booking.php?type=<?php 'Luxury&img=1' ?>" class="btn btn-primary">Book Now</a>
            </div>
        </div>
      </div>

    </div>
  </div>

</body>

</html>
