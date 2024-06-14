<?php
include '../db.php';
if(isset($_GET['id'])){
$id = $_GET['id'];
$db->delete('skofficial','id='.$id);
header('location: ./profile');
}
if(isset($_GET['eID'])){
    $id = $_GET['eID'];
    $db->delete('events','id='.$id);
    header('location: ./events');
    }
if(isset($_GET['Did'])){
    $id = $_GET['Did'];
    $db->delete('documents','DocumentID='.$id);
    header('location: ./Document');
    }
if(isset($_GET['idan'])){
    $id = $_GET['idan'];
    $db->delete('announcements','id='.$id);
    header('location: ./announcement');
    }
    if(isset($_GET['idp'])){
        $id = $_GET['idp'];
        $db->delete('pending','id='.$id);
        header('location: ./registrationrequest');
        }
?>