<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/requestnewdoc.css">
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
                    <a href="brgDashboard" class="list-group-item list-group-item-action bg-transparent second-text ac"><i class="fa-solid fa-house me-2"></i>Dashboard</a>
                    <a href="brgprofile" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fa-solid fa-user me-2"></i></i>Officials</a>
                    <a href="brgrequesteddocs" class="list-group-item list-group-item-action bg-transparent second-text"><i class="fa-solid fa-user me-2"></i></i>Document</a>
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
            <a href="requestdoc" class="goback">&larr; Go Back to Dashboard</a>
    <div class="container-fluid px-4">
        
    <div class="rowr g-3 my-2">
                	<!--dinhi sugod-->
                
            <div class="b">
                    <div class="record-header">
                    <span class="label">Enter Request Details</span>
                    </div>
                    <form method="POST" action="insert.php">
                       
                        <span>Input the Name of the file Requested: *</span>
                        <input type="text" id="file_name" name="file_name" >

                          <span>Purpose of the request : *</span>
                          <input type="text" id="Purpose" name="Purpose">

                          <label for="dueDate">Enter Due Date:</label>
                          <input type="date" id="dueDate" name="dueDate" >
                           
                          <button type="submit" onclick="openModal()">Submit</button>
                      </form>
                        
             </div>

    </div>
    
    
</div>



<!-- /#page-content-wrapper -->
</div>


<div id="customModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <p>Form submitted successfully!</p>
        <button onclick="goBack()">Go Back</button>
    </div>
</div>

<script>
    // Get the modal
    var modal = document.getElementById("customModal");

    // Function to open the modal
    function openModal() {
        modal.style.display = "block";
    }

    // Function to close the modal
    function closeModal() {
        modal.style.display = "none";
    }

    // Function to go back (example function, you can customize it)
    function goBack() {
        // Implement your go back logic here
        alert("Going back...");
    }

    // Close the modal if the user clicks outside of the modal content
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
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
<a href="../logout" class="btn btn-danger">Logout</a>
</div>
</div>
</div>
</div>


<script src="script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>

<script src="profile.js"></script>
</body>
</html>