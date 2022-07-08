<?php
  include "../../assets/configs/conexaoSql.php";

  $name = $_POST['name'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];
  $status = $_POST['status'];

  $slq = "INSERT INTO usuarios VALUES (default, '$name', '$email', '$senha', '$status')";
  mysqli_query($conn, $sql) or die(mysqli_error($conn));
  $response = array("success" => true);
  echo json_encode($response);

?>