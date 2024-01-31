<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números aleatórios</title>   
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Trabalhando com números aleatórios</h1>
        <p>Gerando um número aleatório entre 0 e 100..</p>
        <?php 
        $random = rand(0,60);
        echo("<p>O número gerado foi <strong>$random</strong></p>");
        ?>

    <button onclick="location.reload()">Gerar outro</button>

    </main>
</body>
</html>