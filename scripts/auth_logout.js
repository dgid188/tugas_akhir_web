//logout
const logout = document.querySelector('#logout');
logout.addEventListener('click', (e) => {
    auth.signOut();
    window.location.href = "../../index.php";
});