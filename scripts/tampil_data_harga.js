auth.onAuthStateChanged(user => {
    if(user){
        //Menyiapkan data di table Driver
        db.collection('harga').onSnapshot(snapshot => {
            setupHarga(snapshot.docs);
        }, err => console.log(err.message));
    }else{
        console.log('Tidak ada yang login');
    }
})



//Tampil data Driver.

const listHarga = document.querySelector('.tampildata');
const setupHarga = (dataharga) => {
    if(dataharga.length) {
        let html = '';
        dataharga.forEach(docHarga => {
            const harga = docHarga.data();
            const td = `
            <tr>
                <td>${harga.asal}</td>
                <td>${harga.tujuan}</td>
                <td>Rp. ${harga.harga}</td>
                <td><button type="button" class="btn btn-gradient-warning btn-fw" onclick="window.location.href = '../updatedata/update_harga.php?${docHarga.id}';" >Ubah Data</button></td>
                
            </tr>
            `;
            html += td;
            console.log(docHarga.id);
        });
        listHarga.innerHTML = html;
    }
}