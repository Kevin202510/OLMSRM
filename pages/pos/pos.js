$(document).ready(function () {
  tableWriter();
  fillDateTime();
  const model = [];
  const newmodel = [];
  const attributes = [
    "product_image",
    "product_code",
    "product_description",
    "product_size",
    "product_saleprice",
    "quantity",
  ];

  let amount = 0;

  function tableWriter() {
    $.get(
      "pos/invoiceCrudFunction.php",
      { getData: "getData", invoice_number: $("#invoice_number").val() },
      function (data, status) {
        var datas = JSON.parse(data);
        // console.log(datas);
        $.each(datas, function (index, value) {
          model.push(value);
        });

        model.forEach((modelss, i) => writer(modelss, i));
      }
    );
  }

  function fillDateTime() {
    let transactionDate = new Date().toUTCString().split("G")[0];
    $("#dateAndTime").val(transactionDate);
  }

  var datas;
  var isResolved = false;

  $("#productCode").keypress(function (event) {
    var keycode = event.keyCode || event.which;
    if (keycode == "13") {
      $.get(
        "pos/invoiceCrudFunction.php",
        {
          allProducts: "allProducts",
          product_code: $("#productCode").val(),
        },
        function (data, status) {
          datas = JSON.parse(data);
          // console.log(datas);
          if (datas.length == 0) {
            alert("Product Not Available");
            $("#productCode").val("");
          } else {
            if (model.length == 0) {
              // alert("nag add");
              $.post(
                "pos/invoiceCrudFunction.php",
                {
                  product_id: datas[0].id,
                  invoice_number: $("#invoice_number").val(),
                  quantity: 1,
                  totalAmount:
                    parseInt(datas[0].product_saleprice) * parseInt(1),
                  addNew: "addNew",
                },
                function (data, status) {
                  if (status) {
                    $("#productCode").val("");
                    amount = 0;
                    $("#main-table").empty();
                    model.length = 0;
                    tableWriter();
                  }
                }
              );
            } else {
              for (let index = 0; index < model.length; index++) {
                if (
                  model[index].product_code == $("#productCode").val() &&
                  model[index].invoice_number == $("#invoice_number").val()
                ) {
                  $.post(
                    "pos/invoiceCrudFunction.php",
                    {
                      product_id: model[index].product_id,
                      invoice_number: model[index].invoice_number,
                      quantity: parseInt(model[index].quantity) + 1,
                      totalAmount:
                        parseInt(model[index].totalAmount) +
                        parseInt(model[index].quantity) *
                          parseInt(model[index].product_saleprice),
                      update: "update",
                    },
                    function (data, status) {
                      if (status) {
                        $("#productCode").val("");
                        amount = 0;
                        $("#main-table").empty();
                        model.length = 0;
                        tableWriter();
                      }
                    }
                  );
                  $("#toAdd").val(0);
                  break;
                } else {
                  console.log(model.length);
                  if (model.length - 1 == index) {
                    $("#toAdd").val(1);
                    $("#toAdd").click();
                  }
                }
              }
            }
          }
        }
      );
    }
  });

  $("#toAdd").click(function () {
    if (parseInt($("#toAdd").val()) > 0) {
      $.post(
        "pos/invoiceCrudFunction.php",
        {
          product_id: datas[0].id,
          invoice_number: $("#invoice_number").val(),
          quantity: 1,
          totalAmount: parseInt(datas[0].product_saleprice) * parseInt(1),
          addNew: "addNew",
        },
        function (data, status) {
          if (status) {
            $("#productCode").val("");
            amount = 0;
            $("#main-table").empty();
            model.length = 0;
            tableWriter();
          }
        }
      );
    }
  });

  function writer(modelss, i) {
    let tr = $("<tr>", {
      id: modelss.id,
    });
    $("<td>", { html: parseInt(i + 1) }).appendTo(tr);
    const attriMap = new Map(Object.entries(modelss));
    attributes.forEach((attri) => {
      if (attri == "product_saleprice") {
        amount += modelss.product_saleprice * modelss.quantity;
        $("#totalAmountInvoice").val(amount);
      }
      $("<td>", { class: "text-wrap", html: attriMap.get(attri) }).appendTo(tr);
    });
    $("#main-table").append(tr);
  }
});
