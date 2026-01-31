<?php 

    $pagamento = "pix";

    switch ($pagamento){
        case "pix":
            echo "O método de pagamento é pix";
            break;
        case "cartao":
            echo "O método de pagamento é cartão";
            break;
        case "boleto":
            echo "O método de pagamento é boleto";
            break;
        default:
            echo "Método de pagamento inválido";
    }

?>