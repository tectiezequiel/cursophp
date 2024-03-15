<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>desafio 12</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<main>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
    <h1>Calculadora do tempo</h1>
    <label for="tempo">Qual é o total de segundos</label>    
    <input type="number" name="tempo" id="tempo" required value="<?=$tempo?>">
    <input type="submit" value="tempo">


</form>

<?php 
        $tempo = $_GET['tempo'] ?? 0;
        
        $sobra=$tempo;
        // Total de semanas
        $semana =(int)($sobra /604_800 );
        $sobra= $sobra % 604_800;
        // Total dias
        $dias = (int)($sobra/84_400);
        $sobra= $sobra%86_400;
        // total de horas
        $horas =(int)($sobra/3_600);
        $sobra= $sobra%3_600;
        //total de minutos
        $minuto=(int)($sobra/60);
        $sobra= $sobra%60;
        //total de segundos 
        $seg=$sobra;

        ?> 


<section id="resposta">
    <?php 
    echo "<h2>Totalizando tudo</h2>";
    echo "Analizando o valor que você digitou ". number_format($tempo,3,",",".")." <strong>segundos</strong> equivalem <br>um total de:";
    
    echo "<li> $semana <strong>Semanas</strong></li>";
    echo "<li>$dias <strong>Dias</strong></li>";
    echo "<li>$horas <strong>Horas</strong></li>";
    echo "<li>$minuto <strong>Minutos</strong> </li>";
    echo "<li>$seg <strong>Segundos</strong></li></ul>";

    ?>
</section>

<a href="http://localhost/cursophp/desafio12/" class="btn">Voltar</a>

</main>    
</body>
</html>