<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="../style.css"> 
    <style> 

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
header{
    padding: 0px 125px;
}
    
    footer{

        display:inline-block;
        padding: 10px 20px 10px 20px;
        margin: 10px 10px 10px 10px;

    } 
    p{
    padding: 24px 25px; 
    margin:10px 10px ; 
}
    h1{
    display:inline-block;
    padding: 10px 20px 10px 20px;
    margin: 0px 520px 0px 0px;
    font-size: 1.5em;
    font-weight: bold;
    text-transform: uppercase;
    color: #333;
    text-shadow: 2px 2px 0 #ccc, 4px 4px 0 #888; /* Adiciona sombras para criar efeito 3D */
    transform: translate3d(-2px, -2px, 0); /* Move o texto ligeiramente para cima e para a esquerda */
    }
    

    
    </style> 
</head>
<body>
        <h1 >Trabalho com numeros aleatorio</h1>
        <?php 
        $nome = $_GET["nome"];
        
        $ant =$nome -1; 
        $dep =$nome +1;   

        //$sobrenome = !empty($_GET["sobrenome"]) ? $_GET["sobrenome"] : "Sem sobrenome";

        echo "<p>O numero é ,<strong> $nome </strong>  </p>";
        echo "<p>O numero anterir é ,<strong> $ant </strong> </p>";
        echo "<p>O numero posterior é ,<strong> $dep </strong> </p>";
        ?>
        </header>
   
    <!-- Contêiner para centralizar o botão -->
<div class="btn-container">
    <!-- Botão com link -->
    <a href="http://localhost/cursophp/desafio1/" class="btn">Voltar</a>
</div>

    </footer>
    
</body>
</html>