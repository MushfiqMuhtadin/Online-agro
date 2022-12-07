$(document).ready(function () {
  $("#request").on("click", function (e) {
    $("#main").show();
    $.ajax({
      url: "requests.php",
      type: "POST",
      success: function (data) {
        $("#main").html(data);
      },
    });
  });
});
$(document).ready(function () {
  $("#order").on("click", function (e) {
    $("#main").show();
    $.ajax({
      url: "orders.php",
      type: "POST",
      success: function (data) {
        $("#main").html(data);
      },
    });
  });
});
$(document).ready(function () {
  $("#feedback").on("click", function (e) {
    $("#main").show();
    $.ajax({
      url: "feedbackview.php",
      type: "POST",
      success: function (data) {
        $("#main").html(data);
      },
    });
  });
});
$(document).ready(function () {
  $("#crop").on("click", function (e) {
    $("#main").show();
    $.ajax({
      url: "cropview.php",
      type: "POST",
      success: function (data) {
        $("#main").html(data);
      },
    });
  });
});
