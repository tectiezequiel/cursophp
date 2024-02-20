<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minipulação de string com Php</title>
    <style>
        *{  /*seletor global */
        margin:0px;
        padding:0px;
        }
        
        :root{  /*variavel para todo pag */

        --cor0:#c5ebd6;
        --cor1:#83e1ad;
        --cor2:#3ddc84;
        --cor3:#2fa866;
        --cor4:#1a5c37;
        --cor5:#063d1e;
        --fonte1: verdana,geneva,tahoma,sans-serif;
        --fonte2:'Passion One', cursive;
        --fonte3:'Sriracha', cursive;
        --fonte-padrao: Arial, Helvetica, sans-serif;
        --fonte-destaque: 'Bebas Neue', cursive;
        --fonte-android:'Android',cursive;
        }

        /*stylo do android */
        body{
            background-image:  linear-gradient(to right, #385DA6,#0597F2,#36BFB1,white);
            
        }
       
        div.quadrado{
         color: mediumblue;
            font-size: 1em;
           /* display:inline
            position: absolute;
            transform:translate(-50%, -50%); */
            right:50%;
            top:50%;
        }  
        
        div#q1{
            background-color:skyblue ;
            text-align:center;    
        }
        div#q2{  
        background-image: url('../ex002/wallpaper003.jpg') ;
        margin:0px 10px 10px 10px;  
        padding-bottom:0px 10px 10px 10px;
        text-align:center;
        width: 70px;
        left:100px ;  
        }  
        div#q3{  
        background-image: url('../ex002/wallpaper003.jpg') ; 
       
        margin:0px 57px 100px 2px;
          
        } 
        p{
        background-color: #c5ebd6; 
        color:black; 
        padding: 50px 25px ;
        width: 400px;
        border-radius: 10px; /*comando para arrendodar as bordas */
        box-shadow: 3px 3px 8px rgba(0, 0, 0, 0.395);
            
        } 
        article{

        background-color: #063d1e;    
        color:black;
        font-size: 1em;
        margin-top: 10px;
        width: 400px;
        margin-left:10px;
        padding: 100px 25px;
        text-align: center;
        border-radius: 10px; /*comando para arrendodar as bordas */
        box-shadow: 3px 3px 8px rgba(0, 0, 0, 0.395);

        }
        anside{
        background-color: #063d1e;
        color: black;
        font-size: 1em;
        margin:10px 57px 100px 2px;
        width: 200px;
        padding:96px 418px 116px 1px;
        text-align: center;
        border-radius: 10px;
        box-shadow: 3px 3px 8px rgba(0, 0, 0, 0.395);

        }
        header{
        background-image:  linear-gradient(to right, #385DA6,#0597F2,#36BFB1,white);
        min-height: 0px;
        margin-left:10px;
        text-align: center;
        padding:30px 0px ;
        }
        </style>
    </head>
    <body>
    <nav>


    </nav>    
    <header>
        <div class="quadrado" id="q1">
           
    <h1>Minipulação de string com Php</h1> </div>
    <br><br>

    <div class="quadrado" id="q3">
    <p>Exercícios </p>
    <ul>
    <article>
    <?php 
    const CANAL =  "curso em Vídeo";
    $nome='Ezequiel';
    $sobrenome="Chioquetta \u{1f596}<br>";

    echo "$nome $sobrenome<br>";
    
    echo "Estamos no ano de ".date('Y');

    ?>
   
   <footer>



   </footer>
    </body>
    </html>