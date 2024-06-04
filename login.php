<?php
if (isset($_POST['email']) && isset($_POST['password'])) {
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $email = validate($_POST['email']);
    $pass = validate($_POST['password']);

    if (empty($email)) {
        header("Location: index.php?error=email is required");
        exit();
    } else if (empty($pass)) {
        header("Location: index.php?error=password is required");
        exit();
    } else {
        echo "Valid Input";
    }
} else {
    header("Location: index.php");
    exit();
}
?>




