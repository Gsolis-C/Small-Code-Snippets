
let yourData = "Some Data I want to send";
$.ajax({
        type: "POST",
        url: "",
        headers: {
          "Content-Type": "application/json"
        },
        data:yourData,
        dataType: "JSON",
        success: function(){ window.location.href='https://www.pacificcollege.edu/thank-you-3';}
      });