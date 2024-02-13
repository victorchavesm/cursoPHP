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
        $dividendo = $_GET['dividendo'] ?? 0;
        $divisor = $_GET['divisor'] ?? 1;
    ?>
    <main>
        <h1>Anatomia de uma divisão</h1>
        <form action="" method="get">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="dividendo" min="0" value="<?=$dividendo?>">
            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="divisor" min="1" value="<?=$divisor?>">
            <input type="submit" value="Dividir">
        </form>
    </main>
    <section>
        <h2>Estrutura da divisão</h2>

        <?php 

        //calculos
        $quociente = intdiv($dividendo, $divisor);
        $resto = $dividendo % $divisor;
        // echo "<ul>";
        // echo "<li>Dividendo: $dividendo</li>";
        // echo "<li>Divisor: $divisor</li>";
        // echo "<li>Quociente: $quociente</li>";
        // echo "<li>Resto: $resto</li>";
        // echo "</ul>";
        
        ?>

        <table class="divisao">
            <tr>
                <td><?=$dividendo?></td>
                <td><?=$divisor?></td>
            </tr>
            <tr>
                <td><?=$resto?></td>
                <td><?=$quociente?></td>
            </tr>
        </table>
    </section>
</body>
</html>