if (document.getElementById("login-btn") != null) {
  document.getElementById("login-btn").addEventListener("click", () => {
    var uname = document.getElementById("uname").value;
    var pass = document.getElementById("pass").value;
    var ajax = new XMLHttpRequest();
    var URL = "./php/login.php";
    var data = {
      username: uname,
      password: pass
    };
    var send_data = JSON.stringify(data);
    //alert(data.username);

    ajax.onreadystatechange = function() {
      if (ajax.readyState == 4 && ajax.status == 200) {
        var response = JSON.parse(ajax.responseText);
        console.log(response);
        if (response.login_info.role == 1) {
          window.location = "doctors.php";
        } else if (response.login_info.role == 2) {
          window.location = "blog-home.html";
        } else if (response.login_info.role == 3) {
          window.location = "patient-landing-page.html";
        } else {
          Swal.fire({
            title: "Login Error!",
            text: "Error Credentials or Disabled Account",
            type: "error",
            confirmButtonText: "Ok"
          });
        }
      }
    };
    ajax.open("POST", URL, true);
    ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    ajax.setRequestHeader("Content-type", "application/json;charset=UTF-8");
    ajax.send("send_data=" + send_data);
  });
}

document.getElementById("register-patient").addEventListener("click", e => {
  e.preventDefault();
  Swal.fire({
    title: "<strong>Register <u>Account</u></strong>",
    width: 800,
    padding: "2em",
    type: "info",
    html: `
			<form action="#" method="POST" id="registerPatient">
		<div class="col-sm-12">
		<div class="row">
			<div class="col-sm-4">
			<div class="form-group">
			<label for="l_name" class="text-left">Last Name</label>
			<input type="text" class="form-control" id="l_name" placeholder="Lastname" required>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="form-group">
				<label for="f_name" class="text-left">First Name</label>
				<input type="text" class="form-control" id="f_name" placeholder="Firstname" required>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="form-group">
				<label for="m_name" class="text-left">Middle Name</label>
				<input type="text" class="form-control" id="m_name" placeholder="Middlename" required>
			</div>
		</div>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<div class="form-group">
					<label for="username" class="text-left">Username</label>
					<input type="text" class="form-control" id="username" placeholder="Username" required>
					<small class="d-none text-danger" id="username_error">Username already in use. Please try another username.</small>
				</div>
			</div>

			<div class="col-sm-6">
				<div class="form-group">
					<label for="password" class="text-left">Password</label>
					<input type="text" class="form-control" id="password" placeholder="Password" value = "password123" required>
				</div>
			</div>
			</div>

			<div class="form-group">
			<label for="address" class="text-left">Address</label>
			<input type="text" class="form-control" id="address" placeholder="Address" required >
			</div>
			<div class="form-group">
			</div>
		</div>
		<button class="nw-btn primary-btn mb-1" type="submit">Register</button>
		</form>
			`,
    showCloseButton: true,
    showConfirmButton: false,
    showCancelButton: false,
    focusConfirm: false,
    //closeOnConfirm: false,
    confirmButtonText: '<i class="fa fa-thumbs-up"></i> Add',
    confirmButtonAriaLabel: "Thumbs up, update!",
    cancelButtonText: "Cancel",
    cancelButtonAriaLabel: "Cancel"
  });

  document.getElementById("registerPatient").addEventListener("submit", e => {
    e.preventDefault();
    var l_name = document.getElementById("l_name").value;
    var f_name = document.getElementById("f_name").value;
    var m_name = document.getElementById("m_name").value;
    var address = document.getElementById("address").value;
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    var role = "3";

    var ajax = new XMLHttpRequest();
    var URL = "./php/staff/addstaff.php";
    var data = {
      l_name: l_name,
      f_name: f_name,
      m_name: m_name,
      address: address,
      username: username,
      password: password,
      role: role
    };
    var send_data = JSON.stringify(data);

    ajax.onreadystatechange = function() {
      if (ajax.readyState == 4 && ajax.status == 200) {
        var response = JSON.parse(ajax.responseText);
        console.log(response);
        if (response == "error") {
          //e.preventDefault();
          var element = document.getElementById("username_error");
          element.classList.remove("d-none");
          setTimeout(() => {
            element.classList.add("d-none");
          }, 3000);
        } else {
          //$('#list_of_staff').DataTable().ajax.reload();
          swal.fire(
            "Success!",
            "Successfuly created the account. :)",
            "success"
          );
        }
      }
    };
    ajax.open("POST", URL, true);
    ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    ajax.setRequestHeader("Content-type", "application/json;charset=UTF-8");
    ajax.send("send_data=" + send_data);
  });
});
