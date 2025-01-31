<?php

function getBanner(){
    $resultado = selectSQL("SELECT * FROM banner");
    return $resultado;
}

function getBannerEspecifico($id){
    $resultado = selectSQLUnico("SELECT * FROM banner WHERE id=-$id");
    return $resultado;
}

function getBannerPagina($pagina){
    $resultado = selectSQLUnico("SELECT * FROM banner WHERE pagina='$pagina'");
    return $resultado;
}
?>