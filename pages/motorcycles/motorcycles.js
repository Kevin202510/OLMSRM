$(document).ready(function () {
  let entity = "freebies";
  let attributes = ["mc_mvfile","mc_platenumber" , "mc_enginenumber" , "mc_chassisnumber" , "mc_desposition" , "mc_pistondisplacement" , "mc_numberofcylinders" , "mc_fuel" , "mc_make" , "mc_series" , "mc_bodytype" , "mc_bodynumber" , "mc_yearmodel" , "mc_grosswt" , "mc_netwt" , "mc_shippingwt" , "mc_netcapacity"];
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
      "data-id": modelss.mc_id,
      class: "btn btn-primary",
      id: "edit",
      html: "Edit",
    }).appendTo(group);

    $("<button>", {
      "data-id": modelss.mc_id,
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
      { mc_id: idss },
      function (data, status) {
        var datas = JSON.parse(data);
        $("#mc_id").val(datas.mc_id);
        $("#mc_mvfile").val(datas.mc_mvfile);
        $("#mc_platenumber").val(datas.mc_platenumber);
        $("#mc_enginenumber").val(datas.mc_enginenumber);
        $("#mc_chassisnumber	").val(datas.mc_chassisnumber	);
        $("#mc_desposition").val(datas.mc_desposition);
        $("#mc_pistondisplacement").val(datas.mc_pistondisplacement);
        $("#mc_numberofcylinders").val(datas.mc_numberofcylinders);
        $("#mc_fuel").val(datas.mc_fuel);
        $("#mc_make").val(datas.mc_make);
        $("#mc_series").val(datas.mc_series);
        $("#mc_bodytype").val(datas.mc_bodytype);
        $("#mc_bodynumber").val(datas.mc_bodynumber);
        $("#mc_yearmodel").val(datas.mc_yearmodel);
        $("#mc_grosswt").val(datas.mc_grosswt);
        $("#mc_netwt").val(datas.mc_netwt);
        $("#mc_shippingwt").val(datas.mc_shippingwt);
        $("#mc_netcapacity").val(datas.mc_netcapacity);
      }
    );

    $("#exampleModalLabel").html("Update Motorcycles");
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
          mc_mvfile: $("#mc_mvfile").val(),
          mc_platenumber: $("#mc_platenumber").val(),
          mc_enginenumber: $("#mc_enginenumber").val(),
          mc_chassisnumber: $("#mc_chassisnumber").val(),
          mc_desposition: $("#mc_desposition").val(),
          mc_pistondisplacement: $("#mc_pistondisplacement").val(),
          mc_numberofcylinders: $("#mc_numberofcylinders").val(),
          mc_fuel: $("#mc_fuel").val(),
          mc_make: $("#mc_make").val(),
          mc_series: $("#mc_series").val(),
          mc_bodytype: $("#mc_bodytype").val(),
          mc_bodynumber: $("#mc_bodynumber").val(),
          mc_yearmodel: $("#mc_yearmodel").val(),
          mc_grosswt: $("#mc_grosswt").val(),
          mc_netwt: $("#mc_netwt").val(),
          mc_shippingwt: $("#mc_shippingwt").val(),
          mc_netcapacity: $("#mc_netcapacity").val(),
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
          mc_id: $("#mc_id").val(),
          mc_mvfile: $("#mc_mvfile").val(),
          mc_platenumber: $("#mc_platenumber").val(),
          mc_enginenumber: $("#mc_enginenumber").val(),
          mc_chassisnumber: $("#mc_chassisnumber").val(),
          mc_desposition: $("#mc_desposition").val(),
          mc_pistondisplacement: $("#mc_pistondisplacement").val(),
          mc_numberofcylinders: $("#mc_numberofcylinders").val(),
          mc_fuel: $("#mc_fuel").val(),
          mc_make: $("#mc_make").val(),
          mc_series: $("#mc_series").val(),
          mc_bodytype: $("#mc_bodytype").val(),
          mc_bodynumber: $("#mc_bodynumber").val(),
          mc_yearmodel: $("#mc_yearmodel").val(),
          mc_grosswt: $("#mc_grosswt").val(),
          mc_netwt: $("#mc_netwt").val(),
          mc_shippingwt: $("#mc_shippingwt").val(),
          mc_netcapacity: $("#mc_netcapacity").val(),
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
          { mc_id: idss, delete: "del" },
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
