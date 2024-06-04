<?php
if (isset($_POST['email'])) {
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $email = validate($_POST['email']);

    if (empty($email)) {
        header("Location: ForgotPassword.php?error=Email is required");
        exit();
    } else {
        echo "butangan pani if and email is nag exist ba sya sa database";
    }
} else {
    header("Location: index.php");
    exit();
}
?>