<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Tambah Driver dan Kendaraan Baru | Jasa Harum</title>
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
                                    <i class="mdi mdi-account-plus"></i>
                                </span> Tambah Pegawai dan Kendaraan </h3>

                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Data Login Driver</h4>
                                        <p class="card-description">Data dibawah di isi untuk kepentingan Driver login di Mobile Apps</p>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label">Nomor Telepon Pengemudi</label>
                                                    <div class="col-sm-5" style="padding-right: 0">
                                                        <input type="tel" id="phoneNumber" class="form-control" placeholder='Angka "0" diganti dengan "+62"' form="form_driver" />
                                                        <!--                                                            <input type="text" class="form-control" placeholder='Angka "0" diganti dengan "+62"' id="phoneNumber"/>-->
                                                    </div>
                                                    <div class="col-sm-3" style="padding-right: 0">
                                                        <button id="sign-in-button" onclick="submitPhoneNumberAuth()" type="submit" class="btn btn-gradient-info mr-2">Kirim OTP</button>
                                                    </div>

                                                    <div id="recaptcha-container"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label">OTP Pengemudi</label>
                                                    <div class="col-sm-5">
                                                        <input type="number" class="form-control" placeholder="OTP yang diterima oleh Pegawai" id="nomorotp"  />
                                                    </div>
                                                    <div class="col-sm-3" style="padding-right: 0;padding-left: 0">
                                                        <button type="submit" class="btn btn-gradient-info mr-2" onclick="submitPhoneNumberAuthCode()">Tambah Login</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <br>
                                        <h4 class="card-title">Tambahkan data Driver</h4>
                                        <form class="form-sample" id="form_driver"> 
                                            <p class="card-description">Data Diri Driver</p>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">NIK</label>
                                                        <div class="col-sm-10">
                                                            <input type="number" class="form-control" placeholder="Nomor Induk Pegawai" id="NIK" form="form_driver"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 col-form-label">Nama</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control" placeholder="Nama Lengkap Pegawai" id="namalengkap" form="form_driver"/>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 col-form-label">Alamat</label>
                                                        <div class="col-sm-8">
                                                            <textarea class="form-control" placeholder="Alamat" rows="5" id="alamat" form="form_driver"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 col-form-label">Tanggal Lahir</label>
                                                        <div class="col-sm-8">
                                                            <input type="date" class="form-control" id="tgllahir" form="form_driver"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 col-form-label">Tempat Lahir</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control" placeholder="Tempat Lahir" id="tempatlahir" form="form_driver"/>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <hr>
                                            <br>
                                            <!--                                    Data Kendaraan yang akan dibawa Pegawai-->
                                            <h4 class="card-title">Data Kendaraan</h4>
                                            <p class="card-description">Data dibawah, adalah data kendaraan yang akan dibawa oleh Supir</p>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 col-form-label">Nomor Polisi</label>
                                                        <div class="col-sm-8">
                                                            <input type="Text" class="form-control" placeholder="Nomor Polisi Kendaraan" id="nomorpolisi" form="form_driver"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 col-form-label">Merk</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control" placeholder="Merk" id="merk" form="form_driver"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 col-form-label">Tahun Pembuatan</label>
                                                        <div class="col-sm-8">
                                                            <input type="number" class="form-control" placeholder="Tahun" id="tahunpembuatan" form="form_driver"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 col-form-label">Warna</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control" placeholder="Warna Kendaraan" id="warna" form="form_driver"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 col-form-label">Nomer Mesin</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control" placeholder="Nomor Mesin" id="nomormesin" form="form_driver"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 col-form-label">Nomor Rangka</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control" placeholder="Nomor Rangka" id="nomorrangka" form="form_driver"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 col-form-label">Expired KIR</label>
                                                        <div class="col-sm-8">
                                                            <input type="date" class="form-control" placeholder="Jenis Kendaraan" id="expiredkir" form="form_driver"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 col-form-label">Expired Nomor Polisi</label>
                                                        <div class="col-sm-8">
                                                            <input type="date" class="form-control" placeholder="Warna Kendaraan" id="expirednomorpolisi" form="form_driver"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Tanggal Bayar Pajak Selanjutnya</label>
                                                        <div class="col-sm-10">
                                                            <input type="date" class="form-control" placeholder="Tanggal Bayar Pajak Selanjutnya" id="tanggalbayarselanjutnya" form="form_driver"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <button type="submit" class="btn btn-gradient-primary mr-2" id="tambahdatadriver" disabled >Tambah Driver Baru</button>
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
            <script>
                window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier(
                    "recaptcha-container",
                    {
                        size: "normal",
                        callback: function(response) {
                            submitPhoneNumberAuth();
                        }
                    }
                );

                function submitPhoneNumberAuth() {
                    // We are using the test phone numbers we created before
                    var phoneNumber = document.getElementById("phoneNumber").value;
                    var appVerifier = window.recaptchaVerifier;
                    alert("Cek pada Handphone Supir. Terdapat OTP dalam bentuk SMS");
                    firebase
                        .auth()
                        .signInWithPhoneNumber(phoneNumber, appVerifier)
                        .then(function(confirmationResult) {
                        window.confirmationResult = confirmationResult;
                    })
                        .catch(function(error) {
                        console.log(error);
                    });
                }

                function submitPhoneNumberAuthCode() {
                    //     We are using the test code we created before
                    var code = document.getElementById("nomorotp").value;
                    alert("Data Login sudah Berhasil");
                    confirmationResult
                        .confirm(code)
                        .then(function(result) {
                        var user = result.user;
                        console.log(user);
                    })
                        .catch(function(error) {
                        console.log(error);
                    });
                    document.getElementById("tambahdatadriver").disabled = false;
                }

                
            </script>
            <script src="../../scripts/tambah_driver.js"></script>
        </div>
    </body>
</html>