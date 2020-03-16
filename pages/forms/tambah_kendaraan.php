<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Tambah Kendaraan | Jasa Harum</title>
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
                <br>
                <br>
                <br>
                    <div class="content-wrapper">
                        <div class="page-header">
                            <h3 class="page-title">
                                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                                    <i class="mdi mdi-truck-delivery"></i>
                                </span> Tambah Kendaraan </h3>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Tambah Data</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Tambah Kendaraan</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Tambahkan data kendaraan baru</h4>
                                        <form class="form-sample" id="form_kendaraan">
                                            <p class="card-description"> Detil kendaraan </p>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 col-form-label">Nomor Polisi</label>
                                                        <div class="col-sm-8">
                                                            <input type="Text" class="form-control" placeholder="Nomor Polisi Kendaraan" id="nomorpolisi"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 col-form-label">Merk</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control" placeholder="Merk" id="merk" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 col-form-label">Tahun Pembuatan</label>
                                                        <div class="col-sm-8">
                                                            <input type="number" class="form-control" placeholder="Tahun" id="tahunpembuatan"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 col-form-label">Warna</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control" placeholder="Warna Kendaraan" id="warna"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 col-form-label">Nomer Mesin</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control" placeholder="Nomor Mesin" id="nomormesin"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 col-form-label">Nomor Rangka</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control" placeholder="Nomor Rangka" id="nomorrangka"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 col-form-label">Expired KIR</label>
                                                        <div class="col-sm-8">
                                                            <input type="date" class="form-control" placeholder="Jenis Kendaraan" id="expiredkir"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 col-form-label">Expired Nomor Polisi</label>
                                                        <div class="col-sm-8">
                                                            <input type="date" class="form-control" placeholder="Warna Kendaraan" id="expirednomorpolisi"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Tanggal Bayar Pajak Selanjutnya</label>
                                                        <div class="col-sm-10">
                                                            <input type="date" class="form-control" placeholder="Tanggal Bayar Pajak Selanjutnya" id="tanggalbayarselanjutnya"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                <button type="submit" class="btn btn-gradient-primary mr-2">Tambah Kendaraan</button>
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
        <script src="../../scripts/tambah_kendaraan.js"></script>
    </body>
</html>