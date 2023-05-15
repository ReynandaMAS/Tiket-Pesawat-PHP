<?php 
$jsonPath = 'assets/data/data.json'; // path to your JSON file
$jsonFile = file_get_contents($jsonPath); // read the JSON file
$data = json_decode($jsonFile, true); // decode the JSON into an associative array
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Peserta</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <h1 style="text-align: center;">Data Pemesanan</h1>
    <hr>
    <table border="1" style="border-collapse: collapse; margin: 10px auto;">
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>No. Telp</th>
            <th>Tanggal Keberangkatan</th>
            <th>Tiket</th>
            <th>Jumlah</th>
            <th>Total Harga</th>
            <th>Action</th>
        </tr>
        <?php 
        if($data > 0) :
            foreach($data as $id => $item) :
        ?>
        <tr>
            <td><?= $item['nama'] ?></td>
            <td><?= $item['email'] ?></td>
            <td><?= $item['no_telp'] ?></td>
            <td><?= $item['tgl_keberangkatan'] ?></td>
            <td><?= $item['tiket_pesawat'] ?></td>
            <td><?= $item['jumlah'] ?></td>
            <td><?= 'Rp. '. number_format($item['total_harga'], 0, ',', '.') ?></td>
            <td>
                <a href="edit.php?id=<?= $id ?>">Edit</a> |
                <a href="assets/config/delete.php?id=<?= $id ?>">Delete</a>
            </td>
        </tr>
        <?php 
            endforeach;
        endif;
        ?>
        <tr>
            <td colspan="8" style="text-align: center;">
                <a href="index.php">Kembali</a>
            </td>
        </tr>
    </table>
</body>
</html>