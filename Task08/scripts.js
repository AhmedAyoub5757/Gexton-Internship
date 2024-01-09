$(document).ready(function() {
    $("#sortable").sortable({
      update: function(event, ui) {
        var data = $(this).sortable("toArray", { attribute: "data-id" });
        
        $.ajax({
          url: "update_order.php",
          type: "POST",
          data: { order: data },
          success: function(response) {
            console.log(response);
            // alert("order updated");
          },
          error: function(xhr, status, error) {
            console.log(error); 
          }
        });
      }
    }).disableSelection(); 
  });
  