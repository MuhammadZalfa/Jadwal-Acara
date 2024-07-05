
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <title>Document</title>
    <style>
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="col-md-6">
            <h1 class="mt-4">Edit Jadwal Pelajaran</h1>

            <form action="update_jadwal.php" method="post" class="mt-4">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <div class="form-group">
                    <label for="hari">Hari:</label>
                    <select name="hari" id="nama_hari" class="form-control">
                        <option value="Senin" <?php echo ($row['nama_hari'] == 'Senin') ? 'selected' : ''; ?>>Senin</option>
                        <option value="Selasa" <?php echo ($row['nama_hari'] == 'Selasa') ? 'selected' : ''; ?>>Selasa</option>
                        <option value="Rabu" <?php echo ($row['nama_hari'] == 'Rabu') ? 'selected' : ''; ?>>Rabu</option>
                        <option value="Kamis" <?php echo ($row['nama_hari'] == 'Kamis') ? 'selected' : ''; ?>>Kamis</option>
                        <option value="Jumat" <?php echo ($row['nama_hari'] == 'Jumat') ? 'selected' : ''; ?>>Jumat</option>
                        <option value="Sabtu" <?php echo ($row['nama_hari'] == 'Sabtu') ? 'selected' : ''; ?>>Sabtu</option>
                        <option value="Minggu" <?php echo ($row['nama_hari'] == 'Minggu') ? 'selected' : ''; ?>>Minggu</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="mata_pelajaran">Mata Pelajaran:</label>
                    <input type="text" name="mata_pelajaran" id="mata_pelajaran" value="<?php echo $row['nama_mata_pelajaran']; ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="durasi">Durasi:</label>
                    <input type="number" name="durasi" id="durasi" value="<?php echo $row['durasi']; ?>" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

