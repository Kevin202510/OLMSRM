$(document).ready(function () {
  $("#loginUser").click(function () {
    let form = {
      user_email: $("#user_email").val(),
      user_password: $("#user_password").val(),
      loginUser: "loginUser",
    };

    $.post(
      "authentication/authenticationFunction.php",
      form,
      function (data, status) {
        var datas = JSON.parse(data);
        if (datas.length > 0) {
          Swal.fire({
            position: "top-end",
            icon: "success",
            title: `Welcome Back ${
              datas[0].user_fname +
              " " +
              datas[0].user_mname +
              " " +
              datas[0].user_lname
            }`,
            showConfirmButton: false,
            timer: 1000,
          });
          setTimeout(() => {
            window.location.href = "pages/index.php";
          }, 1000);
        }
      }
    );
  });
});
