var url = window.location.href;
var iddriver = url.substring(url.lastIndexOf('?') + 1);


// document.getElementById("namalengkap").value = "Johnny Bravo";

let driverRef = db.collection('driver').doc(iddriver);
let getDoc = driverRef.get()
  .then(doc => {
    if (!doc.exists) {
      console.log('No such document!');
    } else {
      document.getElementById("NIK").value = doc.data().NIK;
      document.getElementById("namalengkap").value = doc.data().nama;
      document.getElementById("nomortelepon").value = doc.data().nomor_telepon;
      document.getElementById("alamat").value = doc.data().alamat;
      document.getElementById("tgllahir").value = doc.data().tgl_lahir;
      document.getElementById("tempatlahir").value = doc.data().tempat_lahir;
    }
  })
  .catch(err => {
    console.log('Error getting document', err);
  });

const createForm = document.querySelector('#form_driver');
createForm.addEventListener('submit', (e) => {
    e.preventDefault();
    
    db.collection("driver").doc(iddriver).update({
        nomor_telepon: createForm.nomortelepon.value,
        alamat: createForm.alamat.value,
    }).then(() => {
        window.alert("Data driver berhasil di Edit");
        window.location.href = "../show_data/show_driver.php";
    }).catch(err => {
        console.log(err.message);
    });
});