<?php

include 'conexao.php';
$id = $_GET['atualizarid'];

//RECUPERA E EXIBE OS DADOS NA PG ATUALIZAR
$sql = "SELECT * FROM tb_animal WHERE id='$id'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

$dtcadastro = $row['dt_cadastro'];
$dt_atualizacao = $row['dt_atualizacao'];
$nome_animal = $row['nome_animal'];
$dt_nascimento = $row['dt_nascimento'];
$sexo_animal = $row['sexo_animal'];
$animal_castrado = $row['animal_castrado'];
$peso_animal = $row['peso_animal'];
$raca = $row['raca'];
$tipo = $row['tipo'];
$observação_animal = $row['observação_animal'];

//ATUALIZA OS DADOS
if (isset($_POST['atualizar'])) {
 // $dt_atualizacao = $_POST['dt_atualizacao'];
  $nome_animal = $_POST['nome_animal'];
  $dt_nascimento = $_POST['dt_nascimento'];
  $sexo_animal = $_POST['sexo_animal'];
  $peso_animal = $_POST['peso_animal'];
  $raca = $_POST['raca'];
  $tipo = $_POST['tipo'];
  $observação_animal = $_POST['observação_animal'];

  $sql = "update tb_animal set id='$id',dt_atualizacao='$dt_atualizacao'
  ,nome_animal='$nome_animal', dt_nascimento='$dt_nascimento',sexo_animal='$sexo_animal'
  ,peso_animal='$peso_animal',raca='$raca',tipo='$tipo',observação_animal='$observação_animal' WHERE id='$id'";

  $result_usuario = mysqli_query($con, $sql);
  if ($result_usuario) {
    echo "Dados atualizados com sucesso!";
    header('location:display_pet.php');
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
  </nav>
  <div class="container my-5  col-md-4">
    <form method="POST">

    <div class="form-group">
        <label>Cadastrado em::</label><?php echo $dtcadastro; ?>
        <label>Ultima Atualização:</label><?php echo $dt_atualizacao; ?>
      </div>

      <div class="form-group">
        <label>Nome do Animal:</label>
        <input type="text" class="form-control" name="nome_animal" value="<?= $nome_animal; ?>">
      </div>

        <div class="form-group">
          <label>Dt-Nascimento:</label>
          <input type="date" class="form-control" name="dt_nascimento" value="<?php echo $dt_nascimento; ?>" / />
        </div>

        <div class="form-group">
          <label>Sexo:</label>
          <input type="text" class="form-control" name="sexo_animal" value="<?php echo $sexo_animal; ?>" / />
        </div>

        <div class="form-group">
          <label>Peso:</label>
          <input type="text" class="form-control" name="peso_animal" value="<?php echo $peso_animal; ?>" / />
        </div>

        <div class="form-group">
          <label>Raça:</label>
          <input type="text" class="form-control" name="raca" value="<?php echo $raca; ?>">
        </div>

        <div class="form-group">
          <label>Tipo:</label>
          <input type="text" class="form-control" name="tipo" value="<?php echo $tipo; ?>">
        </div>
        <div class="form-group">
          <label>Observação:</label>
          <input type="text" class="form-control" name="observação_animal" value="<?php echo $observação_animal; ?>">
        </div>   
     
        <button type="submit" class="btn btn-primary" name="atualizar">Atualizar</button>
        <a href="display_pet.php" class="btn btn-warning">Voltar</a>
    </form>
  </div>

</body>

</html>