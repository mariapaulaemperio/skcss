<?php
include '../db.php';
if(isset($_GET['id'])){
$id = $_GET['id'];
$db->delete('requesteddocuments','id='.$id);
header('location: ./requestdoc');
}
if(isset($_GET['official_id'])){
$official_id = $_GET['official_id'];
$db->delete('brgofficial','id='.$official_id);  
header('location: ./brgprofile');   
}

?>