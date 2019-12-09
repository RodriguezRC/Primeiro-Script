<?php

include ("conexao.php");


$vagas = $_POST['qtdvagas'];

$enviar_vagas = "INSERT INTO unidadeum (vagas) VALUES ('$vagas')";
$resultado_vagas = mysqli_query($con, $enviar_vagas);


mysqli_close($con);

?>