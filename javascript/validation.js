const password = document.querySelector("#psw");
const confirmPassword = document.querySelector("#confirm_psw");
const pwd_format = document.querySelector(".pwd-format");
//PASSWORD MUST BE 6-20 CHARACTERS LONG, INCLUDE AT LEAST ONE NUMBER, AN UPPERCASE AND A LOWERCASE CHARACTER
const passwordPattern = /^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).{6,20}$/g

password.addEventListener('focusin', () => {
    pwd_format.style.display = 'block';

    //INPUT PASSWORD - TEST
    password.addEventListener('keyup', () => {
        if (passwordPattern.test(password.value)) {
            password.style.borderColor = 'green'
            pwd_format.style.color = 'green'
        } else {
            password.style.borderColor = 'red'
            pwd_format.style.color = 'red'
        }
    })
})

password.addEventListener('focusout', () => {
    pwd_format.style.display = 'none';
})

// CONFIRM PASSWORD VALIDATION
confirmPassword.addEventListener('focusin', () => {
    pwd_format.style.display = 'block';
    confirmPassword.addEventListener('keyup', () => {
        if (passwordPattern.test(confirmPassword.value) && password.value === confirmPassword.value) {
            confirmPassword.style.borderColor = 'green'
            pwd_format.style.color = 'green'
        } else {
            confirmPassword.style.borderColor = 'red'
            pwd_format.style.color = 'red'
        }
    })
})

confirmPassword.addEventListener('focusout', () => {
    pwd_format.style.display = 'none';
})

var password1 = document.getElementById("psw"),
    confirm_passwordd = document.getElementById("confirm_psw");

function validatePassword() {
    if (password1.value != confirm_passwordd.value) {
        confirm_passwordd.setCustomValidity("Passwords Don't Match");
    } else {
        confirm_passwordd.setCustomValidity('');
    }
}

password1.onchange = validatePassword;
confirm_passwordd.onkeyup = validatePassword;