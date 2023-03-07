import fetch from "../modules/fetcher.js";

$("body").on("click", "#edit", async (e) =>
  state.show($(e.currentTarget).data("id"))
);
$("body").on("click", "#delete", (e) =>
  state.delete($(e.currentTarget).data("id"))
);

$("#user_profile").change(function () {
  var filename = $("#user_profile")[0].files[0];
  $(`[id="userprofile"]`).attr("src", URL.createObjectURL(filename));
});

const state = {
  entity: "users",
  attributes: [
    "user_profile",
    "role_display_name",
    "fullName",
    "user_address",
    "user_contact",
    "user_DOB",
    "user_email",
  ],
  model: [],
  activeIndex: 0,
  btnSave: document.getElementById("btn-mul"),
  inputMethod: document.getElementById("method"),

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
        state.model.forEach((models) => fetch.writer(state.attributes, models));
      }
    );
  },
  addnew: () => {
    console.log(md5(state.model[0].user_password));
    state.btnSave.innerHTML = "Save Changes";
    state.inputMethod.setAttribute("name", "addNew");
    state.btnSave.addEventListener("click", state.save);
    state.btnSave.removeEventListener("click", state.update);
    fetch.showModal();
  },
  save: async (e) => {
    e.preventDefault();
    let params = $("#formData").serializeArray();
    // console.log(params);
    let model = await fetch.save(state.entity, params);
    if (model) {
      $("#exampleModal").modal("hide");
      state.model = [];
      state.ask();
    }
  },
  show: (i) => {
    state.activeIndex = i;
    state.btnSave.innerHTML = "Update Changes";
    state.inputMethod.setAttribute("name", "update");
    state.btnSave.addEventListener("click", state.update);
    state.btnSave.removeEventListener("click", state.save);
    fetch.showOnModal(state.model[i]);
  },
  update: async () => {
    let params = $("#formData").serializeArray();
    var fd = new FormData();
    // console.log(params);
    params.forEach((para) => {
      console.log(para);
      fd.append(para.name, para.value);
    });
    fd.append("file", $("#user_profile")[0].files[0]);
    let model = await fetch.update(state.entity, fd);
    if (model) {
      $("#exampleModal").modal("hide");
      state.model = [];
      state.ask();
    }
  },
  delete: async (i) => {
    // alert(i);
    let params = { id: i, delete: "delete" };
    let res = await fetch.remove(state.entity, params);
    if (res) {
      state.model = [];
      state.ask();
    }
  },
};

window.addEventListener("load", state.init);
