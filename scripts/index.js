auth.onAuthStateChanged(user => {
    if(user){
        console.log('User yang sedang login nih : ', user);
    }else{
        console.log('Tidak ada yang login');
    }
})