<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Announcements</title>
    <link rel="stylesheet" type="text/css" href="../css/announcement.css">
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
                <img src="../image/ssk.png" class="small-image">
                <p class="inline-text">SKCSS</p>
            </div>

            <div class="list-group list-group-flush my-3">
                <a href="./" class="list-group-item list-group-item-action bg-transparent second-text ac"><i class="fa-solid fa-house me-2"></i>Dashboard</a>
                <a href="./profile" class="list-group-item list-group-item-action bg-transparent second-text"><i class="fa-solid fa-user me-2"></i>Officials</a>
                <a href="./Document" class="list-group-item list-group-item-action bg-transparent second-text"><i class="fa-solid fa-file me-2"></i>Documents</a>
                <a href="./events" class="list-group-item list-group-item-action bg-transparent second-text"><i class="fa-solid fa-calendar-days me-2"></i>Events</a>
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
                    <h2 class="fs-2 m-0">Announcement</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i>Admin
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="../logout">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <a href="./" class="goback">&larr; Go Back to Dashboard</a>
            <div class="container-fluid px-4">
                <!-- Profile content goes here -->
                <div class="d-flex justify-content-between mb-3">
                    <h3 class="fs-5">Current Announcements</h3>
                    <div class="button-container">
                        <button class="btn btn-primary icon-button1" data-bs-toggle="modal" data-bs-target="#addAnnouncementModal">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>
                <div class="table-responsive">
                    <div class="record-header">
                        <div class="browse d-flex align-items-center ms-auto">
                            <input type="search" placeholder="Search" class="record-search form-control">
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
                            <?php
                            include '../db.php';
                            $announce = $db->selectWithWhere('announcements', '*');
                            foreach ($announce as $s) { ?>
                                <tr>
                                    <td><?php echo $s['title']; ?></td>
                                    <td style="max-width: 200px;">
                                        <div class="client">
                                            <small style="word-wrap: break-word;"><?php echo $s['description']; ?></small>
                                        </div>
                                    </td>
                                    <td>
                                        <?php echo $s['date']; ?>
                                    </td>
                                    <td>
                                        <button value="<?php echo $s['id']; ?>" class="btn btn-warning btn-sm edit-announcement-btn" data-bs-toggle="modal" data-bs-target="#editAnnouncementModal" title="Update">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <a href="delete.php?idan=<?php echo $s['id']; ?>" class="btn btn-danger btn-sm" data-bs-toggle="tooltip" title="Delete">
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

    <!-- Edit Announcement Modal -->
    <div class="modal fade" id="editAnnouncementModal" tabindex="-1" aria-labelledby="editAnnouncementModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editAnnouncementModalLabel">Edit Announcement</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="editAnnouncementForm" method="POST" action="update.php">
                        <input type="hidden" id="announcementId" name="announcementId">
                        <div class="mb-3">
                            <label for="editAnnouncementTitle" class="form-label">Title</label>
                            <input type="text" class="form-control" id="editAnnouncementTitle" name="announcementTitle" required>
                        </div>
                        <div class="mb-3">
                            <label for="editAnnouncementDescription" class="form-label">Description</label>
                            <textarea class="form-control" id="editAnnouncementDescription" name="announcementDescription" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="editAnnouncementDate" class="form-label">Date</label>
                            <input type="date" class="form-control" id="editAnnouncementDate" name="announcementDate" required>
                        </div>
                        <button type="submit" class="btn btn-warning">
                            Update
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Logout Modal -->
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

    <!-- Add Announcement Modal -->
    <div class="modal fade" id="addAnnouncementModal" tabindex="-1" aria-labelledby="addAnnouncementModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addAnnouncementModalLabel">Add Announcement</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="announcementForm" method="POST" action="insert.php">
                        <div class="mb-3">
                            <label for="announcementTitle" class="form-label">Title</label>
                            <input type="text" class="form-control" id="announcementTitle" name="announcementTitle" required>
                        </div>
                        <div class="mb-3">
                            <label for="announcementDescription" class="form-label">Description</label>
                            <textarea class="form-control" id="announcementDescription" name="announcementDescription" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="announcementDate" class="form-label">Date</label>
                            <input type="date" class="form-control" id="announcementDate" name="announcementDate" required>
                        </div>
                        <button type="submit" id="submit" class="btn btn-success">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        // JavaScript to handle the edit button click and populate the modal with the announcement details
        document.querySelectorAll('.edit-announcement-btn').forEach(function(button) {
            button.addEventListener('click', function() {
                var id = this.value;
                var title = this.closest('tr').querySelector('td:nth-child(1)').innerText;
                var description = this.closest('tr').querySelector('td:nth-child(2) small').innerText;
                var date = this.closest('tr').querySelector('td:nth-child(3)').innerText;

                document.getElementById('announcementId').value = id;
                document.getElementById('editAnnouncementTitle').value = title;
                document.getElementById('editAnnouncementDescription').value = description;
                document.getElementById('editAnnouncementDate').value = date;
            });
        });
    </script>
</body>

</html>
