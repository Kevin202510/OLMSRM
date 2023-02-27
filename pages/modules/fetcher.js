const request = async (url, params, method = "GET") => {
  const options = { method, headers: { "Content-Type": "application/json" } };
  if (params && method === "GET") {
    url += params != "" ? `?${objectToQueryString(params)}` : "";
    params = "";
  }

  let response;

  try {
    response = await $.ajax({
      url: url,
      type: method,
      data: params,
    });

    if (response.status === 404 || response.status === 500) {
      swal.fire({
        icon: "error",
        title: "Oops...",
        showConfirmButton: false,
        timer: 3000,
        text: "The server responded with an unexpected status!",
        footer: "<a href>CleverTech</a>",
      });
    } else if (response.status === 204) {
      return null;
    }

    return response;
  } catch (error) {
    console.error(error);
  }
};

const showModal = () => {
  $("#formData").trigger("reset");
  $("#modal-title").html("Add New");
  $("#exampleModal").modal("show");
};

const writer = (attributes, modelss, idname) => {
  console.log(modelss);
  var index = $("#main-table tr").length;
  index =
    $(`#model-${modelss.idname}`).length == 0
      ? index
      : $(`#model-${modelss.idname}`).data("index");
  let tr = $("<tr>", {
    id: `model-${modelss.brand_id}`,
    "data-index": index,
  });
  $("<td>", { html: `${index + 1}.` }).appendTo(tr);
  const attriMap = new Map(Object.entries(modelss));
  attributes.forEach((attri) =>
    $("<td>", { class: "text-wrap", html: attriMap.get(attri) }).appendTo(tr)
  );

  let td = $("<td>");
  let group = $("<div>", { class: "btn-group" });
  $("<button>", {
    "data-id": index,
    class: "btn btn-primary",
    id: "edit",
    html: "Edit",
  }).appendTo(group);

  $("<button>", {
    "data-id": index,
    class: "btn btn-danger",
    id: "delete",
    html: "Delete",
  }).appendTo(group);

  group.appendTo(td);
  td.appendTo(tr);
  // console.log($("#main-table tr").length);
  // console.log($(`#model-${modelss.brand_id}`).length);
  // if ($(`#model-${modelss.brand_id}`).length == 0) {
  $("#main-table").append(tr);
  // } else {
  //   $(`#model-${modelss.brand_id}`).replaceWith(tr);
  // }
};

const showOnModal = (model) => {
  $("#set-model").trigger("reset");
  $("#modal-title").html(`Update`);
  console.log(model);
  Object.keys(model).map((key) => {
    if ($(`[name='${key}']`).length !== 0 && key != "avatar") {
      if (typeof model[key] == "boolean") {
        $(`[name='${key}']`).val(model[key] ? 1 : 0);
      } else {
        $(`[name='${key}']`).val(model[key]).removeAttr("disabled");
      }
    }
  });
  $("#exampleModal").modal("show");
};

const update = async (entity, params) => {
  let url = `../pages/${entity}/${entity}CrudFunction.php`;
  const model = await request(url, params, "POST");
  // console.log(model);
  if (model) {
    swal.fire({
      position: "center",
      icon: "success",
      title: "Updated Successfully",
      showConfirmButton: false,
      timer: 1500,
      footer: "<a href>CleverTech</a>",
    });
  }
  return model;
};

const save = async (entity, params) => {
  let url = `../pages/${entity}/${entity}CrudFunction.php`;
  const model = await request(url, params, "POST");
  // console.log(model);
  if (model) {
    swal.fire({
      position: "center",
      icon: "success",
      title: "Added Successfully",
      showConfirmButton: false,
      timer: 1500,
      footer: "<a href>CleverTech</a>",
    });
  }
  return model;
};

export default {
  showModal,
  writer,
  showOnModal,
  update,
  save,
};
