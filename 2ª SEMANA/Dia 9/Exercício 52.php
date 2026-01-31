<?php 

    $plano = "3";
    switch ($plano){
        case 1:
            echo "basic";
            break;
        case 2:
            echo "pro";
            break;
        case 3:
            echo "premium";
            break;
        default:
            echo "Plano inválido";
    }

?>