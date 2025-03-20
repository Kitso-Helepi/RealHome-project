const nameInput = document.getElementById('login-name');
const emailInput = document.getElementById('login-email');
const passwordInput = document.getElementById('login-password');
const loginButton = document.getElementById('login');

loginButton.addEventListener('click', ()=>{
    const name = nameInput.value;
    const email = emailInput.value;
    const password = passwordInput.value;
    

    const savedName = localStorage.getItem('name');
    const savedEmail = localStorage.getItem('email');
    const savedPassword = localStorage.getItem('password');

    if(name && email && passsword){
        if(name === savedName && email === savedEmail && password === savedPassword){

            window.location.href='Index.html'

        } else("Invalid information please sign up first");

    } else{
        alert('Please fill in all the fields');
    }



});