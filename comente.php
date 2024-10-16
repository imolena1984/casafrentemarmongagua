<?php
// db.php - Configurações de conexão com o banco de dados
$host = "localhost";
$dbname = "meusite";
$username = "root"; // Altere conforme necessário
$password = ""; // Altere conforme necessário

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
}

// Envio do formulário de contato
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    $sql = "INSERT INTO comentarios (nome, email, mensagem) VALUES (:nome, :email, :mensagem)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['nome' => $nome, 'email' => $email, 'mensagem' => $mensagem]);

    echo "Comentário enviado com sucesso!";
}
?>

