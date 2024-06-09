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
    margin-top: 75px;
    height: 55px;
    background-color: white;
    overflow: hidden;
    position: relative;
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
@media screen and (max-width: 480px) {
    .nav-bar1 {
        flex-direction: column; /* Display items vertically */
        align-items: center; /* Center-align items */
    }

    .nav-bar1 li {
        margin-top: 10px; /* Add spacing between items */
        flex: auto; /* Allow items to take up full width */
    }

    .nav-bar1 a {
        padding: 10px; /* Increase padding for better touch responsiveness */
        font-size: 14px; /* Decrease font size for better fit */
    }

    .cta-button {
        font-size: 14px; /* Adjust font size of cta-button */
        padding: 12px 16px; /* Adjust padding for cta-button */
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
    margin-left:200px; 
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
body {
    font-family: Arial, sans-serif;
    margin: 0;
    overflow-x: hidden;
}

.nav-bar1 {
    display: flex;
    position: sticky;
    list-style: none;
    background-image: linear-gradient(to right,#5de0e6, #004aad);
    padding: 0;
    margin: 0;
}

.nav-bar1 li {
    flex: 1;
    
}

.nav-bar1 a {
    display: block;
    padding: 14px;
    color: white;
    text-align: center;
    text-decoration: none;
}

.nav-bar1 a:hover,
.nav-bar1 .active a {
    background-color: white;
    color: black;
}

.content-container {
    display: flex;
    transition: transform 0.5s ease-in-out;
    width: 200%; /* 5 sections, each 100% */
    height: auto; /* Adjust height based on content */
}

.content {
    min-width: 100vw;
    margin-bottom: 30px;
    padding: 20px;
    box-sizing: border-box;
}

.hd {
    padding: 20px;
    text-align: center;
}
.accordion {
      background-color: white;
      color: #333;
      cursor: pointer;
      padding: 18px;
      width: 50%;
      border: none;
      text-align: left;
      outline: none;
      font-size: 18px;
      transition: 0.4s;
      border-radius: 5px;
      margin-bottom: 1px;
      border-bottom: 2px solid bisque;
    
    }
    .accordion:hover {
      background-color: #ddd;
    }
    .panel {
      padding: 0 18px;
      background-color: transparent;
      max-height: 0;
      width: 50%;
      overflow: hidden;
      transition: max-height 0.2s ease-out;
      text-align: justify;
    }
    .active {
        background-color: white;
    }
    .fa-chevron-down {
  transition: transform 0.3s ease-in-out;
  margin-left: 95%;
}

.active .fa-chevron-down {
  transform: rotate(180deg);
}
.accordion i {
  order: 1; /* Set the order of the icon to 1 */
}
.r{
    position: relative;
    margin-left: 52%;

}
.r h4{
    position: absolute;
   margin-top: 20px;
}
.r p{
    position: absolute;
   margin-top: 70px;
}
.r #registerBtn{
    position: absolute;
    margin-top: 220px;
    text-align: left;
    padding: 10px;
}
.buttonrm {
	color: black;
    background-color: white;
	font-size: 17px;
	padding: 7px 20px;
	width: auto;
	border-radius: 3px;
	position: relative;
	text-transform: uppercase;
   border: none;
}

h1 {
    color: #333;
    text-align: center;
    margin-bottom: 20px;
}

.contact-info {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    margin-bottom: 20px;
}

.contact-item {
    flex: 1 1 250px;
    margin: 10px;
}

.contact-item h2 {
    color: #333;
    border-bottom: 2px solid #f4f4f4;
    padding-bottom: 5px;
}

.contact-item p {
    margin: 10px 0;
}

.office-location {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    margin-bottom: 20px;
}

.office-hours, .location {
    flex: 1 1 45%;
    margin: 10px;
}

.office-hours h2, .location h2 {
    color: #333;
    border-bottom: 2px solid #f4f4f4;
    padding-bottom: 5px;
}

.office-hours ul {
    list-style: none;
    padding: 0;
}

.office-hours ul li {
    margin: 5px 0;
}

a {
    color: #0066cc;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}



/* Ensure office hours and location are on the same line */
@media (min-width: 600px) {
    .office-location {
        display: flex;
        justify-content: space-between;
    }

    .office-hours, .location {
        flex: 1;
        margin: 10px;
    }
    .content-slide {
        flex-direction: column;
        width: 100%;
    }
     .how-it-works-container {
        padding: 0 10px; /* Adjust horizontal padding */
    }
    
}



    </style>
    
    
</head>
<body>
    
<nav id="nav">
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fa fa-bars" style="font-size:24px"></i>
        </label>
        <label class="logo">
            <img src="image/ssk.png" alt="Logo" class="logo1">
            <span>SKCSS</span>
        </label>

        <ul class="m">
            <li><a href="index.php">Home</a></li>
            <li><a href="#content-container">About</a></li>
            <li><button id="loginBtn" class="buttonr" style="width: 100px;">Log In</button></li>
           
             
            </ul>
    </nav>

    <section id="hero-section">
       
        <div class="slider">
            
            <div class="slide active">
                <img src="image/m.jpg" >
                <div class="button-wrapper">
                <a id="registerBtn" href="landing/register.php" class="buttonr" style="width: 150px;">Register</a>

                </div>
            </div>
        </div>
    </section>



    <div class="divide" id="content-container">
        <ul class="nav-bar1">
            <li><a href="#how-it-works">How It Works</a></li>
            <li><a href="#contact">Contact Us</a></li>
        </ul>
    </div>
    <div class="content-container" >
        
        <div id="how-it-works" class="content">

        <div class="r"> 
        <h4>Welcome to SKCSS</h4>
        <p style="text-align: justify; padding-right:50px;">your central hub for Sangguniang Kabataan events and announcements!
         Stay tuned, and shape the future of our youth community. Let's create positive change together. <br> Join us now!</p>

         <a id="registerBtn" href="#nav" class="button" style="width: 150px;">Register Now</a>
        </div>


        <button class="accordion">Join the Movement<i class="fas fa-chevron-down"></i></button>
       <div class="panel">
         <p>Sign Up: Creating your account is a breeze! Use your email or social media to get started.</p><br>
         <p>Verify: To ensure the integrity of our community, provide necessary personal information for admin verification. Once verified, you're ready to dive in!</p>
    </div>

        <button class="accordion">Dive into Your Dashboard <i class="fas fa-chevron-down"></i></button>
        <div class="panel">
         <p>Your Command Center: Your dashboard is your central hub, displaying updates, upcoming events, and more.</p><br>
         <p>Stay Updated: Get real-time notifications about announcements to stay in the loop.</p>
    </div>

<button class="accordion">Events & Activities<i class="fas fa-chevron-down"></i></button>
<div class="panel">
  <p>Stay on Track: Keep tabs on all SK events and activities in the events section.</p>
    </div>
        </div>
        <div id="contact" class="content">
            <h2>Contact Us</h2>
            <p>We are here to assist you! For any questions, technical support, or feedback, please reach out to us through the following channels:</p>

        <div class="contact-info">
            <div class="contact-item">
                <h2>Phone</h2>
                <p>📞 <strong>Contact Number:</strong> (123) 456-7890</p>
            </div>

            <div class="contact-item">
                <h2>Email</h2>
                <p>📧 <strong>Email:</strong> <a href="mailto:support@sksphere.com">support@sksphere.com</a></p>
            </div>

            <div class="contact-item">
                <h2>Facebook</h2>
                <p>👍 <strong>Facebook Page:</strong> <a href="https://www.facebook.com/SKSphereSystem" target="_blank">Sanguniang Kabataan Sphere System</a></p>
            </div>
        </div>

        <div class="office-hours">
            <h2>Office Hours</h2>
            <p>Our support team is available during the following hours:</p>
            <ul>
                <li><strong>Monday to Friday:</strong> 9:00 AM - 6:00 PM</li>
                <li><strong>Saturday:</strong> 10:00 AM - 2:00 PM</li>
                <li><strong>Sunday:</strong> Closed</li>
            </ul>
        </div>

        <div class="location">
            <h2>Location</h2>
            <p>🏢 <strong>Office Address:</strong><br>
            Sanguniang Kabataan Sphere System<br>
            1234 Youth Avenue, Barangay Hall<br>
            City, Province, ZIP Code</p>
        </div>
        </div>
    </div>
   
    <div>
      
    </div>
































    
    <footer>
        <div class="footerContainer">
          
            <div class="footerNav">
            <ul class="navigation">
    <li><a href="https://www.facebook.com/search/top/?q=UPPER%20LANGCANGAN%20SK"><i class="fab fa-facebook-square"></i> Facebook</a></li>
    <li><a href="#content-container"><i class="fas fa-envelope"></i> Email</a></li>
    <li><a href="tel:09-103-99215"><i class="fas fa-phone"></i> 09-103-99215</a></li>
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
     <script src="sc.js"></script>
    
</body>
</html>
