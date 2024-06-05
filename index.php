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
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    position: relative;
}

.divide {
    height: 60px;
    background-color: white;
    overflow: hidden;
}


.nav-bar1 {
    list-style-type: none;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap; /* Allows wrapping of nav items */
}

.nav-bar1 li {
    margin-top: 15px;
    display: inline;
}

.nav-bar1 a {
    display: block;
    color: gray;
    font-weight: bolder;
    text-align: center;
    padding: 14px 20px;
    text-decoration: none;
}

.nav-bar1 a:hover {
    background-color: white;
    color: #1b9bff;
}

.cta-button {
   
    border: none;
    color: white;
    padding: 14px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    transition-duration: 0.4s;
}

.cta-button:hover {
    background-color: white;
    color: black;
    border: 2px solid #4CAF50;
}

/* Media Queries for Responsiveness */
@media screen and (max-width: 1024px) {
    .nav-bar1 {
        flex-direction: column;
        align-items: center;
    }

    .nav-bar1 li {
        margin-top: 10px;
    }

    .cta-button {
        width: 100%;
        text-align: center;
    }
}

@media screen and (max-width: 768px) {
    .nav-bar1 a {
        padding: 10px;
        font-size: 14px;
    }

    .cta-button {
        font-size: 14px;
        padding: 12px 16px;
    }
}

@media screen and (max-width: 480px) {
    .nav-bar1 a {
        padding: 8px;
        font-size: 12px;
    }

    .cta-button {
        font-size: 12px;
        padding: 10px 14px;
    }
}
.hd{
    height: 500px; 
    margin-left:130px; 
    margin-top:70px;
}
.hd p{
   font-size: 1.2rem;
  
}
.white{
    margin-top: 35px;
    margin-left: 560px;
	border: 1px solid;
	height: 230px;
	width: 510px;
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
           
            <li><button id="loginBtn" class="buttonr" style="width: 100px;">Log In</button></li>
          </ul>
    </nav>

    <section id="hero-section">
       
        <div class="slider">
            
            <div class="slide active">
                <img src="image/m.jpg" alt="Slide 1">
                <div class="button-wrapper">
            
            <a id="registerBtn" href="landing/register.php" class="buttonr" style="width: 150px;">Register</a>
        </div>
            </div>
        </div>
        <button class="slider-prev">&lt;</button>
        <button class="slider-next">&gt;</button>
    </section>



    <div class="divide">
        <ul class="nav-bar1">
           
            <li><a href="#how-it-works">How It Works</a></li>
            <li><a href="#why-join-us">Why Join Us</a></li>
            <li><a href="#team">Meet Our Team</a></li>
            <li><a href="#faq">FAQs</a></li>
            <li><a href="#contact">Contact Us</a></li>
            
        </ul>
    </div>
    <div class=" hd">
    <p style="font-weight: bold;">Welcome to Sanguniang Kabataan Connect Sphere</p>
    <p> the Youth, Connecting the Future</p>

    <h5>About Us</h5>
    <p> Sanguniang Kabataan Connect Sphere System is a pioneering platform <br>designed to foster active youth participation,
         streamline communication,<br> and enhance community engagement. Our mission is to empower <br> the youth by providing a robust,
          user-friendly system <br>that connects young leaders and community members.</p>

    <div class="white">

    </div>
      
    </div>
    <div>
      
    </div>


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
