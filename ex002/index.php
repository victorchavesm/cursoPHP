<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Exemplo data e hora</h1>

    <?php 
        date_default_timezone_set("America/Fortaleza");
        echo "Hoje é dia " . date("d/M/Y"); // minúsculo mostra o número
        echo " e a hora atual é " . date('G:i:s');
    ?>
</body>
</html>