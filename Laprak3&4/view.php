<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='asset/style.css'>
    <link rel="stylesheet" href="asset/css/bootstrap.css">
    <title>View</title>
</head>
<body>
    <?php
    include 'connect.php';
    $sql = "SELECT * FROM krs";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo"<div class='content'>";
            echo"<div class='center'>";
            echo '<h1>Data KRS</h1>';
            echo"<div class='table'>";
                echo "<table>";
                echo "<tr>
                        <th scope='col'>NIM</th>
                        <th>Nama Mahasiswa</th>
                        <th>Nama Mata kuilah</th>
                        <th>Nama Dosen</th>
                        <th>Jumlah SKS</th>
                        <th>Tahun Pengambilan</th>
                    </tr>";

        // Menampilkan data setiap baris
        while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["NIM"]. "</td>
                        <td>" . $row["nama_mhs"]. "</td>
                        <td>" . $row["nama_matkul"]. "</td>
                        <td>" . $row["nama_dosen"]. "</td>
                        <td>" . $row["jumlah_sks"]. "</td>
                        <td>" . $row["tahun_peng"]. "</td>
                    </tr>";
        }
                echo "</table>";
                echo '<a href="frominput.php"><button type="submit" class=" btn btn-primary">New Data</button></a>';
                echo "</div>";
            echo "</div>";
        echo "</div>";
    } else {
        echo "0 results";
    }

    $conn->close();
    ?>
    
</body>
</html>
