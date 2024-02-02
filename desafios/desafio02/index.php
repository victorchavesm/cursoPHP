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
        <p>Gerando um número aleatório entre 0 e 100... </p>
        <?php 
        $random = mt_rand(0,100); 
        // rand() -> algoritmo de 1951 Linear Congregatial Generator -> algoritmo antigo e um pouco lento
        // mt_rand() -> Mersenne Twister -> algoritmo de 1997 4x mais rápido que o rand()
        // random_int() gera números aleatórios criptograficamente seguros, porém é a função mais lenta
        echo("<p>O número gerado foi <strong>$random</strong></p>");
        ?>

    <button onclick="location.reload()">Gerar outro</button>

    </main>
</body>
</html>