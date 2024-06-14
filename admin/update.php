<?php
include '../db.php';
if($_SERVER['REQUEST_METHOD'] === "POST"){
    extract($_POST);
$data = [
    'title' => $announcementTitle ,
    'description' => $announcementDescription,
    'date' => $announcementDate,
];

$db->update('announcements', $data,'id='. $announcementId);
header('location: ./announcement');
}

?>

