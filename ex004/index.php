<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos em PHP</title>
</head>
<body>
    <h1>Teste de Tipos Primitivos</h1>
    <?php 
        //0x = hexadecimal ; 0b = binário; 0 = Octal
        $num = 0101;
        //echo "O valor da variável é $num";


        $v = 23;
        var_dump($v);

        $v2 = false;
        var_dump($v2);

        $v3 = 124.5;
        var_dump($v3);

        $v4 = 3e2; // 3 x 10^2 -> float
        var_dump($v4);

        $v5 = (int) 3e2; // coerção p transformar em int
        var_dump($v4);

        $v6 = (int)"950";
        var_dump($v6);
    ?>
</body>
</html>