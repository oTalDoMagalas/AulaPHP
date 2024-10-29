<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Su nombre</title>
</head>
<body>
    <h1>Digite sua idade</h1>

    <form method="POST">
        <input type="number" name="idade" placeholder="Mete sua idade aqui" required>
        <button type="submit">Mandar</button>
    </form>

    <?php
        if (isset($_POST['idade'])){
            $idade = $_POST['idade'];

            if ($idade < 18){

                echo "<p> Tu pode dirigir não zé </p>";

            } else {

                echo "<p> Tu pode pegar o carro e vazar </p>";
    
            }

        } 

    ?>
</body>
</html>