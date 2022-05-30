<?php
  // Include Connection
  include 'db_connection.php';

  $id = $_POST['id'];

  // Seleziono per id  
  $q = "SELECT `num` FROM `counters` WHERE `id` = $id";
  $counter = mysqli_query($conn, $q);

  // Aumento il valore di 1
  $sql = "UPDATE `counters` SET `num` = `num` + 1 WHERE `id` = $id";
  $result = mysqli_query($conn, $sql);

  if ($result) {
    echo 1;
  } else {
    echo "Error: {$sql}" . mysqli_error($conn);
  }
?>
