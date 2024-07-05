<?php
// Include file koneksi database
include "koneksi.php";

// Ambil data yang dikirimkan dari form
$nama_hari = $_POST['nama_hari'];
$nama_mata_pelajaran = $_POST['nama_mata_pelajaran'];
$durasi = $_POST['durasi'];

// Query untuk menyimpan data ke dalam database
$query = "INSERT INTO jadwal_pelajaran (nama_hari, nama_mata_pelajaran, durasi) VALUES ('$nama_hari', '$nama_mata_pelajaran', '$durasi')";

// Jalankan query
if (mysqli_query($conn, $query)) {
    //alert success
    echo '<script>alert("Data jadwal pelajaran berhasil ditambahkan."); window.location.href = "admin.php";</script>';

    exit();
} else {

    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
