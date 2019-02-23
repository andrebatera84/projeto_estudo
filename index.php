<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>cadastro</title>
  </head>
  <body>
  
  <form action = "cadusuario.php" method = "post">
  <div class="form-group">
    <label>Nome</label>
    <input type="text" class="form-control" name="nome" placeholder="Digite seu nome">
  </div>
  <div class="form-group">
    <label>Idade</label>
    <input type="number" class="form-control" name="idade" placeholder="Informe sua idade">
  </div>
  <div class="form-group">
    <label>CPF</label>
    <input type="number" class="form-control" name="cpf" placeholder="Digite seu cpf">
  </div>
  <div class="form-group">
    <label>Endereco</label>
    <input type="text" class="form-control" name="endereco" placeholder="Informe seu endereço">
  </div>
  
  <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>    


    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>