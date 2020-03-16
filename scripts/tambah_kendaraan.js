//tambah kendaraan baru
const createForm = document.querySelector('#form_kendaraan');
createForm.addEventListener('submit', (e) => {
    e.preventDefault();
    db.collection('kendaraan').add({
        nomor_polisi: createForm.nomorpolisi.value,
        merk: createForm.merk.value,
        tahun: createForm.tahunpembuatan.value,
        nomor_mesin: createForm.nomormesin.value,
        nomor_rangka: createForm.nomorrangka.value,
        warna: createForm.warna.value,
        expired_kir: createForm.expiredkir.value,
        expired_nomor_polisi: createForm.expirednomorpolisi.value,
        bayar_pajak: createForm.tanggalbayarselanjutnya.value 
    }).then(() => {
        window.alert("Data Kendaraan berhasil ditambahkan");
        window.location.href = "../show_data/show_kendaraan.php";
    }).catch(err => {
        console.log(err.message);
    });
});
