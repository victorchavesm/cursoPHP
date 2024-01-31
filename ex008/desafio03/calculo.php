<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertido</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de moedas v1.0</h1>
        <?php 
       
        $dinheiro = $_GET["valor"];
        $dolar = $dinheiro / 4.94;

        echo("<p>Seus R$ $dinheiro equivalem a <strong>US$ $dolar</strong></p>");
        echo("<p>*Cotação fixa a R$ 4,94 informada diretamente no código.</p>");
        ?>

    <button onclick="javascript:history.go(-1)" type="button">Voltar</button>
    </main>
</body>
</html>