<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Feedback</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .feedback-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 0 auto;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .feedback-details p {
            margin: 10px 0;
            font-size: 16px;
        }
        .feedback-details strong {
            color: #28a745;
        }
        .back-link {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #28a745;
            text-decoration: none;
        }
        .back-link:hover {
            text-decoration: underline;
        }
        .status-form {
            margin-top: 20px;
        }
        .status-form label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .status-form select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }
        .status-form button {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }
        .status-form button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="feedback-container">
        <h1>Detalhes do Feedback</h1>
        <div class="feedback-details">
            <p><strong>ID:</strong> <?php echo htmlspecialchars($feedback['id']); ?></p>
            <p><strong>Título:</strong> <?php echo htmlspecialchars($feedback['titulo']); ?></p>
            <p><strong>Descrição:</strong> <?php echo htmlspecialchars($feedback['descricao']); ?></p>
            <p><strong>Tipo:</strong> <?php echo htmlspecialchars($feedback['tipo']); ?></p>
            <p><strong>Status:</strong> <?php echo htmlspecialchars($feedback['status']); ?></p>
        </div>

        <!-- Formulário para atualizar o status -->
        <form action="/feedback/atualizar" method="POST", class="status-form">
            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="id" value="<?php echo $feedback['id']; ?>">
            <label for="status">Atualizar Status:</label>
            <select name="status" id="status" required>
                <option value="recebido" <?php echo $feedback['status'] === 'recebido' ? 'selected' : ''; ?>>Recebido</option>
                <option value="em análise" <?php echo $feedback['status'] === 'em análise' ? 'selected' : ''; ?>>Em Análise</option>
                <option value="em desenvolvimento" <?php echo $feedback['status'] === 'em desenvolvimento' ? 'selected' : ''; ?>>Em Desenvolvimento</option>
                <option value="finalizado" <?php echo $feedback['status'] === 'finalizado' ? 'selected' : ''; ?>>Finalizado</option>
            </select>
            <button type="submit">Atualizar Status</button>
        </form>

        <a href="/feedbacks" class="back-link">Voltar para a lista de feedbacks</a>
    </div>
</body>
</html>