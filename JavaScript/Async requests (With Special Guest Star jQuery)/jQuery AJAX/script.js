$( document ).ready(function() {
    $("#aButton").click(function(){
        $.ajax({
            url: "server/server.php",
          }).done(function(data) {
            $("#aTable").html(data);
          });
    })
})