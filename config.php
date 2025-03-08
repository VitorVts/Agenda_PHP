<?php
$host = '127.0.0.1';
$dbname = 'contatos';
$username = 'siscontato';
$password = 'contatos';

try {
	$conn = mysqli_connect($host, $username, $password);
	echo ("Conectado Com sucesso ! ");
} catch (PDOException $e) {
	die("Erro na conexão: " . $e->getMessage());
}

function search_contact($conn): array
{
	$query = 'SELECT * FROM contatos';
	$stmt = conn->prepare($query);

	while ($contato = mysqli_fetch_assoc($stmt)) {
		$contacts[] = $contato;
	}
	return $contacts;
}
