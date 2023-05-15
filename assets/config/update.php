<?php 
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

$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$no_telp = $_POST['no_telp'];
$tgl_keberangkatan = $_POST['tgl_keberangkatan'];
$tiket_pesawat = $_POST['tiket_pesawat'];
$jumlah = $_POST['jumlah'];
$totalHarga = 0;

$jsonPath = '../data/data.json'; // path to your JSON file
$jsonFile = file_get_contents($jsonPath); // read the JSON file
$data = json_decode($jsonFile, true); // decode the JSON into an associative array

foreach($dataTiket as $tiket){ // looping data tiket
    if($tiket['nama'] == $tiket_pesawat){ // jika nama tiket sama dengan tiket yang dipilih
        $totalHarga = $tiket['harga'] * $jumlah; // total harga = harga tiket * jumlah tiket
    }
}

foreach($data as $key => $value){
    if($key == $id){
        $data[$key]['nama'] = $nama;
        $data[$key]['email'] = $email;
        $data[$key]['no_telp'] = $no_telp;
        $data[$key]['tgl_keberangkatan'] = $tgl_keberangkatan;
        $data[$key]['tiket_pesawat'] = $tiket_pesawat;
        $data[$key]['jumlah'] = $jumlah;
    }
}

$data = json_encode($data, JSON_PRETTY_PRINT); // encode array to JSON
file_put_contents($jsonPath, $data); // save data to JSON file

header('Location: ../../data.php');
?>