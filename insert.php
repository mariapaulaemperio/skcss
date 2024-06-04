
<?php
include 'db.php';
$official_id = $_POST['officialId'];
$name = $_POST['officialName'];
$position = $_POST['officialPosition'];
$category = $_POST['officialCategory'];
$image = $_POST['officialImage'];



$data = [
    'official_id' => $official_id,
    'name' => $name,
    'position' => $position,
    'category' => $category,
    'image' => $image,
];
$db->insert('brgofficial',$data);   
header('location: ./brgadmin/brgprofile');


?>