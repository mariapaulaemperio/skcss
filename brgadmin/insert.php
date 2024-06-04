<?php
include '../db.php';

if(
    isset($_POST['file_name'])  &&
    isset($_POST['Purpose'])  &&
    isset($_POST['dueDate'])
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


?>