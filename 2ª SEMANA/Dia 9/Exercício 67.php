<?php 

    $prioridade = "alta";

    switch ($prioridade){
        case "baixa":
            echo "As chances de tal coisa acontecer é baixa";
            break;
        case "media";
            echo "As chances de tal coisa acontecer é média";
            break;
        case "alta":
            echo "As chances de tal coisa acontecer é alta";
            break;
        default:
            echo "Chance inválida";
    }

?>