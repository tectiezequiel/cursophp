<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
    <h1>Resultado do Processamento</h1>

    </header>
    <main>    
    <?php 
        $n = $_GET["nome"] ?? "sem nome";
        $s = $_GET["sobrenome"] ?? "sem sobre nome";
        echo "<p> É um prazer te conhecer, <strong>$n $s</strong>! Este é meu site"  ;
    ?>
    </main>
    <footer>
    <a href="index.php" rel="prev" target="self">Voltar</a>
    </footer>
</body>
</html>