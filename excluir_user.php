<?php
include "conexao.php";
if (isset($_GET['excluirid'])) {
  $id = $_GET['excluirid'];

  $sql = "delete from tb_usuario where id=$id";
  $result = mysqli_query($con, $sql);
  if ($result) {
    // echo "Excluido com Sucesso!";
    header('location:display_user.php');
  } else {
    die(mysqli_error($con));
  }
}
