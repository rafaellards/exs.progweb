<?php
// Verifica se os dados do formulário foram submetidos
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $aluno = array(
        "nome" => $_POST["nome"],
        "ra" => $_POST["ra"],
        "sexo" => $_POST["sexo"],
        "idade" => $_POST["idade"],
        "endereco" => $_POST["endereco"],
        "telefone" => $_POST["telefone"],
        "email" => $_POST["email"]
    );

    // Inclui o aluno na base de dados (um array neste exemplo)
    $base_de_dados[] = $aluno;

    // Redireciona de volta para a página de cadastro
    header("Location: cadastro.php");
}
?>


