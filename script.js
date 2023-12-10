//Validimi i password te register form
$('.message a').click(function () {
    $('form').animate({ height: "toggle", opacity: "toggle" }, "slow")
});

var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");

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