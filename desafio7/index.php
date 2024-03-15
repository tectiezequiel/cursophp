<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio7</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php 
    $minimo=1380.00;
    $salario = $_GET['sal'] ?? $minimo;
    $valor= intdiv($salario, $minimo);
    $resto=$salario% $minimo;

    ?>

  <main>
    <h1>Informe seu salário</h1>

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
    <input type="number" name="sal" id="sal" step="0.001"   value="<?=$sal ?>">
    <label for="sal">Salario (R$)</label>
     <input type="submit" value="Calcular">
    <label for="sal">Considerando o salário minimo de<strong>
        R$<?= number_format($minimo,2,".",".")?></strong></label> 
    </form>
  </main> 
  <section id="resultado"> 
  <h2>Resultado final</h2>

  <?php 
  echo "<p>Quem recebe o valor de R\$". number_format($salario,2,",",".")." ganha <strong>$valor salarios minimos</strong> + R\$".number_format ($resto, 2,",",".")." .</p>";
  ?>
  </section>
  <footer>
    <a href="http://localhost/cursophp/desafio7/" class="btn">Voltar</a>
    </footer>

</body>
</html>"