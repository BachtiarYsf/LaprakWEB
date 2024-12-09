<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pengisian</title>
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/style.css">
</head>
<body>
    <div class="container">
        <h1 class="text-center mt-5">Form Pengisian KRS</h1>
        <div class="row mt-5">
        <div class="col-12 col-md-6 offset-md-3">
                <form action="input.php" method="post">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingNim" name ="nim">
                        <label for="floatingNim">NIM</label>
                    </div>
                    <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingMhs" name="mahasiswa">
                        <label for="floatingMhs">Nama Mahasiswa</label>
                    </div>
                    <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingMatkul" name="matkul">
                        <label for="floatingGaji">Nama Mata Kuliah</label>
                    </div>
                    <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingDosen" name="dosen">
                        <label for="floatingDosen">Nama Dosen</label>
                    </div>
                    <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="floatingSks" name="sks">
                        <label for="floatingSks">Jumlah SKS</label>
                    </div>
                    <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="floatingTahun" name="tahun">
                        <label for="floatingGaji">Tahun Pengambilan</label>
                    </div>
                    <button type="submit" class=" btn btn-primary">Submit</button>
                </form>
            </div>
    </div>
    <script src="asset/js/bootstrap.min.js"></script>
</body>
</html>