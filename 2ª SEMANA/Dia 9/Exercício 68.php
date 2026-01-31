<?php 

    $statusUser = "ativo";

    switch ($statusUser){
        case "ativo":
            echo "O usuário está ativo";
            break;
        case "inativo";
            echo "O usuário está inativo";
            break;
        case "bloqueado";
            echo "O usuário está bloqueado";
        default:
            echo "Status inválido";
    }

?>