<?php 

    $areaAcessada = "cofre";
    $permissao = "sim";

    switch($areaAcessada){
        case "cofre":
            if($permissao == "sim"){
                echo "Você TEM permissão para acessar o cofre.";
            } else {
                echo "Você NÃO tem permissão para acessar o cofre";
            }
            break;
        case "salão":
            if($permissao == "sim"){
                echo "Você TEM permissão para acessar o salão";
            } else {
                echo "Você NÃO tem permissão para acessar o salão";
            }
            break;
        default:
            echo "Área inválida.";
    }

?>