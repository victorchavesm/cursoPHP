<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $salario = $_GET['salario'] ?? 0;
        $minimo = 1412;
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="" method="get">
            <label for="salario">Salário (R$):</label>
            <input type="number" name="salario" id="salario" value="<?=$salario?>" step="0.01">
            <input type="submit" value="Calcular">
            <p>Considerando o salário mínimo de <strong>R$1412,00</strong></p>
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php 
        // calculos
        $qtdMinimo = intdiv($salario, $minimo);
        $resto = $salario % $minimo;
        echo "Quem recebe um salário de R$ " . number_format($salario, 2, "," , ".") . " ganha $qtdMinimo salários mínimos + R$ " .number_format($resto, 2, ",", ".");
        ?>
    </section>
</body>
</html>