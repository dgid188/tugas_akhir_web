
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
                        </span> Tambah Pegawai </h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Tambah Data</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tambah Pegawai</li>
                        </ol>
                    </nav>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Tambahkan data Driver</h4>
                                <form class="form-sample" id="form_driver">
                                    <p class="card-description"> Personal info </p>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">NIK</label>
                                                <div class="col-sm-10">
                                                    <input type="number" class="form-control" placeholder="Nomor Induk Pegawai" id="NIK"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Nama</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" placeholder="Nama Lengkap Pegawai" id="namalengkap"/>
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
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Alamat</label>
                                                <div class="col-sm-8">
                                                    <textarea class="form-control" placeholder="Alamat" rows="5" id="alamat"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Tanggal Lahir</label>
                                                <div class="col-sm-8">
                                                    <input type="date" class="form-control" id="tgllahir"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Tempat Lahir</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" placeholder="Tempat Lahir" id="tempatlahir"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Kendaraan yang akan dibawa</label>
                                                <div class="col-sm-8">
                                                    <select class="btn btn-outline-secondary dropdown-toggle" id="nopolkendaraan" data-toggle="dropdown">
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <h4 class="card-title">Data Login Driver</h4>
                                    <p class="card-description">Data dibawah di isi untuk kepentingan Driver login di Mobile Apps</p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Email</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" placeholder="Email baru Driver" id="email"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Password</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" value="Password default adalah '123456JasaHarum'"id="password" disabled />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                        <button type="submit" class="btn btn-gradient-primary mr-2">Tambah Driver Baru</button>
                                        </div>
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