<?php

session_start();

include '../librerias.php';

$oUsuario=new Usuario($_REQUEST["user"],$_REQUEST["password"]);

if($oUsuario->VerificaAcceso()){
    echo "Todo Bien";
    $_SESSION["USR"]=$oUsuario;
}
else{
    echo "Todo Mal";  
}