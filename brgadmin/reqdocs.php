<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/brgrequesteddocs.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

	<div class="d-flex" id="w">
        <!-- Sidebar -->
        <div class="bg-white" id="sw">
            <div class="hs text-center primary-text py-4 fs-4 fw-bold text-uppercase border-bottom"> 
            	<img src="../image/mb.png" class="small-image"></i><p class="inline-text">SKCSS</p></div>


            <div class="list-group list-group-flush my-3">
                <a href="./" class="list-group-item list-group-item-action bg-transparent second-text  fw-bold"><i class="fa-solid fa-house me-2"></i>Dashboard</a>
                <a href="profile" class="list-group-item list-group-item-action bg-transparent second-text"><i class="fa-solid fa-user me-2"></i></i>Officials</a>
                <a href="reqdocs" class="list-group-item list-group-item-action bg-transparent second-text ac"><i class="fa-solid fa-user me-2"></i></i>Document</a>
                <a href="../logout" class="list-group-item list-group-item-action bg-transparent text-danger" data-bs-toggle="modal" data-bs-target="#logoutModal"><i class="fas fa-power-off me-2"></i>Logout</a>
            </div>
        </div>





        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Requested Documents</h2>
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
                                <i class="fas fa-user me-2"></i>Co-Admin
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="../logout">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

    <div class="container-fluid px-4">
    <div class="row g-3 my-2">
                	<!--dinhi sugod-->
   

    <div class="md-6">
        <div class="table-responsive">
            <div class="record-header">

                <div class="browse  d-flex align-items-center ms-auto">
                   <input type="search" placeholder="Search" class="record-search form-control ">
                </div>
            </div>
            <table id="officialsTable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Requested Documents</th>
                        <th>Date Receive</th>
                        <!-- <th>Action</th> -->
                    </tr>
                </thead>
                <tbody>
                    <!-- Rows will be added here dynamically -->
                     <?php 
                     include '../db.php';
                     $req = $db->selectWithWhere('sendrequest');
                     foreach($req as $asdasdasdas){
                        extract($asdasdasdas);
                     
                     ?>
                    <tr>
                        <td>#<?php echo $ID  ?></td>
                        <td>
                            <div class="client">
                               <div class="client-img bg-img" style="background-image: url(img/3.jpeg)"></div>
                                <div class="client-info">
                                    <a href="download.php?id=<?php echo $ID ?>"><?php echo $filename.".pdf"  ?></a>
                                   
                                </div>
                            </div>
                        </td>
                        <td>
                           <?php echo $Date  ?>
                        </td>
                        
                        
                        <td>
                  
                                
                                </div>
                            </td>
                        </td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
            <div id="addOfficialModal" class="modal1">
                <div class="modal-content1">
                    <span class="close" onclick="closeModal('addOfficialModal')">&times;</span>
                    <h2>Add Official</h2>
                    <input type="text" id="officialId" class="form-control mb-2" placeholder="ID">
                    <input type="text" id="officialName" class="form-control mb-2" placeholder="Name">
                    <input type="text" id="officialPosition" class="form-control mb-2" placeholder="Position">
                    <select id="officialCategory" class="form-control mb-2">
                        <option value="sk">SK Official</option>
                        <option value="barangay">Barangay Official</option>
                    </select>
                    <input type="file" id="officialImage" class="form-control mb-2" accept="image/*">
                    <button class="btn btn-primary" onclick="addOfficial()">Add Official</button>
                </div>
            </div>




            <!-- edit modal -->
            <div class="modal fade" id="editAnnouncementModal" tabindex="-1" aria-labelledby="editAnnouncementModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editAnnouncementModalLabel">Edit Announcement</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h2>Add Official</h2>
                        <form action="insert.php" method="POST">
                        <input type="text"  name="officialId" class="form-control mb-2" placeholder="ID">
                        <input type="text"  name="officialName" class="form-control mb-2" placeholder="Name">
                        <input type="text"  name="officialPosition" class="form-control mb-2" placeholder="Position">
                        <select name="officialCategory" class="form-control mb-2">
                            <option value="SK Official" selected>SK Official</option>
                            <option value="Barangay Official">Barangay Official</option>
                        </select>
                        <input type="file"  name="officialImage" class="form-control mb-2" accept="image/*">
                        <button type="submit" class="btn btn-primary" onclick="addOfficial()">Update Official</button>
                        </form>
                </div>
            </div>
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
<a href="../logout" class="btn btn-danger">Logout</a>
</div>
</div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>