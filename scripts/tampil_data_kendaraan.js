auth.onAuthStateChanged(user => {
    if(user){
        //Menyiapkan data di table Driver
        db.collection('kendaraan').onSnapshot(snapshot => {
            setupKendaraan(snapshot.docs);
        }, err => console.log(err.message));

        
    }else{
        console.log('Tidak ada yang login');
    }
})



//Tampil data Driver.

const listKendaraan = document.querySelector('.tampildata');
const setupKendaraan = (datakendaraan) => {
    if(datakendaraan.length) {
        let html = '';
        datakendaraan.forEach(dockendaraan => {
            const kendaraan = dockendaraan.data();
            
            const td = `
            <tr>
                <td>${kendaraan.nomor_polisi}</td>
                <td>${kendaraan.merk}</td>
                <td>${kendaraan.warna}</td>
                <td>${kendaraan.expired_kir}</td>
                <td>${kendaraan.expired_nomor_polisi}</td>
                <td>${kendaraan.bayar_pajak}</td>
                <td><button type="button" class="btn btn-gradient-warning btn-fw" onclick="window.location.href = '../updatedata/update_kendaraan.php?${dockendaraan.id}';" >Ubah Data</button></td>
                <td><button type="button" class="btn btn-gradient-success btn-fw">Detil Data</button></td>
            </tr>
            `;
            html += td;
            console.log(dockendaraan.id);
        });
        listKendaraan.innerHTML = html;
    }
}