<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/profile.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
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
                <a href="Dashboard" class="list-group-item list-group-item-action bg-transparent second-text  fw-bold"><i class="fa-solid fa-house me-2"></i>Dashboard</a>
                <a href="profile" class="list-group-item list-group-item-action bg-transparent second-text ac"><i class="fa-solid fa-user me-2"></i></i>Officials</a>
                 <a href="Document" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fa-solid fa-file me-2"></i>Documents</a>
                <a href="events" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fa-solid fa-calendar-days me-2"></i>Events</a>
                <a href="reports" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fas fa-paperclip me-2"></i>Reports</a>
                <a href="../logout" class="list-group-item list-group-item-action bg-transparent text-danger" data-bs-toggle="modal" data-bs-target="#logoutModal"><i class="fas fa-power-off me-2"></i>Logout</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Officials</h2>
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
        <div class="d-flex justify-content-between mb-3">
            <h3 class="fs-5">Profiles</h3>
            <div class="button-container">
                <div class="button-container">
                    <button class="btn btn-primary icon-button1" onclick="openModal('addOfficialModal')"><i class="fas fa-plus"></i></button>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <div class="record-header">
                <div class="browse  d-flex align-items-center ms-auto">
                    <input type="search" placeholder="Search" class="record-search form-control ">
                    <select name="" id="">
                        <option value="">Week</option>
                        <option value="">Month</option>
                        <option value="">Year</option>
                    </select>
                </div>
            </div>
            <table id="officialsTable" class="table-container1">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Type</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Rows will be added here dynamically -->
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
                            $3171
                        </td>
                        <td>
                            $3171
                        </td>
                        <td>
                            $3171
                        </td>
                        
                        
                        <td>
                                <button class="btn btn-primary icon-button1" data-bs-toggle="modal" data-bs-target="#addAnnouncementModal">
                                    <i class="fas fa-plus"></i>
                                </button>
                                <button class="btn btn-danger btn-sm" data-bs-toggle="tooltip" title="Delete">
                                    <i class="fas fa-trash"></i>
                            
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
            <div id="addOfficialModal" class="modal1">
                <div class="modal-content1">
                    <span class="close" onclick="closeModal('addOfficialModal')">&times;</span>
                    <h2>Add Official</h2>
                    <input type="text" id="officialId" class="form-control mb-2" placeholder="ID">
                    <input type="text" id="officialName" class="form-control mb-2" placeholder="Name">
                    <input type="text" id="officialPosition" class="form-control mb-2" placeholder="Position">
                    <select id="officialCategory" class="form-control mb-2">
                        <option value="sk" selected>SK Official</option>
                        <option value="barangay">Barangay Official</option>
                    </select>
                    <input type="file" id="officialImage" class="form-control mb-2" accept="image/*">
                    <button class="btn btn-primary" onclick="addOfficial()">Add Official</button>
                </div>
            </div>
        </div>

    </div>
    
    
</div>

<!-- /#page-content-wrapper -->
</div>
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
<a href="index.php" class="btn btn-danger">Logout</a>
</div>
</div>
</div>
</div>


<script src="../profile.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>