<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="asset/style.css">
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
</head>
<body>    
    <?php
        require('connect.php');
        $nim = $_POST['nim'];
        $mhs = $_POST['mahasiswa'];
        $matkul = $_POST['matkul'];
        $dosen = $_POST['dosen'];
        $sks = $_POST['sks'];
        $tahun = $_POST['tahun'];

        $sql = "insert into krs (NIM, nama_mhs, nama_matkul, nama_dosen, jumlah_sks, tahun_peng) values
        ('$nim', '$mhs', '$matkul','$dosen','$sks','$tahun');";

        if($conn->query($sql) === true){
            echo '<p class="new">Data Baru Telah Berhasil Ditambahkan</p>';
            echo '<a href="frominput.php"><button type="submit" class=" btn btn-primary">New Data</button></a>';
            echo '<a href="view.php"><button type="submit" class=" btn btn-primary">Lihat</button></a>';
        } else {
            echo "<p class='new'>error $sql <br> $conn->error</p>";
        }
    ?>
    
</body>
</html>