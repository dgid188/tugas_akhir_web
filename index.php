<!DOCTYPE html>
<html lang="en">
    <head>        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Jasa Harum | Admin Login</title>
        <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
        <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="shortcut icon" href="assets/images/favicon.png" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    </head>
    <body>
        <div id="login_div">
            <div class="container-scroller">
                <div class="container-fluid page-body-wrapper full-page-wrapper">
                    <div class="content-wrapper d-flex align-items-center auth">
                        <div class="row flex-grow">
                            <div class="col-lg-4 mx-auto">
                                <div class="auth-form-light text-left p-5">
                                    <div class="brand-logo">
                                        <img src="assets/images/logo_banner.svg">
                                    </div>
                                    <h4>Halo Admin. Mari Masuk</h4>
                                    <form id="login-form">
                                        <div class="form-group">
                                            <div class="input field">
                                                <input type="email" class="form-control form-control-lg" id="email" placeholder="Username" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input field">
                                                <input type="password" class="form-control form-control-lg" id="password" placeholder="Password" required>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <button class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">LOGIN</button>    
                                        </div>
                                        <br>
                                        <p class="error pink-text center-align"></p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://www.gstatic.com/firebasejs/7.8.1/firebase-app.js"></script>
        <script src="https://www.gstatic.com/firebasejs/7.8.1/firebase-auth.js"></script>
        <script src="https://www.gstatic.com/firebasejs/7.8.1/firebase-firestore.js"></script>
        <script src="https://www.gstatic.com/firebasejs/7.8.1/firebase-analytics.js"></script>

        <script>
            var firebaseConfig = {
                apiKey: "AIzaSyA29pooi51cLFUJid_G9tB76QiM1KDWAGA",
                authDomain: "jasaharum-93a12.firebaseapp.com",
                databaseURL: "https://jasaharum-93a12.firebaseio.com",
                projectId: "jasaharum-93a12",

            };
            firebase.initializeApp(firebaseConfig);
            const auth = firebase.auth();
            const db = firebase.firestore();


        </script>
        <script src="scripts/auth_login.js"></script>
    </body>
</html>