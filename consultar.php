<?php
include 'db.php';

$evento = null;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $stmt = $pdo->prepare("SELECT * FROM eventos WHERE id = ?");
    $stmt->execute([$id]);
    $evento = $stmt->fetch(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Evento</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Consultar Evento</h1>
<form method="POST">
    <label for="id">ID do Evento:</label>
    <input type="number" id="id" name="id" required><br>
    <button type="submit">Consultar</button>
    <button onclick="window.location.href='index.php'">Voltar</button>
</form>

<?php if ($evento): ?>
    <h2>Detalhes do Evento</h2>
    <p><strong>Nome:</strong> <?= htmlspecialchars($evento['nome']) ?></p>
    <p><strong>Data:</strong> <?= htmlspecialchars($evento['data']) ?></p>
    <p><strong>Hora de Início:</strong> <?= htmlspecialchars($evento['hora_inicio']) ?></p>
    <p><strong>Hora de Fim:</strong> <?= htmlspecialchars($evento['hora_fim']) ?></p>
    <p><strong>Descrição:</strong> <?= htmlspecialchars($evento['descricao']) ?></p>
    <p><strong>Local:</strong> <?= htmlspecialchars($evento['local']) ?></p>
    <p><strong>Responsável:</strong> <?= htmlspecialchars($evento['responsavel']) ?></p>
<?php endif; ?> <!-- endif serve pra indicar final da estrutura condicional -->




</body>
</html>
