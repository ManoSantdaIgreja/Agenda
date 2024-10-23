<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $data = $_POST['data'];
    $hora_inicio = $_POST['hora_inicio'];
    $hora_fim = $_POST['hora_fim'];
    $descricao = $_POST['descricao'];
    $local = $_POST['local'];
    $responsavel = $_POST['responsavel'];

    $stmt = $pdo->prepare("INSERT INTO eventos (nome, data, hora_inicio, hora_fim, descricao, local, responsavel) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute([$nome, $data, $hora_inicio, $hora_fim, $descricao, $local, $responsavel]);

    echo "Evento cadastrado com sucesso!";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Evento</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Cadastrar Evento</h1>
<form method="POST">
    <label for="nome">Nome do Evento:</label>
    <input type="text" id="nome" name="nome" required><br>

    <label for="data">Data:</label>
    <input type="date" id="data" name="data" required><br>

    <label for="hora_inicio">Hora de Início:</label>
    <input type="time" id="hora_inicio" name="hora_inicio" required><br>

    <label for="hora_fim">Hora de Fim:</label>
    <input type="time" id="hora_fim" name="hora_fim" required><br>

    <label for="descricao">Descrição:</label>
    <textarea id="descricao" name="descricao"></textarea><br>

    <label for="local">Local:</label>
    <input type="text" id="local" name="local"><br>

    <label for="responsavel">Responsável:</label>
    <input type="text" id="responsavel" name="responsavel"><br>

    <button type="submit">Cadastrar Evento</button>
    <button onclick="window.location.href='index.php'">Voltar</button>

</form>

</body>
</html>
