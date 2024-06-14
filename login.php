<?php
include './db.php';
session_start();
if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'] ;
    $password = $_POST['password'] ;

    $users = $db->selectWithWhere('users','*','email="'.$email.'" AND password="'.$password.'"')[0];
    $brgaccount = $db->selectWithWhere('brgaccount','*','email="'.$email.'" AND password="'.$password.'"')[0];
    $skaccount = $db->selectWithWhere('skaccount','*','email="'.$email.'" AND password="'.$password.'"')[0];


    if($users){
        $_SESSION['email'] = $email;
        header('location: ./user');
        exit;
    }
    elseif($brgaccount){
        header('location: ./brgadmin');
        exit;
    }
    elseif($skaccount){
        header('location: ./admin');
        exit;
    }
    else
    {
        $_SESSION['error'] = true;
        header('location: ./');
        exit();
    }

}
?>




