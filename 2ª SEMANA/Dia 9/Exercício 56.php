<?php 

    $statusPedido = 6;

    switch ($statusPedido){
        case 1:
            echo "1 - Pendente";
            break;
        case 2:
            echo "2 - Pago";
            break;
        case 3:
            echo "3 - Cancelado";
            break;
        default:
            echo "Pedido inválido";
    }

?>