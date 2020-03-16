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
<script src="../../scripts/auth_status.js"></script>
<script src="../../scripts/auth_logout.js"></script>


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