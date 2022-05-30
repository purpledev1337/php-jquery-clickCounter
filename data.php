<?php
  include 'db_connection.php';

  // Seleziono tutti i valori in ordine di conteggio (decrescente)
  $sql = "SELECT * FROM `counters` ORDER BY `num` DESC";
  $result = mysqli_query($conn, $sql);

  // Per ogni riga stamperò un list item
  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
?>

<li>
  <div>
    <?php echo $row['txt']; ?>
  </div>
  <div class="counter">
    <button id="minus" data-id="<?php echo $row['id']; ?>">
      <i class="fa fa-minus"></i>
    </button>
    <div><?php echo $row['num']; ?></div>
    <button id="plus" data-id="<?php echo $row['id']; ?>">
      <i class="fa fa-plus"></i>
    </button>
  </div>
  <div>
    <button id="delete" data-id="<?php echo $row['id']; ?>">
      <i class="fa fa-trash"></i>
    </button>
  </div>
</li>

<?php } } else { echo "<li id='empty'>Aggiungi un contatore!</li>"; } ?>
