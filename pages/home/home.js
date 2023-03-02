$(document).ready(function () {
  getAllSales();
  function getAllSales() {
    let totalSales = 0;
    let model = [];
    $.get(
      "home/homeFunction.php",
      { getData: "getData" },
      function (data, status) {
        var datas = JSON.parse(data);
        $.each(datas, function (index, value) {
          model.push(value);
        });
        model.forEach((models) =>
          $("#monthlySales").html(
            (totalSales += parseInt(models.transaction_totalAmount))
          )
        );
      }
    );
  }
});
