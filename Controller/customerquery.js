$(document).ready(function () {
  $("#feedback").on("click", function (e) {
    $("#main").show();
    $.ajax({
      url: "feedback.php",
      type: "POST",
      success: function (data) {
        $("#main").html(data);
      },
    });
  });
});
