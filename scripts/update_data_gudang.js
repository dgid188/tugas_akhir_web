var url = window.location.href;
var idgudang = url.substring(url.lastIndexOf('?') + 1);



// document.getElementById("namalengkap").value = "Johnny Bravo";

let driverRef = db.collection('gudang').doc(idgudang);
let getDoc = driverRef.get()
  .then(doc => {
    if (!doc.exists) {
      console.log('No such document!');
    } else {
      document.getElementById("kota").value = idgudang;
      document.getElementById("alamatgudang").value = doc.data().alamatgudang;
      document.getElementById("longtidue").value = doc.data().lng;
        document.getElementById("latidue").value = doc.data().lat;
    }
  })
  .catch(err => {
    console.log('Error getting document', err);
  });

const createForm = document.querySelector('#form_harga');
createForm.addEventListener('submit', (e) => {
    e.preventDefault();
    
    db.collection("gudang").doc(idgudang).update({
        alamatgudang: createForm.alamatgudang.value,
        lat: createForm.latidue.value,
        lng: createForm.longtidue.value,
    }).then(() => {
        window.alert("Alamat Gudang berhasil di Edit");
        window.location.href = "../show_data/show_gudang.php";
    }).catch(err => {
        console.log(err.message);
    });
});

createForm.addEventListener('submitHapus', (e) => {
  alert("hapus");
});