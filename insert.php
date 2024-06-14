<?php
include './db.php';
session_start();
if (isset($_POST['email']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['conpassword']) && isset($_POST['type']) && isset($_POST['firstname']) &&
    isset($_POST['middlename']) && isset($_POST['lastname']) && isset($_POST['address']) && isset($_POST['gender']) && isset($_POST['status']) && isset($_POST['birthdate']) &&
    isset($_POST['age'])) {

    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $conpassword = $_POST['conpassword'];
    $type = $_POST['type'];
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $status = $_POST['status'];
    $age = $_POST['age'];
    $birthdate = $_POST['birthdate'];

    // Validate password and confirm password
    if ($password !== $conpassword) {
        $_SESSION['field'] = 'Password Do not Match';
        header('location: ./register');
        exit;
    }
    $data = [
        'email' => $email,
        'username' => $username,
        'password' => $conpassword,
        'firstname' => $firstname,
        'middlename' => $middlename,
        'lastname' => $lastname,
        'address' => $address,
        'gender' => $gender,
        'status' => $status,
        'birthdate' => $birthdate,
        'age' => $age,
        'type' => $type
    ];

    if ($db->insert('pending', $data)) {
        $db->insert('pending', $data);
         $_SESSION["success"] = 'Registered Successfully';
        header('location: ./register');
        exit;

    } else {
        $_SESSION["database"] = 'Database Failed!';
      echo  header('location: ./register');
        exit;
    }
} else {
  echo  $_SESSION["field"] = 'All fields are Required!';
    header('location: ./register');
    exit;
}

?>