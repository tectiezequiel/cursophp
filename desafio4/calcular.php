<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 4</title>
    <link rel="stylesheet" href="../style.css">
    <style>
        .botao-3d {
    background-color: #4CAF50; /* Cor de fundo */
    border: none; /* Remove a borda */
    color: white; /* Cor do texto */
    padding: 15px 25px; /* Espaçamento interno */
    text-align: center; /* Alinhamento do texto */
    text-decoration: none; /* Remove sublinhado */
    display: inline-block; /* Exibe como bloco */
    font-size: 16px; /* Tamanho da fonte */
    margin: 4px 2px; /* Margem */
    transition-duration: 0.4s;
    cursor: pointer; /* Cursor do mouse */
    border-radius: 12px; /* Borda arredondada */
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19); /* Sombra */
}
/* Estilo de hover do botão em 3D */
.botao-3d:hover {
    background-color: #45a049; /* Cor de fundo quando o mouse passa por cima */
}
</style>
                </head>
                <body>
                 <article>
                 <h1>Cotação pelo banco central</h1>
                 </article>   
                <main>
                <section>
                <?php 
                //cotação pelo banco central 
                $inicio =date("m-d-Y", strtotime("-7 days"));
                $fim=date("m-d-Y");   
            
                $url ='https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
                $dados=json_decode(file_get_contents($url),true);
                $cotacao=  $dados["value"][0]["cotacaoCompra"];
                
               
                $real = !empty($_GET["din"]) ? $_GET["din"] : "Sem din";
                
                $dolar= $real / $cotacao; 

                $padrão = numfmt_create("pt_BR", Numberformatter::CURRENCY);

                echo "Seus ". numfmt_format_currency($padrão, $real, "BRL") . " equivalem a " .numfmt_format_currency($padrão, $dolar, "USD");
                ?> 
                </section>
                <p><em>Conversão de dóbal estão passando pelo</em> <u>
                    <mark><strong><a href="https://www.bcb.gov.br/" target="_self">Banco Central Brasilieiro.</a></strong></mark></u></p>    
                <button onclick="javascript:history.go(-1)" class="botao-3d">Voltar</button>    
                </main>
                <article>
                    <p>site criado pelo Aluno Chioquetta Ezequiel do <a href="https://gustavoguanabara.github.io" target="_blank">Cursoemvideo</a></p>
                </article>
                
                </body>
                </html>