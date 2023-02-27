import fetch from "../modules/fetcher.js";

$("body").on("click", "#edit", async (e) =>
  state.show($(e.currentTarget).data("id"))
);
$("body").on("click", "#delete", (e) =>
  state.delete($(e.currentTarget).data("id"))
);

const state = {
  entity: "brands",
  attributes: ["brand_display_name", "brand_logo"],
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
    state.btnSave.innerHTML = "Save Changes";
    state.inputMethod.setAttribute("name", "addNew");
    state.btnSave.addEventListener("click", state.save);
    fetch.showModal();
  },
  save: async (e) => {
    e.preventDefault();
    let params = $("#formData").serializeArray();
    // console.log(params);
    let model = await fetch.save(state.entity, params);
    if (model) {
      $("#main-table").empty();
      state.model = [];
      state.ask();
      $("#exampleModal").modal("hide");
    }
  },
  show: (i) => {
    state.activeIndex = i;
    state.btnSave.innerHTML = "Update Changes";
    state.inputMethod.setAttribute("name", "update");
    state.btnSave.addEventListener("click", state.update);
    fetch.showOnModal(state.model[i]);
  },
  update: async () => {
    let params = $("#formData").serializeArray();
    let model = await fetch.update(state.entity, params);
    if (model) {
      $("#main-table").empty();
      state.model = [];
      state.ask();
      $("#exampleModal").modal("hide");
    }
  },
  delete: async (i) => {
    // alert(i);
    let params = { id: i, delete: "delete" };
    let res = await fetch.remove(state.entity, params);
    if (res) {
      $("#main-table").empty();
      state.model = [];
      state.ask();
    }
  },
};

window.addEventListener("load", state.init);
