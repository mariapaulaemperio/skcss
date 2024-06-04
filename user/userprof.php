<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Additional CSS styles */
        
        .timeline_about {
            border: 2px solid #E5E7EB;
            border-radius: 10px;
        }

        .contact_Info,
        .basic_info {
            background-color: #eef0f5;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 5px;
        }

        .right {
            background-color: #F3F4F6;
            border: 2px solid #E5E7EB;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .right h2 {
            font-size: 24px;
            color: #4F46E5;
            margin-bottom: 20px;
        }
        
        .bg1{
            background-image: linear-gradient(to right,#5de0e6, #004aad);
        color: black;
        }
        .mt-4 label {
        font-size: 14px;
        background-color: white;
        border: 1px solid #4F46E5;
        border-radius: 8px;
        padding: 6px;
        font-weight: bold;
    }

    /* Styling for the icon */
    .ri-edit-line {
        vertical-align: middle;
    }
       
    </style>
</head>

<body class="bg-gray-100">
    <div class="navbar bg1">
        <div class="flex-1">
          <a class="btn btn-ghost text-xl bolder">SKCSS</a>
        </div>
        <div class="flex-none gap-2">
             <button class="btn btn-ghost btn-circle">
      <div class="indicator">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" /></svg>
        <span class="badge badge-xs badge-primary indicator-item"></span>
      </div>
    </button>
          <div class="dropdown dropdown-end">
            <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
              <div class="w-10 rounded-full">
                <img alt="Tailwind CSS Navbar component" src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
              </div>
            </div>
            <ul tabindex="0" class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg1 rounded-box w-52">
              <li>
                <a class="justify-between" id="profile-btn">
                  Profile
                </a>
              </li>
              <li><a  href="user">Home</a></li>
              <li class="nav-item">
                <a id="logoutLink" href="../logout">Logout</a>
            </li>
            </ul>
          </div>
        </div>
      </div>


      <div class="con mx-auto px-4">
       
        <!-- ===== ===== User Main-Profile ===== ===== -->
        <section class="userProfile bg-white shadow-md p-4 rounded-lg mt-4">
            <div class="profile border-4 border-black-500 rounded-full p-2" style="width: 100px; height: 100px;">
                <figure><img src="profile.png" alt="profile" class="w-full h-full rounded-full"></figure>
            </div>

            <div class="username">
                <h1 class="name text-3xl font-bold  text-gray-900" id="Username">Jeremy Rose</h1>
                <div class="map flex items-center mt-3">
                    <i class="ri-map-pin-fill ri text-xl text-gray-900"></i>
                    <span class="ml-2 text-gray-600">New York, NY</span>
                </div>
            </div>

            <div class="mt-4">
                <label for="imageUpload" class="text-gray-700 cursor-pointer">
                    <i class="ri-edit-line ri-lg"></i> Edit Profile Picture
                </label>
                <input type="file" id="imageUpload" accept="image/*" onchange="updateProfileImage(this)" class="hidden">
            </div>
        </section>
    
    
        <!-- ===== ===== Timeline & About Sections ===== ===== -->
        <section class="timeline_about card bg-white shadow-md p-4 rounded-lg mt-4">
    
            <div class="contact_Info mt-4">
                <h1 class="heading text-2xl font-bold text-gray-900">Contact Information</h1>
                <ul class="mt-2">

                    <li class="fullname flex items-center">
                        <h1 class="label text-xl font-semibold text-gray-900">Full name:</h1>
                        <span class="info ml-2 text-gray-600">mamamamamamamaam</span>
                    </li>

                    <li class="phone flex items-center">
                        <h1 class="label text-xl font-semibold text-gray-900">Phone:</h1>
                        <span class="info ml-2 text-gray-600">+11 234 567 890</span>
                    </li>
    
                    <li class="address flex items-center mt-2">
                        <h1 class="label text-xl font-semibold text-gray-900">Address:</h1>
                        <span class="info ml-2 text-gray-600">S34 E 65th Street <br> New York, NY 10651-78 156-187-60</span>
                    </li>
    
                    <li class="email flex items-center mt-2">
                        <h1 class="label text-xl font-semibold text-gray-900">E-mail:</h1>
                        <span class="info ml-2 text-gray-600">hello@rsmarquetech.com</span>
                    </li>
    
                </ul>
            </div>
            <div class="basic_info mt-4">
                <h1 class="heading text-2xl font-bold text-gray-900">Basic Information</h1>
                <ul class="mt-2">
                    <li class="birthday flex items-center">
                        <h1 class="label text-xl font-semibold text-gray-900">Birthday:</h1>
                        <span class="info ml-2 text-gray-600">Dec 25, 2000</span>
                    </li>
    
                    <li class="sex flex items-center mt-2">
                        <h1 class="label text-xl font-semibold text-gray-900">Gender:</h1>
                        <span class="info ml-2 text-gray-600">Male</span>
                    </li>
                    <li class="sex flex items-center mt-2">
                        <h1 class="label text-xl font-semibold text-gray-900">Age:</h1>
                        <span class="info ml-2 text-gray-600">19</span>
                    </li>
                </ul>
            </div>
        </section>
    </div>
    
    
    </div>
    

    <div id="logoutModal" class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-75 hidden">
        <div class="bg-white p-8 rounded-lg shadow-lg w-1/3">
            <p class="text-xl mb-4">Are you sure you want to log out?</p>
            <div class="flex justify-end">
                <button id="cancelButton" class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600 mr-4">Cancel</button>
                <button id="confirmButton" class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600">Logout</button>
            </div>
        </div>
    </div>
    
    <script>
        // JavaScript to handle the logout popup
        const logoutLink = document.getElementById('logoutLink');
        const logoutModal = document.getElementById('logoutModal');
        const cancelButton = document.getElementById('cancelButton');
        const confirmButton = document.getElementById('confirmButton');
    
        logoutLink.addEventListener('click', (e) => {
            e.preventDefault();
            logoutModal.classList.remove('hidden');
        });
    
        cancelButton.addEventListener('click', () => {
            logoutModal.classList.add('hidden');
        });
    
        confirmButton.addEventListener('click', () => {
            // Perform logout action here
            console.log("Logged out");
    
            // Redirect to index.php
            window.location.href = 'index.php';
        });
    </script>

<script>
    function updateProfileImage(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                document.getElementById('profileImage').src = e.target.result;
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
    

</body>

</html>
