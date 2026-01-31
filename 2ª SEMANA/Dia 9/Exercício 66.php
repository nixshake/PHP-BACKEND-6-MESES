<?php 

    $entrega = "normal";

    switch ($entrega){
        case "normal":
            echo "Entrega em até 15 dias";
            break;
        case "expressa";
            echo "Entrega em até 5 dias";
            break;
        default:
            echo "Método de entrega inválido";
    }

?>