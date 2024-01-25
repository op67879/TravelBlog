$('.form-input').focus(function (){
    $(this).css("background-color","lightgray");
});

$('.form-input').blur(function (){
    $(this).css("background-color","white");
}); 

$('form').find(':submit').click(function (event){
    var myInput = document.getElementById("psw");

    var numbers = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/g;
    if(myInput.value.match(numbers)) {
        $("#password_error").hide();
    } else {
        event.preventDefault();
        $('#password_error').css("display","block");
    }
});