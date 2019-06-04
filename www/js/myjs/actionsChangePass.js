function changeme() {
  var url_string = window.location.href;
  var url = new URL(url_string);
  var sId = url.searchParams.get("sId");
  var aId = url.searchParams.get("aId");
  var uId = url.searchParams.get("uId");

  Swal.fire({
    title: `<strong>Change <u>Password</u>?</strong>`,
    type: "warning",
    html: `<div class="card card-body">
                            <form action="# method="POST" id="changePassForm">
                                <div class="form-group">
                                    <input type="password" class="form-control" id="newPass" minlength="3" title="Please input at least 3 characters" required>
                                    <input type="password" class="form-control" id="confirmNewPass" required>
                                    <small id="passErrMsg" style="color: red;"></small>
                                </div>	
                                    <button id="cp" class="btn btn-primary">Change Password</button>
                                </form>
				</div>`,
    showCloseButton: true,
    showCancelButton: false,
    showConfirmButton: false
  });

  document.getElementById("changePassForm").addEventListener("submit", e => {
    e.preventDefault();
    var newpass = document.getElementById("newPass").value;
    var confirmNewPass = document.getElementById("confirmNewPass").value;
    if (newpass == confirmNewPass) {
      // var sId = url.searchParams.get("sId");
      // var aId = url.searchParams.get("aId");
      // var uId = url.searchParams.get("uId");
      var newPassword = document.getElementById("confirmNewPass").value;

      var ajax = new XMLHttpRequest();
      var URL = "./php/patient/changepassword.php";
      var data = {
        p_id: uId,
        newPassword: newPassword
      };
      var send_data = JSON.stringify(data);

      ajax.onreadystatechange = function() {
        if (ajax.readyState == 4 && ajax.status == 200) {
          var response = ajax.responseText;
          console.log(response);
          if (response) {
            swal.fire("Success!", "Successfully changed your password", "info");
          }
        }
      };
      ajax.open("POST", URL, true);
      ajax.setRequestHeader(
        "Content-type",
        "application/x-www-form-urlencoded"
      );
      ajax.setRequestHeader("Content-type", "application/json;charset=UTF-8");
      ajax.send("send_data=" + send_data);
    } else {
      document.getElementById("passErrMsg").innerHTML =
        "Password does not match!";

      setTimeout(() => {
        document.getElementById("passErrMsg").innerHTML = "";
      }, 3000);
    }
  });
}
// function confirmme() {
//   var newpass = document.getElementById("newPass").value;
//   var confirmNewPass = document.getElementById("confirmNewPass").value;
//   if (newpass == confirmNewPass) {
//     alert("same same");
//     console.log("ehhh?");
//   } else {
//     document.getElementById("passErrMsg").innerHTML =
//       "Password does not match!";
//   }
// }
