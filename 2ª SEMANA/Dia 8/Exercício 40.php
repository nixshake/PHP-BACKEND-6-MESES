<?php 

    $idade = 18;
    $acompanhado = "não";

    if (($idade >= 18) || ($acompanhado == "sim")){
        echo "Pode dirigir";
    } else {
        echo "Não pode dirigir";
    }

?>