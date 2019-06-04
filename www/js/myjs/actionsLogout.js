function logoutme() {
  var url_string = window.location.href;
  var url = new URL(url_string);
  var sId = url.searchParams.get("sId");
  var aId = url.searchParams.get("aId");
  Swal.fire({
    title: `<strong>Are you sure?</strong>`,
    type: "warning",
    html: `<div class="card card-body">
													<p>Are you sure you want to logout?</p>
												</div>`,
    showCloseButton: true,
    showCancelButton: true,
    focusConfirm: false,
    confirmButtonText: '<i class="fa fa-thumbs-up"></i> Yes, logout!',
    confirmButtonAriaLabel: "Yes, logout.",
    cancelButtonText: "Cancel",
    cancelButtonAriaLabel: "Thumbs down"
  }).then(result => {
    if (result.value) {
      var sessionId = sId;
      var accountId = aId;
      //alert(sessionId);
      //alert(accountId);
      var ajax = new XMLHttpRequest();
      var URL = "./php/logout.php";

      ajax.onreadystatechange = function() {
        if (ajax.readyState == 4 && ajax.status == 200) {
          var response = JSON.parse(ajax.responseText);
          window.location.href = "index.html";
        }
      };
      ajax.open("POST", URL, true);
      ajax.setRequestHeader(
        "Content-type",
        "application/x-www-form-urlencoded"
      );
      ajax.setRequestHeader("Content-type", "application/json;charset=UTF-8");
      ajax.send();
    }
  });
}
