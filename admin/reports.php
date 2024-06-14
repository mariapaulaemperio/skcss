<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" type="text/css" href="../css/reports.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

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
                <a href="./" class="list-group-item list-group-item-action bg-transparent second-text"><i
                        class="fa-solid fa-house"></i>Dashboard</a>
                <a href="./profile" class="list-group-item list-group-item-action bg-transparent second-text"><i
                        class="fa-solid fa-user me-2"></i>Officials</a>
                <a href="./Document" class="list-group-item list-group-item-action bg-transparent second-text"><i
                        class="fa-solid fa-file me-2"></i>Documents</a>
                <a href="./events" class="list-group-item list-group-item-action bg-transparent second-text"><i
                        class="fa-solid fa-calendar-days me-2"></i>Events</a>
                <a href="./reports" class="list-group-item list-group-item-action bg-transparent second-text ac"><i
                        class="fas fa-paperclip me-2"></i>Reports</a>
                <a href="../logout" class="list-group-item list-group-item-action bg-transparent text-danger"
                    data-bs-toggle="modal" data-bs-target="#logoutModal"><i class="fas fa-power-off me-2"></i>Logout</a>

            </div>
        </div>

        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Reports</h2>
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
                <!-- Profile content goes here -->




                <div class="doc-container">

                    <div class="col-md-2">
                        <button class="btn btn-primary icon-button1" onclick="printTable()">
                            <i class="fas fa-print"></i>
                        </button>
                    </div>

                    <div class="row row2">
                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="custom-select1">
                                    <select id="dataSelect" class="form-control">
                                        <option value="" disabled selected>Select List</option>
                                        <option value="table1">List Of Events</option>
                                        <option value="table2">KK Profiles</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                    </div>



                    <style>
                         table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        .hidden {
            display: none;
        }
        .show {
            display: block;
        }

                        .print-section {
                            margin-top: 20px;
                        }

                        @media print {
                            body * {
                                visibility: hidden;
                            }

                            .print-section,
                            .print-section * {
                                visibility: visible;
                            }

                            .print-section {
                                position: absolute;
                                left: 0;
                                top: 0;
                                width: 100%;
                            }

                            .print-section .table {
                                width: 100%;
                            }
                        }
                    </style>
                    <script>
                        $(document).ready(function () {
                            $('#dataSelect').on('change', function () {
                                const sel = $(this).val();
                                $('.hidden').removeClass('show').addClass('hidden');
                                $('#' + sel + 'Element').removeClass('hidden').addClass('show')
                            });
                        });
                    </script>
                    <div class="print-section" id="printSection">
                        <table class="hidden" id="table1Element">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">File</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Details</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>


                                </tr>


                            </tbody>
                        </table>
                        <table class="hidden" id="table2Element">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">File</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Details</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>lage</td>
                                    <td>lage</td>
                                    <td>@mdo</td>


                                </tr>


                            </tbody>
                        </table>
                    </div>

                </div>


            </div>

        </div>
    </div>
</body>

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
<script src="script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    var el = document.getElementById("wrapper");
    var toggleButton = document.getElementById("menu-toggle");

    toggleButton.onclick = function () {
        el.classList.toggle("toggled");
    };
</script>
<script>
        let data = {}; // Initially empty

        function fetchData(selectedValue) {
            // Simulating data fetching. Replace with actual data fetching logic.
            return new Promise((resolve) => {
                setTimeout(() => {
                    if (selectedValue === 'events') {
                        resolve([
                            { id: 1, file: "Event1", name: "Conference", details: "Details1" },
                            { id: 2, file: "Event2", name: "Workshop", details: "Details2" }
                        ]);
                    } else if (selectedValue === 'profiles') {
                        resolve([
                            { id: 1, file: "Profile1", name: "John Doe", details: "DetailsA" },
                            { id: 2, file: "Profile2", name: "Jane Smith", details: "DetailsB" }
                        ]);
                    } else {
                        resolve([]);
                    }
                }, 1000); // Simulate network delay
            });
        }

        document.getElementById('dataSelect').addEventListener('change', async function () {
            const selectedValue = this.value;
            const tableBody = document.getElementById('tableBody');
            tableBody.innerHTML = '';

            // Fetch the data
            const fetchedData = await fetchData(selectedValue);
            data[selectedValue] = fetchedData; // Update the data object

            // Update the table with the fetched data
            fetchedData.forEach(item => {
                const row = `<tr>
                    <th scope="row">${item.id}</th>
                    <td>${item.file}</td>
                    <td>${item.name}</td>
                    <td>${item.details}</td>
                </tr>`;
                tableBody.insertAdjacentHTML('beforeend', row);
            });
        });

        function printTable() {
            window.print();
        }
    </script>
</body>

</html>