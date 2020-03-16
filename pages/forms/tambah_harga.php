<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Tambah Harga | Jasa Harum</title>
        <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
        <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
        <link rel="stylesheet" href="../../assets/css/style.css">
        <link rel="shortcut icon" href="../../assets/images/favicon.png" />
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
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
                                </span> Tambah Harga </h3>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Tambah Data</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Tambah Harga</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Tambahkan data Harga baru</h4>
                                        <form class="form-sample" id="form_harga">
                                            <p class="card-description"> Tambah rute dan harga baru </p>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Asal</label>
                                                        <div class="col-sm-10">
                                                            <select class="btn btn-outline-secondary dropdown-toggle" id="asal" data-toggle="dropdown" onchange="onchangeasal()">

                                                            </select>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Tujuan</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="tujuan" onchange="onchangetujuan()" disabled/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Harga Per M<sup>2</sup> (Rp.)</label>
                                                        <div class="col-sm-10">
                                                            <input type="number" class="form-control" id="harga" onchange="onchangeharga()" disabled/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <button type="submit" class="btn btn-gradient-primary mr-2" id="btnharga" disabled>Tambah Harga</button>
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
        <script>
            function onchangeasal(){
                document.getElementById("tujuan").disabled = false;
            }
            function onchangetujuan(){
                document.getElementById("harga").disabled = false;
            }
            //            function tampildata(){
            //                var sel = document.getElementById("asal");
            // mendapatkan value
            //                alert(sel.value);
            //mendapatkan selected text
            //                alert(sel.options[sel.selectedIndex].text);
            //                
            //            }
            function onchangeharga(){
                document.getElementById("btnharga").disabled = false;
            }

        </script>
        <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
        <script src="../../assets/vendors/chart.js/Chart.min.js"></script>
        <script src="../../assets/js/off-canvas.js"></script>
        <script src="../../assets/js/hoverable-collapse.js"></script>
        <script src="../../assets/js/misc.js"></script>
        <script src="../../assets/js/dashboard.js"></script>
        <script src="../../assets/js/todolist.js"></script>
        <script src="../../index.js"></script>
        <script src="../../scripts/tambah_harga.js"></script>
    </body>
</html>