<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 1</title>
    <link rel="stylesheet" href="../style.css">
    <style> 
 

header, main, section, article {
    max-width: 700px;}
.btn-container {
    text-align: center; /* Centraliza o conteúdo horizontalmente */
    margin-top: 50px; /* Margem superior para espaçamento */
    margin-right: 742px;
  
    
}
.btn:hover {
    background-color: #0056b3; /* Mudança de cor ao passar o mouse */
}
.btn {
    display:inline-block;
    padding: 10px 20px 10px 20px;
    margin: 10px 10px 10px 300px;
    background-color: #007bff; /* Cor azul */
    color: #fff; /* Cor do texto */
    text-decoration: none; /* Remove o sublinhado padrão dos links */
    border-radius: 5px; /* Cantos arredondados */
    transition: background-color 0.3s; /* Transição suave para a mudança de cor de fundo */
}


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
    <main>
    <h1>Gerador de Número Aleatório</h1>
    <section>
    <?php
     // Verifica se o botão foi clicado
     if(isset($_POST['gerar'])) {
    // echo "O número aleatório é: $numero_aleatorio";
    $numero_aleatorio = rand(0, 100);
    
    echo "Clique acima para gerar um um número de 0 a 100<br>";
    echo "O número aleatório é: <strong>$numero_aleatorio</strong>";
    }
    ?>
    </section>
    <form method="post" action="">
    <button type="submit" name="gerar" class="botao-3d">Gerar Número Aleatório</button>
    </form>
    </main>
    
    </body>
    </html>