$(document).ready(function () {
  $("#loginUser").click(function () {
    $.get(
      "authentication/authenticationFunction.php",
      {
        allProducts: "allProducts",
        product_code: $("#productCode").val(),
      },
      function (data, status) {
        datas = JSON.parse(data);
      }
    );
  });
});
