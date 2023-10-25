<?php
session_start();
require_once("scripts/config.php");

if ($_SERVER ["REQUEST_METHOD"] == "POST") {
	$email = $_POST['email']; 
	$senha = $_POST['senha']; 
}

$sql = "SELECT * FROM `usuarios` WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc(); 

        if (password_verify($senha, $row['senha'])) {

            $_SESSION["loggedin"] = true; 

            header("Location: dashboard.php"); 
            exit; 

        }
    }

    else {
        $error = "Usuário ou senha incorretos";
    }

?>

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
							<h1 class="h2">Bem-vindo ao sistema do PetShop</h1>
							<p class="lead">
								Entre na sua conta para continuar
							</p>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-3">
									<form action="index.php" method="post">
										<div class="mb-3">
											<label class="form-label">E-mail</label>
											<input class="form-control form-control-lg" type="email" name="email" placeholder="Coloque seu e-mail" required autocomplete="off" />
										</div>
										<div class="mb-3">
											<label class="form-label">Senha</label>
											<input class="form-control form-control-lg" type="password" name="senha" placeholder="Coloque sua senha"  />
										</div>
										<div>
											<div class="form-check align-items-center">
												<input id="customControlInline" type="checkbox" class="form-check-input" value="continuarlogado" name="continuarlogado" checked>
												<label class="form-check-label text-small" for="customControlInline">Continuar Logado</label>
											</div>
										</div>
										<div class="d-grid gap-2 mt-3">
											<a href="index.html" class="btn btn-lg btn-primary">Entrar</a>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="text-center mb-3">
							Sem acesso ao sistema? <a href="registrar.php">Cadastrar</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main> 

	<script src="js/app.js"></script>

</body>

</html>