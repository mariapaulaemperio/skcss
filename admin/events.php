<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" type="text/css" href="../css/event.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

  <div class="d-flex" id="w">
    <!-- Sidebar -->
    <div class="bg-white" id="sw">
      <div class="hs text-center primary-text py-4 fs-4 fw-bold text-uppercase border-bottom">
        <img src="../image/ssk.png" class="small-image"></i>
        <p class="inline-text">SKCSS</p>
      </div>


      <div class="list-group list-group-flush my-3">
        <a href="./" class="list-group-item list-group-item-action bg-transparent second-text"><i class="fa-solid fa-house"></i>Dashboard</a>
        <a href="./profile" class="list-group-item list-group-item-action bg-transparent second-text"><i class="fa-solid fa-user me-2"></i>Officials</a>
        <a href="./Document" class="list-group-item list-group-item-action bg-transparent second-text"><i class="fa-solid fa-file me-2"></i>Documents</a>
        <a href="./events" class="list-group-item list-group-item-action bg-transparent second-text ac"><i class="fa-solid fa-calendar-days me-2"></i>Events</a>
        <a href="./reports" class="list-group-item list-group-item-action bg-transparent second-text"><i class="fas fa-paperclip me-2"></i>Reports</a>
        <a href="../logout" class="list-group-item list-group-item-action bg-transparent text-danger" data-bs-toggle="modal" data-bs-target="#logoutModal"><i class="fas fa-power-off me-2"></i>Logout</a>
      </div>
    </div>

    <!-- /#sidebar-wrapper -->
    <!-- Page Content -->
    <div id="page-content-wrapper">
      <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
        <div class="d-flex align-items-center">
          <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
          <h2 class="fs-2 m-0">Events</h2>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link  second-text fw-bold" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-user me-2"></i>Admin
              </a>

            </li>
          </ul>
        </div>
      </nav>

      <div class="container-fluid px-4">
        <!-- Profile content goes here -->
        <div class="row">
          <div class="col">
            <div class="calendar">
              <div class="calendar-header">
                <span class="month-picker" id="month-picker"> May </span>
                <div class="year-picker" id="year-picker">
                  <span class="year-change" id="pre-year">
                    <pre class="mb-0"><</pre>
                  </span>
                  <span id="year">2020 </span>
                  <span class="year-change" id="next-year">
                    <pre class="mb-0">></pre>
                  </span>
                </div>
              </div>
              <div class="calendar-body">
                <div class="calendar-week-days">
                  <div>Sun</div>
                  <div>Mon</div>
                  <div>Tue</div>
                  <div>Wed</div>
                  <div>Thu</div>
                  <div>Fri</div>
                  <div>Sat</div>
                </div>
                <div class="calendar-days">
                </div>
              </div>
              <div class="date-time-formate">
                <div class="day-text-formate">TODAY</div>
                <div class="date-time-value">
                  <div class="time-formate">02:51:20</div>
                  <div class="date-formate">23 - july - 2022</div>
                </div>
              </div>
              <div class="calendar-footer">
              </div>
              <div class="month-list"></div>
            </div>
          </div>
          <div class="col">
            <div class="card text-center1">
              <div class="card-header">Event Schedule</div>
              <div class="card-body">
                <h3 class="card-title" id="cardEventName">Event Name</h3>
                <h6 id="cardEventVenue">Place or Venue</h6>
                <p class="card-text" id="cardEventDate">Date</p>
                <p class="card-details" id="cardEventDetails">More Info here</p>
              </div>
              <div class="card-footer text-body-secondary" id="cardEventTimeAgo">
                2 days ago
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="md-6">
        <h3 class="fs-4 mb-3">Recent Events</h3>
        <div class="table-responsive">
          <div class="record-header">
            <button class="add-event" onclick="openModal('addeventModal')">Add Event</button>
            <div class="browse d-flex align-items-center ms-auto">
              <input type="search" placeholder="Search" class="record-search form-control ">
              <select name="" id="">
                <option value="">Status</option>
              </select>

            </div>
          </div>
          <div class="y2">
            <table class="table bg-white rounded shadow-sm table-hover">
              <thead>
                <tr>
                  <th scope="col">Name</th>
                  <th scope="col">Date</th>
                  <th scope="col">Details</th>
                  <th scope="col">Venue</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody id="tableBody">
                <!-- Data rows will be added dynamically using JavaScript -->
                <?php
                include '../db.php';

                $e = $db->selectWithWhere('events', '*');
                foreach ($e as $event) {
                ?>
                  <tr onclick="displayInfo('<?php echo $event['Name']; ?>', '<?php echo $event['Date']; ?>', '<?php echo $event['Details']; ?>', '<?php echo $event['Venue']; ?>')">
                    <td><?php echo $event['Name'] ?></td>
                    <td style="max-width: 200px;">
                      <div class="client">
                        <small style="word-wrap: break-word;"><?php echo $event['Date'] ?></small>
                      </div>
                    </td>
                    <td><?php echo $event['Details'] ?></td>
                    <td><?php echo $event['Venue'] ?></td>
                    <td>
                      <button onclick="populateModal('<?php echo $event['id']; ?>', '<?php echo $event['Name']; ?>', '<?php echo $event['Date']; ?>', '<?php echo $event['Details']; ?>', '<?php echo $event['Venue']; ?>')" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editAnnouncementModal" title="Update">
                        <i class="fas fa-edit"></i>
                      </button>
                      <a href="delete.php?eID=<?php echo $event['id'] ?>" class="btn btn-danger btn-sm" data-bs-toggle="tooltip" title="Delete">
                        <i class="fas fa-trash"></i>
                      </a>
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <!-- edit events -->

    <div class="modal fade" id="editAnnouncementModal" tabindex="-1" aria-labelledby="editAnnouncementModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <span class="close" onclick="closeModal('editAnnouncementModal')">&times;</span>
          <h2>Edit Event</h2>
          <form id="editEventForm" action="eventsupdate.php" method="POST">
            <div class="form-group">
              <label for="ueventName">Name:</label>
              <input type="text" id="ueventName" name="ueventName" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="ueventDate">Date:</label>
              <input type="date" id="ueventDate" name="ueventDate" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="ueventDetails">Details:</label>
              <textarea id="ueventDetails" name="ueventDetails" class="form-control" required></textarea>
            </div>
            <div class="form-group">
              <label for="ueventVenue">Venue:</label>
              <input type="text" id="ueventVenue" name="ueventVenue" class="form-control" required>
            </div>
            <input type="hidden" id="ueventId" name="ueventId">
            <button type="submit" class="btn btn-primary">Update Event</button>
          </form>
        </div>
      </div>
    </div>
    <?php
    $hostName = "localhost";
    $dbUser = "root";
    $dbPassword = "";
    $dbname = "skcs";
    
    $conn = new mysqli($hostName, $dbUser, $dbPassword, $dbname);
    if (!$conn) {
        die("somethintg went wrong; ");
    }
if (isset($_POST['submit'])) {
    $eventName = $_POST['eventName'];
    $eventDate = $_POST['eventDate'];
    $eventDetails = $_POST['eventDetails'];
    $eventVenue = $_POST['eventVenue'];
    

    if ($eventName && $eventDate && $eventDetails && $eventVenue) {
       

        // Prepare an insert statement
        $sql = "INSERT INTO events (Name, Date, Details, Venue) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($conn);
        
        if (mysqli_stmt_prepare($stmt, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssss", $evenName, $eventDate, $eventDetails, $eventVenue);
            
            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                echo "<h4  style='display:none;'>Your registration was successful!</h4>";
            } else {
                echo "<div class='alert alert_danger'>Something went wrong. Please try again later.</div>";
            }
            
            // Close the statement
            mysqli_stmt_close($stmt);
        } else {
            echo "<div class='alert alert_danger'>Something went wrong. Please try again later.</div>";
        }

        // Close the connection
        mysqli_close($conn);
    } else {
        echo "<div class='alert alert_danger'  style='display:none;'>Please fill in all fields.</div>";
    }
} else {
    echo "<div class='alert alert_danger' style='display:none;'>Form not submitted correctly.</div>";
}
?>

    <div id="addeventModal" class="modal" style="display: none;">
      <div class="modal-content">
        <span class="close" onclick="closeModal('addeventModal')">&times;</span>
        <h2>Add Event</h2>
        <form id="addEventForm" method="POST">
          <div class="form-group">
            <label for="eventName">Name:</label>
            <input type="text" id="eventName" name="eventName" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="eventDate">Date:</label>
            <input type="date" id="eventDate" name="eventDate" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="eventDetails">Details:</label>
            <textarea id="eventDetails" name="eventDetails" class="form-control" required></textarea>
          </div>
          <div class="form-group">
            <label for="eventVenue">Venue:</label>
            <input type="text" id="eventVenue" name="eventVenue" class="form-control" required>
          </div>
          <button type="submit" name="submit" class="btn btn-primary">Add Event</button>
        </form>
      </div>
    </div>



    <script>
      function openModal(modalId) {
        document.getElementById(modalId).style.display = 'block';
      }

      function closeModal(modalId) {
        document.getElementById(modalId).style.display = 'none';
      }
    </script>
    <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="logoutModalLabel">Confirm Logout</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            Are you sure you want to log out?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            <a href="../logout.php" class="btn btn-danger">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- /#page-content-wrapper -->
    <script src="../script.js"></script>
    <script src="../event.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      var el = document.getElementById("wrapper");
      var toggleButton = document.getElementById("menu-toggle");

      toggleButton.onclick = function() {
        el.classList.toggle("toggled");
      };
    </script>
    <script>
      function populateModal(id, name, date, details, venue) {
        document.getElementById('eventId').value = id;
        document.getElementById('eventName').value = name;
        document.getElementById('eventDate').value = date;
        document.getElementById('eventDetails').value = details;
        document.getElementById('eventVenue').value = venue;
        openModal('editAnnouncementModal');
      }

      function openModal(modalId) {
        var modal = document.getElementById(modalId);
        modal.style.display = 'block';
      }

      function closeModal(modalId) {
        var modal = document.getElementById(modalId);
        modal.style.display = 'none';
      }
    </script>

    <script>
      function displayInfo(name, date, details, venue) {
        document.getElementById('cardEventName').textContent = name;
        document.getElementById('cardEventVenue').textContent = venue;
        document.getElementById('cardEventDate').textContent = date;
        document.getElementById('cardEventDetails').textContent = details;

        // Calculate days ago
        const eventDate = new Date(date);
        const currentDate = new Date();
        const timeDifference = currentDate - eventDate;
        const daysAgo = Math.floor(timeDifference / (1000 * 60 * 60 * 24));

        let timeAgoText = "";
        if (daysAgo === 0) {
          timeAgoText = "Today";
        } else if (daysAgo === 1) {
          timeAgoText = "1 day ago";
        } else {
          timeAgoText = daysAgo + " days ago";
        }

        document.getElementById('cardEventTimeAgo').textContent = timeAgoText;
      }

      function populateModal(id, name, date, details, venue) {
        document.getElementById('eventId').value = id;
        document.getElementById('eventName').value = name;
        document.getElementById('eventDate').value = date;
        document.getElementById('eventDetails').value = details;
        document.getElementById('eventVenue').value = venue;
      }
    </script>
</body>

</html>