//tambah kendaraan baru
const createForm = document.querySelector('#form_harga');
createForm.addEventListener('submit', (e) => {
    e.preventDefault();
    db.collection('gudang').doc(createForm.kota.value).set({
        alamatgudang: createForm.alamatgudang.value,
        lat: createForm.latidue.value,
        lng: createForm.longtidue.value,
    }).then(() => {
        window.alert("Gudang Baru berhasil ditambahkan");
        window.location.href = "../show_data/show_gudang.php";
    }).catch(err => {
        console.log(err.message);
    });
});
