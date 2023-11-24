<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Vincule o arquivo CSS externo -->
    <link rel="stylesheet" type="text/css" href="index.css">
    <title>RumoSP</title>
</head>
<body>
    <div class="container-fluid p-0">
        <div class="row m-0">
            <div class="col-12 p-0 top-bg">
                <h1 class="centered-text">RumoSP</h1>
            </div>
            <div class="col-12 p-0 bottom-bg">
                <P class="index-login">Login</P>
                <div class="container mt-5">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <form action="verificarlogin.php" method="POST">
                                <div class="form-group">
                                    <label for="nome">Nome</label>
                                    <input type="text" class="form-control bg-custom rounded-input" id="nome" name="nome" placeholder="Digite seu nome de usuário">
                                </div>
                                <div class="form-group">
                                    <label for="senha">Senha</label>
                                    <input type="password" class="form-control bg-custom rounded-input" id="senha" name="senha" placeholder="Digite sua senha">
                                </div>
                                <div class="button-center">
                                    <button type="submit" class="btn btn-danger w-50" style="height: 50px;">Login</button>
                                </div>
                            </form>
                            <p class="mt-2">
                                <a href="#">Esqueci a senha</a> | <a href="criarconta.php">Criar conta</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>