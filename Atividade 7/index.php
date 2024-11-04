<?php

        $bebida = 5;

    switch ($bebida){
        case 1:
            $nome_bebida = "Água";
            $preco = 3.00;
        break;
        case 2:
            $nome_bebida = "Refri";
            $preco = 6.00;
        break;
        case 3:
            $nome_bebida = "Suco";
            $preco = 5.00;
        break;
        

        default:
            echo "Isso não está no cardápio";
            exit;

    }


    echo "Você escolheu $nome_bebida <br>";
    echo "Preço:" . number_format($preco, 2, ',', '.') ;

?>