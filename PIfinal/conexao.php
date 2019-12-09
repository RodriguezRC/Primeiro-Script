	<?php

$con = mysqli_connect("localhost", "root", "", "estacionamento");
mysqli_select_db($con, "usuario");
mysqli_select_db($con, "unidadeum");
mysqli_select_db($con, "unidadetres");

if (mysqli_connect_errno())
  {
  die ("Erro ao conectar-se com banco de dados. " . mysqli_connect_error());
  exit();
  }

?>