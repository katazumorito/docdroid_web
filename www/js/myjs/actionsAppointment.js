$(document).ready(function() {
  var appointmentForm = document.getElementById("appointment-form");
  //ADD APPOINTMENT
  if (appointmentForm != null) {
    appointmentForm.addEventListener("submit", e => {
      e.preventDefault();
      Swal.fire({
        title: "Are you sure?",
        text: "Are you sure you want to book an Appointment?",
        type: "warning",
        showCancelButton: true,
        confirmButtonText: "Yes, submit it!"
      }).then(result => {
        if (result.value) {
          var bLname = document.getElementById("bLname").value;
          var bFname = document.getElementById("bFname").value;
          var bMname = document.getElementById("bMname").value;
          var phone = document.getElementById("phone").value;
          var email = document.getElementById("email").value;
          var bookDate = document.getElementById("datepicker2").value;
          var message = document.getElementById("message").value;
          //alert(phone);
          var ajax = new XMLHttpRequest();
          var URL = "./php/appointment/addappointment.php";
          var data = {
            bLname: bLname,
            bFname: bFname,
            bMname: bMname,
            phone: phone,
            email: email,
            bookDate: bookDate,
            message: message
          };
          var send_data = JSON.stringify(data);

          ajax.onreadystatechange = function() {
            if (ajax.readyState == 4 && ajax.status == 200) {
              var response = ajax.responseText;
              console.log(response);
              if (response == "error") {
                swal.fire(
                  "Opps!",
                  "Please fill out Appointment Date. :)",
                  "warning"
                );
              } else if (response == "error_rebook") {
                swal.fire(
                  "Opps!",
                  "You already booked this Date! Please try Another Date :)",
                  "warning"
                );
              } else {
                swal
                  .fire(
                    "Success!",
                    `Successfuly booked your appointment. Your Queue number is ${response}. Please wait for your SMS notification :)`,
                    "success"
                  )
                  .then(result => {
                    if (result.value) {
                      document.location.reload(true);
                    }
                  });
              }
            }
          };
          ajax.open("POST", URL, true);
          ajax.setRequestHeader(
            "Content-type",
            "application/x-www-form-urlencoded"
          );
          ajax.setRequestHeader(
            "Content-type",
            "application/json;charset=UTF-8"
          );
          ajax.send("send_data=" + send_data);
        }
      });
    });
  }

  //NOTIFY NEXT PATIENT

  var notifyBtn = document.getElementById("notify-patient");
  if (notifyBtn != null) {
    notifyBtn.addEventListener("click", () => {
      var ajax = new XMLHttpRequest();
      var URL = "./php/appointment/notifynextpatient.php";
      //  var send_data = JSON.stringify(data);

      ajax.onreadystatechange = function() {
        if (ajax.readyState == 4 && ajax.status == 200) {
          var response = JSON.parse(ajax.responseText);
          console.log(response);
          Swal.fire({
            title: `<strong>Notify <u>${
              response.mydata.fullname
            }</u>?</strong>`,
            type: "info",
            html: `<div class="card card-body">
									<p>Are you sure you want to notify ${response.mydata.fullname}?s</p>
									<p class="float-left">Address: ${response.mydata.address}</p>
								</div>`,
            showCloseButton: true,
            showCancelButton: true,
            focusConfirm: false,
            confirmButtonText: '<i class="fa fa-thumbs-up"></i> Great!',
            confirmButtonAriaLabel: "Thumbs up, great!",
            cancelButtonText: "Cancel",
            cancelButtonAriaLabel: "Thumbs down"
          }).then(result => {
            if (result.value) {
              document.location.reload(true);
            }
          });
        }
      };
      ajax.open("POST", URL, true);
      ajax.setRequestHeader(
        "Content-type",
        "application/x-www-form-urlencoded"
      );
      ajax.setRequestHeader("Content-type", "application/json;charset=UTF-8");
      ajax.send();
    });
  }
});
function finished(id) {
  Swal.fire({
    title: "Are you sure?",
    text: "Are you sure you want to finish this appointment?",
    type: "warning",
    showCancelButton: true,
    confirmButtonText: "Yes, finish it!"
  }).then(result => {
    if (result.value) {
      var ajax = new XMLHttpRequest();
      var URL = "./php/appointment/controlsappointment.php";
      var data = {
        id: id,
        status: "Finished"
      };
      var send_data = JSON.stringify(data);

      ajax.onreadystatechange = function() {
        if (ajax.readyState == 4 && ajax.status == 200) {
          var response = ajax.responseText;
          $("#list_of_appointment")
            .DataTable()
            .ajax.reload();
          $("#list_of_todays_appointment")
            .DataTable()
            .ajax.reload();
            $("#list_of_parked_numbers")
              .DataTable()
              .ajax.reload();
        }
      };
      ajax.open("POST", URL, true);
      ajax.setRequestHeader(
        "Content-type",
        "application/x-www-form-urlencoded"
      );
      ajax.setRequestHeader("Content-type", "application/json;charset=UTF-8");
      ajax.send("send_data=" + send_data);
    }
  });
}

function park(id) {
  Swal.fire({
    title: "Park this number?",
    text: "This action will PARK the number",
    type: "warning",
    showCancelButton: true,
    confirmButtonText: "Yes, park it!"
  }).then(result => {
    if (result.value) {
      var ajax = new XMLHttpRequest();
      var URL = "./php/appointment/controlsappointment.php";
      var data = {
        id: id,
        status: "Parked"
      };
      var send_data = JSON.stringify(data);

      ajax.onreadystatechange = function() {
        if (ajax.readyState == 4 && ajax.status == 200) {
          var response = ajax.responseText;
          $("#list_of_appointment")
            .DataTable()
            .ajax.reload();
          $("#list_of_todays_appointment")
            .DataTable()
            .ajax.reload();
          $("#list_of_parked_numbers")
            .DataTable()
            .ajax.reload();
        }
      };
      ajax.open("POST", URL, true);
      ajax.setRequestHeader(
        "Content-type",
        "application/x-www-form-urlencoded"
      );
      ajax.setRequestHeader("Content-type", "application/json;charset=UTF-8");
      ajax.send("send_data=" + send_data);
    }
  });
}

function notify(id, name) {
 Swal.fire({
    title: `Notify ${name}?`,
    text: `This action will send a SMS notification to ${name}.`,
    type: "warning",
    showCancelButton: true,
    confirmButtonText: `Yes, notify! ${name}`
  }).then(result => {
    if (result.value) {
      var ajax = new XMLHttpRequest();
      var URL = "./php/appointment/notifypatient.php";
      var data = {
        id: id,
      };
      var send_data = JSON.stringify(data);

      ajax.onreadystatechange = function() {
        if (ajax.readyState == 4 && ajax.status == 200) {
          var response = ajax.responseText;
         Swal.fire({
          title: `Info`,
          text: ` ${response}.`,
          type: "info",
          showCancelButton: false,
          confirmButtonText: `Ok, Thanks!`
        })
        }
      }
      ajax.open("POST", URL, true);
      ajax.setRequestHeader(
        "Content-type",
        "application/x-www-form-urlencoded"
      );
      ajax.setRequestHeader("Content-type", "application/json;charset=UTF-8");
      ajax.send("send_data=" + send_data);
    }
  });
}
function cancel_app(id) {
  Swal.fire({
    title: "Cancel this Appointment?",
    text: "This action will cancel the appointment.",
    type: "warning",
    showCancelButton: true,
    confirmButtonText: "Yes, cancel it!",
    cancelButtonText: "No, don't cancel it!"
  }).then(result => {
    if (result.value) {
      var ajax = new XMLHttpRequest();
      var URL = "./php/appointment/controlsappointment.php";
      var data = {
        id: id,
        status: "Canceled"
      };
      var send_data = JSON.stringify(data);

      ajax.onreadystatechange = function() {
        if (ajax.readyState == 4 && ajax.status == 200) {
          var response = ajax.responseText;
          $("#list_of_appointment")
            .DataTable()
            .ajax.reload();
          $("#list_of_todays_appointment")
            .DataTable()
            .ajax.reload();
          $("#list_of_parked_numbers")
            .DataTable()
            .ajax.reload();
        }
      };
      ajax.open("POST", URL, true);
      ajax.setRequestHeader(
        "Content-type",
        "application/x-www-form-urlencoded"
      );
      ajax.setRequestHeader("Content-type", "application/json;charset=UTF-8");
      ajax.send("send_data=" + send_data);
    }
  });
}
