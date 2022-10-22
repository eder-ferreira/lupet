
<?php

include 'conexao.php';
if (isset($_POST['salvar'])) {
  $dt_cadastro = $_POST['dt_cadastro'];
  $nome = $_POST['nome'];
  $senha = $_POST['senha'];
  $cpf = $_POST['cpf'];
  $crmv = $_POST['crmv'];
  $email = $_POST['email'];
  $telefone = $_POST['telefone'];


  $sql = "insert into tb_usuario(dt_cadastro, nome, senha, cpf, crmv, email, telefone) 
  values ('$dt_cadastro','$nome','$senha','$cpf','$crmv','$email','$telefone')";

  $result = mysqli_query($con, $sql);
  if ($result) {
    echo "Dados inseridos com sucesso!";
    header('location:cadastrar_user.php');
  } else {
    die(mysqli_error($con));
  }
}

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
      <!-- <img src="img/florLiz3.png" class="rounded float-right" alt="1%"> -->
      <a class="navbar-brand" href="index.php">PetLu</a>
      <div class="container text-light"> <h3>Cadastrar Usuário</h3> </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </div>
  </nav>

  <div class="container my-2  col-md-4 m-auto" style='text-align: left'>
    <form method="POST">

    <div class="form-group">
        <label>:Data
        <input type="date" class="form-control" placeholder="Informe a data do cadastro" name="dt_cadastro" autocomplete="off">
      </div>
      <div class="form-group">
        <label>:Usuário</label>
        <input type="text" class="form-control" placeholder="Entre com seu nome" name="nome" autocomplete="on">
      </div>
      <div class="form-group">
        <label>:Senha</label>
        <input type="text" class="form-control" placeholder="Entre com sua Senha" name="senha" autocomplete="on">
      </div>
      <div class="form-group">
        <label>:CPF</label>
        <input type="text" class="form-control" placeholder="Entre com seu CPF" name="cpf" autocomplete="on">
      </div>
      <div class="form-group">
        <label>:CRMV</label>
        <input type="text" class="form-control" placeholder="Entre com seu CRMV" name="crmv" autocomplete="on">
      </div>
      <div class="form-group">
        <label>:E-mail</label>
        <input type="email" class="form-control" placeholder="Entre com seu e-mail" name="email" autocomplete="on">
      </div>
      <div class="form-group">
        <label>:Telefone</label>
        <input type="text" class="form-control" placeholder="Entre com seu telefone" name="telefone" autocomplete="on">
      </div>

      <br>
      <button type="submit" class="btn btn-primary" name="salvar">Salvar</button>
      <a href="index.php" class="btn btn-warning">Voltar</a>

</div>
  </div>
    </form>
</html>
