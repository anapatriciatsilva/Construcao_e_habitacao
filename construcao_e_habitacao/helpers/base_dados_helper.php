<?php

$host = "localhost";
$dbname = "construcao_e_habitacao_bd";
$user = "root";
$pass = "";
$conexao = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4;", $user, $pass);

function selectSQL($sql){
    global $conexao;
    $consulta = $conexao->query($sql);
    $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
    return $resultado;
}

function selectSQLUnico($sql){
    global $conexao;
    $consulta = $conexao->query($sql);
    $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
    return $resultado;
}

function iduSQL($sql){
    global $conexao;
    $consulta = $conexao->query($sql);
}


?>