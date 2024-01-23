<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
        // variaveis superglobal
        // $_GET 
        // $_POST
        // $_REQUEST -> junção $_GET + $_POST + $_COOKIES

        $user = $_GET["nome"] ?? "empty"; // se no index o method está get, aqui precisa estar tbm
        $lastname = $_GET["sobrenome"] ?? "empty";
        echo "<p>É um prazer te conhecer $user $lastname</p>"
        ?>

        <p><a href="javascript:history.go(-1)">Clique para voltar a página anterior.</a></p>
    </main>
</body>
</html>