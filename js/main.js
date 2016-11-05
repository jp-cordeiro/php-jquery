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
            data: "acao=login&"+formLogin.serialize(),
            beforeSend: function () {
                btn.html('Aguarde realizando o login ...').attr('disabled',true);
            },
            success: function (retorno) {
                console.log(retorno);

                btn.html('<span class="glyphicon glyphicon-user"></span> Logar').attr('disabled',false);
            }
        });

        return false;
    });

});
