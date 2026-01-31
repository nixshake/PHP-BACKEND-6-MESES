<?php 

    $plano = "basic";
    
    switch ($plano){
        case "basic":
            echo "Plano basic: R$39,99";
            break;
        case "pro":
            echo "Plano pro: R$59,99";
            break;
        case "premium":
            echo "Plano premium";
            break;
        default:
            echo "Plano inválido";

    }


?>