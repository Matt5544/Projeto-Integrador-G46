<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="criarconta.css">
    <title>Criarconta</title>
  </head>
  <body>
    <div class="container-fluid p-0">
        <div class="row m-0">
            <div class="col-12 p-0 top-bg">
             
            </div>
            <div class="col-12 p-0 bottom-bg">
                <P class="index-login">Criar conta</P>
                <div class="container mt-5">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <form action="cadastro.php" method="POST" onsubmit="return verificarSenha();">
                                <div class="form-group" >
                                    <label for="nome">Nome</label>
                                    <input type="text" class="form-control bg-custom rounded-input" id="nome" name="nome" placeholder="Digite seu nome de usuário" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control bg-custom rounded-input" id="email" name="email" placeholder="Digite seu Email" required>
                                </div>
                                <div class="form-group">
                                    <label for="dataNascimento">Data de Nascimento</label>
                                    <input type="date" class="form-control bg-custom rounded-input" id="dataNascimento" name="dataNascimento" placeholder="Digite sua data de nascimento" required>
                                </div>
                                <div class="form-group">
                                    <label for="senha">Senha</label>
                                    <input type="password" class="form-control bg-custom rounded-input" id="senha" name="senha" placeholder="Digite sua senha" required>
                                </div>
                                <div class="form-group">
                                    <label for="confirmarSenha">Confirmar senha</label>
                                    <input type="password" class="form-control bg-custom rounded-input" id="confirmarSenha" name="confirmarSenha" placeholder="Confirme sua senha" required>
                                </div>
                                <div class="button-center">
                                    <button type="submit" class="btn btn-danger w-50" style="height: 50px;">Criar</button>
                                </div>
                            </form>
                            <div class="modal fade" id="erroModal" tabindex="-1" role="dialog" aria-labelledby="erroModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                 <div class="modal-header">
                                    <h5 class="modal-title" id="erroModalLabel">Erro</h5>
                                     <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                      <span aria-hidden="true">&times;</span>
                                     </button>
                                 </div>
                                <div class="modal-body">
                                     As senhas não coincidem. Por favor, verifique.
                                </div>
                                <div class="modal-footer">
                                   <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                </div>
                             </div>
                            </div>
                        </div>

                            <p class="mt-2">
                                <a href="index.php">Voltar</a>
                            </p>
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  
    <script>
        function verificarSenha() {
            var senha = document.getElementById("senha").value;
            var confirmarSenha = document.getElementById("confirmarSenha").value;

            if (senha !== confirmarSenha) {
                $('#erroModal').modal('show');
                return false; // Impede o envio do formulário
            }
            return true; // Permite o envio do formulário
        }
    </script>
  </body>
</html>