<?php
include 'db.php';

$stmt = $pdo->query("SELECT * FROM eventos");
$eventos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Todos os Eventos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Listar Todos os Eventos</h1>

<table>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Data</th>
        <th>Hora de Início</th>
        <th>Hora de Fim</th>
        <th>Descrição</th>
        <th>Local</th>
        <th>Responsável</th>
    </tr>
    <?php foreach ($eventos as $evento): ?>
    <tr>
        <td><?= htmlspecialchars($evento['id']) ?></td>
        <td><?= htmlspecialchars($evento['nome']) ?></td>
        <td><?= htmlspecialchars($evento['data']) ?></td>
        <td><?= htmlspecialchars($evento['hora_inicio']) ?></td>
        <td><?= htmlspecialchars($evento['hora_fim']) ?></td>
        <td><?= htmlspecialchars($evento['descricao']) ?></td>
        <td><?= htmlspecialchars($evento['local']) ?></td>
        <td><?= htmlspecialchars($evento['responsavel']) ?></td>
    </tr>
    <?php endforeach; ?><!-- é tipo o endif, mas nesse caso é para fechar uma estrutura de loop -->
</table>
<br><br>
<button onclick="window.location.href='index.php'">Voltar</button>

</body>
</html>
