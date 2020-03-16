var uidlogin = '';
firebase.auth().onAuthStateChanged(function(user) {
    if (user) {
        console.log("USER LOGGED IN")
        console.log("User : " + user.uid)
        uidlogin = user.uid;
        
    } else {
        // No user is signed in.
        console.log("USER NOT LOGGED IN")
    }
});
const createForm = document.querySelector('#form_driver');
createForm.addEventListener('submit', (e) => {
    e.preventDefault();
    firebase.auth().onAuthStateChanged(function(user) {
        if (user) {
            console.log("USER LOGGED IN")
            console.log("User : " + user.uid)
            db.collection('driver').doc(user.uid).set ({
                NIK: createForm.NIK.value,
                nama: createForm.namalengkap.value,
                alamat: createForm.alamat.value,
                tgl_lahir: createForm.tgllahir.value,
                tempat_lahir: createForm.tempatlahir.value,
                nomor_polisi: createForm.nomorpolisi.value,
                merk: createForm.merk.value,
                tahun: createForm.tahunpembuatan.value,
                nomor_mesin: createForm.nomormesin.value,
                nomor_rangka: createForm.nomorrangka.value,
                warna: createForm.warna.value,
                expired_kir: createForm.expiredkir.value,
                expired_nomor_polisi: createForm.expirednomorpolisi.value,
                bayar_pajak: createForm.tanggalbayarselanjutnya.value,
                nomor_telepon: createForm.phoneNumber.value,
                statusaktif: "1",
            }).then(() => {
                window.alert("Driver baru dan kendaraan berhasil ditambahkan");
                window.alert("Driver dapat login ke Aplikasi");
                window.location.href = "../show_data/show_driver.php";
            }).catch(err => {
                console.log(err.message);
            });
            
        } else {
            // No user is signed in.
            console.log("USER NOT LOGGED IN")
        }
    });
    
});

//tambah kendaraan baru
// const createForm = document.querySelector('#form_driver');
// createForm.addEventListener('submit', (e) => {
//     e.preventDefault();
//     db.collection('driver').doc(uid).add({
//         NIK: createForm.NIK.value,
//         nama: createForm.namalengkap.value,
//         alamat: createForm.alamat.value,
//         tgl_lahir: createForm.tgllahir.value,
//         tempat_lahir: createForm.tempatlahir.value,
//         nomor_polisi: createForm.nomorpolisi.value,
//         merk: createForm.merk.value,
//         tahun: createForm.tahunpembuatan.value,
//         nomor_mesin: createForm.nomormesin.value,
//         nomor_rangka: createForm.nomorrangka.value,
//         warna: createForm.warna.value,
//         expired_kir: createForm.expiredkir.value,
//         expired_nomor_polisi: createForm.expirednomorpolisi.value,
//         bayar_pajak: createForm.tanggalbayarselanjutnya.value,
//         statusaktif: "1",
//     }).then(() => {
//         window.alert("Driver baru dan kendaraan berhasil ditambahkan");
//         window.alert("Driver dapat login ke Aplikasi");
//         window.location.href = "../show_data/show_driver.php";
//     }).catch(err => {
//         console.log(err.message);
//     });
// });
