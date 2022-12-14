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

<div class="container text-light"> <h3>Relatório de Usuários</h3> 
</div>

    </div>
    <button class="btn btn-primary my-1"><a href="cadastrar_user.php" class="text-light">Cadastrar</a></button>
    <a href="index_rota.php" class="btn btn-warning">Voltar</a>
  </nav>

  <!-- CRIA O LAYOUT DO RELATORIO USUARIO -->
  <div class="container">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Dt-Cadastro</th>
          <th scope="col">Dt-Atualização</th>
          <th scope="col">Usuario</th>
          <th scope="col">Dt-Nascimento</th>
          <th scope="col">Telefone</th>
          <th scope="col">CPF</th>
          <th scope="col">CRMV</th>
          <th scope="col">Email</th>
          <th scope="col">Senha</th>
          <th scope="col">Operação</th>
        </tr>
      </thead>
      <tbody>

      <!-- FAZ O SELECT NO BANCO E TRAZ AS INFORMAÇÕES -->
        <?php
        $sql = "select * from tb_usuario";
        $result = mysqli_query($con, $sql);
        if ($result) {
          while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $dtcadastro= $row['dt_cadastro'];
            $dtatualizado= $row['dt_atualizacao'];
            $usuario = $row['nome'];
            $dtnascimento= $row['data_nascimento'];
            $telefone = $row['telefone'];
            $cpf = $row['cpf'];
            $crmv = $row['crmv'];
            $email = $row['email'];
            $senha = $row['senha'];
            
            
            

            echo '<tr>
            <th scope="row">' . $id . '</th>
            <td>' . $dtcadastro . '</td>
            <td>' . $dtatualizado . '</td>
            <td>' . $usuario . '</td>
            <td>' . $dtnascimento . '</td>
            <td>' . $telefone . '</td>
            <td>' . $cpf . '</td>
            <td>' . $crmv . '</td>
            <td>' . $email . '</td>
            <td>' . $senha . '</td>
            
            
            <td>
                <button class="btn btn-primary"><a href="atualizar_user.php?atualizarid=' . $id . '" class="text-light">Atualizar</a></button>
                <button class="btn btn-danger"><a href="excluir_user.php?excluirid=' . $id . '" class="text-light">Excluir</a></button>
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