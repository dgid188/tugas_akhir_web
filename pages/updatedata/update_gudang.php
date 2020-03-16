<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Update Gudang | Jasa Harum</title>
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
                                                        <label class="col-sm-2 col-form-label">Kota</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="kota"/>
                                                        </div>
                                                        <div class="col-sm-2"></div>
                                                        <div class="col-sm-2" style="padding-left:0;padding-right:0;">
                                                            <label class="col-sm-12 col-form-label">Alamat Asal Gudang : </label>
                                                        </div>
                                                        <div class="col-sm-6" style="padding-left:0;padding-right:0;">
                                                            <input type="text" class="form-control" id="alamatgudang" onchange="geocode()"/>
                                                        </div>
                                                        <div class="col-sm-2"></div>
                                                        <div class="col-sm-2"></div>
                                                        <div class="col-sm-2" style="padding-left:0;padding-right:0;">
                                                            <label class="col-sm-12 col-form-label">Longtidue : </label>
                                                        </div>
                                                        <div class="col-sm-2" style="padding-left:0;padding-right:0;">
                                                            <input type="text" class="form-control" id="longtidue" disabled/>
                                                        </div>
                                                        <div class="col-sm-2" style="padding-left:0;padding-right:0;">
                                                            <label class="col-sm-12 col-form-label">Latidue : </label>
                                                        </div>
                                                        <div class="col-sm-2" style="padding-left:0;padding-right:0;">
                                                            <input type="text" class="form-control" id="latidue" disabled/>
                                                        </div>
                                                        <div class="col-sm-4"></div>

                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <button type="submit" class="btn btn-gradient-primary mr-2" id="btnharga">Update gudang</button>
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

            function geocode(e){

                var location = document.getElementById('alamatgudang').value;
                axios.get('https://maps.googleapis.com/maps/api/geocode/json',{
                    params:{
                        address:location,
                        key:'AIzaSyBe8tx7pSaNvMkl59ZkAWFD4L8xHjDmH38'
                    }
                })
                    .then(function(response){
                    console.log(response);
                    var lat = response.data.results[0].geometry.location.lat;
                    var lng = response.data.results[0].geometry.location.lng;
                    document.getElementById("longtidue").value = lng;
                    document.getElementById("latidue").value = lat;
                    document.getElementById("tujuan").disabled = false;
                })
                    .catch(function(error){
                    console.log(error);
                })
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
        <script src="../../scripts/update_data_gudang.js"></script>
    </body>
</html>