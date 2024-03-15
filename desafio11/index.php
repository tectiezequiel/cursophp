<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 11</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
        <?php 
        $preco = $_GET['preco'] ?? 0;
        $reaj=$_GET['reaj'] ?? 0; 
        ?> 
<main>
    <h1 style="color:blue">Reajustado de preço</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
    <label for="preco">Preço do produto</label>
    <input type="number" name="preco" id="preco" step="0.01" required value="<?=$pc ?>">

    <label for="reaj">Qual será o percentual de reajuste? (<span id="p"></span>%)</label></label>
    <input type="range" name="reaj" id="reaj" min="0" max="100" step="1" oninput="mudaValor()" value="<?=$reaj?>">
    <input type="submit" value="Reajustar">
    
    
    <section id=motor>  
        <?php 

      
        $aumenta=$preco*$reaj/100;
        $novo=$preco+$aumenta;
        ?>
    </section>
    <h2>Resultado do Reajuste</h2>
    <?php 
    echo "O produto que custava $preco com o de aumento  de $reaj% vai passar custar ". number_format($novo,3,",",".")."  a partir de agora. ";
    ?>  
        </main>

        <script>
            //Declarações automáticas
        mudaValor() 

        function mudaValor() {
            p.innerText = reaj.value;
        }
       
        </script>
   
        <footer>
        <a href="http://localhost/cursophp/desafio11/" class="btn">Voltar</a>
        </footer>
      
</body>
</html>