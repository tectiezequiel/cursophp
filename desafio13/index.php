<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio13</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<main>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
    <label for="valor">Qual o valor que você deseja sacar? (R$)</label>    
    <input type="number" name="valor" id="valor" step="5"  min="5" required value="<?=$valor?>" >
    <p>Notas disponíveis R$100, R$50, R$10 e R$5 </p>
    <input type="submit" value="Sacar">
</form>

</form>
<?php 
        $valor= $_GET['valor'] ?? 0;
        $saque=$valor;
        $sobra=$valor;
        // Total de 100
        $cem =(int)($sobra /100 );
        $sobra= $sobra % 100;
        // Total de 50
        $cinquenta = (int)($sobra/50);
        $sobra= $sobra%50;
        // total de 10
        $dez =(int)($sobra/10);
        $sobra= $sobra%10;
        //total de 5
        $cinco=(int)($sobra/5);
        $sobra= $sobra%5;
       
        ?> 
<section id="resposta">
    <?php 
    echo "<h2>Caixa Eletrônica</h2>";
    echo "Sr(a) solicitou o valor de R$ ". number_format($saque,3,",",".").", retire a baixa suas
    notas, obg!.";
    echo "<br>O caixa eletronica vai te entregar as seguintes notas:</br>";

    echo "<ul>";
    echo "<li> <img src=\"../desafio13/100.png\" alt=\"100\" width='100'<strong> $cem nota</strong></li>";
    echo "<li> <img src=\"../desafio13/50.png\" alt=\"100\" width='100'<strong> $cinquenta nota</strong></li>";
    echo "<li> <img src=\"../desafio13/10.png\" alt=\"100\" width='100'<strong> $dez nota</strong></li>";
    echo "<li> <img src=\"../desafio13/5.png\" alt=\"100\" width='100'<strong> $cinco nota</strong></li>";
   
    echo "</ul>";

    ?>
</section>

<a href="http://localhost/cursophp/desafio13/" class="btn">Voltar</a>

</main>    
</body>
</html>