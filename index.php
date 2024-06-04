<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn & Register Modal</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/lp.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/signin.css">
    <link rel="stylesheet" href="css/register.css">
    <style>
     #loginRole {
    font-size: 16px;
    color: black;
  }
    </style>
    
    
</head>
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

     <ul class="nav justify-content-end">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page"href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">More</a>
            </li>
            <li><button id="loginBtn" class="buttonr" style="width: 100px;">Log In</button></li>
          </ul>
    </nav>

    <section id="hero-section">
        <div class="button-wrapper">
            
            <a id="registerBtn" href="landing/register.php" class="buttonr" style="width: 150px;">Register</a>
        </div>
        <div class="slider">
            
            <div class="slide active">
                <img src="image/m.jpg" alt="Slide 1">
            </div>
        </div>
        <button class="slider-prev">&lt;</button>
        <button class="slider-next">&gt;</button>
    </section>


    <footer>
        <div class="footerContainer">
            <div class="socialIcons">
                <a href="https://web.facebook.com/profile.php?id=61554482426104&sk=about"><i class="fa-brands fa-facebook"></i></a>
                <a href=""><i class="fa-brands fa-instagram"></i></a>
                <a href=""><i class="fa-brands fa-twitter"></i></a>
                <a href=""><i class="fa-brands fa-youtube"></i></a>
            </div>
            <div class="footerNav">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Contact Us</a></li>
                    <li><a href="">Our Team</a></li>
                </ul>
            </div>
        </div>
        <div class="footerBottom">
            <p>Copyright &copy;2024; Youth Organization · website · Designed by <span class="designer">L.L</span></p>
        </div>
    </footer>

    <!-- Log In Modal -->
    <div id="loginModal" class="modal" style="display: none;">
        <!-- Modal content -->
            <form class="input-box" action="auth.php" method="POST">
                <span class="close" onclick="closeLoginModal()">&times;</span>
                <header>Log In</header>
                <div class="input-field">
                    <input type="text" class="input" id="loginEmail" required="" name="email" autocomplete="off">
                    <label for="loginEmail">Email</label>
                </div>
                <div class="input-field">
                    <input type="password" class="input" id="loginPass" name="password" required="">
                    <label for="loginPass">Password</label>
                </div>
                <div class="input-field">
                     <select class="input" id="loginRole" required="">
                         <option value=""  disabled selected>Select Role</option>
                         <option value="user">Log in as User</option>
                         <option value="admin">Log in as Admin</option>
                         <option value="support-admin">Log in as Support Admin</option>
                       </select>
            
        </div>
                <div class="input-field">
                    <input type="submit" class="submit" value="Log In">
                </div>
                <div class="signin">
                    <span>Don't have an account? <a href="landing/register.php" onclick="openRegisterModal()">Register here</a></span>
                </div>
            </form>
      
    </div>
   


    <div id="registerModal" class="modal" style="display: none;">
        <!-- Modal content -->
        <div class="modal-content right">
            <span class="close" onclick="closeRegisterModal()">&times;</span>
            <h2>REGISTER NOW</h2>
            <h4>Welcome to SKCSS!</h4>
            
            <label>Email Address</label>
            <input type="email" name="email" placeholder="Email">

            <label>Username</label>
            <input type="text" name="username" placeholder="Username">

            <label>Password</label>
            <input type="password" name="password" placeholder="Password">

            <label>Confirm Password</label>
            <input type="password" name="confirmPassword" placeholder="Confirm Password">
            
            <label for="type">Type:</label>
            <select id="type" name="type" class="dropdown">
                <option value="youth">Youth</option>
                <option value="barangayofficial">Barangay official</option>
                <option value="skofficial">SK official</option>
            </select>

            <p class="pi">PERSONAL INFORMATION:</p>

            <label>Full Name</label>
            <div class="input-row">
                <input type="text" name="firstname" placeholder="First Name" class="input">
                <input type="text" name="middlename" placeholder="Middle Name" class="input">
                <input type="text" name="lastname" placeholder="Last Name" class="input">
            </div>

            <label>Address</label>
            <input type="text" name="address" placeholder="Your current address">

            <label for="gender">Gender:</label>
            <select id="gender" name="gender" class="dropdown">
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>

            <label for="status">Status:</label>
            <select id="status" name="status" class="dropdown">
                <option value="single">Single</option>
                <option value="married">Married</option>
                <option value="widowed">Widowed</option>
                <option value="divorced">Divorced</option>
                <option value="separated">Separated</option>
                <option value="unknown">Unknown</option>
            </select><br>
            
            <label>Birthdate</label>
            <input type="date" name="birthdate">
            
            <label for="age">Age</label>
            <input type="number" id="age" name="age" readonly>
            

            <button type="submit">Register</button>
            <p class="login1">Already have an account? <a href="index.php" onclick="openLoginModal()" class="login">Login now</a></p>
        </div>
    </div>

     <script src="script.js"></script>
</body>
</html>
