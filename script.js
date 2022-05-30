// Messaggio di caricamento in attesa dei dati dal db
$("#data").append("<li id='loading'>Loading...</li>");
$(document).ready(function(){
// Rimuovo il messaggio di caricamento
  $("loading").remove();
  function viewData() {
    $.ajax ({
      url: 'data.php',
      type: 'post',
      success: function(result){
        // Stampo i valori nell'html
        $("#data").html(result);
      }
    });
  }
  viewData();

  $(document).on("click", "#add_btn", function(){
    // Prendo i valori dagli input nell'index
    txt = $("#txt").val();
    num = $("#num").val();

    $.ajax({
      url: 'insert.php',
      type: 'post',
      data: {txt: txt, num: num},
      success: function(result){
        if (result == 1) {
          // Resetto i campi degli input
          txt = $("#txt").val('');
          num = $("#num").val('');
          // refresh
          viewData();
        }
      }
    });
  });

  $(document).on("click", "#minus", function(){
    id = $(this).data("id");

    $.ajax({
      url: 'minus.php',
      type: 'post',
      data: {id: id},
      success: function(result) {
        if (result == 1) {
          // refresh
          viewData();
        }
      }
    });
  });

  $(document).on("click", "#plus", function(){
    id = $(this).data("id");
    // element = $(this);

    $.ajax({
      url: 'plus.php',
      type: 'post',
      data: {id: id},
      success: function(result) {
        if (result == 1) {
          // refresh
          viewData();
        }
      }
    });
  });

  $(document).on("click", "#delete", function(){
    id = $(this).data("id");

    $.ajax({
      url: 'delete.php',
      type: 'post',
      data: {id: id},
      success: function(result) {
        if (result == 1) {
          // Elimino l'elemento dall'index
          $("li").remove();
          // refresh
          viewData();
        }
      }
    });
  });
});
