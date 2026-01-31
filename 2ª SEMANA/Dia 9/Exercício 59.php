<?php 

    $idioma = "br";

    switch ($idioma){
        case "pt":
            echo "Português";
            break;
        case "en":
            echo "Inglês";
            break;
        case "es":
            echo "Espanhol";
        default:
            echo "Idioma inválido";
    }

?>