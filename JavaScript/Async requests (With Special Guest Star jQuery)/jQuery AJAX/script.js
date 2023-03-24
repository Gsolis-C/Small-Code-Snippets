/*Verifying that the script will not load until all DOM items have done so */
$( document ).ready(function() {
  /*Clock event */
  $("#aButton").click(function(){
    /*Ajax Request */
    $.ajax({
      type: "POST",
      url: "server/server.php",
      headers: {
      },
      data:{lowNumber:1,highNumber:100},
      success: function(result){
        $("#aTable").html(result);}
      });
  })
})
