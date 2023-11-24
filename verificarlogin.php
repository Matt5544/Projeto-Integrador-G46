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
    $nome_digitado = $_POST["nome"];
    $senha_digitada  = $_POST["senha"];

    // Consulta preparada para evitar injeção SQL
    $sql = "SELECT nome, senha FROM cadastro WHERE nome = ?";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("s", $nome_digitado);
    $stmt->execute();

    // Obtemos o resultado como um conjunto de resultados
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        // Obtemos os valores associativos
        $row = $result->fetch_assoc();

        // Pegamos os valores do conjunto de resultados
        $nome_bd = $row['nome'];
        $hash_senha = $row['senha'];
        echo "Senha digitada: " . $senha_digitada . "<br>";
        echo "Hash do banco de dados: " . $hash_senha . "<br>";
        if (password_verify($senha_digitada, $hash_senha)) {
            echo "password_verify está funcionando corretamente!<br>";
        } else {
            echo "password_verify não está funcionando corretamente!<br>";
        }

        // Verifica a senha apenas se ela for fornecida
        if (!empty($senha_digitada ) && password_verify($senha_digitada , $hash_senha)) {
            // Redirecione para a página de boas-vindas ou faça o que for necessário
            header("Location: perfil.php");
            exit();
        } else {
            // Senha incorreta ou não fornecida
            echo "Senha incorreta ou não fornecida!";
        }
    } else {
        // Nome de usuário não encontrado
        echo "Nome de usuário não encontrado!";
    }
}
?>