<?php 

    $tipoDesconto = "cartao";
    $valorCompra = 99;

    switch($tipoDesconto){
        case "dinheiro":
            if($valorCompra >= 100){
                echo "Essa forma de pagamento tem 5% de desconto a partir do valor mínimo de 100 reais";
            } else {
                echo "Essa forma de pagamento não tem desconto de valor mínimo";
            }
        break;

        case "pix":
            if($valorCompra >= 100){
                echo "Essa forma de pagamento tem 10% de desconto a partir do valor mínimo de 100 reais";
            } else {
                echo "Essa forma de pagamento não tem desconto de valor mínimo";
            }
        break;

        case "cartao":
            if($valorCompra >= 100){
                echo "Essa forma de pagamento tem 2% de desconto a partir do valor mínimo de 100 reais";
            } else {
                echo "Essa forma de pagamento não tem desconto de valor mínimo";
            }
        break;

        default:
            echo "Tipo de desconto inválido";
        
    }

?>