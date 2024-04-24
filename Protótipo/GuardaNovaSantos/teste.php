<?php
include_once("conexaocooperado.php");

// Verifica se o formulário foi enviado
if(isset($_GET['buscar'])) {
    // Verifica se foi selecionado um cooperado
    if(isset($_GET['select'])) {
        $id_cooperado = $_GET['select'];

        // Busca as informações do cooperado no banco de dados
        $stmt = $conn->prepare("SELECT * FROM infocooperados WHERE id_cooperado = :id_cooperado");
        $stmt->bindParam(':id_cooperado', $id_cooperado, PDO::PARAM_INT);
        $stmt->execute();
        $cooperado = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($cooperado) {
            // Exibe as informações do cooperado
            echo "<h1>Informações do Cooperado</h1>";
            echo "<p>ID: {$cooperado['id_cooperado']}</p>";
            echo "<p>Nome: {$cooperado['nome']}</p>";
            echo "<p>Email: {$cooperado['email']}</p>";
            // Adicione mais campos conforme necessário
        } else {
            echo "<p>Cooperado não encontrado.</p>";
        }
    } else {
        echo "<p>Nenhum cooperado selecionado.</p>";
    }
}
?>