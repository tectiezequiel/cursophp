<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teste</title>
</head>
<body>
<main>

<?php 
echo "hoje é dia " . date('d/m/Y') . "<br>";
echo "e a hora atual é " . date('H:i:s')."<br>";
date_default_timezone_set("America/Sao_Paulo");
echo "essa hora atual é " ."<br>". date('d/m/Y') ."<br>". date('g:i:s e');
?>

</main>    
</body>
</html>