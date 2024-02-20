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
        </style> 
        </head>
        <body>


        <main>
        <h1 >Resultado do meu processamento</h1>
        <section>
        <?php 
       
        $nome = isset($_POST["nome"]) && $_POST["nome"] !== "" ? $_POST["nome"] : 0.0;
        $ant =$nome -1; 
        $dep =$nome +1;   

        
        echo "<p>O numero é ,<strong> $nome </strong></p> ";
        echo "<p>O numero anterir é ,<strong> $ant </strong></p> ";
        echo "<p>O numero posterior é ,<strong> $dep </strong></p> ";
        ?>
       
        </section>
        </header>
        <!-- Contêiner para centralizar o botão -->
        <div class="btn-container">
        <!-- Botão com link -->
        <a href="http://localhost/cursophp/desafio1/" class="btn">Voltar</a>
        </div>

        </main>
            
        </body>
        </html>