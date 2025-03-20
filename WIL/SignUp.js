  const nameInput = document.getElementById('name');
  const emailInput = document.getElementById('email');
  const passwordInput = document.getElementById('password');
  const confirmInput = document.getElementById('Confirm');
  const submitButton = document.getElementById('submit');

  submitButton.addEventListener('click',()=>{
    event.preventDefault();
    const name = nameInput.value;
    const password = passwordInput.value;
    const confirm = confirmInput.value;
    const email = emailInput.value;

    if(name && password && confirm && email){
        if(password === confirm){
            localStorage.setItem('name',name)
            localStorage.setItem('password',password)
            localStorage.setItem('email',email)

            window.location.href='Login.html'
        }else{
            alert('Passwords do not match')
        }
    }
    else{
        alert('Please fill in all fields')
    }
  })

