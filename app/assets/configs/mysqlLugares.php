<?php
  include "../../assets/configs/conexaoSql.php";

  $nomeLugar = $_POST['nomeLugar'];
  $mitologia = $_POST['mitologia'];
  $nomeMitologia = $_POST['nomeMitologia'];
  $status = $_POST['status'];

  $slq = "INSERT INTO usuarios VALUES (default, '$nomeLugar', '$mitologia', '$nomeMitologia', '$status')";
  mysqli_query($conn, $sql) or die(mysqli_error($conn));
  $response = array("success" => true);
  echo json_encode($response);

?>