<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Data</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="admin_assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" /> <!-- FontAwesome -->

    <!-- Template Main CSS File -->
    <link href="admin_assets/css/style.css" rel="stylesheet" />

    <!-- DataTables Buttons CSS -->
    <link href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css" rel="stylesheet" />
</head>

<body>
    <!-- Header -->
       <!--//==preloader End==//-->
       <header id="main-header">
            <div class="top-header pad-top10 pad-bottom10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-9 text-left">
                            <ul class="top-bar-icon">
                                <li>
                                    <a href="tel:8329980202"><i class="fa fa-phone"
                                            aria-hidden="true"></i>832-9988760</a>
                                </li>
                                <li>
                                    <a href="mailto:info@gmail.com"><i class="fa fa-envelope-o"
                                            aria-hidden="true"></i>info@gmail.com</a>
                                </li>
                            </ul>
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-3 text-right">
                            <ul class="top-right-icon">
                                <li>
                                    <a href="https://www.facebook.com"><i
                                            class="fa fa-facebook" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a
                                        href="https://www.instagram.com"><i
                                            class="fa fa-instagram" aria-hidden="true"></i></a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--//==top header end==//-->
            <!--//==mega menu start==//-->
            <div id="main-menu" class="wa-main-menu">
                <!-- Menu -->
                <div class="wathemes-menu relative">
                    <!-- navbar -->
                    <div class="navbar navbar-default navbar-bg-dark" role="navigation">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="navbar-header pad-top15 pad-bottom15">
                                        <!-- Button For Responsive toggle -->
                                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                                            data-target=".navbar-collapse">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                        <!-- Logo -->
                                        <a class="navbar-brand" href="/"
                                            style="display: flex; align-items: center;">
                                            <img class="site_logo dark-logo" alt="Site Logo"
                                                style="height: 70px; width: auto;" src="assets/img/Rahim.png" />
                                            <img class="site_logo light-logo" alt="Site Logo"
                                                style="height: 70px; width: auto;" src="assets/img/Rahim.png" />
                                            <span
                                                style="font-size: 24px; margin-left: 10px; font-weight: bold; color: #0266ab;">SKY HIGH</span>
                                        </a>


                                    </div>
                                    <!-- Navbar Collapse -->
                                    @include('navbar')
                                    <!-- navbar-collapse -->
                                </div>
                                <!-- col-md-12 -->
                            </div>
                            <!-- row -->
                        </div>
                        <!-- container -->
                    </div>
                    <!-- navbar -->
                </div>
                <!--  Menu -->
            </div>
            <!--//==mega menu end==//-->
        </header>
    <!-- End Header -->

    <!-- Sidebar -->
    <aside id="sidebar" class="sidebar">
        <ul class="sidebar-nav" id="sidebar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-layout-text-window-reverse"></i><span>Customers</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="tables-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ url('data') }}">
                            <i class="bi bi-circle"></i><span>Customers Data</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </aside>
    <!-- End Sidebar -->

    <!-- Main Content -->
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Data</h1>
        </div>

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Contact List</h5>
                            <!-- Export Buttons -->
                            <div class="d-flex justify-content-end mb-3">
                                <button class="btn btn-success me-2" id="excelBtn"><i class="fas fa-file-excel"></i> Excel</button>
                                <button class="btn btn-danger me-2" id="pdfBtn"><i class="fas fa-file-pdf"></i> PDF</button>
                                <button class="btn btn-info me-2" id="csvBtn"><i class="fas fa-file-csv"></i> CSV</button>
                                <button class="btn btn-primary" id="printBtn"><i class="fas fa-print"></i> Print</button>
                            </div>

                            <!-- Contact Table -->
                            <table id="contactTable" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Contact No</th>
                                        <th>Message</th>
                                        <th>Country</th>
                                        <th>City</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contacts as $index => $contact)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $contact->name }}</td>
                                        <td>{{ $contact->email }}</td>
                                        <td>{{ $contact->contact_no }}</td>
                                        <td>{{ $contact->message }}</td>
                                        <td>{{ $contact->country }}</td>
                                        <td>{{ $contact->city }}</td>
                                        <td>{{ $contact->created_at }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- End Contact Table -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- End Main Content -->

    <!-- Vendor JS Files -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="admin_assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

    <!-- DataTables Buttons JS -->
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>

    <!-- Initialize DataTables with export buttons -->
    <script>
        $(document).ready(function() {
            // Initialize DataTable
            var table = $('#contactTable').DataTable({
                responsive: true,
                paging: true,
                searching: true,
                info: true,
                columnDefs: [{
                    orderable: false,
                    targets: [3, 4]
                }],
                dom: 'Bfrtip', // Position the buttons and table
                buttons: [
                    'copy',
                    'csv',
                    'excel',
                    'pdf', // Enable PDF export button
                    'print'
                ]
            });

            // Custom button event handlers
            $('#excelBtn').on('click', function() {
                table.button('.buttons-excel').trigger();
            });
            $('#pdfBtn').on('click', function() {
                table.button('.buttons-pdf').trigger();
            });
            $('#csvBtn').on('click', function() {
                table.button('.buttons-csv').trigger();
            });
            $('#printBtn').on('click', function() {
                table.button('.buttons-print').trigger();
            });
        });
    </script>
</body>

</html>
