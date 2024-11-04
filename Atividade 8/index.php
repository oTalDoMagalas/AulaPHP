<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulário</title>
</head>

<body>
    <div class="formulario">
        <form method="post">
            <input type="text" required placeholder="Insira seu nome" name="nome">
            <input type="number" placeholder="Insira sua idade" name="idade">
            <label>Insira o tipo de Ingresso</label>
            <select name="selecao" id="selecao">
                <option value="vip">VIP</option>
                <option value="cadeira">Regular</option>
                <option value="pista">Básico</option>
            </select>
            <button type="submit">Consultar</button>
        </form>
    </div>

    <div class="indicacao">
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nome = $_POST['nome'];
            $idade = $_POST['idade'];
            $selecao = $_POST['selecao'];
        
            if ($idade < 18){

            echo "Menores não podem comprar ingressos";

            } else{

                switch ($selecao){

                    case 'vip':
                        $tipo = "VIP";
                        $preco = 100;
                    break;

                    case 'cadeira':
                        $tipo = "Regular";
                        $preco = 50;
                    break;

                    case 'pista':
                        $tipo = "Básico";
                        $preco = 20;
                    break;

                }
                
                echo "Boas vindas $nome <br>";
                echo "Você escolheu o tipo de ingresso: $tipo <br>";
                echo "O preço do ingresso é: R$ " . number_format($preco, 2, ',', '.');

            }
        
        }
        ?>
    </div>
</body>

</html>