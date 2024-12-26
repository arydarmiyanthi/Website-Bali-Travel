<?php
require 'koneksi.php';

$sql = "SELECT * FROM pemesanan";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Data Pemesanan</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Data Pemesanan Paket Tour</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Paket</th>
            <th>Jumlah Hari</th>
            <th>Total Harga</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["id"] . "</td>
                        <td>" . $row["nama"] . "</td>
                        <td>" . $row["email"] . "</td>
                        <td>" . $row["paket"] . "</td>
                        <td>" . $row["hari"] . "</td>
                        <td>Rp " . number_format($row["total_harga"], 0, ',', '.') . "</td>
                    </tr>";
            }
        } else {
            echo "<tr><td colspan='6'>Tidak ada data pemesanan</td></tr>";
        }
        $conn->close();
        ?>
    </table>
</body>
</html>
