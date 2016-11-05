<?php

//Função de login
function login($login,$senha){
    $pdo = conecta();

    try{
        $logar = $pdo->prepare("SELECT * FROM admin WHERE login = ? AND senha = ? AND nivel = '1'");
        $logar->bindValue(1,$login,PDO::PARAM_STR);
        $logar->bindValue(2,$senha,PDO::PARAM_STR);
        $logar->execute();
        
        if($logar->rowCount() == 1){
            return true;
        }else{
            return false;
        }
    }catch (PDOException $e){
        $e->getMessage();
    }
}