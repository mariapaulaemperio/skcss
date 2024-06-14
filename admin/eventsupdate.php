<?php
include '../db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $id = $_POST['eventId'];
    $name = $_POST['ueventName'];
    $date = $_POST['ueventDate'];
    $details = $_POST['ueventDetails'];
    $venue = $_POST['ueventVenue'];

    $data = [
       'Name'  => $name,
       'Date'  => $date,
       'Details'  => $details,
       'Venue'  => $venue,
    ];
    $stmt = $db->update('events',$data,'id = ' . $id);
    header("Location: ./events"); // Redirect to your events listing page

    $db->closeConnection();
}
?>
