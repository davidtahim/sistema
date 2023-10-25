<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php
		include 'parts/header.php';
	?>

<body>
    <div class="wrapper">
        <?php
			include 'parts/nav.php';
		?>

        <div class="main">
            <?php
		include 'parts/topo.php';
		?>
            <main class="content">
                <div class="container-fluid">
                    <h1 class="h3 p-0">Clientes</h1>
                    <div class="row justify-content-center align-items-center g-2">
                        <div class="col-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Formulário do Cliente</h5>
                                </div>
                                <div class="card-body">
                                    <form action="scripts/cadastrocliente.php" enctype="multipart/form-data"
                                        method="post">
                                        <div class="mb-1">
                                            <label for="nome" class="form-label">Nome Completo</label>
                                            <input type="text" class="form-control" name="nome" id="nome"
                                                placeholder="Digite seu nome" autocomplete="off" required>
                                        </div>
                                        <div class="mb-1">
                                            <label for="email" class="form-label">E-mail</label>
                                            <input type="email" class="form-control" name="email" id="email"
                                                placeholder="Digite seu e-mail" autocomplete="off" required>
                                        </div>
                                        <div class="mb-1">
                                            <label for="telefone" class="form-label">Telefone</label>
                                            <input type="number" class="form-control" name="telefone" id="telefone"
                                                placeholder="Digite seu telefone" autocomplete="off" required>
                                        </div>
                                        <div class="mb-1">
                                            <label for="cpfcnpj" class="form-label">CPF/CNPJ</label>
                                            <input type="number" class="form-control" name="cpfcnpj" id="cpfcnpj"
                                                placeholder="Digite seu CPF ou CNPJ" autocomplete="off" required>
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                                <div class="mb-1">
                                                    <label for="cep" class="form-label">CEP</label>
                                                    <input type="number" class="form-control" name="cep" id="cep"
                                                        placeholder="Digite seu CEP" autocomplete="off" required>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="mb-1">
                                                    <label for="logradouro" class="form-label">Logradouro</label>
                                                    <input type="text" class="form-control" name="logradouro"
                                                        id="logradouro" placeholder="Digite seu Logradouro"
                                                        autocomplete="off" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-4">
                                                <div class="mb-1">
                                                    <label for="numero" class="form-label">Nº</label>
                                                    <input type="number" class="form-control" name="numero" id="numero"
                                                        placeholder="Digite seu CEP" autocomplete="off" required>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="mb-1">
                                                    <label for="complemento" class="form-label">Complemento</label>
                                                    <input type="text" class="form-control" name="complemento"
                                                        id="complemento" placeholder="Complemento"
                                                        autocomplete="off" required>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                            <div class="mb-1">
                                                    <label for="bairro" class="form-label">Bairro</label>
                                                    <input type="text" class="form-control" name="bairro"
                                                        id="bairro" placeholder="Bairro"
                                                        autocomplete="off" required>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                            <div class="mb-1">
                                                    <label for="cidade" class="form-label">Cidade</label>
                                                    <input type="text" class="form-control" name="cidade"
                                                        id="cidade" placeholder="Cidade"
                                                        autocomplete="off" required>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                            <div class="mb-1">
                                                    <label for="uf" class="form-label">Estado</label>
                                                    <input type="text" class="form-control" name="uf"
                                                        id="uf" placeholder="Estado"
                                                        autocomplete="off" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-1">
                                            <label for="foto" class="form-label">Envie a foto</label>
                                            <input type="file" class="form-control" name="foto" id="foto"
                                                autocomplete="off" required>
                                        </div>
                                        <input type="submit" class="btn btn-primary" value="Enviar">
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>

        </main>


        <?php
				include 'parts/footer.php';
			?>

    </div>
    </div>

    <script src="js/app.js"></script>

</body>

</html>