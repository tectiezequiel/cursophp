<?php
$mensagemErro = ""; // Inicializa a variável de mensagem de erro

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se o formulário de login foi enviado
    if (isset($_POST["usu"]) && isset($_POST["sen"])) {
        // Verifica se o usuário e senha correspondem ao usuário 'adm' e senha '123'
        if ($_POST["usu"] === "adm" && $_POST["sen"] === "123") {
            // Usuário e senha corretos, redirecione para uma página de boas-vindas
            header("Location: bem-vindo.php");
            exit();
        } else {
            // Usuário ou senha incorretos, define a mensagem de erro
            $mensagemErro = "Usuário ou senha incorretos. Tente novamente.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <main>
        <h1>Volte e tente de novo</h1>
        <section>
            <?php if ($mensagemErro !== "") { ?>
                <p><?php echo $mensagemErro; ?></p>
            <?php } ?>
        </section>
    </main>
</body>
</html>