<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Jadwal Pelajaran</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<style>
		.navbar-brand {
			flex-grow: 1;
		}

		.navbar-collapse {
			display: flex;
			justify-content: center;
		}

		/* Card styles */
		.card-day {
			margin-bottom: 20px;
		}

		.card-day h5 {
			background-color: #ffcc00;
			padding: 10px;
			border-radius: 5px 5px 0 0;
			margin: 0;
			text-align: center;
		}

		.card-body {
			background-color: #ffffcc;
			border-radius: 0 0 5px 5px;
			padding: 15px;
		}
	</style>
</head>

<body>

	<nav class="navbar navbar-expand-lg navbar-light py-4">
		<div class="container-fluid">
			<a class="navbar-brand" href="https://library.livecanvas.com/sections/">
				<img class="img-fluid" src="https://getbootstrap.com/docs/5.1/assets/brand/bootstrap-logo.svg" alt="" width="48px" height="48px">
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav_lc" aria-controls="nav_lc" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="nav_lc">
				<h1>Jadwal Pelajaran</h1>
				<div class="ms-lg-auto"><a class="btn btn-outline-primary me-2" href="login.php">Login</a></div>
			</div>
		</div>
	</nav>

	<!-- Konten jadwal pelajaran -->
	<div class="container">
		<h4 class="mt-4 mb-4 text-center">Kelas XI RPL 2</h4>
		<div class="row">
			<?php
			// Include file koneksi database
			include "koneksi.php";
			// Query untuk menampilkan semua data dari tabel jadwal_pelajaran
			$query = "SELECT * FROM jadwal_pelajaran";
			$result = mysqli_query($conn, $query);
			while ($row = mysqli_fetch_assoc($result)) {
			?>
				<div class="col-md-4">
					<div class="card card-day">
						<h5><?php echo $row['nama_hari']; ?></h5>
						<div class="card-body">
							<h6>Mata Pelajaran: <?php echo $row['nama_mata_pelajaran']; ?></h6>
							<p>Durasi: <?php echo $row['durasi'] . " Menit"; ?></p>
						</div>
					</div>
				</div>
			<?php
			}
			?>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>