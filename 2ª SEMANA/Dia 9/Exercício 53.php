<?php 

    $opcoes = "4";

    switch ($opcoes){
        case 1:
            echo "1 - Cadastrar";
            break;
        case 2:
            echo "2 - Editar";
            break;
        case 3:
            echo "3 - Excluir";
            break;
        default:
            echo "Opção inválida";
    }

?>