<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>desafio8</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<main>
<?php 
$numero = $_GET['num'] ?? 0;
$raiz =sqrt($numero);
$cubica= $numero **(1/3);
?> 
<header>    
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
<strong>Informe um número</strong>
<label for="num"> <strong>Número</strong></label> 
<input type="number" name="num" id="num"  step="0.001" <?= number_format($numero,2,".",".")?>  value="<?=$num ?>">
<input type="submit" value="Calcular">

</form></main> </header> 

<article id="resultado">
    <?php 
echo "<strong>O valor para ser Calculado é $numero </strong>
é 
<ul><li> O valor da raiz quadrada é". number_format($raiz,3,",",".") . ",</li>
<li>O valor da raiz cubico é </strong> ".number_format ($cubica, 3,",",".")." .</p></li></ul>"
    ?>
</article>


<footer>
<a href="http://localhost/cursophp/desafio8/" class="btn">Voltar</a>
</footer>

</body>
</html>