<!DOCTYPE html>
<html lang="pt-br">
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
       
        $dinheiro = (float)$_GET["valor"] ?? 0;
        $dolar = $dinheiro / 4.94; //cotação do dia 31/01/2024 
        // jeito 1
        //echo("Seus R$ " . number_format($dinheiro, 2, ",", ".") . " equivalem a US$ " . number_format($dolar, 2, ",", "."));

        //jeito 2 - formatação de moedas com internacionalização
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        echo("Seus " . numfmt_format_currency($padrao, $dinheiro, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $dolar, "USD"));
        echo("<p>*Cotação fixa a R$ 4,94 informada diretamente no código.</p>");
        ?>

    <button onclick="javascript:history.go(-1)" type="button">Voltar</button>
    </main>
</body>
</html>