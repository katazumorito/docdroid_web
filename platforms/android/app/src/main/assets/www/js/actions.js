document.getElementById("login-btn").addEventListener("click", ()=>{
	var uname = document.getElementById("uname").value;
	var pass = document.getElementById("pass").value;
	var ajax = new XMLHttpRequest();
	var URL = "https://docdroid.000webhostapp.com/login.php";
	var data = {
		username: uname,
		password: pass
	};
	var send_data = JSON.stringify(data);
	//alert(data.username);

	ajax.onreadystatechange = function() {
		if (ajax.readyState == 4 && ajax.status == 200) {
			var response = ajax.responseText;
			//var response_data = JSON.stringify(response);
			console.log(response);
			if (response == 1) {
				window.location = "./secondpage.php";
			}else {
				alert("error credentials mo");
			}

		}
	};
	ajax.open("POST", URL, true);
	ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	ajax.setRequestHeader("Content-type", "application/json;charset=UTF-8");
	ajax.send("send_nudes="+send_data);
});	