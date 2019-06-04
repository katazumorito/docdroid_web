$(document).ready(function() {});

document.getElementById("referPatient").addEventListener("click", () => {
  Swal.fire({
    title: `<strong>Refer a <u>Patient</u>?</strong>`,
    type: "info",
    width: 1000,
    html: `<div class="card card-body">
                            <form action="#" method="POST" id="myform">
                                <div class="form-group">
                                    <div class="row">
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="sendToStreetBarangay" placeholder="Street/Barangay" required>
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="sendToMunicipality" placeholder="Municipality" required>
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="sendToProvince" placeholder="Province" required>
                                    </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-4">
                                        <input id="datepicker2" class="dates form-control"  placeholder="Date" type="text" readonly required>                                      
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="patName" placeholder="Patient's Name" required>
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="docName" placeholder="Writer's Name" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-cetner">
                                    <button type="submit" class="btn btn-primary">Print</button>
                                </div>
                            </form> 

                       `,
    showCloseButton: true,
    showCancelButton: false,
    showConfirmButton: false,
    focusConfirm: false
  });
  //   if (document.getElementById("myform") != null) {
  document.getElementById("myform").addEventListener("submit", function(e) {
    e.preventDefault();
    var sendToStreetBarangay = document.getElementById("sendToStreetBarangay")
      .value;
    var sendToMunicipality = document.getElementById("sendToMunicipality")
      .value;
    var sendToProvince = document.getElementById("sendToProvince").value;

    var datepicker2 = document.getElementById("datepicker2").value;
    var patName = document.getElementById("patName").value;
    var docName = document.getElementById("docName").value;
    window.open(
      `printReferral.html?stb=${sendToStreetBarangay}&stm=${sendToMunicipality}&stp=${sendToProvince}&date=${datepicker2}&patN=${patName}&docN=${docName}`
    );
  });
  //}
  $("#datepicker2").datepicker({
    minDate: 0
    // beforeShowDay: function(date) {
    //   return [date.getDay() == 0, ""];
    // }
  });
});
