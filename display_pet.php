<?php
include "conexao.php";
?>
<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>CRUD operacional</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php"></a>

<div class="container text-light"> <h3>Relatório de Animais</h3> 
</div>

    </div>
    <button class="btn btn-primary my-1"><a href="cadastrar_pet.php" class="text-light">Cadastrar</a></button>
    <a href="index_rota.php" class="btn btn-warning">Voltar</a>
  </nav>

  <div class="container">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Dt-Cadastro</th>
          <th scope="col">Nome do Pet</th>
          <th scope="col">Dt-Nascimento</th>
          <th scope="col">Sexo</th>
          <th scope="col">Castrado</th>
          <th scope="col">Cor</th>
          <th scope="col">Peso</th>
          <th scope="col">Raca</th>
          <th scope="col">Tipo</th>
          <th scope="col">Observação</th>


        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "select * from tb_animal";
        $result = mysqli_query($con, $sql);
        if ($result) {
          while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $dtcadastro= $row['dt_cadastro'];
            $nome = $row['nome_animal'];
            $dtnascimento = $row['dt_nascimento'];
            $sexo = $row['sexo_animal'];
            $castrado = $row['animal_castrado'];
            $cor = $row['cor_animal'];
            $peso = $row['peso_animal'];
            $raca = $row['raca'];
            $tipo = $row['tipo'];
            $observacao = $row['observação_animal'];
            

            echo '<tr>
            <th scope="row">' . $id . '</th>
            <td>' . $dtcadastro . '</td>
            <td>' . $nome . '</td>
            <td>' . $dtnascimento . '</td>
            <td>' . $sexo . '</td>
            <td>' . $castrado . '</td>
            <td>' . $cor . '</td>
            <td>' . $peso . '</td>
            <td>' . $raca . '</td>
            <td>' . $tipo . '</td>
            <td>' . $observacao . '</td>
            
            <td>
                <button class="btn btn-primary"><a href="atualizar_pet.php?atualizarid=' . $id . '" class="text-light">Atualizar</a></button>
                
                <button class="btn btn-danger"><a href="excluir_pet.php?excluirid=' . $id . '" class="text-light">Excluir</a></button>
          </td>
            </tr>';
          }
        }
        ?>

      </tbody>
    </table>
</body>

<!-- <img src="img/florLiz3.png" class="rounded float-right" alt="10%"> -->

</html>