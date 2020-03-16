var url = window.location.href;
var idharga = url.substring(url.lastIndexOf('?') + 1);

function hapusharga() {
    var txt;
    if (confirm("Apakah anda ingin mengahapus harga ini?")) {
        db.collection('harga').doc(idharga).delete(
        ).then(() => {
            alert("Data Harga sudah dihapus");
            window.location.href = "../show_data/show_harga.php";
        }).catch(err => {
            alert(err.text);
        })
    } else {
        alert("Anda membatalkan menghapus data ini");
    }
}

// document.getElementById("namalengkap").value = "Johnny Bravo";

let driverRef = db.collection('harga').doc(idharga);
let getDoc = driverRef.get()
.then(doc => {
    if (!doc.exists) {
        console.log('No such document!');
    } else {
        document.getElementById("asal").value = doc.data().asal;
        document.getElementById("tujuan").value = doc.data().tujuan;
        document.getElementById("harga").value = doc.data().harga;
    }
})
.catch(err => {
    console.log('Error getting document', err);
});

const createForm = document.querySelector('#form_harga');
createForm.addEventListener('submit', (e) => {
    e.preventDefault();

    db.collection("harga").doc(idharga).update({
        harga: createForm.harga.value,
    }).then(() => {
        window.alert("Harga berhasil di ubah");
        window.location.href = "../show_data/show_harga.php";
    }).catch(err => {
        console.log(err.message);
    });
});

createForm.addEventListener('submitHapus', (e) => {
    alert("hapus");
});