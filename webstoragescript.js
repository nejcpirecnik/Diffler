function store(){

    var RegisterEmail = document.getElementById('email');
    var RegisterPassword = document.getElementById('pw');

    if(RegisterEmail.value.length == 0){
        alert('Please fill in email');

    }else if(RegisterPassword.value.length == 0){
        alert('Please fill in password');

    }else if(RegisterEmail.value.length == 0 && RegisterPassword.value.length == 0){
        alert('Please fill in email and password');

    }else{
        localStorage.setItem('Email', RegisterEmail.value);
        localStorage.setItem('Password', RegisterPassword.value);
        Swal.fire(
            'Done!',
            'Welcome to Diffler',
            'success'
        )
}
}

//Checking
function check(){
    var LocalStorageEmail = localStorage.getItem('Email');
    var LocalStoragePassword = localStorage.getItem('Password');

    var LoginEmail = document.getElementById('userEmail');
    var LoginPassword = document.getElementById('userPw');

    if(LocalStorageEmail.value == LoginEmail && LocalStoragePassword.value == LoginPassword){
        alert('You are logged in.');
    }else{
        alert('Error on login');
    }
}
