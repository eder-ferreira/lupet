<?php

include 'conexao.php';
if (isset($_POST['enviarDados'])) {
  $nome_animal = $_POST['nome_animal'];
  $dt_nascimento = $_POST['dt_nascimento'];
  $sexo_animal = $_POST['sexo_animal'];
  $animal_castrado = $_POST['animal_castrado'];
  $cor_animal = $_POST['cor_animal'];
  $peso_animal = $_POST['peso_animal'];
  $raca = $_POST['raca'];
  $tipo = $_POST['tipo'];
  // $foto_animal = $_POST['foto_animal'];
  $observação_animal = $_POST['observação_animal'];


  $sql = "insert into tb_animal(nome_animal, dt_nascimento, sexo_animal, animal_castrado, cor_animal, peso_animal,raca, tipo, observação_animal) 
  values ('$nome_animal','$dt_nascimento','$sexo_animal','$animal_castrado','$cor_animal','$peso_animal','$raca','$tipo','$observação_animal')";

  $result = mysqli_query($con, $sql);
  if ($result) {
    echo "Dados inseridos com sucesso!";
    header('location:cadastrar_pet.php');
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
      <div class="container text-light"> <h3>Cadastrar Pet</h3> </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </div>
  </nav>

  <br>
    <div class="container">
      <form action="cadastrar_pet.php" method="post">
        <div class="col-4">
          <label for="nome_animal">Nome do Animal:</label>
          <input type="text" name="nome_animal" id="nome_animal" placeholder="Informe o mome do animal" class="form-control">
        </div>

        <div class="col-4">
          <label for="dt_nascimento">Data de Nascimento:</label>
          <input type="date" name="dt_nascimento" id="dt_nascimento" placeholder="Informe a dta de nascimento" class="form-control" value="1980-01-01">
        </div>

        <div class="col-4">
          <label for="sexo_animal">Sexo:</label>
          <input type="tel" name="sexo_animal" id="sexo_animal" placeholder="Informe (MACHO ou FEMEA)" class="form-control">
        </div>

        <div class="col-4">
          <label for="animal_castrado">Castrado:</label>
          <input type="text" name="animal_castrado" id="animal_castrado" placeholder="Animal é castrado? (SIM OU NÃO)" class="form-control">
        </div>

        <div class="col-4">
          <label for="cor_animal">Cor:</label>
          <input type="text" name="cor_animal" id="cor_animal" placeholder="Informe a cor (BRANCA/PRETA/PARDA)" class="form-control">
        </div>
       
        <div class="col-4">
          <label for="peso_animal">Peso:</label>
          <input type="text" name="peso_animal" id="peso_animal" placeholder="Informe o peso do animal em KG Ex.: 4.3" class="form-control">
       
        </div>        
        
        <div class="col-4">
          <label for="raca">Raça:</label>
          <input type="text" name="raca" id="raca" placeholder="Informe a raça do animal Ex.:SEM RAÇA" class="form-control">
        </div>

        <div class="col-4">
          <label for="tipo">Tipo:</label>
          <input type="text" name="tipo" id="tipo" placeholder="Informe o tipo (CANINO, FELINO..)" class="form-control">
        </div>

        <div class="col-4">
          <label for="observação_animal">Observação::</label>
          <input type="text" name="observação_animal" id="observação_animal" placeholder="Informe caso haja observações" class="form-control">
        </div><br>

        <button type="submit" name="enviarDados" class="btn btn-primary">Cadastrar</button>
        <a href="index_rota.php" class="btn btn-danger">Voltar</a>

      </form>
    </div>
  </body>
</html>

  
  <!-- <div class="container my-2  col-md-4">
    <form method="POST">
    <div class="form-group">
        <label>Data:
        <input type="date" class="form-control" placeholder="Informe a data do cadastro" name="dt_cadastro" autocomplete="off"> </label>
      </div>
      <div class="form-group">
        <label>Nome do Animal:</label>
        <input type="text" class="form-control" placeholder="Entre nome do animal" name="nome_animal" autocomplete="off">
      </div>
      <div class="form-group">
        <label>Dt-Nascimento:</label>
        <input type="date" class="form-control" placeholder="Entre com a data de nascimento" name="dt_nascimento" autocomplete="off">
      </div>
      <div class="form-group">
        <label>Sexo:</label>
        <input type="text" class="form-control" placeholder="Entre com o sexo do animal (MACHO ou FEMEA)" name="sexo_animal" autocomplete="off">
      </div>
      <div class="form-group">
        <label>Animal Castrado?:</label>
        <input type="text" class="form-control" placeholder="Animal é castrado? (SIM OU NÃO)" name="animal_castrado" autocomplete="on">
      </div>
      <div class="form-group">
        <label>Peso:</label>
        <input type="text" class="form-control" placeholder="Informe o peso do animal em KG Ex.: 4.3" name="peso_animal" autocomplete="off">
      </div>
      <div class="form-group">
        <label>Raça:</label>
        <input type="text" class="form-control" placeholder="Informe a raça do animal Ex.:SEM RAÇA" name="raca" autocomplete="off">
      </div>
      <div class="form-group">
        <label>Tipo:</label>
        <input type="text" class="form-control" placeholder="Informe o tipo (CANINO, FELINO..)" name="tipo" autocomplete="off">
      </div>
      <div class="form-group">
        <label>Observação:</label>
        <input type="text" class="form-control" placeholder="Informe caso haja observações" name="observação_animal" autocomplete="off">
      </div>

      <button type="submit" class="btn btn-primary" name="salvar">Salvar</button>
      <a href="index_rota.php" class="btn btn-warning">Voltar</a>
    </form>
  </div>
</body>

</html> -->