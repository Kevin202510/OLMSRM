$(document).ready(function () {
  $("#create-new").click(function () {
    location.href = "purchaseMotorcycle/puchaseMotorcycleModal.php";
  });

  $("#back").click(function () {
    history.back();
  });
});
