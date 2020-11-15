<!DOCTYPE html>
<html>
    <head>
        <title>EAD EVENTS</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">    
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    

            <nav class="navbar navbar-inverse navbar-dark" style="background-color: #0077b6;">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand">EAD EVENTS</a>
                    </div>
                    <ul class="nav navbar-navbar navbar-right navbar-dark" style="background-color: #0077b6;">
                    <li>
                        <a class="nav-link active" href="Home.php" style="color: white;" >Home</a>
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
        
        <style>
        #colom1{
            margin-left: 50px;
            margin-right: 50px;
        }
        #colom2{
            margin-bottom: 100px;
        }
        </style>

    </head>
    
    <body>

        <div class="col-sm-10">
        <h2 class="text-left" style="color: #0077b6; margin-left:50px">Buat Event</h2>
        </div>
        
        <div class="container-fluid mt-5" style="color:black" align="left" id="colom1">
        <form action="create.php" method="post" >
        <div class="row">
            <div class="col sm-6">
            <div class="card">
            <div style="height: 20px;" class="bg-danger"></div>
            <div class="card-body">
                
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name">
                </div>

                <div class="form-group md-outline input-with-post-icon datepicker">
                    <label>Deskripsi</label>
                    <textarea class="form-control" rows="5" name="deskripsi"></textarea>
                </div>

                <div class="form-group">
                <label> Upload Gambar</label>   
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="gambar">
                    <label class="custom-file-label">Choose file</label>
                    </div>
                </div>

                <div class="form-group ">
                <legend class="col-form-label ">Kategori</legend>
                    
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="kategori"  value="online">
                    <label class="form-check-label"> Online </label>
                </div>
                <div class="form-check form-check-inline">                
                    <input class="form-check-input" type="radio" name="kategori" value="offline">
                    <label class="form-check-label">Offline</label>
                </div>
                
            </div>
            </div>
            </div>
            </div>

            <div class="col sm-6" id="colom2">
            <div class="card">
            <div style="height:20px;" class="bg-primary"></div>
            <div class="card-body">    
            
                <div class="form-group md-outline input-with-post-icon datepicker">        
                    <label>Tanggal</label>
                    <input type="date" class="form-control" name="tanggal" value="<?php echo date('Y-m-d'); ?>" >  
                </div>

                <div class="form-row">
                    <div class="form-group col sm-6"> 
                        <label>Jam Mulai</label>
                        <input type="time" class="form-control" name="mulai">
                    </div>

                    <div class="form-group col sm-6">
                        <label> Jam Berakhir</label>
                        <input type="time" class="form-control" name="berakhir">
                    </div>
                </div>
                
                <div class="form-group">
                    <label>Tempat</label>
                    <input type="text" class="form-control" name="tempat">
                </div>

                <div class="form-group">
                    <label >Harga</label>
                    <input type="text" class="form-control" name="harga">
                </div>

                <legend class="col-form-label ">Benefit</legend>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="benefit[]" value="snacks">
                        <label class="form-check-label" for="benefit">Snacks</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="benefit" name="benefit[]" value="sertifikat">
                        <label class="form-check-label" for="benefit">Sertifikat</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="benefit" name="benefit[]" value="souvenir">
                        <label class="form-check-label" for="benefit">Souvenir</label>
                    </div>
                    <br><br><br>

                <div class="input" style="text-align: right;" >
                    <button type="submit" class="btn btn-primary "name="submit">submit</button>
                    <a href="./BuatEvent.php">
                    <button class="btn btn-danger" name="cancel">cancel</button>
                    </a>
                   
                </div>

            </div>
            </div>
            </div>
            </div>

        </div>
        </form>
        </div>
    
    </body>
</html>   