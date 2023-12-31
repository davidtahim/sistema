<!DOCTYPE html>
<html lang="pt-br">

<head>
<?php
		include 'parts/header.php';
	?>

<body>
<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="text-center mt-4">
							<h1 class="h2">Registre-se</h1>
							<p class="lead">
								Crie seu usário e senha para acessar o sistema do Petshop.
							</p>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-3">
									<form method="post" acttion="scripts/cadastro.php">
										<div class="mb-3">
											<label class="form-label">Nome Completo</label>
											<input class="form-control form-control-lg" type="text" name="nome" placeholder="Coloque seu nome" required autocomplete="off" />
										</div>
										<div class="mb-3">
											<label class="form-label">E-mail</label>
											<input class="form-control form-control-lg" type="email" name="email" placeholder="Coloque seu e-mail" required autocomplete="off"  />
										</div>
										<div class="mb-3">
											<label class="form-label">Senha</label>
											<input class="form-control form-control-lg" type="password" name="senha" placeholder="Crie suan semha" required autocomplete="off"  />
										</div>
										<div class="d-grid gap-2 mt-3">
											<a href="index.php" class="btn btn-lg btn-primary">Entrar</a>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="text-center mb-3">
							Already have account? <a href="index.php">Log In</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>

	<script src="js/app.js"></script>

</body>

</html>