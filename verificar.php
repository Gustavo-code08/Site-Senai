<?php

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["resposta"])) {

    $resposta = $_POST["resposta"];

    if ($resposta === "4") {
        $mensagem = "Mandou bem! Seu raciocínio está afiado!";
        $resultado = "correto";
    } else {
        $mensagem = "Quase! Até os melhores programadores erram às vezes!";
        $resultado = "incorreto";
    }

} else {

    $mensagem = "Você precisa escolher uma resposta!";
    $resultado = "incorreto";

}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Resultado | SENAI CTTI</title>
</head>

<body>

    <h1>Resultado do desafio</h1>

    <p>
        <?php echo htmlspecialchars($mensagem, ENT_QUOTES, "UTF-8"); ?>
    </p>

    <a href="index.html#desafio">Tentar novamente</a>

</body>

</html>