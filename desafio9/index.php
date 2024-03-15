<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 9</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<?php 
$val1 = $_GET['valor1'] ?? 1 ;
$val2 = $_GET['valor2'] ?? 1;
$pes1 = $_GET['peso1'] ?? 1;
$pes2 = $_GET['peso2'] ?? 1;

$medari=($val1+$val2)/2;
$media_ponderada = ($val1 * $pes1 + $val2 * $pes2) / ($pes1 + $pes2);
?>

<main> 
<h1>Media Aritmédicas</h1>    
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
<label for="valor1">1º Valor</label>
<input type="number" name="valor1" id="valor1" step="0.001" min="0" max="10" required value="<?=$val1?>">

<form action="<? echo $_SERVER['PHP_SELF']?>" method="get">
<label for="peso1">1º Peso</label>
<input type="number" name="peso1" id="peso1" step="0.001"  min="0" max="10" required  value="<?=$pes1?>">


<form action="<? echo $_SERVER['PHP_SELF']?>" method="get">
<label for="valor2">2º Valor</label>
<input type="number" name="valor2" id="valor2" step="0.001"   min="0" max="10" required   value="<?=$val2?>">

<form action="<? echo $_SERVER['PHP_SELF']?>" method="get">
<label for="peso2">2º Peso</label>
<input type="number" name="peso2" id="peso2" step="0.001"  min="0" max="10" required  value="<?=$pes2?>">

<input type="submit" value="Calcular">
</form>
 
<section id="resposta">
<h1>Calculo das Médias</h1>



<?php 
echo "<p>Analisando os valores $val1 e $val2 </p>";

echo "<ul><li><p>A <strong>média Aritmédica Simples</strong> entre os valores é igual $medari</p></li>";
echo "<li><p>A <strong>média Aritmética Ponderada</strong> com os pesos $pes1 e $pes2 
é ".number_format($media_ponderada,3,".",".")." </p></li></ul>";
?>
</section>
</main>  
<footer>
    <a href="http://localhost/cursophp/desafio9/" class="btn">Voltar</a>
    </footer>

</body>
</html>