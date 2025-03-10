<?php
$host = '127.0.0.1';
$dbname = 'contatos';
$username = 'siscontato';
$password = 'contato';

try {
	$conn = mysqli_connect($host, $username, $password, $dbname, 3306);
} catch (PDOException $e) {
	die("Erro na conexão: " . $e->getMessage());
}


function create_contact($conexao): void
{
    if (isset($_POST['nome']) && isset($_POST['telefone'])) {
        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        $descricao = $_POST['descricao'] ?? '';
        $favorito = $_POST['favorito'];

        $query = "
            INSERT INTO contatos (nome, telefone, descricao, favorito)
            VALUES ('$nome', '$telefone', '$descricao', $favorito)
        ";

        mysqli_query($conexao, $query);

        header('Location: contatos.php');
        exit();
    }
}


function search_contact($conn): array
{
	$query = 'SELECT * FROM contatos';
	$result = mysqli_query($conn, $query);
	$contacts = [];

	while ($contact = mysqli_fetch_assoc($result)) {
		$contacts[] = $contact;
	}

	return $contacts;
}

function delete_contact($conn,$id): void 
{
	$query = "DELETE FROM contatos WHERE id = {$id}";
	mysqli_query($conn, $query);
}
