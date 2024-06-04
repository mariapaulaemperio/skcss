<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/dashboard.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

	<div class="d-flex" id="w">
        <!-- Sidebar -->
        <div class="bg-white" id="sw">
            <div class="hs text-center primary-text py-4 fs-4 fw-bold text-uppercase border-bottom"> 
            	<img src="../image/ssk.png" class="small-image"></i><p class="inline-text">SKCSS</p></div>
            <div class="list-group list-group-flush my-3">
                <a href="Dashboard" class="list-group-item list-group-item-action bg-transparent second-text ac"><i class="fa-solid fa-house me-2"></i>Dashboard</a>
                <a href="profile" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fa-solid fa-user me-2"></i></i>Officials</a>
                 <a href="Document" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fa-solid fa-file me-2"></i>Documents</a>
                <a href="events" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fa-solid fa-calendar-days me-2"></i>Events</a>
                <a href="reports" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><iclass="fas fa-paperclip me-2"></iclass=>Reports</a>
                <a href="../index.php" class="list-group-item list-group-item-action bg-transparent text-danger" data-bs-toggle="modal" data-bs-target="#logoutModal"><i class="fas fa-power-off me-2"></i>Logout</a>
            </div>
        </div>

        <!-- /#sidebar-wrapper -->
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Dashboard</h2>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link  second-text fw-bold" href="#" id="navbarDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user me-2"></i>Admin
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
          <div class="container-fluid px-4">
          <div class="row g-3 my-2">
                	<!--dinhi sugod-->
                    <div class="container">
                        <div class="row mb-4">
                            <div class="col-md-3 dont">
                                    <div class="p-2 bg-white shadow-sm d-flex justify-content-around align-items-center rounded container-shadow">
                                        <div>
                                            <h3>720</h3>
                                            <p class="fs-6">Users</p>
                                        </div>
                                        <i class="fa-solid fa-users fs-2 primary-text border rounded-full secondary-bg p-3"></i>
                                    </div>
                                </div>
                            <div class="col-md-3 dont">
                                    <div class="p-2 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                                        <div>
                                            <h3>720</h3>
                                            <p class="fs-6">total Members</p>
                                        </div>
                                        <i class="fa-solid fa-user-plus fs-2 primary-text border rounded-full secondary-bg p-3"></i>
                                    </div>
                                </div>
                            <div class="col-md-3">
                                <a href="registrationrequest" class="dashboard-link">
                                    <div class="p-2 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                                        <div>
                                            <p class="fs-6">Registration Requests</p>
                                        </div>
                                        <i class="fa-solid fa-address-card fs-2 primary-text border rounded-full secondary-bg p-3"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3">
                                <a href="announcement.php" class="dashboard-link">
                                    <div class="p-2 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                                        <div>
                                            <p class="fs-6">Announcements</p>
                                        </div>
                                        <i class="fa-solid fa-bullhorn fs-2 primary-text border rounded-full secondary-bg p-3"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
<div class="my-5">
    <hr class="border border-1">
    <div class="md-6 l">
        <h3 class="fs-4 mb-3">Requested Documents</h3>
        <div class="table-responsive">
            <div class="record-header">
                <div class="add">
                    <span>Entries</span>
                    <select name="" id="">
                        <option value="">A-Z</option>
                        <option value="">Date</option>
                        <option value="">Any Order</option>
                    </select>
                </div>
                <div class="browse">
                   <input type="search" placeholder="Search" class="record-search">
                </div>
            </div>
            <table class="table bg-white shadow-sm table-hover">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">File</th>
                        <th scope="col">Purpose of Request</th>
                        <th scope="col">Date</th>
                    </tr>
                </thead>
                <tbody id="tableBody">
                    <!-- Data rows will be added dynamically using JavaScript -->
                    <?php 
                    include '../db.php';
                    $req = $db->selectWithWhere('requesteddocuments','*','');
                    foreach($req as $s)
                    {
                        
                    ?>
                        <tr>
                            <td>#<?php echo $s['ID'] ?></td>
                            <td>
                                <input type="file" class="file_input" name="files[]" multiple required>
                            </td>
                            <td>
                                <div class="client">
                                   <div class="client-img bg-img" style="background-image: url(img/3.jpeg)"></div>
                                    <div class="client-info">
                                        <h4><?php echo $s['Purpose'] ?></h4>
                                    </div>
                                </div>
                            </td>
                            <td>
                            <?php echo $s['RequestDate'] ?>
                            </td>
                            <td>
                                <div class="actions">
                                    <span class="lab la-telegram-plane"></span>
                                </div>
                            </td>
                        </tr>
                        <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <hr class="border border-1">
    <div class="md-6 l">
        <h3 class="fs-4 mb-3">Events Schedules</h3>
        <div class="table-responsive">
            <div class="record-header">
                <div class="add">
                    <span>Entries</span>
                    <select name="" id="">
                        <option value="">A-Z</option>
                        <option value="">Date</option>
                        <option value="">Any Order</option>
                    </select>
                </div>
                <div class="browse  d-flex align-items-center ms-auto">
                   <input type="search" placeholder="Search" class="record-search form-control ">
                </div>
            </div>
            <table class="table bg-white rounded shadow-sm table-hover">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Details</th>
                        <th scope="col">Date</th>
                    </tr>
                </thead>
                <tbody id="tableBody">
                    <!-- Data rows will be added dynamically using JavaScript -->
                    <tr>
                        <td>#5033</td>
                        <td>
                            <div class="client">
                               <div class="client-img bg-img" style="background-image: url(img/3.jpeg)"></div>
                                <div class="client-info">
                                    <h4>Andrew Bruno</h4>
                                    <small>bruno@crossover.org</small>
                                </div>
                            </div>
                        </td>
                       
                        <td>
                            19 April, 2022
                        </td>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- /#page-content-wrapper -->
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
          <a href="../index.php" class="btn btn-danger">Logout</a>
        </div>
      </div>
    </div>
  </div>
<!-- /#page-content-wrapper -->
<script src="../script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>

<script>
var el = document.getElementById("wrapper");
var toggleButton = document.getElementById("menu-toggle");

toggleButton.onclick = function() {
el.classList.toggle("toggled");
};
</script>
</body>
</html>