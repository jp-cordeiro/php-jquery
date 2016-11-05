<?php

$acao = filter_input(INPUT_POST,'acao',FILTER_SANITIZE_STRING);

switch ($acao){
    case 'login':
        $login = filter_input(INPUT_POST,'login',FILTER_SANITIZE_STRING);
        $senha = filter_input(INPUT_POST,'senha',FILTER_SANITIZE_STRING);

        echo $login;

        break;

    default:
        echo "Erro";
        break;
}