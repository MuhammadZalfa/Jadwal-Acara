<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Global styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        /* Sidebar styles */
        .sidebar {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            width: 220px;
            padding: 20px 0;
            background-color: #ff9900 !important;
            color: #fff;
            box-shadow: inset -1px 0 0 rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease-in-out;
        }

        .sidebar.collapsed {
            width: 60px;
            transition: all 0.3s ease-in-out;
        }

        .sidebar .nav-item {
            margin-bottom: 10px;
        }

        .sidebar .nav-link {
            display: block;
            padding: 10px 20px;
            border-radius: 4px;
            transition: all 0.3s ease-in-out;
        }

        .sidebar .nav-link:hover {
            background-color: #292e34;
            color: #fff;
        }

        .sidebar .nav-link.active {
            background-color: #16a085;
            color: #fff;
        }

        /* Main content styles */
        main {
            padding: 20px;
            margin-left: 220px;
            transition: all 0.3s ease-in-out;
        }

        .sidebar.collapsed~main {
            margin-left: 60px;
            transition: all 0.3s ease-in-out;
        }

        h4 {
            margin-bottom: 20px;
            text-align: center;
        }

        .tombol-tambah {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 25px;
            padding: 15px 30px;
            margin-top: 20px;
            cursor: pointer;
            display: block;
            margin: 0 auto;
            font-size: 18px;
            transition: background-color 0.3s ease;
        }

        .tombol-tambah:hover {
            background-color: #0056b3;
        }

        .tombol-logout {
            background-color: #dc3545;
            color: #fff;
            border: none;
            border-radius: 25px;
            padding: 15px 30px;
            margin-top: 20px;
            cursor: pointer;
            display: block;
            margin: 20px auto 0;
            font-size: 18px;
            transition: background-color 0.3s ease;
            text-decoration: none;
            text-align: center;
            width: 150px;
        }

        .tombol-logout:hover {
            background-color: #c82333;
            text-decoration: none;
            color: #fff;
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

        .btn-edit,
        .btn-delete {
            margin-top: 10px;
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <h4 class="sidebar-heading d-flex justify-content-center align-items-center mt-4 mb-1 text-muted">
                        Dashboard
                        <button class="btn btn-sm btn-light d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-expanded="false" aria-controls="sidebarMenu">
                            <span class="oi oi-menu"></span>
                        </button>
                    </h4>
                    <button class="tombol-tambah" onclick="window.location.href='tambah_jadwal.php'">Tambah</button>
                    <a href="logikalogout.php" class="tombol-logout">Logout</a>
                </div>
            </nav>
            <main class="col-md-9 ml-sm-auto col">
                <div class="d-flex justify-content-center">
                    <h1 class="text-center">Selamat Datang, <?php echo $_SESSION['username']; ?>❤️</h1>
                </div>
                <h4>Jadwal Pelajaran</h4>
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
                                    <a class="btn btn-primary btn-edit" href="edit_jadwal.php?id=<?php echo $row['id']; ?>">Edit</a>
                                    <a class="btn btn-danger btn-delete" href="delete_jadwal.php?id=<?php echo $row['id']; ?>">Delete</a>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </main>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>