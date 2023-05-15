<?php 
$id = $_GET['id'];

$jsonPath = '../data/data.json'; // path to your JSON file
$jsonFile = file_get_contents($jsonPath); // read the JSON file
$data = json_decode($jsonFile, true); // decode the JSON into an associative array

foreach($data as $key => $value){
    if($key == $id){
        unset($data[$key]);
        
        file_put_contents($jsonPath, json_encode($data));

        header('Location: ../data.php');
    }
}

?>