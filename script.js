//Validimi i password te register form
$('.message a').click(function () {
    $('form').animate({ height: "toggle", opacity: "toggle" }, "slow")
});

var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

myInput.onfocus = function () {
    document.getElementById("message").style.display = "block";
}

//Kur perdoruesi klikon ne ate fushe, fshihet mesazhi
myInput.onblur = function () {
    document.getElementById("message").style.display = "none";
}

// Passwordi duhet te permbaje numra
var numbers = /[0-9]/g;
if (myInput.value.match(numbers)) {
    number.classList.remove("invalid");
    number.classList.add("valid");
} else {
    number.classList.remove("valid");
    number.classList.add("invalid");
}

// Passwordi duhet te jete me i gjate se 8 karaktere
if (myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
} else {
    length.classList.remove("valid");
    length.classList.add("invalid");
}