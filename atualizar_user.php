<?php

include 'conexao.php';
$id = $_GET['atualizarid'];

//RECUPERA E EXIBE OS DADOS NA PG ATUALIZAR
$sql = "SELECT * FROM tb_usuario WHERE id='$id'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

$dtcadastro = $row['dt_cadastro'];
$dt_atualizacao = $row['dt_atualizacao'];
$nome = $row['nome'];
$data_nascimento = $row['data_nascimento'];
$telefone = $row['telefone'];
$cpf = $row['cpf'];
$crmv = $row['crmv'];
$email = $row['email'];
$senha = $row['senha'];


//ATUALIZA OS DADOS
if (isset($_POST['atualizar'])) {
  $dtcadastro = $_POST['dt_cadastro'];
  $dt_atualizacao = date("Y-m-d H:i:s");
  $nome = $_POST['nome'];
  $data_nascimento = $_POST['data_nascimento'];
  $telefone = $_POST['telefone'];
  $cpf = $_POST['cpf'];
  $crmv = $_POST['crmv'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];


  $sql = "update tb_usuario set id='$id',dt_atualizacao='$dt_atualizacao',nome='$nome',data_nascimento='$data_nascimento', 
  telefone='$telefone',cpf='$cpf',crmv='$crmv',email='$email',senha='$senha'
  WHERE id='$id'";

  $result_usuario = mysqli_query($con, $sql);
  if ($result_usuario) {
    echo "Dados atualizados com sucesso!";
    header('location:display_user.php');
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

  <title>CRUD operacional</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <!-- <img src="img/florLiz3.png" class="rounded float-right" alt="1%"> -->
      <a class="navbar-brand" href="#">PetLu</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </div>
  </nav> <br>

  <div class="container my-5  col-md-4">
    <form method="POST">

    <div class="form-group">
        <label>Cadastrado em::</label><?php echo $dtcadastro; ?>
        <label>Ultima Atualização:</label><?php echo $dt_atualizacao; ?>
      </div>

      <div class="form-group">
        <label>Usuário:</label>
        <input type="text" class="form-control" name="nome" value="<?php echo $nome; ?>">
      </div>

      <div class="form-group">
        <label>Data Nascimento:</label>
        <input type="date" class="form-control" name="data_nascimento" value="<?php echo $data_nascimento; ?>">
      </div>

      <div class="form-group">
          <label>Telefone:</label>
          <input type="tel" class="form-control" name="telefone" value="<?php echo $telefone; ?>">
        </div>

        <div class="form-group">
          <label>CPF:</label>
          <input type="text" class="form-control" name="cpf" value="<?php echo $cpf; ?>" / />
        </div>

        <div class="form-group">
          <label>CRMV:</label>
          <input type="text" class="form-control" name="crmv" value="<?php echo $crmv; ?>" / />
        </div>

        <div class="form-group">
          <label>E-mail:</label>
          <input type="email" class="form-control" name="email" value="<?php echo $email; ?>">
        </div>

        <div class="form-group">
          <label>Senha:</label>
          <input type="text" class="form-control" name="senha" value="<?php echo $senha; ?>" / />
        </div>

        <button type="submit" class="btn btn-primary" name="atualizar">Atualizar</button>
        <a href="display_user.php" class="btn btn-warning">Voltar</a>
    </form>
  </div>

</body>

</html>