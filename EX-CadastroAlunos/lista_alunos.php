<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="menu">
        <ul>
            <li><a href="cadastro.php">Cadastro</a></li>
            <li><a href="lista_alunos.php">Lista de Alunos</a></li>
        </ul>
    </div>
    <div class="lista-alunos">
        <h2>Lista de Alunos</h2>
        <?php
        include 'alunos.php';
        $alunos = listarAlunos();
        if (empty($alunos)) {
            echo "Nenhum aluno cadastrado.";
        } else {
            echo "<table>";
            echo "<tr><th>RA</th><th>Nome</th><th>Sexo</th><th>Idade</th><th>Endereço</th><th>Telefone</th><th>Email</th></tr>";
            foreach ($alunos as $aluno) {
                echo "<tr><td>{$aluno['ra']}</td><td>{$aluno['nome']}</td><td>{$aluno['sexo']}</td><td>{$aluno['idade']}</td><td>{$aluno['endereco']}</td><td>{$aluno['telefone']}</td><td>{$aluno['email']}</td></tr>";
            }
            echo "</table>";
        }
        ?>
    </div>
</body>
</html>

