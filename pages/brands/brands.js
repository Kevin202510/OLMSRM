$(document).ready(function () {
  $("body").on("click", "#edit", function (e) {
    var idss = $(e.currentTarget).data("id");
    $.post(
      "brands/brandsCrudFunction.php",
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

  $("#btn-mul").click(function (e) {
    e.preventDefault();
    $("#exampleModal").modal("hide");
    let postname = $("#btn-mul").attr("name");
    if (postname === "addNew") {
      $.post(
        "brands/brandsCrudFunction.php",
        { role_display_name: $("#role_display_name").val(), addNew: "new" },
        function (data, status) {
          if (status) {
            Swal.fire({
              position: "center",
              icon: "success",
              title: "Added Successfully",
              showConfirmButton: false,
              timer: 1500,
            });
            window.setTimeout(function () {
              location.reload();
            }, 1000);
          }
        }
      );
    } else {
      $.post(
        "brands/brandsCrudFunction.php",
        {
          role_display_name: $("#role_display_name").val(),
          role_id: $("#role_id").val(),
          update: "update",
        },
        function (data, status) {
          if (status) {
            Swal.fire({
              position: "center",
              icon: "success",
              title: "Updated Successfully",
              showConfirmButton: false,
              timer: 1500,
            });
            window.setTimeout(function () {
              location.reload();
            }, 1000);
          }
        }
      );
    }
  });

  $("body").on("click", "#delete", function (e) {
    var idss = $(e.currentTarget).data("id");
    $("#ids").val(idss);
    Swal.fire({
      title: "Are you sure?",
      text: "You want to delete this?",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Yes, delete it!",
    }).then((result) => {
      if (result.isConfirmed) {
        $.post(
          "brands/brandsCrudFunction.php",
          { role_id: idss, delete: "del" },
          function (data, status) {
            if (status) {
              Swal.fire({
                position: "center",
                icon: "success",
                title: "Deleted Successfully",
                showConfirmButton: false,
                timer: 1500,
              });

              location.reload();
            }
          }
        );
      }
    });
  });
});
