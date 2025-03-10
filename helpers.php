<?php 

include "config.php";


function verifica_contato($conexao): void
{
    if (isset($_POST['nome']) && isset($_POST['telefone'])) {
        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        $descricao = $_POST['descricao'] ?? '';
        $favorito = isset($_POST['favorito']) ? 1 : 0;

        $query = "
            INSERT INTO contatos (nome, telefone, descricao, favorito)
            VALUES ('$nome', '$telefone', '$descricao', $favorito)
        ";

        mysqli_query($conexao, $query);

        header('Location: contatos.php');
        exit();
    }

    echo "Nome e telefone são obrigatórios!";
}
