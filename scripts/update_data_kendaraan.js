var url = window.location.href;
var idkendaraan = url.substring(url.lastIndexOf('?') + 1);


// document.getElementById("namalengkap").value = "Johnny Bravo";

let driverRef = db.collection('kendaraan').doc(idkendaraan);
let getDoc = driverRef.get()
  .then(doc => {
    if (!doc.exists) {
      console.log('No such document!');
    } else {
      document.getElementById("nomorpolisi").value = doc.data().nomor_polisi;
      document.getElementById("merk").value = doc.data().merk;
      document.getElementById("tahunpembuatan").value = doc.data().tahun;
      document.getElementById("warna").value = doc.data().warna;
      document.getElementById("nomormesin").value = doc.data().nomor_mesin;
      document.getElementById("nomorrangka").value = doc.data().nomor_rangka;
      document.getElementById("expiredkir").value = doc.data().expired_kir;
      document.getElementById("expirednomorpolisi").value = doc.data().expired_nomor_polisi;
      document.getElementById("tanggalbayarselanjutnya").value = doc.data().bayar_pajak;
    }
  })
  .catch(err => {
    console.log('Error getting document', err);
  });

const createForm = document.querySelector('#form_kendaraan');
createForm.addEventListener('submit', (e) => {
    e.preventDefault();
    
    db.collection("kendaraan").doc(idkendaraan).update({
        // nomor_telepon: createForm.nomortelepon.value,
        // alamat: createForm.alamat.value,
        nomor_polisi: createForm.nomorpolisi.value,
        warna: createForm.warna.value,
        expired_kir: createForm.expiredkir.value,
        expired_nomor_polisi: createForm.expirednomorpolisi.value,
        bayar_pajak: createForm.tanggalbayarselanjutnya.value,
    }).then(() => {
        window.alert("Data Kendaraan berhasil di Ubah");
        window.location.href = "../show_data/show_kendaraan.php";
    }).catch(err => {
        console.log(err.message);
    });
});