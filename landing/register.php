
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="../css/registerc.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../css/signin.css">
   
<body>
    <body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fa fa-bars" style="font-size:24px"></i>
        </label>
        <label class="logo">
            <img src="image/ssk.png" alt="Logo" class="logo1">
            <span>SKCSS</span>
        </label>

        <ul class="m">
            <li><a href="../">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">More</a></li>
            <li><button id="loginBtn" class="buttonr" style="width: 100px;">Log In</button></li>
           
        </ul>
    </nav>
    
        <form class="right" method="POST">
    
            <h2>REGISTER NOW</h2>
            <h4>Welcome to SKCSS!</h4>
            
            <label>Email Address</label>
            <input type="email" name="email" placeholder="Email" required>

            <label>Username</label>
            <input type="text" name="username" placeholder="username" required>

            <label>Password</label>
            <input type="password" name="password" placeholder="password" required>

            <label>Confirm Password</label>
            <input type="password" name="conpassword" placeholder="confirm password" required>
            
            <label for="type">Type:</label>
            <select id="type" name="type" class="dropdown" required>
                <option value="youth">Youth</option>
                <option value="barangayofficial">Barangay official</option>
                <option value="skofficial">SK official</option>
            </select>

            <p class="pi">PERSONAL INFORMATION:</p>

            <label>Full Name</label>
            <div class="input-row">
                <input type="text" name="firstname" placeholder="first Name" required>
                <input type="text" name="middlename" placeholder="Middle Name" required>
                <input type="text" name="lastname" placeholder="Last Name" required>
            </div>
        
            <label>Address</label>
            <input type="text" name="address" placeholder="Your current address" required>

            <label for="gender">Gender:</label>
            <select id="gender" name="gender" class="dropdown" required>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>

            <label for="status">Status:</label>
            <select id="status" name="status" class="dropdown" required>
                <option value="single">Single</option>
                <option value="married">Married</option>
                <option value="widowed">Widowed</option>
                <option value="divorced">Divorced</option>
                <option value="separated">Separated</option>
                <option value="unknown">Unknown</option>
            </select><br>
            
            <label>Birthdate</label>
            <input type="date" name="birthdate" required>
            <label for="age">Age</label>
            <input type="number" id="age" name="age" readonly>

            <button type="submit">REGISTER</button>
            <p class="login1">Already have an account? <a href="../" class="login">Login now</a></p>
        </form>
   
        <script>
        // Wait for the DOM content to be fully loaded
        document.addEventListener('DOMContentLoaded', function() {
            // Get a reference to the login button element
            var loginBtn = document.getElementById('loginBtn');

            // Add a click event listener to the login button
            loginBtn.addEventListener('click', function() {
                // Navigate to index.php when clicked
                window.location.href = 'index.php';
            });
        });
    </script>
    <script src="script.js"></script>

    <?php 
include '../database.php';

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
        echo "Passwords do not match.";
        exit;
    }

    // Hash the password for security
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    $db = new Database();

    $table = 'pending';
    $data = [
        'email' => $email,
        'username' => $username,
        'password' => $hashedPassword, // Store hashed password
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

    if ($db->insert($table, $data)) {
        echo "Data inserted successfully!";
    } else {
        echo "Failed to insert data.";
    }
} else {
    echo 'All fields are requiered';
}
?>
</body>
</html>