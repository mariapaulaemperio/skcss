<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>
    <link rel="stylesheet" href="../css/user.css">
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</head>

<body class="bg-gray-100">
    <div class="navbar bg-base-200 ">
        <div class="flex-1">
           <img src="../image/ssk.png" alt="Logo" class="logo1">
           <span class="logo">SKCSS</span>
        </div>
        <div class="flex-none gap-2">
             <button class="btn btn-ghost btn-circle">
      <div class="indicator">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" /></svg>
        <span class="badge badge-xs badge-primary indicator-item">
        </span>
      </div>
      <div id="notif" class="toast toast-top toast-end mt-4 mr-[90px]">
        <div class="alert alert-info">
          <span>New notification</span>
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
                <a href="userprof" class="justify-between" id="profile-btn">
                  Profile
                </a>
              </li>
              <li><a>Home</a></li>
              <li class="nav-item">
                <a id="logoutLink" href="#">Logout</a>
            </li>
            </ul>
          </div>
        </div>
      </div>



      
      
      <div class="container flex w-full">
        

        <div class="sidebar">
            <ul>
                <li class="profile-item">
                    <div class="max-w-xs sm:max-w-sm md:max-w-md lg:max-w-lg xl:max-w-xl mx-auto">
                        <div class="bg-white rounded-lg overflow-hidden shadow-xl">
                          <figure>
                            <img src="https://via.placeholder.com/150" alt="Profile Image" class="w-full h-48 object-cover">
                          </figure>
                          <div class="p-4">
                            <h2 class="text-xl font-semibold text-gray-800 mb-2">John Doe</h2>
                            <p class="text-gray-600">Position: Web Developer</p>
                          </div>
                        </div>
                      </div>
                </li>    
                     
                              
            </ul>
        </div>
        
        <div class="divider1 divider-horizontal"></div>

        <div class="annount announcement-container">
            <h2 class="text-xl font-bold mb-4">Announcements</h2>
            
            <!-- Add more announcement divs as needed -->
        </div>

        <div class="divider divider-horizontal"></div>

        <div class="event-list">
            <h2 class="text-xl font-bold mb-4">Upcoming Events</h2>
            <div class="event border border-gray-300 rounded-md p-4 mb-4 bg-white shadow-md">
                <div class="flex items-center justify-between mb-2">
                    <div class="flex items-center">
                        <div class="event-date text-sm text-gray-500">June 10, 2024</div>
                    </div>
                </div>
                <div class="event-details">
                    <h3 class="text-lg font-semibold">Event 1</h3>
                    <p class="text-sm text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
            <!-- Add more events as needed -->
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

$(document).ready(function(){
      // Listen for click event on element with ID "myElement"
      $('#notif').click(function(){
        // Select the element with class "targetClass" and add text to it
        var newElement = $(' <div class="bg-yellow-200 border-l-4 border-yellow-500 text-yellow-700 p-4 mb-4 rounded-lg shadow-md"><div class="flex items-center"> <img src="path_to_image" alt="Announcement Image" class="w-12 h-12 mr-4 rounded-full"> <div>  <p class="font-bold text-lg">Announcement 1</p> <p class="text-gray-800">Important information for announcement 1 goes here.</p> </div></div>');
        // Append the new element to the element with class "targetClass"
        $('.annount').append(newElement);
      });
    });






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
</body>

</html>
