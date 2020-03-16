let temp = null;
let gudangRef = db.collection('gudang');
let getDoc = gudangRef.get()
.then(doc => {
    temp = doc.docs;
    let selectDom = "";
    selectDom += `<option value='0'>Pilih Gudang</option>`;
    doc.docs.forEach(GudangObj => {
        let Gudang = GudangObj.data();
        selectDom += `
<option value='`+GudangObj.id+`'>`+ GudangObj.id +`</option>
`;
    });
    console.log(selectDom);
    $("#asal").html(selectDom);
})
.catch(err => {
    console.log('Error getting document', err);
});


//tambah kendaraan baru
const createForm = document.querySelector('#form_harga');
createForm.addEventListener('submit', (e) => {
    e.preventDefault();
    var tujuan = document.getElementById("tujuan").value;
    var sel = document.getElementById("asal");
    var asal = sel.options[sel.selectedIndex].text;
    if(tujuan.toUpperCase() == asal.toUpperCase()){
        e.preventDefault();
        alert("Tujuan Pengiriman sama");
    }else{
        db.collection('harga').add({
            asal: sel.options[sel.selectedIndex].text,
            alamatgudang: sel.value,
            tujuan: createForm.tujuan.value,
            harga: createForm.harga.value,
        }).then(() => {
            window.alert("Data Harga berhasil ditambahkan");
            window.location.href = "../show_data/show_harga.php";
        }).catch(err => {
            console.log(err.message);
        });
    }

});
