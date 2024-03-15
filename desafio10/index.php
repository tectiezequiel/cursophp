<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 10</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<?php 
$atual= date("y");
$nac = $_GET['nacimento'] ?? 1981;
$dat = $_GET['data'] ?? date("Y");
$resultado= $dat - $nac;
?>
<main>
<h1 style="color:red;"><strong>Calculando a sua idade</strong></h1>


<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
<label for="nacimento">Em que ano vc nasceu?</label>
<input type="number" name="nacimento" id="nacimento"  required  value="<?=$nac?>">
<label for="data">Quer saber a sua idade em que anos estamos <strong><mark>2024</mark></strong>?</label>
<input type="number" name="data" id="data" required max=2024 value="<?=$dat?>">
<input type="submit" value="calcular">
</form>
</main>
<section id=resultado>

<p>Vc nasceu em <?php echo $nac?> , então sua idade baseado nos  dados inseridos é <?php echo $resultado?></p>
 

</section>
<footer>
<a href="http://localhost/cursophp/desafio10/" class="btn">Voltar</a>
    
</footer>

</body>
</html>