<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="menu">
        <a href="index.php">Página Inicial</a>
        <a href="cadastro.php">Cadastro de Alunos</a>
    </div>
    <div class="content">
        <h1>Cadastro de Alunos</h1>
        <form action="processa_cadastro.php" method="post">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" required><br>
            <label for="ra">RA:</label>
            <input type="text" name="ra" required><br>
            <label for="sexo">Sexo:</label>
            <input type="text" name="sexo" required><br>
            <label for="idade">Idade:</label>
            <input type="text" name="idade" required><br>
            <label for="endereco">Endereço:</label>
            <input type="text" name="endereco" required><br>
            <label for="telefone">Telefone:</label>
            <input type="text" name="telefone" required><br>
            <label for="email">Email:</label>
            <input type="email" name="email" required><br>
            <input type="submit" value="Cadastrar">
        </form>
    </div>
</body>
</html>

