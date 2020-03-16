auth.onAuthStateChanged(user => {
    if(user){
        //Menyiapkan data di table Driver
        db.collection('driver').onSnapshot(snapshot => {
            setupDriver(snapshot.docs);
        }, err => console.log(err.message));
        db.collection('driver').onSnapshot(snapshot => {
            setupKendaraan(snapshot.docs);
        }, err => console.log(err.message));
    }else{
        console.log('Tidak ada yang login');
    }
})



//Tampil data Driver.

const listDriver = document.querySelector('.tampildatadriver');
const setupDriver = (datadriver) => {
    if(datadriver.length) {
        let html = '';
        datadriver.forEach(docDriver => {
            const driver = docDriver.data();
            const td = `
            <tr>
                <td>${driver.nama}</td>
                <td>${driver.NIK}</td>
                <td>${driver.alamat}</td>
                <td>${driver.nomor_telepon}</td>
                <td><button type="button" class="btn btn-gradient-warning btn-fw" onclick="window.location.href = '../updatedata/update_driver.php?${docDriver.id}';" >Ubah Data</button></td>
                <td><button type="button" class="btn btn-gradient-success btn-fw">Detil Data</button></td>
            </tr>
            `;
            html += td;
            console.log(docDriver.id);
        });
        listDriver.innerHTML = html;
    }
}

const listKendaraan = document.querySelector('.tampildatakendaraan');
const setupKendaraan = (datakendaraan) => {
    if(datakendaraan.length) {
        let htmlkendaraan = '';
        datakendaraan.forEach(docKendaraan => {
            const kendaraan = docKendaraan.data();
            const tdkendaraan = `
            <tr>
                <td>${kendaraan.nomor_polisi}</td>
                <td>${kendaraan.merk}</td>
                <td>${kendaraan.tahun}</td>
                <td>${kendaraan.expired_kir}</td>
                <td>${kendaraan.expired_nomor_polisi}</td>
                <td>${kendaraan.bayar_pajak}</td>
                
            </tr>
            `;
            htmlkendaraan += tdkendaraan;
            console.log(docKendaraan.id);
        });
        listKendaraan.innerHTML = htmlkendaraan;
    }
}