<?php 
// Path: latihan-3\config\insert.php

$jsonPath = 'assets/data/data.json'; // path to your JSON file
$jsonFile = file_get_contents($jsonPath); // read the JSON file
$data = json_decode($jsonFile, true); // decode the JSON into an associative array

$dataTiket = array(
    array(
        "nama" => "Soekarno-Hatta Jakarta",
        "harga" => 1000000
    ),
    array(
        "nama" => "Soekarno-Hatta Bali",
        "harga" => 2000000
    ),
    array(
        "nama" => "Soekarno-Hatta Surabaya",
        "harga" => 3000000
    ),
    array(
        "nama" => "Soekarno-Hatta Yogyakarta",
        "harga" => 4000000
    ),
    array(
        "nama" => "Soekarno-Hatta Medan",
        "harga" => 5000000
    )
);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <h1 style="text-align: center;">Pemesanan Tiket Pesawat Soekarno-Hatta</h1>
    <hr>
    <table border="1" style="border-collapse: collapse; width: 50%; margin: 10px auto;">
        <tr>
            <th>No.</th>
            <th>Tiket Pesawat</th>
            <th>Harga</th>
        </tr>
            <?php 
            $i = 1;
            foreach($dataTiket as $tiket): ?>
        <tr>
            <td><?= $i++ ?></td>
            <td><?= $tiket['nama'] ?></td>
            <td style="text-align: center;" ><?= 'Rp. '. number_format($tiket['harga'], 0, ',', '.') ?></td>
        </tr>
            <?php endforeach; ?>
    </table>

    <hr>

    <form action="" method="post">
        <table style="width: 50%; margin: 10px auto;">
            <!-- <tr>
                <td colspan="3"><input type="hidden" name="id"></td>
            </tr> -->
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" id="nama"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><input type="email" name="email" id="email"></td>
            </tr>
            <tr>
                <td>Nomor Telepon</td>
                <td>:</td>
                <td><input type="text" name="no_telp" id="no_telp"></td>
            </tr>
            <tr>
                <td>Tanggal Keberangkatan</td>
                <td>:</td>
                <td><input type="date" value="<?= date('Y-m-d'); ?>" name="tgl_keberangkatan" id="tgl_keberangkatan"></td>
            </tr>
            <tr>
                <td>Tiket Pesawat</td>
                <td>:</td>
                <td>
                    <select name="tiket_pesawat" id="tiket_pesawat">
                        <option value="-" selected disabled>Pilih Tiket Pesawat!</option>
                        <?php foreach($dataTiket as $tiket):?>
                            <option value="<?= $tiket['nama'] ?>"><?= $tiket['nama'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td>:</td>
                <td><input type="number" name="jumlah" id="jumlah"></td>
            </tr>
            <tr>
                <td>
                    <button type="submit" name="oke">Submit</button>
                    <button type="reset">Reset</button>
                </td>
                <td>-</td>
                <td><a href="data.php">Lihat Data</a></td>
            </tr>
        </table>
    </form>

    <?php 
    if(isset($_POST['oke'])){
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $no_telp = $_POST['no_telp'];
        $tgl_keberangkatan = $_POST['tgl_keberangkatan'];
        $tiket_pesawat = $_POST['tiket_pesawat'];
        $jumlah = $_POST['jumlah'];
        $totalHarga = 0;

        foreach($dataTiket as $tiket){ // looping data tiket
            if($tiket['nama'] == $tiket_pesawat){ // jika nama tiket sama dengan tiket pesawat
                $totalHarga = $tiket['harga'] * $jumlah; // total harga = harga tiket * jumlah
            }
        }

        $dataBaru = array(
            "nama" => $nama,
            "email" => $email,
            "no_telp" => $no_telp,
            "tgl_keberangkatan" => $tgl_keberangkatan,
            "tiket_pesawat" => $tiket_pesawat,
            "jumlah" => $jumlah,
            "total_harga" => $totalHarga
        );

        $data[] = $dataBaru; // tambahkan data baru
        $toJson = json_encode($data); // encode data ke json
        file_put_contents($jsonPath, $toJson); // simpan data ke json

        echo "<script>alert('Data berhasil disimpan!'); window.location.href='data.php';</script>";
    }
    ?>

</body>
</html>