<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação de Strings</title>
</head>
<body>
    <?php 
    $nome = "Victor";
    $sobrenome = "Chaves \u{1f596}";

    echo "$nome $sobrenome <br/> lorem ipsum \u{1f596} <br/>";
    

    $lastname = 'Chaves \u{1f596}'; // aspas simples não interpreta

    echo '$nome $sobrenome <br/>';
    echo "$lastname <br/>";
    

    // para constantes (const) não é possível interpretar com as aspas, precisando assim utilizar o operador de concatenação

    const ESTADO = "Pernambuco";
    echo "Moro em ESTADO <br/>";
    echo "Moro em " . ESTADO . "<br/>";


    echo "Estamos no ano de ". date('Y') . "<br/>";

    // nao pode usar aspas duplas dentro de aspas duplas
    // usar aspas duplas dentro de aspas simples não há interpretação da string como de padrão
    // sequencia de escape para aspas duplas dentro de aspas duplas: 
    // \n -> nova linha. quebra linha pra baixo
    // \t -> tabulação horizontal (o espaço que dá qdo aperta tab)
    // \\ -> mostrar barra invertida
    // \$ -> mostrar o cifrão
    // \u{} -> codepoint unicode


    $nom = "Rodrigo";
    $snom = "Nogueira";
    echo "$nom \"Minotauro\" $snom"
    ?>
</body>
</html>