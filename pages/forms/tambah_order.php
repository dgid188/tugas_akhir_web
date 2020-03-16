<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Tambah Order Baru | Jasa Harum</title>
        <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
        <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
        <link rel="stylesheet" href="../../assets/css/style.css">
        <link rel="shortcut icon" href="../../assets/images/favicon.png" />
    </head>
    <body>
        <div class="container-scroller">
            <?php include '../navbar/navbar.php'; ?>

            <div class="container-fluid page-body-wrapper">
                <?php include '../sidebar/sidebar.php'; ?>
                <div class="main-panel">
                    <div class="content-wrapper">
                        <div class="page-header">
                            <h3 class="page-title">
                                <br><br><br>
                                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                                    <i class="mdi mdi-cash-multiple"></i>
                                </span> Tambah Order </h3>

                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Tambahkan Order baru</h4>
                                        <form class="form-sample" id="form_order">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Supir dan Kendaraan yang Mendapat DO</label>
                                                        <div class="col-sm-10">
                                                            <select class="btn btn-outline-secondary dropdown-toggle" id="id_supir" data-toggle="dropdown">
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Asal</label>
                                                        <div class="col-sm-10">
                                                            <select class="btn btn-outline-secondary dropdown-toggle" id="asal" data-toggle="dropdown">
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Barang</label>
                                                        <div class="col-sm-10">
                                                            <select class="btn btn-outline-secondary dropdown-toggle" id="barang" data-toggle="dropdown">
                                                                <option>Kopi</option>
                                                                <option>Sabun</option>
                                                                <option>Mie</option>
                                                                <option>Kecap</option>
                                                                <option>Floridina</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Tanggal Pengambilan</label>
                                                        <div class="col-sm-10">
                                                            <input type="date" class="form-control" id="tglambil"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Tanggal Maksimal Pengambilan</label>
                                                        <div class="col-sm-10">
                                                            <input type="date" class="form-control" id="tglmaksimal"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <button type="submit" class="btn btn-gradient-primary mr-2">Tambah order</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
        <script src="../../assets/vendors/chart.js/Chart.min.js"></script>
        <script src="../../assets/js/off-canvas.js"></script>
        <script src="../../assets/js/hoverable-collapse.js"></script>
        <script src="../../assets/js/misc.js"></script>
        <script src="../../assets/js/dashboard.js"></script>
        <script src="../../assets/js/todolist.js"></script>
        <script src="../../index.js"></script>
        <script src="../../scripts/tambah_order.js"></script>
    </body>
</html>