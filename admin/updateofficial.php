<?php
include '../db.php';
if($_SERVER['REQUEST_METHOD'] === "POST"){
    extract($_POST);
$data = [
    'official_id' => $officialId ,
    'name' => $officialName,
    'position' => $officialPosition,
    'category' => $officialCategory,
    'image' => $officialImage,
];

$db->update('skofficial', $data,'id='. $officialId);
header('location: ./profile');
}

?>