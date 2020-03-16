<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Tambah Pegawai | Jasa Harum</title>
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
                                    <i class="mdi mdi-account-plus"></i>
                                </span> Ubah data Pegawai lama</h3>
                            
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Ubdah data Driver</h4>
                                        <form class="form-sample" id="form_driver">
                                            <p class="card-description">Data Pribadi</p>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">NIK</label>
                                                        <div class="col-sm-10">
                                                            <input type="number" class="form-control" placeholder="Nomor Induk Pegawai" id="NIK" disabled/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 col-form-label">Nama</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control" placeholder="Nama Lengkap Pegawai" id="namalengkap" disabled/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 col-form-label">Nomor Telepon</label>
                                                        <div class="col-sm-8">
                                                            <input type="number" class="form-control" placeholder="Nomor telepon" id="nomortelepon"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Alamat</label>
                                                        <div class="col-sm-10">
                                                            <textarea class="form-control" placeholder="Alamat" rows="5" id="alamat"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 col-form-label">Tanggal Lahir</label>
                                                        <div class="col-sm-8">
                                                            <input type="date" class="form-control" id="tgllahir" disabled/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 col-form-label">Tempat Lahir</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control" placeholder="Tempat Lahir" id="tempatlahir" disabled/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            
                                            <div class="row">
                                                <div class="col-md-11">
                                                <button type="submit" class="btn btn-gradient-primary mr-2">Ubah Data Driver</button>
                                                </div>
                                                <form id="hapus">
                                                <div class="col-md-1">
                                                <button type="submitHapus" class="btn btn-gradient-danger mr-2">Hapus</button>
                                                </div>
                                                </form>
                                            </div>
                                        </form>
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
        <script src="../../scripts/update_data_driver.js"></script>
    </body>
</html>