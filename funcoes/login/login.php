<?php

//Função de login
function login($login,$senha){
    $pdo = conecta();

    try{
        $qLogin = $pdo->prepare("SELECT * FROM admin WHERE login = ? AND senha = ? AND nivel <= 2");
        $qLogin->bindValue(1,$login,PDO::PARAM_STR);
        $qLogin->bindValue(2,$senha,PDO::PARAM_STR);
        $qLogin->execute();
        
        if($qLogin->rowCount() == 1){
            return true;
        }else{
            return false;
        }
    }catch (PDOException $e){
        $e->getMessage();
    }
}

//Trata Login
function trataLogin($login){
    $pdo = conecta();

    try{
        $qLogin = $pdo->prepare("SELECT * FROM admin WHERE login = ?");
        $qLogin->bindValue(1,$login,PDO::PARAM_STR);

        $qLogin->execute();

        if($qLogin->rowCount() == 1){
            return $qLogin->fetch(PDO::FETCH_OBJ);
        }else{
            return false;
        }
    }catch (PDOException $e){
        $e->getMessage();
    }
}