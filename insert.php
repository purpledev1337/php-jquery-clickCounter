<?php

  include 'db_connection.php';

  // Trasformo l'input rendendolo tutto minuscolo con la prima lettera maiuscola (check for html)
  $txt = ucfirst(strtolower(htmlspecialchars($_POST['txt'])));
  $num = $_POST['num'];
    
  $sql = "INSERT INTO `counters` (txt, num) VALUES ('$txt', '$num')";
  $result = mysqli_query($conn, $sql);

  if ($result) {
    echo 1;
  } else {
    echo "Error: {$sql}" . mysqli_error($conn);
  }

?>
