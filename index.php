<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Import Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  <link rel="stylesheet" href="style.css">
  <title>The Permanent Counter</title>
</head>
<body>

    <!-- Vi propongo di creare un sistema di preferenze, il classico "pollice in su", "pollice in giù", che visualizzi il numero di click che riceve ogni pulsante.
        Come sempre, interpretazione libera, analizzate la proposta e strutturate la soluzione secondo voi più idonea. -->

  <?php

    include 'start.php';

  ?>

  <h1>The Permanent Counter</h1>
  <div class="container">
    <form class="form">
      <div class="newItem">
        <input type="text" id="txt" placeholder="Nuovo conteggio" required>
        <input type="number" id="num" placeholder="Parte da" required>
        <!-- Aggiungere un nuovo conteggio -->
        <button id="add_btn"><i class="fa fa-plus"></i></button>
      </div>
    </form>
    <ul id="data">
    <!-- contenuto viewData() -->
    </ul>
  </div>

  <!-- Import jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="script.js"></script>
</body>
</html>
