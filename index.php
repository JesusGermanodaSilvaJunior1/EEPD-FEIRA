<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Checklist de Avaliação</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 20px;
      background-color: #f9f9f9;
    }
    .container {
      max-width: 600px;
      margin: auto;
      background: #fff;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    h2 {
      text-align: center;
      margin-bottom: 20px;
    }
    label {
      display: block;
      margin: 10px 0;
    }
    button {
      margin-top: 20px;
      padding: 10px 20px;
      background-color: #007BFF;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    button:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Checklist de Avaliação</h2>
    <form action="salvar.php" method="POST">
      <?php for ($i = 1; $i <= 15; $i++): ?>
        <label>
          <input type="checkbox" name="pergunta<?= $i ?>" value="1">
          Pergunta <?= $i ?>
        </label>
      <?php endfor; ?>
      <button type="submit">Enviar</button>
    </form>
  </div>
</body>
</html>