        <!DOCTYPE html>
        <html lang="pt-br">
        <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Resultado</title>
        </head>
        <body>
        <main>
        <h1>Analisando o Numero Real</h1>
        <?php 
        $nun = isset($_GET["n"]) && $_GET["n"] !== "" ? $_GET["n"] : 0.0; // Definindo o valor padrão como 0.0
        echo "<P>Analizando o <strong>".number_format($nun, 3, ",", ".") ."</strong> informando pelo usuário</P>"; 

        $int= (int) $nun;
        $fra= $nun -$int;

        echo "<ul><li> a parte inteira do numero é <strong>".number_format($int, 0, ",", ".") ." </strong>";
        echo "<li> a parte fracionaria do numero é <strong>".number_format($fra, 3, ",", ".") ."</strong></li></ul>";

        ?>
        </main> 
        <button onclick="javascript:history.go(-1)">Voltar</button>
           
        </body>
        </html>