$(document).ready(function () {
  tableWriter();

  const model = [];

  function tableWriter() {
    $.get(
      "products/productsCrudFunction.php",
      { getData: "getData" },
      function (data, status) {
        var datas = JSON.parse(data);
        console.log(datas);
        $.each(datas, function (index, value) {
          model.push(value);
        });
      }
    );
  }

  $("#searchProductCode").click(function () {
    let transactionDate = new Date().toUTCString().split("G")[0];
    $("#dateAndTime").val(transactionDate);
  });

  $("#searchForm").submit(function (e) {
    e.preventDefault();
    alert($("#productCode").val());
  });

  $("#productCode").keyup(function () {
    alert(model);
  });
});
