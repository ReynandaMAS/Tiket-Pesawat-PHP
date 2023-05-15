<?php 
$id = $_GET['id'];

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

<?php
foreach($data as $key => $value){
    if($key == $id){
?>
<h1 style="text-align: center; margin: 10px 0">Update Data</h1>
<hr>
<form action="assets/config/update.php" method="post">
    <table style="width: 50%; margin: 10px auto;">
        <tr>
            <td><label for="id">ID</label></td>
            <td>:</td>
            <td><input type="text" name="id" id="id" value="<?= $id ?>" readonly></td>
        </tr>
        <tr>
            <td><label for="nama">Nama</label></td>
            <td>:</td>
            <td><input type="text" name="nama" id="nama" value="<?= $value['nama'] ?>"></td>
        </tr>
        <tr>
            <td><label for="email">Email</label></td>
            <td>:</td>
            <td><input type="email" name="email" id="email" value="<?= $value['email'] ?>"></td>
        </tr>
        <tr>
            <td><label for="no_telp">No Telepon</label></td>
            <td>:</td>
            <td><input type="text" name="no_telp" id="no_telp" value="<?= $value['no_telp'] ?>"></td>
        </tr>
        <tr>
            <td><label for="tgl_keberangkatan">Tanggal Keberangkatan</label></td>
            <td>:</td>
            <td><input type="date" name="tgl_keberangkatan" id="tgl_keberangkatan" value="<?= $value['tgl_keberangkatan'] ?>"></td>
        </tr>
        <tr>
            <td><label for="tiket_pesawat">Tiket Pesawat</label></td>
            <td>:</td>
            <td>
                <select name="tiket_pesawat" id="tiket_pesawat">
                    <option value="-" selected disabled>Pilih Tiket Pesawat!</option>
                    <?php foreach($dataTiket as $tiket):?>
                        <option value="<?= $tiket['nama'] ?>" <?= $tiket['nama'] == $value['tiket_pesawat'] ? 'selected' : '' ?>><?= $tiket['nama'] ?></option>
                    <?php endforeach; ?>
                </select>
            </td>
        </tr>
        <tr>
            <td><label for="jumlah">Jumlah</label></td>
            <td>:</td>
            <td><input type="number" name="jumlah" id="jumlah" value="<?= $value['jumlah'] ?>"></td>
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
    }
}

?>