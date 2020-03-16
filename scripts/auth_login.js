

//login
const loginForm = document.querySelector('#login-form');
loginForm.addEventListener('submit', (e) => {
    e.preventDefault();

    //get user info
    const email = loginForm['email'].value;
    const password = loginForm['password'].value;

    auth.signInWithEmailAndPassword(email, password).then(cred => {
        //close the login modal and reset the form
        window.location.href = "pages/index/dashboard.php";
        loginForm.querySelector('.error').innerHTML = 'err.message';
    }).catch(err => {
        loginForm.querySelector('.error').innerHTML = err.message;
    });
})