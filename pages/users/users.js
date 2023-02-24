$(document).ready(function () {
  tableWriter();

  function tableWriter() {
    $.get(
      "users/usersCrudFunction.php",
      { getData: "getData" },
      function (data, status) {
        var datas = JSON.parse(data);
        $.each(datas, function (index, itemData) {
          $("#main-table").append(
            "<tr>" +
              '<td class="align-middle">' +
              parseInt(index + 1) +
              "</td>" +
              "<td>" +
              itemData.role_display_name +
              "</td>" +
              "<td>" +
              itemData.user_fname +
              " " +
              itemData.user_mname +
              " " +
              itemData.user_lname +
              "</td>" +
              "<td>" +
              itemData.user_address +
              "</td>" +
              "<td>" +
              itemData.user_contact +
              "</td>" +
              "<td>" +
              itemData.user_DOB +
              "</td>" +
              "<td>" +
              itemData.user_email +
              "</td>" +
              "<td>" +
              '<button style="margin-right:5px;" type="button" class="btn btn-primary" id="edit" data-id="' +
              itemData.user_id +
              '">Edit</button>' +
              '<button style="margin-right:5px;" type="button" class="btn btn-primary" id="delete" data-id="' +
              itemData.user_id +
              '">Delete</button>' +
              "</td>" +
              "</tr>"
          );
        });
      }
    );
  }
  $("body").on("click", "#edit", function (e) {
    var idss = $(e.currentTarget).data("id");
    // alert(idss);
    $.post(
      "users/usersCrudFunction.php",
      { user_id: idss },
      function (data, status) {
        var datas = JSON.parse(data);
        // console.log(datas);
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

    // $("#myModalLabel").html("Update User");
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
        "users/usersCrudFunction.php",
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
              tableWriter();
            }, 1000);
          }
        }
      );
    } else {
      $.post(
        "users/usersCrudFunction.php",
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
          "users/usersCrudFunction.php",
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

              location.reload();
            }
          }
        );
      }
    });
  });
});
