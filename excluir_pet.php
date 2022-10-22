<?php
include "conexao.php";
if (isset($_GET['excluirid'])) {
  $id = $_GET['excluirid'];

  $sql = "delete from tb_animal where id=$id";
  $result = mysqli_query($con, $sql);
  if ($result) {
    echo "Excluido com Sucesso!";
    header('location:display_pet.php');
  } else {
    die(mysqli_error($con));
  }
}
