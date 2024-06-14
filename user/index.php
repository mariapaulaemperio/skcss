<?php
session_start();
include '../db.php';
?>
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
   
        </div>
        <!-- <div id="notif" class="toast toast-top toast-end mt-4 mr-[90px]">
        <div class="alert alert-info">
          <span>New notification</span>
        </div> -->
      </button>
      <div class="dropdown dropdown-end">
        <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
          <div class="w-10 rounded-full">
            <img alt="Tailwind CSS Navbar component" src="../image/paula.png" />
          </div>
        </div>
        <ul tabindex="0" class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg1 rounded-box w-52">
          <li>
            <a href="./userprof" class="justify-between" id="profile-btn">
              Profile
            </a>
          </li>
          <li><a>Home</a></li>
          <li class="nav-item">
            <a id="logoutLink" href="../logout.php">Logout</a>
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
              <img src="../image/paula.png" class="w-full h-48 object-cover">
            </figure>
            <div class="p-4">
              <h2 class="text-xl font-semibold text-gray-800 mb-2">Maria Paula Emperio</h2>
              <p class="text-gray-600">Position: Web Developer</p>
            </div>
          </div>
        </div>
      </li>
    </ul>
  </div>

  <div class="divider1 divider-horizontal"></div>

  <div class="announcement-container">
    <?php 
    $announcements = $db->selectWithWhere('announcements');
    foreach($announcements as $as) { ?>
      <div class="bg-yellow-200 border-l-4 border-yellow-500 text-yellow-700 p-4 mb-4 rounded-lg shadow-md">
        <h2 class="text-xl font-bold mb-4">Title: <?php echo $as['title'] ?></h2>
        <div class="flex items-center">
          <img src="path_to_image" alt="Announcement Image" class="w-12 h-12 mr-4 rounded-full">
          <div>
            <p class="font-bold text-lg">Date: <?php echo $as['date'] ?></p>
            <p class="text-gray-800">Description: <?php echo $as['description'] ?></p>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>

  <div class="divider divider-horizontal"></div>

  <div class="event-list">
    <h2 class="text-xl font-bold mb-4">Upcoming Events</h2>
    <?php 
    $event = $db->selectWithWhere('events');
    foreach ($event as $evets) { ?>
      <div class="event border border-gray-300 rounded-md p-4 mb-4 bg-white shadow-md">
        <div class="flex items-center justify-between mb-2">
          <div class="flex items-center">
            <div class="event-date text-sm text-gray-500">Date: <?php echo $evets['Date'] ?></div>
          </div>
        </div>
        <div class="event-details">
          <h3 class="text-lg font-semibold">Details : <?php echo $evets['Details'] ?></h3>
          <p class="text-sm text-gray-700">Venue: <?php echo $evets['Venue'] ?></p>
        </div>
      </div>
    <?php } ?>
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
</body>

</html>