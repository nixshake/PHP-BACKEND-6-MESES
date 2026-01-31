<?php 

    $diaSemana = 2;

    switch ($diaSemana){
        case 1:
        case 2:
        case 3:
        case 4:
        case 5:
            echo "Dia útil";
            break;
        case 6:
        case 7:
            echo "Fim de semana";
            break;
        default:
            echo "Dia da semana inválido";
    }

?>