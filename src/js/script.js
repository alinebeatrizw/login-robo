/** 

$(document).on('click', '.botao-login', function(){ 
    $('#robo-inicio').css("display", "none"); 
    $('#robo-erro, .red-blur').css("display", "initial");


    $('.botao-login').css("display", "none"); 
    $('.botao-login-erro, .red-blur').css("display", "initial");


    //depois de 2s o robo volta ao normal
    setTimeout(function() {
        $('#robo-inicio').css("display", "initial");  
        $('#robo-erro, .red-blur').css("display", "none");

        $('.botao-login').css("display", "initial"); 
        $('.botao-login-erro, .red-blur').css("display", "none");
        }, 2000);
});
*/
