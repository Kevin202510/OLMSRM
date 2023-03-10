$(document).ready(function () {
  let entity = "freebies";
  let attributes = ["fb_package_name","fb_description"];
  let model = [];

  let index;

  tableWriter();

  function tableWriter() {
    index = parseInt($("#table-main tr").length) + 1;
    $.get(
      "" + entity + "/" + entity + "CrudFunction.php",
      { getData: "getData" },
      function (data, status) {
        var datas = JSON.parse(data);
        console.log(datas);
        $.each(datas, function (index, value) {
          model.push(value);
        });
        model.forEach((models) => writer(models));
      }
    );
  }

  function writer(modelss) {
    let tr = $("<tr>");
    $("<td>", { html: parseInt(index++) }).appendTo(tr);
    const attriMap = new Map(Object.entries(modelss));
    attributes.forEach((attri) =>
      $("<td>", { class: "text-wrap", html: attriMap.get(attri) }).appendTo(tr)
    );

    let td = $("<td>");
    let group = $("<div>", { class: "btn-group" });
    $("<button>", {
      "data-id": modelss.fb_id,
      class: "btn btn-primary",
      id: "edit",
      html: "Edit",
    }).appendTo(group);

    $("<button>", {
      "data-id": modelss.fb_id,
      class: "btn btn-danger",
      id: "delete",
      html: "Delete",
    }).appendTo(group);

    group.appendTo(td);
    td.appendTo(tr);
    $("#main-table").append(tr);
  }

  $("#exampleModal").on("hide.bs.modal", function (e) {
    $("#myModalLabel").html("Add User");
  });

  $("body").on("click", "#edit", function (e) {
    var idss = $(e.currentTarget).data("id");
    $.post(
      "" + entity + "/" + entity + "CrudFunction.php",
      { fb_id: idss },
      function (data, status) {
        var datas = JSON.parse(data);
        $("#fb_id").val(datas.fb_id);
        $("#fb_package_name").val(datas.fb_package_name);
        $("#fb_description").val(datas.fb_description);
      }
    );

    $("#exampleModalLabel").html("Update Freebies");
    $("#btn-mul").attr("name", "update");
    $("#btn-mul").html("Update");
    $("#exampleModal").modal("show");
  });

  $("#btn-mul").click(function (e) {
    e.preventDefault();
    $("#exampleModal").modal("hide");
    let postname = $("#btn-mul").attr("name");
    if (postname === "addNew") {
      $.post(
        "" + entity + "/" + entity + "CrudFunction.php",
        {
        fb_package_name: $("#fb_package_name").val(),
        fb_description: $("#fb_description").val(),
          addNew: "new",
        },
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
              $("#main-table").empty();
              model.length = 0;
              tableWriter();
            }, 1000);
          }
        }
      );
    } else {
      $.post(
        "" + entity + "/" + entity + "CrudFunction.php",
        {
          fb_id: $("#fb_id").val(),
          fb_package_name: $("#fb_package_name").val(),
          fb_description: $("#fb_description").val(),
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
              $("#main-table").empty();
              model.length = 0;
              tableWriter();
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
          "" + entity + "/" + entity + "CrudFunction.php",
          { fb_id: idss, delete: "del" },
          function (data, status) {
            if (status) {
              Swal.fire({
                position: "center",
                icon: "success",
                title: "Deleted Successfully",
                showConfirmButton: false,
                timer: 1500,
              });
              $("#main-table").empty();
              model.length = 0;
              tableWriter();
            }
          }
        );
      }
    });
  });
});
