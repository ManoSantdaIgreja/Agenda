<?php
include 'db.php'; /* icnlude permite incluir e executar o conteúdo do arquivo */

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];

    $stmt = $pdo->prepare("DELETE FROM eventos WHERE id = ?");
    $stmt->execute([$id]);

    echo "Evento removido com sucesso!";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remover Evento</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Remover Evento</h1>
<form method="POST">
    <label for="id">ID do Evento:</label>
    <input type="number" id="id" name="id" required><br>
    <button type="submit">Remover</button>
    <button onclick="window.location.href='index.php'">Voltar</button>
</form>

</body>
</html>
