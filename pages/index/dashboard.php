<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Dashboard | Jasa Harum</title>
        <!-- plugins:css -->
        <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
        <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
        <!-- endinject -->
        <!-- Plugin css for this page -->
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <!-- endinject -->
        <!-- Layout styles -->
        <link rel="stylesheet" href="../../assets/css/style.css">
        <!-- End layout styles -->
        <link rel="shortcut icon" href="../../assets/images/favicon.png" />
    </head>
    <body>
        <div id = "user_div"></div>
        <div class="container-scroller">
            <!-- partial:partials/_navbar.html -->
            <?php include '../navbar/navbar.php'; ?>
            <!-- partial -->
            <br>
            <br>
            <br>
            <br>
            <div class="container-fluid page-body-wrapper">
                <!-- partial:partials/_sidebar.html -->
                <?php include '../sidebar/sidebar.php'; ?>
                <!-- partial -->
                <div class="main-panel">
                    <div class="content-wrapper">
                        <div class="row">
                            <div class="col-md-4 stretch-card grid-margin">
                                <div class="card bg-gradient-danger card-img-holder text-white">
                                    <div class="card-body">
                                        <img src="../../assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                                        <h4 class="font-weight-normal mb-3">Weekly Sales <i class="mdi mdi-chart-line mdi-24px float-right"></i>
                                        </h4>
                                        <h2 class="mb-5">$ 15,0000</h2>
                                        <h6 class="card-text">Increased by 60%</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 stretch-card grid-margin">
                                <div class="card bg-gradient-info card-img-holder text-white">
                                    <div class="card-body">
                                        <img src="../../assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                                        <h4 class="font-weight-normal mb-3">Weekly Orders <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                                        </h4>
                                        <h2 class="mb-5">45,6334</h2>
                                        <h6 class="card-text">Decreased by 10%</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 stretch-card grid-margin">
                                <div class="card bg-gradient-success card-img-holder text-white">
                                    <div class="card-body">
                                        <img src="../../assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                                        <h4 class="font-weight-normal mb-3">Visitors Online <i class="mdi mdi-diamond mdi-24px float-right"></i>
                                        </h4>
                                        <h2 class="mb-5">95,5741</h2>
                                        <h6 class="card-text">Increased by 5%</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 grid-margin">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Recent Tickets</h4>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th> Assignee </th>
                                                        <th> Subject </th>
                                                        <th> Status </th>
                                                        <th> Last Update </th>
                                                        <th> Tracking ID </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <img src="../../assets/images/faces/face1.jpg" class="mr-2" alt="image"> David Grey </td>
                                                        <td> Fund is not recieved </td>
                                                        <td>
                                                            <label class="badge badge-gradient-success">DONE</label>
                                                        </td>
                                                        <td> Dec 5, 2017 </td>
                                                        <td> WD-12345 </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="../../assets/images/faces/face2.jpg" class="mr-2" alt="image"> Stella Johnson </td>
                                                        <td> High loading time </td>
                                                        <td>
                                                            <label class="badge badge-gradient-warning">PROGRESS</label>
                                                        </td>
                                                        <td> Dec 12, 2017 </td>
                                                        <td> WD-12346 </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="../../assets/images/faces/face4.jpg" class="mr-2" alt="image"> John Doe </td>
                                                        <td> Loosing control on server </td>
                                                        <td>
                                                            <label class="badge badge-gradient-danger">REJECTED</label>
                                                        </td>
                                                        <td> Dec 3, 2017 </td>
                                                        <td> WD-12348 </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="../../assets/images/faces/face3.jpg" class="mr-2" alt="image"> Marina Michel </td>
                                                        <td> Website down for one week </td>
                                                        <td>
                                                            <label class="badge badge-gradient-info">ON HOLD</label>
                                                        </td>
                                                        <td> Dec 16, 2017 </td>
                                                        <td> WD-12347 </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="../../assets/images/faces/face4.jpg" class="mr-2" alt="image"> John Doe </td>
                                                        <td> Loosing control on server </td>
                                                        <td>
                                                            <label class="badge badge-gradient-danger">REJECTED</label>
                                                        </td>
                                                        <td> Dec 3, 2017 </td>
                                                        <td> WD-12348 </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <!-- partial -->
                </div>
                <!-- main-panel ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>

        <!-- container-scroller -->
        <!-- plugins:js -->
        <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <script src="../../assets/vendors/chart.js/Chart.min.js"></script>
        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="../../assets/js/off-canvas.js"></script>
        <script src="../../assets/js/hoverable-collapse.js"></script>
        <script src="../../assets/js/misc.js"></script>
        <!-- endinject -->
        <!-- Custom js for this page -->
        <script src="../../assets/js/dashboard.js"></script>
        <script src="../../assets/js/todolist.js"></script>
        <!-- End custom js for this page -->
    </body>
</html>