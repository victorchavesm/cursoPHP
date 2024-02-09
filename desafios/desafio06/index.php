<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $valor1 = $_GET['dividendo'] ?? 0;
        $valor2 = $_GET['divisor'] ?? 0;
    ?>
    <main>
        <h1>Anatomia de uma divisão</h1>
        <form action="" method="get">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="dividendo" value="<?=$valor1?>">
            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="divisor" value="<?=$valor2?>">
            <input type="submit" value="Dividir">
        </form>
    </main>
    <section>
        <h2>Estrutura da divisão</h2>

        <?php 
        
        ?>
    </section>
</body>
</html>