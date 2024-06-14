<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LogIn</title>
	<link rel="stylesheet" type="text/css" href="css/forgot.css">
</head>
<body>
<form action="forgot.php" method="post">
    <h2>Forgot Password</h2>
	<p>Enter your email address</p>

    <?php if (isset($_GET['error'])) {?>
        <p class="error"><?php echo $_GET['error']; ?></p>
    <?php } ?>

    <input type="email" name="email" placeholder="Email">
    <button type="submit">Continue</button>
</form>


</body>
</html>