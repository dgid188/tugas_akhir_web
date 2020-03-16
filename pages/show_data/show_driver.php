<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Data Driver | Jasa Harum</title>
        <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
        <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
        <link rel="stylesheet" href="../../assets/css/style.css">
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
                                </span> Data Pegawai </h3>

                        </div>
                        <div class="row">
                            <div class="col-lg-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Data Driver</h4>
                                        <p class="card-description"> Yang Aktif (dengan kendaraan)
                                        </p>
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Nama</th>
                                                    <th>NIK</th>
                                                    <th>Alamat</th>
                                                    <th>Nomor Telepon</th>
                                                    <th>Edit</th>
                                                    <th>Details</th>
                                                </tr>
                                            </thead>
                                            <tbody class="tampildatadriver">
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>       
                        </div>

                        <div class="page-header">
                            <h3 class="page-title">
                                <br>
                                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                                    <i class="mdi mdi-car"></i>
                                </span> Data Kendaraan </h3>

                        </div>
                        <div class="row">
                            <div class="col-lg-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Data Driver</h4>
                                        <p class="card-description"> Yang Aktif (dengan kendaraan)
                                        </p>
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Nomor Polisi</th>
                                                    <th>Merk</th>
                                                    <th>Tahun</th>
                                                    <th>Expired KIR</th>
                                                    <th>Expired Nopol</th>
                                                    <th>Tanggal Bayar Pajak</th>
                                                </tr>
                                            </thead>
                                            <tbody class="tampildatakendaraan">
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
        <script src="../../scripts/tampil_data_driver.js"></script>
    </body>
</html>