$(document).ready(function () {
  tableWriter();
  fillDateTime();
  const model = [];
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
          if (datas.length == 0) {
            alert("Product Not Available");
            $("#productCode").val("");
          } else {
            if (model.length == 0) {
              alert("nag add");
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
                    amount = 0;
                    $("#main-table").empty();
                    model.length = 0;
                    tableWriter();
                  }
                }
              );
            } else {
              model.some((value) => {
                if (value.product_code == $("#productCode").val()) {
                  $.post(
                    "pos/invoiceCrudFunction.php",
                    {
                      product_id: value.product_id,
                      invoice_number: value.invoice_number,
                      quantity: parseInt(value.quantity) + 1,
                      totalAmount:
                        parseInt(value.totalAmount) +
                        parseInt(value.quantity) *
                          parseInt(value.product_saleprice),
                      update: "update",
                    },
                    function (data, status) {
                      if (status) {
                        amount = 0;
                        $("#main-table").empty();
                        model.length = 0;
                        tableWriter();
                      }
                    }
                  );
                } else {
                  console.log("Wala pa sa array");
                  // $.post(
                  //   "pos/invoiceCrudFunction.php",
                  //   {
                  //     product_id: datas[0].id,
                  //     invoice_number: $("#invoice_number").val(),
                  //     quantity: 1,
                  //     totalAmount:
                  //       parseInt(datas[0].product_saleprice) * parseInt(1),
                  //     addNew: "addNew",
                  //   },
                  //   function (data, status) {
                  //     if (status) {
                  //       amount = 0;
                  //       $("#main-table").empty();
                  //       model.length = 0;
                  //       tableWriter();
                  //     }
                  //   }
                  // );
                }
              });
              // model.forEach((models) => {
              //   if (models.product_code == $("#productCode").val()) {
              //     alert("nag update");
              //     $.post(
              //       "pos/invoiceCrudFunction.php",
              //       {
              //         product_id: models.product_id,
              //         invoice_number: models.invoice_number,
              //         quantity: parseInt(models.quantity) + 1,
              //         totalAmount:
              //           parseInt(models.totalAmount) +
              //           parseInt(models.quantity) *
              //             parseInt(models.product_saleprice),
              //         update: "update",
              //       },
              //       function (data, status) {
              //         if (status) {
              //           amount = 0;
              //           $("#main-table").empty();
              //           model.length = 0;
              //           tableWriter();
              //         }
              //       }
              //     );
              //   } else {
              //     model.some((item) => {
              //       if (item.product_code != $("#productCode").val()) {
              //         alert("wala");
              //         $.post(
              //           "pos/invoiceCrudFunction.php",
              //           {
              //             product_id: datas[0].id,
              //             invoice_number: $("#invoice_number").val(),
              //             quantity: 1,
              //             totalAmount:
              //               parseInt(datas[0].product_saleprice) * parseInt(1),
              //             addNew: "addNew",
              //           },
              //           function (data, status) {
              //             if (status) {
              //               amount = 0;
              //               $("#main-table").empty();
              //               model.length = 0;
              //               tableWriter();
              //             }
              //           }
              //         );
              //       }
              //     });
              //   }
              // });
            }
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
