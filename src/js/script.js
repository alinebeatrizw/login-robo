$(document).on('click', '.botao-login', function(){ 
    $('#robo-inicio').css("display", "none"); 
    $('#robo-erro').css("display", "initial");


    $('.botao-login').css("display", "none"); 
    $('.botao-login-erro').css("display", "initial");


    //depois de 2s o robo volta ao normal
    setTimeout(function() {
        $('#robo-inicio').css("display", "initial");  
        $('#robo-erro').css("display", "none");

        $('.botao-login').css("display", "initial"); 
        $('.botao-login-erro').css("display", "none");
        }, 2000);
});

