<?php

function efetuarLogin($login, $senha){
    $utilizador_encontrado = selectSQLUnico("SELECT * FROM backoffice WHERE login='$login' AND senha='$senha'");
    if(!empty($utilizador_encontrado)){
        session_start();
        $_SESSION["utilizador"] = $utilizador_encontrado;
        return true;
    }
    else{return false;}
}

function verificarLogado(){
    session_start();
    return !empty($_SESSION["utilizador"]);
}

?>