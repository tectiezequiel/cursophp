<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio de conversao</title>
    </head>
    <body>
    <main>
      
    <pre>
    <?php 
    $inicio =date("m-d-Y", strtotime("-7 days"));
    $fim=date("m-d-Y");   

    $url ='https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
    $dados=json_decode(file_get_contents($url),true);
    $cotacao=  $dados["value"][0]["cotacaoCompra"];
    echo "A cotação foi $cotacao";
    ?>
   
    </pre>
    </main>
    </body>
    </html>