$(document).ready(function () {
  $("body").on("click", "#edit", function (e) {
    var idss = $(e.currentTarget).data("id");
    $.post(
      "roles/rolesCrudFunction.php",
      { role_id: idss },
      function (data, status) {
        var datas = JSON.parse(data);
        $("#role_id").val(datas.role_id);
        $("#role_display_name").val(datas.role_display_name);
      }
    );

    // $("#myModalLabel").html("Update User");
    $("#btn-mul").attr("name", "update");
    $("#btn-mul").html("Update Role");
    $("#exampleModal").modal("show");
  });

  //   $("body").on("click", "#delete", function (e) {
  //     var idss = $(e.currentTarget).data("id");
  //     $("#ids").val(idss);
  //     $("#exampleModalDelete").modal("show");
  //   });

  //   $("#closeform").click(function () {
  //     $("#serviceform")[0].reset();

  //     $("#exampleModal").modal("hide");
  //   });
});
