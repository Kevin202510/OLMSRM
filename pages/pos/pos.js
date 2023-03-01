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
  var datas;
  var isResolved = false;

  function tableWriter() {
    $.get(
      "pos/invoiceCrudFunction.php",
      { getData: "getData", invoice_number: $("#invoice_number").val() },
      function (data, status) {
        var datas = JSON.parse(data);
        if (datas.length > 0) {
          $("#paymentna").removeAttr("disabled");
        }
        $.each(datas, function (index, value) {
          model.push(value);
        });

        model.forEach((modelss, i) => writer(modelss, i));
      }
    );
  }

  $("body").on("click", "#products", (e) =>
    addCart($(e.currentTarget).data("id"))
  );

  function addCart(val) {
    $("#productCode").val(val);
    var keycode = "13";
    $.get(
      "pos/invoiceCrudFunction.php",
      {
        allProducts: "allProducts",
        product_code: $("#productCode").val(),
      },
      function (data, status) {
        datas = JSON.parse(data);
        if (keycode == "13") {
          if (model.length == 0) {
            // alert("nag add");
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

  $("#productCode").click(function () {
    $("#productsList").empty();
    $.get(
      "products/productsCrudFunction.php",
      { getData: "getData" },
      function (data, status) {
        var datas = JSON.parse(data);
        $.each(datas, function (index, value) {
          let dd = $("#productsList");
          $("<button>", {
            type: "button",
            id: "products",
            "data-id": `${datas[index].product_code}`,
            class: "dropdown-item",
            html: datas[index].product_description,
          }).appendTo(dd);
        });
      }
    );
  });

  $("#productCode").blur(function () {
    $("#productCode").val("");
  });

  $("#productCode").keyup(function () {
    var input, filter, ul, li, a, i;
    input = document.getElementById("productCode");
    filter = input.value.toUpperCase();
    div = document.getElementById("productsList");
    a = div.getElementsByTagName("button");
    for (i = 0; i < a.length; i++) {
      txtValue = a[i].textContent || a[i].innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        a[i].style.display = "";
      } else {
        a[i].style.display = "none";
      }
    }
  });

  function fillDateTime() {
    let transactionDate = new Date().toUTCString().split("G")[0];
    $("#dateAndTime").val(transactionDate);
  }

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

  $("#paymentna").click(async function () {
    const { value: amountPay } = await Swal.fire({
      title: "Input Amount to Pay",
      input: "text",
      inputLabel: "Payment",
      inputPlaceholder: "Amount",
    });

    if (amountPay > parseInt($("#totalAmountInvoice").val())) {
      Swal.fire({
        position: "center",
        icon: "success",
        title: "Transaction Completed",
        showConfirmButton: false,
        timer: 1500,
      });
      setTimeout(() => {
        window.location.href = `pointofsale.php?invoice=${$(
          "#newInvoiceCode"
        ).val()}`;
      }, 1000);
    } else {
      Swal.fire({
        position: "center",
        icon: "warning",
        title: "Kulang Bayad Mo!",
        showConfirmButton: false,
        timer: 1500,
      });
      setTimeout(() => {
        $("#paymentna").click();
      }, 1000);
    }
  });
});
