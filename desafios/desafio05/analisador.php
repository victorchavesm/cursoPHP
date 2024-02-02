<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Analisador de números reais</h1>
        <?php 
        $number = $_GET["valor"] ?? 0;
        $inteiro = (int)$number;
        $fracao = $number - $inteiro;

        echo "<ul><li>A parte inteira do número é <strong>" . number_format($inteiro, 0, ",", ".") . "</strong></li>";
        echo "<li>A parte fracionária do número é <strong>" . number_format($fracao, 3, ",", "."). "</strong></li></ul>";
        
        ?>

        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>