 <!DOCTYPE html>
 <html lang="pt-br">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
 </head>
 <body>
 <header>
    <h1>Resultado do meu processamento</h1>
    <?php 
$nome = !empty($_GET["nome"]) ? $_GET["nome"] : "Sem nome";
$sobrenome = !empty($_GET["sobrenome"]) ? $_GET["sobrenome"] : "Sem sobrenome";

    echo "<p>É um prazer em conhecer,<strong> $nome $sobrenome</strong> Este é meu site </p>"
    ?>

 </header>   


 </body>
 </html>