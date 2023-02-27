import fetch from "../modules/fetcher.js";

$("body").on("click", "#edit", async (e) =>
  state.show($(e.currentTarget).data("id"))
);
$("body").on("click", ".btn-delete", (e) =>
  state.destroy($(e.currentTarget).data("id"))
);

const state = {
  entity: "brands",
  attributes: ["brand_display_name", "brand_logo"],
  model: [],
  idname: "brand_id",
  activeIndex: 0,
  btnSave: document.getElementById("btn-mul"),

  btnNew: document.getElementById("create-new"),

  init: () => {
    state.btnNew.addEventListener("click", state.addnew);
    state.btnNew.disabled = false;
    state.ask();
  },
  ask: () => {
    $.get(
      "" + state.entity + "/" + state.entity + "CrudFunction.php",
      { getData: "getData" },
      function (data, status) {
        var datas = JSON.parse(data);
        $.each(datas, function (index, value) {
          state.model.push(value);
        });
        state.model.forEach((models) =>
          fetch.writer(state.attributes, models, state.idname)
        );
      }
    );
  },
  addnew: () => {
    fetch.showModal();
  },
  show: (i) => {
    state.activeIndex = i;
    state.btnSave.innerHTML = "Update Changes";
    state.btnSave.setAttribute("name", "update");
    state.btnSave.addEventListener("click", state.update);
    fetch.showOnModal(state.model[i]);
  },
  update: async () => {
    let params = $("#formData").serializeArray();
    let model = await fetch.update(state.entity, params);
    alert(model);
  },
};

window.addEventListener("load", state.init);
// $(document).ready(function () {
//   let entity = "brands";
//   let attributes = ["brand_display_name", "brand_logo"];
//   let model = [];

//   let index;

//   tableWriter();

//   function tableWriter() {
//     index = parseInt($("#table-main tr").length) + 1;
//     $.get(
//       "" + entity + "/" + entity + "CrudFunction.php",
//       { getData: "getData" },
//       function (data, status) {
//         var datas = JSON.parse(data);
//         console.log(datas);
//         $.each(datas, function (index, value) {
//           model.push(value);
//         });
//         model.forEach((models) => writer(models));
//       }
//     );
//   }

//   function writer(modelss) {
//     let tr = $("<tr>");
//     $("<td>", { html: parseInt(index++) }).appendTo(tr);
//     const attriMap = new Map(Object.entries(modelss));
//     attributes.forEach((attri) =>
//       $("<td>", { class: "text-wrap", html: attriMap.get(attri) }).appendTo(tr)
//     );

//     let td = $("<td>");
//     let group = $("<div>", { class: "btn-group" });
//     $("<button>", {
//       "data-id": modelss.brand_id,
//       class: "btn btn-primary",
//       id: "edit",
//       html: "Edit",
//     }).appendTo(group);

//     $("<button>", {
//       "data-id": modelss.brand_id,
//       class: "btn btn-danger",
//       id: "delete",
//       html: "Delete",
//     }).appendTo(group);

//     group.appendTo(td);
//     td.appendTo(tr);
//     $("#main-table").append(tr);
//   }

//   $("body").on("click", "#edit", function (e) {
//     var idss = $(e.currentTarget).data("id");
//     $.post(
//       "" + entity + "/" + entity + "CrudFunction.php",
//       { brand_id: idss },
//       function (data, status) {
//         var datas = JSON.parse(data);
//         $("#brand_id").val(datas.brand_id);
//         $("#brand_display_name").val(datas.brand_display_name);
//         $("#brand_logo").val(datas.brand_logo);
//       }
//     );

//     $("#exampleModalLabel").html("Update Brands");
//     $("#btn-mul").attr("name", "update");
//     $("#btn-mul").html("Update");
//     $("#exampleModal").modal("show");
//   });

//   $("#btn-mul").click(function (e) {
//     e.preventDefault();
//     $("#exampleModal").modal("hide");
//     let postname = $("#btn-mul").attr("name");
//     if (postname === "addNew") {
//       $.post(
//         "" + entity + "/" + entity + "CrudFunction.php",
//         {
//           brand_display_name: $("#brand_display_name").val(),
//           brand_logo: $("#brand_logo").val(),
//           addNew: "new",
//         },
//         function (data, status) {
//           if (status) {
//             Swal.fire({
//               position: "center",
//               icon: "success",
//               title: "Added Successfully",
//               showConfirmButton: false,
//               timer: 1500,
//             });
//             window.setTimeout(function () {
//               $("#main-table").empty();
//               model.length = 0;
//               tableWriter();
//             }, 1000);
//           }
//         }
//       );
//     } else {
//       $.post(
//         "" + entity + "/" + entity + "CrudFunction.php",
//         {
//           brand_id: $("#brand_id").val(),
//           brand_display_name: $("#brand_display_name").val(),
//           brand_logo: $("#brand_logo").val(),
//           update: "update",
//         },
//         function (data, status) {
//           if (status) {
//             Swal.fire({
//               position: "center",
//               icon: "success",
//               title: "Updated Successfully",
//               showConfirmButton: false,
//               timer: 1500,
//             });
//             window.setTimeout(function () {
//               $("#main-table").empty();
//               model.length = 0;
//               tableWriter();
//             }, 1000);
//           }
//         }
//       );
//     }
//   });

//   $("body").on("click", "#delete", function (e) {
//     var idss = $(e.currentTarget).data("id");
//     $("#ids").val(idss);
//     Swal.fire({
//       title: "Are you sure?",
//       text: "You want to delete this?",
//       icon: "warning",
//       showCancelButton: true,
//       confirmButtonColor: "#3085d6",
//       cancelButtonColor: "#d33",
//       confirmButtonText: "Yes, delete it!",
//     }).then((result) => {
//       if (result.isConfirmed) {
//         $.post(
//           "" + entity + "/" + entity + "CrudFunction.php",
//           { brand_id: idss, delete: "del" },
//           function (data, status) {
//             if (status) {
//               Swal.fire({
//                 position: "center",
//                 icon: "success",
//                 title: "Deleted Successfully",
//                 showConfirmButton: false,
//                 timer: 1500,
//               });
//               $("#main-table").empty();
//               model.length = 0;
//               tableWriter();
//             }
//           }
//         );
//       }
//     });
//   });
// });
