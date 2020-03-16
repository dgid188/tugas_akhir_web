const userlogin = document.querySelector('.userlogin');

//Status Login Checker
auth.onAuthStateChanged(user => {
    if(user){
        console.log('User yang sedang login : ', user);
        // const html = `<p class="mb-1 text-black"> ${user.displayName}
        // </p>`;
        // userlogin.innerHTML = html;

       
    }else{
        console.log('Tidak ada yang login');
        window.location.href = "../../index.php";
    }
})

