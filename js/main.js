$(document).ready(function () {

    $('#formLogin').submit(function () {
        var formLogin = $(this);
        var btn = $(this).find(':button');
        // var inptLogin = $(this).find('#login');
        // var inptPass = $(this).find('#password');
        //
        // console.log($(this).serialize());
        //
        // btn.attr('disabled',true);

        $.ajax({
            url: "ajax/controller.php",
            type: "POST",
            data: "acao=login&" + formLogin.serialize(),
            beforeSend: function () {
                btn.attr('disabled', true);
                $('.load').fadeIn('slow');
            },
            success: function (retorno) {
                btn.attr('disabled', false);
                $('.load').fadeOut('slow');

                if (retorno === 'noLogin') {
                    msg('Esse login não existe.', 'erro');
                } else if (retorno === 'noPass') {
                    msg('Senha incorreta.', 'erro');
                } else if (retorno === 'noPermission') {
                    msgm('Você não tem permissão para acessar essa área.', 'erro');
                }else{
                    formLogin.fadeOut('fast', function () {
                        msg('Login enfetuado com sucesso, redirecionando ...','sucesso');
                    });

                    setTimeout(function () {
                        $(location).attr('href','https://www.google.com');
                    },3000);
                }
            }
        });

        return false;
    });

});

//Funcoes

function msg(msg, tipo) {
    var retorno = $('.retorno');
    var tipo = (tipo === 'sucesso') ? 'success' : (tipo === 'alerta') ? 'warning' : (tipo === 'erro') ? 'danger' : (tipo === 'info') ? 'info' : alert("");


    retorno.empty().fadeOut('fast', function () {
        return $(this).html('<div class="alert alert-' + tipo + '">' + msg + '</div>').fadeIn('slow');
    });

    setTimeout(function () {
        retorno.fadeOut('slow').empty();
    }, 6000);
}
