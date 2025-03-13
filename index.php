<!DOCTYPE html>
<html lang="pt-BR" data-bs-theme="dark">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Gerenciador de Contatos - Sistema profissional para organização de seus contatos pessoais e profissionais">
	<meta name="keywords" content="gerenciador de contatos, agenda, contatos, telefones, organização pessoal">
	<meta name="author" content="Seu Nome/Empresa">
	<meta name="robots" content="index, follow">
	<meta property="og:title" content="Gerenciador de Contatos - Organize seus Contatos">
	<meta property="og:description" content="Sistema profissional para gerenciamento e organização de contatos pessoais e profissionais">
	<meta property="og:type" content="website">
	<title>Gerenciador de Contatos - Organize seus Contatos</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
	<style>
		:root {
			--dark-bg: #212529;
			--dark-card: #2c3034;
			--gradient-start: #1a1a1a;
			--gradient-mid: #2d2d2d;
			--gradient-end: #404040;
			--card-gradient: linear-gradient(145deg,
					rgba(44, 48, 52, 0.8) 0%,
					rgba(33, 37, 41, 0.9) 100%);
		}

		body {
			background: linear-gradient(135deg,
					var(--gradient-start) 0%,
					var(--gradient-mid) 50%,
					var(--gradient-end) 100%) fixed;
			color: #fff;
			min-height: 100vh;
			position: relative;
		}

		body::before {
			content: '';
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background: radial-gradient(circle at top right,
					rgba(255, 255, 255, 0.1) 0%,
					transparent 60%);
			pointer-events: none;
		}

		.main-content {
			display: flex;
			gap: 2rem;
			align-items: flex-start;
			padding: 0 1rem;
		}

		.contact-form {
			flex: 0 0 400px;
			position: sticky;
			top: 2rem;
			margin: 0;
		}

		.form-floating {
			margin-bottom: 1.5rem;
		}

		.form-floating:last-of-type {
			margin-bottom: 2rem;
		}

		.contact-list {
			flex: 1;
			margin: 0;
			max-width: none;
		}

		.favorite-section {
			margin-bottom: 2rem;
			padding: 1rem;
			background: rgba(255, 255, 255, 0.05);
			border-radius: 10px;
			display: flex;
			align-items: center;
		}

		@media (max-width: 992px) {
			.main-content {
				flex-direction: column;
			}

			.contact-form {
				flex: none;
				width: 100%;
				max-width: 600px;
				margin: 0 auto 2rem;
				position: relative;
			}

			.contact-list {
				width: 100%;
				max-width: 800px;
				margin: 0 auto;
			}
		}

		.form-control {
			margin-bottom: 0.5rem;
		}

		.form-floating label {
			padding-left: 1rem;
		}

		.contact-card {
			margin-bottom: 1rem;
		}

		.contact-card:last-child {
			margin-bottom: 0;
		}

		.contact-actions {
			display: flex;
			gap: 0.5rem;
		}

		.favorite-star {
			font-size: 1.5rem;
			cursor: pointer;
			color: #6c757d;
			transition: all 0.3s ease;
			text-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
		}

		.favorite-star.active {
			color: #ffd700;
			text-shadow: 0 0 15px rgba(255, 215, 0, 0.5);
		}

		.favorite-star:hover {
			transform: scale(1.1) rotate(72deg);
		}

		.contact-card {
			background: var(--card-gradient);
			backdrop-filter: blur(8px);
			border-radius: 15px;
			padding: 1.5rem;
			transition: all 0.3s ease;
			border: 1px solid rgba(255, 255, 255, 0.1);
			position: relative;
			overflow: hidden;
		}

		.contact-card::before {
			content: '';
			position: absolute;
			top: 0;
			left: -50%;
			width: 100%;
			height: 100%;
			background: linear-gradient(to right,
					transparent,
					rgba(255, 255, 255, 0.05),
					transparent);
			transform: skewX(-15deg);
			transition: 0.5s;
		}

		.contact-card:hover::before {
			left: 150%;
		}

		.contact-card:hover {
			transform: translateY(-5px) scale(1.02);
			box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
			border-color: rgba(255, 255, 255, 0.2);
		}

		.btn-primary {
			background: linear-gradient(45deg, #2d3436 0%, #3498db 100%);
			border: none;
			position: relative;
			overflow: hidden;
			transition: all 0.3s ease;
		}

		.btn-primary:hover {
			transform: translateY(-2px);
			box-shadow: 0 5px 15px rgba(52, 152, 219, 0.3);
		}

		.btn-outline-primary {
			border-color: #3498db;
			color: #3498db;
			transition: all 0.3s ease;
		}

		.btn-outline-primary:hover {
			background: #3498db;
			color: #fff;
			transform: translateY(-2px);
		}

		.btn-outline-danger {
			border-color: #e74c3c;
			color: #e74c3c;
			transition: all 0.3s ease;
		}

		.btn-outline-danger:hover {
			background: #e74c3c;
			color: #fff;
			transform: translateY(-2px);
		}

		h1 {
			text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
			font-weight: bold;
			background: linear-gradient(to right, #fff, #3498db);
			-webkit-background-clip: text;
			-webkit-text-fill-color: transparent;
			margin-bottom: 2rem;
			position: relative;
		}

		h1::after {
			content: '';
			position: absolute;
			bottom: -10px;
			left: 50%;
			transform: translateX(-50%);
			width: 100px;
			height: 3px;
			background: linear-gradient(to right, #3498db, transparent);
			border-radius: 3px;
		}

		.contact-actions button {
			backdrop-filter: blur(4px);
		}

		.contact-header {
			display: flex;
			justify-content: space-between;
			align-items: center;
			margin-bottom: 10px;
		}

		.contact-info {
			margin-bottom: 15px;
		}

		.contact-name {
			font-size: 1.2rem;
			font-weight: bold;
			margin-bottom: 5px;
			text-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
		}

		.contact-phone {
			color: #a8a8a8;
			font-size: 1rem;
		}

		.contact-description {
			color: #a0a0a0;
			font-size: 0.9rem;
		}
	</style>
</head>

<body>
	<div class="container">
		<h1 class="text-center my-5">Gerenciador de Contatos</h1>

		<div class="main-content">
			<!-- Formulário de Contato -->
			<div class="contact-form">
				<form id="contactForm" method="POST">
					<div class="form-floating">
						<input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required>
						<label for="nome">Nome</label>
					</div>

					<div class="form-floating">
						<input type="tel" class="form-control" id="telefone" name="telefone" placeholder="Telefone" required>
						<label for="telefone">Telefone</label>
					</div>

					<div class="form-floating">
						<textarea class="form-control" id="descricao" name="descricao" placeholder="Descrição" style="height: 100px"></textarea>
						<label for="descricao">Descrição</label>
					</div>

					<div class="favorite-section">
						<input type="hidden" name="favorito" id="favorito" value="0">
						<i class="fas fa-star favorite-star me-2" id="favoritoStar" onclick="toggleFavorite()"></i>
						<label class="form-check-label" for="favoritoStar">Marcar como Favorito</label>
					</div>

					<button type="submit" class="btn btn-primary w-100">Salvar Contato</button>
				</form>
			</div>

			<!-- Lista de Contatos -->
			<?php foreach ($contact_list as $contact): ?>
				<div class="contact-list">
					<!-- Exemplo de contato -->


					<div class="contact-card">
						<div class="contact-header">

							<div class="contact-info">
								<div class="contact-name">
									<?php echo $contact['nome']; ?>
									<i class="fas fa-star favorite-star <?php echo $contact['favorito'] ? 'active' : 'disabled'; ?>"></i>

								</div>
								<div class="contact-phone"><?php echo $contact['telefone']; ?></div>
							</div>
							<div class="contact-actions">
								<button class="btn btn-outline-primary btn-sm">
									<i class="fas fa-edit"></i>
								</button>
								<a class="btn btn-outline-danger btn-sm" href="delete.php?id=<?php echo $contact['id']; ?>">
									<i class="fas fa-trash"></i>
								</a>
							</div>
						</div>
						<div class="contact-description">
							<?php echo $contact['descricao']; ?>
						</div>

					</div>
				<?php endforeach; ?>


				</div>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script>
		$(document).ready(function() {
			// Máscara para o telefone
			$('#telefone').on('input', function() {
				let value = $(this).val().replace(/\D/g, '');
				if (value.length <= 11) {
					value = value.replace(/^(\d{2})(\d)/g, '($1) $2');
					value = value.replace(/(\d)(\d{4})$/, '$1-$2');
				}
				$(this).val(value);
			});
		});

		// Função para alternar o favorito
		function toggleFavorite() {
    const star = document.getElementById('favoritoStar'); 
    const input = document.getElementById('favorito');     

    star.classList.toggle('active');
    
    input.value = star.classList.contains('active') ? '1' : '0';
}

	</script>
</body>

</html>
