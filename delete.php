<?php

  include 'db_connection.php';

  $id = $_POST['id'];

  // Cancello per id
  $sql = "DELETE FROM `counters` WHERE id='$id'";
  $result = mysqli_query($conn, $sql);

  if ($result) {
    echo 1;
  } else {
    echo "Error: {$sql}" . mysqli_error($conn);
  }
?>
