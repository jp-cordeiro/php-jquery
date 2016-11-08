<?php
ob_start();
session_start();
require_once '../funcoes/bd/conexao.php';
require_once '../funcoes/login/login.php';

$acao = filter_input(INPUT_POST, 'acao', FILTER_SANITIZE_STRING);

switch ($acao) {
    case 'login':
        $login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_STRING);
        $senha = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

        if(login($login,$senha)){
            $_SESSION['admin'][] = trataLogin($login);
        }else{
            $dados = trataLogin($login);

//            if(empty($login) || empty($senha)){
//                echo 'vazio';
//            }
//            else
            if(!$dados){
                //echo "Esse login não existe";
                echo "noLogin";
            }
            else if($dados->senha != $senha){
                //echo "Senha incorreta";
                echo "noPass";
            }
            else if($dados->nivel > 2){
                //echo "Você não tem permissão para acessar, verifique com o Administrador";
                echo 'noPermission';
            }
        }
        break;

    default:
        echo "Erro";
        break;
}

ob_end_flush();