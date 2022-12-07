$(document).ready(function () {
  $("#farmer-inventory").on("click", function (e) {
    $("#main").show();
    $.ajax({
      url: "farmerinventory.php",
      type: "POST",
      success: function (data) {
        $("#main").html(data);
      },
    });
  });
});
$(document).ready(function () {
  $("#pesticide").on("click", function (e) {
    $("#main").show();
    $.ajax({
      url: "pesticide.php",
      type: "POST",
      success: function (data) {
        $("#main").html(data);
      },
    });
  });
});
$(document).ready(function () {
  $("#crop-status").on("click", function (e) {
    $("#main").show();
    $.ajax({
      url: "cropstatus.php",
      type: "POST",
      success: function (data) {
        $("#main").html(data);
      },
    });
  });
});

