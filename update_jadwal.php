<?php
// include database connection file
include_once("koneksi.php");

// mengambil id dari parameter URL
$id = isset($_GET['id']) ? $_GET['id'] : '';

// jika id tidak ada dalam parameter URL, redirect ke halaman index
if (empty($id)) {
    header("Location: index.php");
    exit;
}

// jika tombol submit ditekan
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $nama_hari = $_POST['nama_hari'];
    $nama_mata_pelajaran = $_POST['nama_mata_pelajaran'];
    $durasi = $_POST['durasi'];

    // query untuk mengubah data jadwal pelajaran
    $query = "UPDATE jadwal_pelajaran SET nama_hari = '$nama_hari', nama_mata_pelajaran = '$nama_mata_pelajaran', durasi = '$durasi' WHERE id = $id";
    mysqli_query($conn, $query);

    // redirect ke halaman index.php
    header("Location: index.php");
    exit;
}

// query untuk mengambil data jadwal pelajaran berdasarkan id
$query = "SELECT * FROM jadwal_pelajaran WHERE id = $id";
$result = mysqli_query($conn, $query);

// mengambil data jadwal pelajaran
$row = mysqli_fetch_assoc($result);

// menutup koneksi ke database
mysqli_close($conn);
?>