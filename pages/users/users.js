$(document).ready(function () {
  let entity = "users";
  let attributes = [
    "role_display_name",
    "fullName",
    "user_address",
    "user_contact",
    "user_DOB",
    "user_email",
  ];
  let model = [];

  let index;

  tableWriter();

  function tableWriter() {
    index = parseInt($("#table-main tr").length) + 1;
    $.get(
      "" + entity + "/usersCrudFunction.php",
      { getData: "getData" },
      function (data, status) {
        var datas = JSON.parse(data);
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
    attributes.forEach((attri) => {
      if (attri == "fullName") {
        $("<td>", {
          class: "text-wrap",
          html: (
            attriMap.get("user_fname") +
            " " +
            attriMap.get("user_mname") +
            " " +
            attriMap.get("user_lname")
          ).toUpperCase(),
        }).appendTo(tr);
      } else {
        $("<td>", { class: "text-wrap", html: attriMap.get(attri) }).appendTo(
          tr
        );
      }
    });

    let td = $("<td>");
    let group = $("<div>", { class: "btn-group" });

    $("<button>", {
      "data-id": modelss.user_id,
      class: "btn btn-success",
      id: "view",
      html: "View",
    }).appendTo(group);

    $("<button>", {
      "data-id": modelss.user_id,
      class: "btn btn-primary",
      id: "edit",
      html: "Edit",
    }).appendTo(group);

    $("<button>", {
      "data-id": modelss.user_id,
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
    // alert(idss);
    $.post(
      "" + entity + "/usersCrudFunction.php",
      { user_id: idss },
      function (data, status) {
        var datas = JSON.parse(data);
        $("#user_id").val(datas.user_id);
        $("#user_role_id").val(datas.user_role_id);
        $("#user_fname").val(datas.user_fname);
        $("#user_mname").val(datas.user_mname);
        $("#user_lname").val(datas.user_lname);
        $("#user_address").val(datas.user_address);
        $("#user_contact").val(datas.user_contact);
        $("#user_DOB").val(datas.user_DOB);
        $("#user_email").val(datas.user_email);
        $("#user_username").val(datas.user_username);
        $("#user_password").val(datas.user_password);
      }
    );

    $("#myModalLabel").html("Update User");
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
        "" + entity + "/usersCrudFunction.php",
        {
          user_role_id: $("#user_role_id").val(),
          user_fname: $("#user_fname").val(),
          user_mname: $("#user_mname").val(),
          user_lname: $("#user_lname").val(),
          user_address: $("#user_address").val(),
          user_contact: $("#user_contact").val(),
          user_DOB: $("#user_DOB").val(),
          user_email: $("#user_email").val(),
          user_username: $("#user_username").val(),
          user_password: $("#user_password").val(),
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
        "" + entity + "/usersCrudFunction.php",
        {
          user_id: $("#user_id").val(),
          user_role_id: $("#user_role_id").val(),
          user_fname: $("#user_fname").val(),
          user_mname: $("#user_mname").val(),
          user_lname: $("#user_lname").val(),
          user_address: $("#user_address").val(),
          user_contact: $("#user_contact").val(),
          user_DOB: $("#user_DOB").val(),
          user_email: $("#user_email").val(),
          user_username: $("#user_username").val(),
          user_password: $("#user_password").val(),
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
          "" + entity + "/usersCrudFunction.php",
          { user_id: idss, delete: "del" },
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
