<?php
include '../db.php';

if(isset($_POST['file_name'])  && isset($_POST['Purpose'])  && isset($_POST['dueDate'])
){

$filename = $_POST['file_name'];
$purpose = $_POST['Purpose'];
$rq = $_POST['dueDate'];

$data = [
    'filename' => $filename,
    'Purpose' => $purpose,
    'RequestDate' => $rq,
];

$db->insert('requesteddocuments',$data);
header('location: ./requestdoc');
}


if(isset($_POST['officialId']) && isset($_POST['officialName']) && isset($_POST['officialPosition']) && isset($_POST['officialCategory']) && isset($_POST['officialImage'])){
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
header('location: ./profile');
}
?>



?>