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
        <h1>Conversor de moedas v2.0</h1>
        <?php 
       
       $inicio = date("m-d-Y", strtotime("-7 days"));
       $fim = date("m-d-Y");
       
       $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
       
       $dados = json_decode(file_get_contents($url), true);
       $cotacao = $dados["value"][0]["cotacaoCompra"];

        $dinheiro = (float)$_GET["valor"] ?? 0;
        $dolar = $dinheiro / $cotacao; 
        // jeito 1
        //echo("Seus R$ " . number_format($dinheiro, 2, ",", ".") . " equivalem a US$ " . number_format($dolar, 2, ",", "."));

        //jeito 2 - formatação de moedas com internacionalização

        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        echo("Seus " . numfmt_format_currency($padrao, $dinheiro, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $dolar, "USD"));
        echo("<p>*Cotação atual a " . numfmt_format_currency($padrao, $cotacao, "BRL") . " obtida pela <a target=\"blank\" href=\"https://dadosabertos.bcb.gov.br/dataset/dolar-americano-usd-todos-os-boletins-diarios/resource/43a16981-5a4b-47d9-b7bd-4c0c4093f994\">API do Banco Central</a>.</p>");
        ?>

    <button onclick="javascript:history.go(-1)" type="button">Voltar</button>
    </main>
</body>
</html>