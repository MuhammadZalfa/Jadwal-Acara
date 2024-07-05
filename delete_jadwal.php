<?php

// Include file koneksi database
include "koneksi.php";

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    // Check if confirmation variable is set (assuming it's named 'confirm')
    if (isset($_GET['confirm'])) {
        $query = "DELETE FROM jadwal_pelajaran WHERE id = '$id'";

        if (mysqli_query($conn, $query)) {
            echo "<script>alert('Jadwal pelajaran berhasil dihapus.'); window.location.href = 'admin.php';</script>"; // Confirmation message after deletion
            exit();
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
        }
    } else {
        // Display confirmation prompt using JavaScript alert
        echo "<script>if (confirm('Yakin ingin menghapus jadwal ini?')) {";
        echo "window.location.href='delete_jadwal.php?id=$id&confirm=true';";
        echo "} else {";
        echo "window.location.href='admin.php';"; // Redirect to admin page on cancel
        echo "}</script>";

        // Display schedule information (optional)
        $query = "SELECT * FROM jadwal_pelajaran WHERE id = '$id'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);

        echo "<h4>Jadwal yang akan dihapus:</h4>";
        echo "<h6>Mata Pelajaran: " . $row['nama_mata_pelajaran'] . "</h6>";
        echo "<p>Hari: " . $row['nama_hari'] . "</p>";
    }
} else {
    header("Location: admin.php");
    exit();
}

mysqli_close($conn);