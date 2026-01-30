<?php 

    $idade = 19;
    $carteira = "não";
    $companhia = "sim";

    if (($idade >= 18) && (($carteira == "sim") or ($companhia == "sim"))){
        echo "Pode dirigir";
    } else {
        echo "Não pode dirigir";
    }

?>