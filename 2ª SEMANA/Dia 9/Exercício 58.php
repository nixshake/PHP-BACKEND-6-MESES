<?php 

    $tipoConta = "l";

    switch ($tipoConta){
        case "C":
            echo "Conta comum";
            break;
        case "P":
            echo "Conta premium";
            break;
        default:
            echo "Conta inválida";
    }

?>