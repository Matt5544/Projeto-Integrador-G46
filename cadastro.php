<?php
$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = 'root';
$dbName = 'rumosp';

$conexao = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $dataNascimento = $_POST["dataNascimento"];
    $senha = $_POST["senha"];
    $confirmarSenha = $_POST["confirmarSenha"];

    // Verifique se a senha e a confirmação da senha são iguais
    if ($senha != $confirmarSenha) {
        echo "A senha e a confirmação de senha não correspondem!";
    } else {
        // Use password_hash para gerar o hash da senha
        $hash_senha = password_hash($senha, PASSWORD_BCRYPT);

        // Aqui você pode executar a inserção de dados no banco
        $inserirDados = $conexao->prepare("INSERT INTO cadastro (nome, email, dataNascimento, senha) VALUES (?, ?, ?, ?)");
        $inserirDados->bind_param("ssss", $nome, $email, $dataNascimento, $hash_senha);

        if ($inserirDados->execute()) {
            // Redirecione para a página de login após a inserção bem-sucedida
            header("Location: index.php");
        } else {
            echo "Erro ao inserir dados: " . $inserirDados->error;
        }

        // Feche a conexão com o banco de dados
        $conexao->close();
    }
}
?>