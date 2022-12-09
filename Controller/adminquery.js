$(document).ready(function () {
  $("#users").on("click", function (e) {
    $("#main").show();
    $.ajax({
      url: "manageuser.php",
      type: "POST",
      success: function (data) {
        $("#main").html(data);
      },
    });
  });
});


$(document).ready(function () {
  $("#inventory").on("click", function (e) {
    $("#main").show();
    $.ajax({
      url: "inventory.php",
      type: "POST",
      success: function (data) {
        $("#main").html(data);
      },
    });
  });
});


$(document).ready(function () {
  $("#transaction").on("click", function (e) {
    $("#main").show();
    $.ajax({
      url: "transaction.php",
      type: "POST",
      success: function (data) {
        $("#main").html(data);
      },
    });
  });
});
