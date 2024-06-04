<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" type="text/css" href="../css/registrationrequest.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
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
                <a href="profile" class="list-group-item list-group-item-action bg-transparent second-text"><i class="fa-solid fa-user me-2"></i>Officials</a>
                <a href="Document" class="list-group-item list-group-item-action bg-transparent second-text"><i class="fa-solid fa-file me-2"></i>Documents</a>
                <a href="events" class="list-group-item list-group-item-action bg-transparent second-text"><i class="fa-solid fa-calendar-days me-2"></i>Events</a>
                <a href="reports" class="list-group-item list-group-item-action bg-transparent second-text"><i class="fas fa-paperclip me-2"></i>Reports</a>
                <a href="index.php" class="list-group-item list-group-item-action bg-transparent text-danger" data-bs-toggle="modal" data-bs-target="#logoutModal"><i class="fas fa-power-off me-2"></i>Logout</a>

            </div>
        </div>

        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Request</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i>Admin
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="index.php">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <a href="Dashboard" class="goback">&larr; Go Back to Dashboard</a>

            <div class="container">
                
                <div class="d-flex justify-content-between mb-3">
                    <h3 class="fs-5">Registration Request</h3>
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
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Date</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="announcementTableBody">
                        <!-- Dynamic content will be inserted here -->
                        <tr>
                            <td>#5033</td>
                            <td style="max-width: 200px;">
                                <div class="client">
                                    <small style="word-wrap: break-word;">bruno@crossover.org</small>
                                </div>
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
                                
                                
                                
                                </div>
                            </td>
                        </tr>
                        
                        
                        
                    </tbody>
                </table>
            </div>
            </div>
    
    
            </div>
        
            <!-- Modal -->
            <div id="infoModal" class="modal">
                <div class="modal-content">
                    <span class="close" onclick="closeModal()">&times;</span>
                    <h2>User Information</h2>
                    <p id="userInfo"></p>
                </div>
            </div>
        
        
            <!-- Modal -->
            <div id="infoModal" class="modal">
                <div class="modal-content">
                    <span class="close" onclick="closeModal()">&times;</span>
                    <h2>User Information</h2>
                    <p id="userInfo"></p>
                </div>
            </div>
            
    <!-- /#page-content-wrapper -->
    <script src="code.js"></script>
</body>
</html>
