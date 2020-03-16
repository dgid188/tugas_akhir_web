//tambah kendaraan baru
// const createForm = document.querySelector('#form_driver');
// createForm.addEventListener('submit', (e) => {
//     e.preventDefault();

//     const email = createForm['email'].value;
//     const password = '123456JasaHarum';

//     auth.createUserWithEmailAndPassword(email, password).then(cred => {        
//         cred.user.updateProfile({
//             displayName: createForm.namalengkap.value,
//             phoneNumber: createForm.nomortelepon.value,
//     }).then(() => {
//         db.collection('driver').doc(cred.user.uid).set({
//             NIK: createForm.NIK.value,
//             nama: createForm.namalengkap.value,
//             nomor_telepon: createForm.nomortelepon.value,
//             alamat: createForm.alamat.value,
//             tgl_lahir: createForm.tgllahir.value,
//             tempat_lahir: createForm.tempatlahir.value,
//             idkendaraan: createForm.nopolkendaraan.value,
//             statusaktif: "0",
//         }).then(() => {
//             window.alert("Driver baru berhasil ditambahkan");
//             window.alert("Driver dapat login ke Aplikasi");
//             window.location.href = "../show_data/show_driver.php";
//         }).catch(err => {
//             console.log(err.message);
//         });

//     }).catch(err => {
//         window.alert(err.message);
//         })
//     });
// });
let temp = null;
let driverRef = db.collection('driver').where("statusaktif", "==", "1");
let getDoc = driverRef.get()
.then(doc => {
    temp = doc.docs;
    let selectDom = "";
    doc.docs.forEach(DriverKendaraanObj => {
        let DriverKendaraan = DriverKendaraanObj.data();
        selectDom += `
<option value='`+DriverKendaraanObj.id+`'>`+ DriverKendaraan.nama + ` - ` + DriverKendaraan.nomor_polisi+`</option>
`;
    });
    console.log(selectDom);
    $("#id_supir").html(selectDom);
})
.catch(err => {
    console.log('Error getting document', err);
});


let tempo = null;
let hargaRef = db.collection('harga');
let getDocHarga = hargaRef.get()
.then(docharga => {
    tempo = docharga.docs;
    let selectDomi = "";
    docharga.docs.forEach(hargaObj => {
        let harga = hargaObj.data();
        selectDomi += `
<option value='`+harga.asal+`'>`+harga.asal+`</option>
`;
    });
    console.log(selectDomi);
    $("#asal").html(selectDomi);
})
.catch(err => {
    console.log('Error getting document', err);
});

const createForm = document.querySelector('#form_order');
createForm.addEventListener('submit', (e) => {
    e.preventDefault();
    alert(createForm.id_supir.value);
    db.collection('order').add({
        id_driver: createForm.id_supir.value,
        asal_tujuan: createForm.asal.value,
        tujuan: "-",
        barang: createForm.barang.value,
        tanggal_pengambilan_awal: createForm.tglambil.value,
        tanggal_pengambilan_maksimal: createForm.tglmaksimal.value,
        no_shipment: "-",
        status: "menunggu konfirmasi",
        total_muatan: "-"
    }).then(() => {
        db.collection("driver").doc(createForm.id_supir.value).update({
            statusaktif: "0",
        }).then(() => {
            window.alert("Order baru berhasil ditambahkan");
            window.location.href = "../show_data/show_order.php";
        }).catch(err => {
            console.log(err.message);
        })

    }).catch(err => {
        console.log(err.message);
    });
});
