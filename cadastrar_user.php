
<?php

// PROCESSA USUARIO

include 'conexao.php';
if (isset($_POST['enviarDados'])) {
  $nome = $_POST['nome'];
  $data_nascimento = $_POST['data_nascimento'];
  $telefone = $_POST['telefone'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];
  $cpf = $_POST['cpf'];
  $crmv = $_POST['crmv'];


  $sql = "insert into tb_usuario(nome, data_nascimento, telefone, email, senha, cpf, crmv) 
  values ('$nome','$data_nascimento','$telefone','$email','$senha','$cpf','$crmv')";

  $result = mysqli_query($con, $sql);
  if ($result) {
    echo "Dados inseridos com sucesso!";
    header('location:index.php');
  } else {
    die(mysqli_error($con));
  }
}

// CADASTRAR USUARIO

?>
 <!doctype html>
<html lang="pt">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

  <title>Cadastrar Animal</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">PetLu</a>
      <div class="container text-light"> <h3>Cadastrar Novo Usuário</h3> </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </div>
  </nav>
<br>
    <div class="container">
      <form action="cadastrar_user.php" method="post">
        <div class="col-4">
          <label for="nome">Nome Completo</label>
          <input type="text" name="nome" id="nome" class="form-control">
        </div>

        <div class="col-4">
          <label for="data_nascimento">Data de Nascimento</label>
          <input type="date" name="data_nascimento" id="data_nascimento" class="form-control" value="1980-01-01">
        </div>

        <div class="col-4">
          <label for="telefone">Telefone para Contato</label>
          <input type="tel" name="telefone" id="telefone" class="form-control">
        </div>

        <div class="col-4">
          <label for="email">E-mail</label>
          <input type="email" name="email" id="email" class="form-control">
        </div>

        <div class="col-4">
          <label for="senha">Senha</label>
          <input type="password" name="senha" id="senha" class="form-control">
        </div>
       
        <div class="col-4">
          <label for="nome">CPF</label>
          <input type="text" name="cpf" id="cpf" class="form-control">
       
        </div>        <div class="col-4">
          <label for="nome">CRMV</label>
          <input type="text" name="crmv" id="crmv" class="form-control">
        </div><br>

        <button type="submit" name="enviarDados" class="btn btn-primary">Cadastrar</button>
        <a href="index_rota.php" class="btn btn-danger">Voltar</a>

      </form>
    </div>
  </body>
</html>