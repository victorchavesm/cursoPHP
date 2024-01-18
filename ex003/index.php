<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 

    //para variáveis = preferência letras minúsculas
    //para constantes = preferência letras maíusculas
    //recomendado usar camelCase para métodos e atributos
    //recomendado usar SNAKE_CASE para nomear constantes
    $nome = "Victor";
    $sobrenome = "Chaves";
    $idade = 26;
    $peso = 79;
    $casado = false;
    const PAIS = "Brasil";
    echo "$nome $sobrenome. Você mora no " . PAIS . ". Possui $idade anos e pesa $peso kg";
    
    ?>
</body>
</html>