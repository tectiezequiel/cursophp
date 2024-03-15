<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 6</title>
    <link rel="stylesheet" href="../style.css">
    </head>
    <body>
    <?php 
    //capturando os dados do formulário Retroalimentado
        $divisor = $_GET['v1'] ?? 0;
        $dividendo = $_GET['v2'] ?? 1;
    ?>
    <main>
        <h1>Anatomia de um Divisor</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
    <label for="v1">Divisor</label>
    <input type="number" name="v1" id="v1"  step="0.001" min=0 value="<?=$divisor ?>">
    <label for="v2">Dividendo</label>
    <input type="number" name="v2" id="v2"  step="0.001" min=1 value="<?=$dividendo?>">
    <input type="submit" value="Analisar">
    </form>
    </main>
    
    
    <article id="resultado">
    <h2>Resultado da Analisar</h2> 
    <?php    
    $resto= intdiv($divisor,$dividendo,);
    $lixo= $divisor % $dividendo;
    
    echo "<ul>";
    
    echo "<li>Divisor $divisor</li>";
    echo "<li>dividendo $dividendo</li>";
    echo "<li>Valor da divisão $resto</li>";
    echo "<li>Valor da divisão sem o resto $lixo </li>";
    echo "</ul>";
    ?>
    </article>
    
    <section id="resultado2">
    <h2>Resultado da Analisar</h2>

        <table class=divisao>
        <tr>
        <td><?=$divisor?></td>
        <td><?=$dividendo?></td>
            
        </tr>
        <tr>
        <td><?=$lixo?></td>
        <td><?=$resto?></td>
        </tr>    
        </table>
    </section >
    <footer>
    <a href="http://localhost/cursophp/desafio6/" class="btn">Voltar</a>
    </footer>
    </body>
    </html>
    