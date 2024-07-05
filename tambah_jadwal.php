<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Jadwal Pelajaran</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* CSS styling here */
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="mt-4 mb-4">Form Tambah Jadwal Pelajaran</h2>
                <form action="insert_jadwal.php" method="POST">
                    <div class="form-group">
                        <label for="nama_hari">Nama Hari:</label>
                        <input type="text" class="form-control" id="nama_hari" name="nama_hari" required>
                    </div>
                    <div class="form-group">
                        <label for="nama_mata_pelajaran">Nama Mata Pelajaran:</label>
                        <input type="text" class="form-control" id="nama_mata_pelajaran" name="nama_mata_pelajaran" required>
                    </div>
                    <div class="form-group">
                        <label for="durasi">Durasi:</label>
                        <input type="text" class="form-control" id="durasi" name="durasi" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>