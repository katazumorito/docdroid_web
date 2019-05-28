

//**************************************ADD STAFF************************************ */
function add_staff(){
	Swal.fire({
		title: '<strong>Add <u>Staff</u></strong>',
		width: 800,
		padding: '2em',
		type: 'info',
		html:
			`
			<form action="#" method="POST" id="addStaffForm">
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
			<label for="role" class="text-left">Role</label>
			<select class="form-control" id="role" placeholder="Role" required>
				<option value="1">Doctor</option>
				<option value="2">Staff</option>
			</select>
			</div>
		</div>
		<button class="nw-btn primary-btn mb-1" type="submit" id="addBtn">Add</button>
		</form>
			`,
		showCloseButton: true,
		showConfirmButton: false,
		showCancelButton: false,
		focusConfirm: false,
		//closeOnConfirm: false,
		confirmButtonText:
			'<i class="fa fa-thumbs-up"></i> Add',
		confirmButtonAriaLabel: 'Thumbs up, update!',
		cancelButtonText:'Cancel',
		cancelButtonAriaLabel: 'Cancel',
		});


	document.getElementById("addStaffForm").addEventListener("submit",(e)=>{
		e.preventDefault();
			var l_name = document.getElementById("l_name").value;
			var f_name = document.getElementById("f_name").value;
			var m_name = document.getElementById("m_name").value;
			var address = document.getElementById("address").value;
			var username = document.getElementById("username").value;
			var password = document.getElementById("password").value;
			var role = document.getElementById("role").value;

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
						if(response == "error"){
							//e.preventDefault();
							var element = document.getElementById("username_error");
								element.classList.remove("d-none");
							setTimeout(()=>{
								element.classList.add("d-none");
							}, 3000);
						}else{
							$('#list_of_staff').DataTable().ajax.reload();
							swal.fire(
								'Success!',
								'Successfuly added the account. :)',
								'success'
							);
						}

					}
				};
				ajax.open("POST", URL, true);
				ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				ajax.setRequestHeader("Content-type", "application/json;charset=UTF-8");
				ajax.send("send_data="+send_data);

	});


}
//**************************************END OF ADD STAFF************************************ */


function edit_staff(a_id){

	var ajax = new XMLHttpRequest();
	var URLedit = "./php/staff/editstaff.php";
	var data = {
		account_id:a_id
	};
	var send_data = JSON.stringify(data);
	//alert(data.username);
	
	ajax.onreadystatechange = function() {
		if (ajax.readyState == 4 && ajax.status == 200) {
			var response = JSON.parse(ajax.responseText);
			//console.log(response[0].l_name);
			Swal.fire({
				title: '<strong>Edit <u>Staff</u></strong>',
				width: 600,
				padding: '2em',
				type: 'warning',
				html:
				  `
				  <div class="row">
				  <div class="col-sm-4">
				  <div class="form-group">
				    <input type="hidden" id="account_id" value="${response[0].account_id}">
					<label for="l_name">Last Name</label>
					<input type="text" class="form-control" id="l_name" placeholder="Lastname" value="${response[0].l_name}">
				  </div>
				 </div>
				 <div class="col-sm-4">
					<div class="form-group">
						<label for="f_name">First Name</label>
						<input type="text" class="form-control" id="f_name" placeholder="Firstname" value="${response[0].f_name}">
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<label for="m_name">Middle Name</label>
						<input type="text" class="form-control" id="m_name" placeholder="Middlename" value="${response[0].m_name}">
					</div>
				</div>
				</div>
				<div class="col-sm-12">
					<div class="form-group">
					<label for="address">Address</label>
					<input type="text" class="form-control" id="address" placeholder="Address" value="${response[0].user_address}">
					</div>
					<div class="form-group">
					<label for="role">Role</label>
					<select class="form-control" id="role" placeholder="Role">
						<option value="${response[0].role}" selected disabled>-${response[0].role}-</option>
						<option value="Doctor">Doctor</option>
						<option value="Staff">Staff</option>
					</select>
					</div>
				</div>
				  `,
				showCloseButton: true,
				showCancelButton: true,
				focusConfirm: false,
				confirmButtonText:
				  '<i class="fa fa-thumbs-up"></i> Update',
				confirmButtonAriaLabel: 'Thumbs up, update!',
				// cancelButtonText:
				//   '<i class="fa fa-thumbs-down"></i>',
				cancelButtonAriaLabel: 'Cancel',
			  }).then((result) => {
				if (result.value) {
		//***************************************UPDATE STARTS HERE*****************************************
						var l_name = document.getElementById("l_name").value;
						var f_name = document.getElementById("f_name").value;
						var m_name = document.getElementById("m_name").value;
						var address = document.getElementById("address").value;
						var account_id = document.getElementById("account_id").value;
						var role = document.getElementById("role").value;
						var ajax = new XMLHttpRequest();
						var URL = "./php/staff/updatestaff.php";
						var data = {
						l_name: l_name,
						f_name: f_name,
						m_name: m_name,
						address: address,
						account_id: account_id,
						role: role
					};
					var send_data = JSON.stringify(data);
					//alert(data.username);
					
					ajax.onreadystatechange = function() {
						if (ajax.readyState == 4 && ajax.status == 200) {
							var response = JSON.parse(ajax.responseText);
							//console.log(response);
							$('#list_of_staff').DataTable().ajax.reload();
							Swal.fire({
								title: 'Updated!',
								padding: '2em',
								type: 'info',
								html:`
									<h3>The Account has been Updated</h3>
								`
									});

						}
					};
					ajax.open("POST", URL, true);
					ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
					ajax.setRequestHeader("Content-type", "application/json;charset=UTF-8");
					ajax.send("send_data="+send_data);

					//*************************************UPDATE ENDS HERE************************************************/
				  
						   }
		});
	}
	};
	ajax.open("POST", URLedit, true);
	ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	ajax.setRequestHeader("Content-type", "application/json;charset=UTF-8");
	ajax.send("send_data="+send_data);
}	

//*********************************RESET PASSWORD STARTS HERE **************************************/
function reset_pass_staff(a_id){
	Swal.fire({
		title: 'Are you sure?',
		text: "Are you sure you want to reset Password of this account?",
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		showCloseButton: true,
		confirmButtonText: 'Yes, Reset Password!'
	}).then((result) => {
		if (result.value) {

			var ajax = new XMLHttpRequest();
					var URL = "./php/staff/resetpassword.php";
					var data = {
						account_id: a_id
					};
					var send_data = JSON.stringify(data);
					
					ajax.onreadystatechange = function() {
						if (ajax.readyState == 4 && ajax.status == 200) {
							var response = JSON.parse(ajax.responseText);
							console.log(response);
							Swal.fire(
								'Done!',
								'The account\'s password has been reset to password123.',
								'success'
							);
						}
					};
					ajax.open("POST", URL, true);
					ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
					ajax.setRequestHeader("Content-type", "application/json;charset=UTF-8");
					ajax.send("send_data="+send_data);

		
		}
	})
}



// ***************************DISABLE STAFF***********************************
// if(document.getElementById("disable_staff")!=null){
	function disable_staff(a_id){

		const swalWithBootstrapButtons = Swal.mixin({
			customClass: {
				confirmButton: 'btn btn-success',
				cancelButton: 'btn btn-danger'
			},
			buttonsStyling: false,
		})
		
		swalWithBootstrapButtons.fire({
			title: 'What do you want to do?',
			text: "Enable or Disable an account",
			type: 'warning',
			showCancelButton: true,
			confirmButtonText: 'Enable Account',
			cancelButtonText: 'Disable Account',
			showCloseButton: true,
			reverseButtons: true
		}).then((result) => {
			if (result.value) { // ENABLE STARTS HERE*****************************************
					var ajax = new XMLHttpRequest();
					var URL = "./php/staff/disablestaff.php";
					var data = {
						account_id: a_id,
						account_status: 'Enabled'
					};
					var send_data = JSON.stringify(data);
					
					ajax.onreadystatechange = function() {
						if (ajax.readyState == 4 && ajax.status == 200) {
							var response = JSON.parse(ajax.responseText);
							console.log(response);
							$('#list_of_staff').DataTable().ajax.reload();
							swalWithBootstrapButtons.fire(
								'Enabled!',
								'The Account has been enabled. :)',
								'success'
							);
						}
					};
					ajax.open("POST", URL, true);
					ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
					ajax.setRequestHeader("Content-type", "application/json;charset=UTF-8");
					ajax.send("send_data="+send_data);

				
			} else if (
				// Read more about handling dismissals
				result.dismiss === Swal.DismissReason.cancel
			) {
				var ajax = new XMLHttpRequest();
					var URL = "./php/staff/disablestaff.php";
					var data = {
						account_id: a_id,
						account_status: 'Disabled'
					};
					var send_data = JSON.stringify(data);
					
					ajax.onreadystatechange = function() {
						if (ajax.readyState == 4 && ajax.status == 200) {
							$('#list_of_staff').DataTable().ajax.reload();
							var response = JSON.parse(ajax.responseText);
							console.log(response);
							swalWithBootstrapButtons.fire(
								'Disabled!',
								'The Account has been disabled. :)',
								'error'
							);
						}
					};
					ajax.open("POST", URL, true);
					ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
					ajax.setRequestHeader("Content-type", "application/json;charset=UTF-8");
					ajax.send("send_data="+send_data);
			}
		})



		// var ajax = new XMLHttpRequest();
		// var URL = "./php/disablestaff.php";
		// var data = {
		// 	account_id: a_id
		// };
		// var send_data = JSON.stringify(data);
		
		// ajax.onreadystatechange = function() {
		// 	if (ajax.readyState == 4 && ajax.status == 200) {
		// 		var response = JSON.parse(ajax.responseText);
		// 		console.log(response);

				


		// 	}
		// };
		// ajax.open("POST", URL, true);
		// ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		// ajax.setRequestHeader("Content-type", "application/json;charset=UTF-8");
		// ajax.send("send_data="+send_data);
	}	
//}

