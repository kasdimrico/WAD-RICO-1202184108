<!DOCTYPE html>
<html>

<head>
	<title>EAD EVENTS</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
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

</head>

<?php
	    include ('config.php');
	    $id = $_GET["id"];
	    $query = "SELECT * FROM event_table where id=$id";
	    $select = mysqli_query($conn, $query);
	    $event = $select->fetch_assoc();
		?>

<body>
	<h2 class="text-center" style="color: 0077b6">DETAILS EVENT!</h2>
	<div class="container-card" style="width: 50rem;margin: auto;padding-top: 30px;">

		<div class="card">
			<img src="gambar/<?= $event['gambar'] ?>" class="card-image-top" style="max-height:400px; max-widht:400px;">
			<div class="card-body">
				<h3><?= $event["name"] ?></h3>
				<p class="font-weight-bold">Deskripsi</p>
				<p><?= $event["deskripsi"] ?></p>
				<div class="row">

					<div class="col col-6">
						<p class="font-weight-bold">Informasi Event</p>
						<p>
							<i class="fa fa-calendar" style="color: orange"></i>
							<?= $event["tanggal"] ?>
						</p>

						<p>
							<i class="fa fa-map-marker" style="color: orange"></i>
							<?= $event["tempat"] ?>
						</p>

						<p>
							<i class="fa fa-clock-o" style="color: orange"></i>
							<?= $event["mulai"] ?> - <?= $event["berakhir"] ?>
						</p>

						<p>Kategori <?= $event["kategori"] ?></p>
						<p class="font-weight-bold">HTM Rp.<?= $event["harga"] ?></p>
					</div>

					<div class="col col-6">
						<p class="font-weight-bold">Benefit</p>
						<ul>
							<li><?= $event["benefit"] ?></li>
						</ul>
					</div>

				</div>


				<div class="text-center">
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit">Edit</button>
					<a href="delete.php?id=<?= $event["id"] ?>">
						<button class="btn btn-danger"> delete</button>
					</a>
				</div>

			</div>
		</div>
	</div>

	<div class="modal fade" tabindex="-1" aria-hidden="true" data-backdrop="false"
		style="background-color: rgba(0, 0, 0, 0.5);">
		<div class="modal-dialog modal-xl">

			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Edit sesion</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>

				<div class="modal-body">
					<form action="Update.php" method="POST" enctype="multipart/form-data">
						<input type="text" value="<?= $event['id'] ?>" hidden>
						<div class="row">
							<div class="col col-6" style="background-color:whitesmoke;height: 600px;">
								<div class="card h-100">
									<div style="height: 24px; border-radius: 4px 4px 0 0" class="bg-danger"></div>
									<div class="card-body">

										<div class="form-group">
											<label>Name</label>
											<input type="text" class="form-control" value="<?= $event["name"] ?>">
										</div>


										<div class="form-group md-outline input-with-post-icon datepicker">
											<label>Deskripsi</label>
											<textarea class="form-control" rows="3"><?= $event["deskripsi"] ?>
										</div>


										<div class="form-group">
											<label>Upload Gambar</label>
											<div class="custom-file">
												<input type="file" class="custom-file-input">
												<label class="custom-file-label">Choose file</label>
											</div>
										</div>

										<div class="form-group ">
											<legend class="col-form-label ">Kategori</legend>

											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" value="online" checked>
												<label class="form-check-label"> Online </label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" value="offline">
												<label class="form-check-label">Offline</label>
											</div>

										</div>
									</div>
								</div>
							</div>
							<div class="col sm-6">
								<div class="card">
									<div style="height: 20px;" class="bg-primary"></div>
									<div class="card-body">

										<div class="form-group md-outline input-with-post-icon datepicker">
											<label>Tanggal</label>
											<input type="date" class="form-control" id="tanggal" name="tanggal"
												value=" <?= $event["tanggal"] ?>">
										</div>


										<div class="form-row align-items-center">
											<div class="form-group col sm-6">
												<label>Jam Mulai</label>
												<input type="time" class="form-control" value="<?= $event["mulai"] ?>">
											</div>


											<div class="form-group col sm-6">
												<label>Jam Berakhir</label>
												<input type="time" class="form-control"
													value="<?= $event["berakhir"] ?>">
											</div>
										</div>

										<div class="form-group">
											<label>Tempat</label>
											<input type="text" class="form-control" value="<?= $event["tempat"] ?>">
										</div>
										<div class="form-group">
											<label>Harga</label>
											<input type="text" class="form-control" name="harga"
												value="<?= $event["harga"] ?>">
										</div>
										<legend class="col-form-label ">Benefit</legend>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="checkbox" name="benefit[]"
												value="snacks">
											<label class="form-check-label">Snacks</label>
										</div>


										<div class="form-check form-check-inline">
											<input class="form-check-input" type="checkbox" name="benefit[]"
												value="sertifikat">
											<label class="form-check-label">Sertifikat</label>
										</div>


										<div class="form-check form-check-inline">
											<input class="form-check-input" type="checkbox" name="benefit[]"
												value="souvenir">
											<label class="form-check-label">Souvenir</label>
										</div>


										<div class="input-left">
											<button class="btn btn-danger " data-dismiss="modal" style="float: right"
												name="cancel">cancel</button>
											<button type="submit" class="btn btn-primary " style="float: right"
												name="submit">save changes</button>

										</div>


									</div>
								</div>
							</div>
						</div>
				</div>
				</form>
			</div>


		</div>

	</div>
	</div>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
	integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
	integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
</script>


</html>