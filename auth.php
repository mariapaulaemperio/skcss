<?php
// Create a database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "skcss";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Verify email and password authentication
if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    
    $sql = "SELECT * FROM brgaccount WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        header('location: brgadmin/brgDashboard');
    } else {
        $sql = "SELECT * FROM skaccount WHERE email = '$email' AND password = '$password'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0){
            header('location: admin/Dashboard');
        }
        else{
            $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0){
            header('location: user/user');
        }
        else{
            echo "Authentication Failed";
        }
        }
    }
}

// Close the database connection
$conn->close();
?>