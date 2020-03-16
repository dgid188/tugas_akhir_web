 <!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Data Harga | Jasa Harum</title>
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

            <?php include '../navbar/navbar.php'; ?>
            <!-- partial -->
            <div class="container-fluid page-body-wrapper">
                <!-- partial:partials/_sidebar.html -->
                <?php include '../sidebar/sidebar.php'; ?>
                <!-- partial -->
                <div class="main-panel">
                    <div class="content-wrapper">
                        <div class="page-header">
                            <h3 class="page-title">
                            <br><br><br>
                                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                                    <i class="mdi mdi-format-list-bulleted-type"></i>
                                </span> Data Harga </h3>
                           
                        </div>
                        <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Data Harga</h4>
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Asal</th>
                          <th>Tujuan</th>
                          <th>Harga</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody class="tampildata">
                      </tbody>
                    </table>
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
        <script src="../../index.js"></script>
        <!-- End custom js for this page -->
        <script src="../../scripts/tampil_data_harga.js"></script>
    </body>
</html>