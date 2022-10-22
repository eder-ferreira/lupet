<?php

$con = new mysqli('localhost', 'root', 'rootroot', 'db_petlu');

if ($con) {
  // echo "Banco conectado com sucesso!";
} else {
  die(mysqli_error($con));
}

//https://www.youtube.com/watch?v=72U5Af8KUpA&t=51s
//PHP CRUD || Create, Read, Update, Delete
//https://getbootstrap.com/docs/4.0/content/tables/
