auth.onAuthStateChanged(user => {
    if(user){
        //Menyiapkan data di table Driver
        db.collection('order').onSnapshot(snapshot => {
            setupOrder(snapshot.docs);
        }, err => console.log(err.message));
    }else{
        console.log('Tidak ada yang login');
    }
})



//Tampil data Driver.

const listOrder = document.querySelector('.tampildata');
const setupOrder = (dataorder) => {
    if(dataorder.length) {
        let html = '';
        dataorder.forEach(docOrder => {
            const order= docOrder.data();
            const td = `
            <tr>
                <td>${order.tanggal_pengambilan_awal}</td>
                <td>${order.asal_tujuan}</td>
                <td>-</td>
                <td>-</td>
            </tr>
            `;
            html += td;
        });
        listOrder.innerHTML = html;
    }
}