html
<!DOCTYPE html>
<html>
<head>
    <title>Cálculo da média do aluno</title>
</head>
<body>
    <form method="post" action="calcular_media.php">
        <label for="nota1">Informe a nota da prova 1:</label>
        <input type="number" step="0.01" name="nota1" id="nota1" required>
        <br>
        <label for="nota2">Informe a nota da prova 2:</label>
        <input type="number" step="0.01" name="nota2" id="nota2" required>
        <br>
        <label for="nota3">Informe a nota da prova 3:</label>
        <input type="number" step="0.01" name="nota3" id="nota3" required>
        <br>
        <label for="nota4">Informe a nota da prova 4:</label>
        <input type="number" step="0.01" name="nota4" id="nota4" required>
        <br>
        <button type="submit">Calcular</button>
    </form>
</body>
</html>