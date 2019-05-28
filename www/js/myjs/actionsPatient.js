

//**************************************ADD STAFF************************************ */
function add_patient(){
	Swal.fire({
		title: '<strong>Add <u>Patient</u></strong>',
		width: 1000,
		padding: '2em',
		type: 'info',
		allowOutsideClick: false,
		html:
			`
			<form action="#" method="POST" id="addPatientForm">
		<div class="col-sm-12">
		<div class="row">
			<div class="col-sm-4">
			<div class="form-group">
			<label for="l_name" class="text-left">Last Name</label>
			<input type="text" class="form-control" id="l_name" placeholder="Lastname" >
			</div>
		 </div>
		 <div class="col-sm-4">
			<div class="form-group">
				<label for="f_name" class="text-left">First Name</label>
				<input type="text" class="form-control" id="f_name" placeholder="Firstname" >
			</div>
		</div>
		<div class="col-sm-4">
			<div class="form-group">
				<label for="m_name" class="text-left">Middle Name</label>
				<input type="text" class="form-control" id="m_name" placeholder="Middlename" >
			</div>
		</div>
		</div>
		
		<div class="row">
			<div class="col-sm-4">
				<div class="form-group">
					<label for="bdate" class="text-left">Birthdate </label>
					<input type="date" class="form-control form_datetime" id="bdate" placeholder="Birthdate" >
				</div>
			</div>
			<div class="col-sm-4">
				<div class="form-group">
					<label for="age" class="text-left">Age </label>
					<input type="number" class="form-control" id="age" placeholder="Age" min="0" >
				</div>
			</div>
			<div class="col-sm-4">
				<div class="form-group">
					<label for="sex" class="text-left">Sex </label>
					<select id="sex" class="form-control" >
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-4">
				<div class="form-group">
					<label for="mother" class="text-left">Mother </label>
					<input type="text" class="form-control" id="mother" placeholder="Mother's Name" >
				</div>
			</div>

			<div class="col-sm-2">
				<div class="form-group">
					<label for="age" class="text-left">Mother's Age </label>
					<input type="number" class="form-control" id="mAge" placeholder="Age" min="0" >
				</div>
			</div>

			<div class="col-sm-4">
				<div class="form-group">
					<label for="father" class="text-left">Father</label>
					<input type="text" class="form-control" id="father" placeholder="Father's Name" >
				</div>
			</div>

			<div class="col-sm-2">
				<div class="form-group">
					<label for="age" class="text-left">Father's Age </label>
					<input type="number" class="form-control" id="fAge" placeholder="Age" min="0" >
				</div>
			</div>

			</div>

			<div class="form-group">
				<label for="address" class="text-left">Address</label>
				<input type="text" class="form-control" id="address" placeholder="Address"  >
			</div>

			<hr class="my-4">

			<h3>Birth History and Development</h3>
			<div class="row">
				<div class="col-sm-4">
					<div class="form-group">
						<label for="term" class="text-left">Term</label>
						<input type="text" class="form-control" id="term">
					</div>
					<div class="form-group">
						<label for="delivery" class="text-left">Delivery</label>
						<input type="text" class="form-control" id="delivery">
					</div>
					<div class="form-group">
						<label for="birthWeight" class="text-left">Birth Weight</label>
						<input type="text" class="form-control" id="birthWeight">
					</div>
					<div class="form-group">
						<label for="birthLength" class="text-left">Birth Length</label>
						<input type="text" class="form-control" id="birthLength">
					</div>
					<div class="form-group">
						<label for="headCirc" class="text-left">Head Circ.</label>
						<input type="text" class="form-control" id="headCirc">
					</div>
					<div class="form-group">
						<label for="chestCirc" class="text-left">Chest Circ.</label>
						<input type="text" class="form-control" id="chestCirc">
					</div>
					<div class="form-group">
						<label for="abdominalCirc" class="text-left">Abdominal Circ.</label>
						<input type="text" class="form-control" id="abdominalCirc">
					</div>
				</div>

				<div class="col-sm-4">
						<div class="form-group">
							<label for="headUp" class="text-left">Head Up</label>
							<input type="text" class="form-control" id="headUp">
						</div>
						<div class="form-group">
							<label for="diMatarusan" class="text-left">Di matarusan</label>
							<input type="text" class="form-control" id="diMatarusan">
						</div>
						<div class="form-group">
							<label for="satUp" class="text-left">Sat Up</label>
							<input type="text" class="form-control" id="satUp">
						</div>
						<div class="form-group">
							<label for="standUp" class="text-left">Stand Up</label>
							<input type="text" class="form-control" id="standUp">
						</div>
						<div class="form-group">
							<label for="walked" class="text-left">Walked</label>
							<input type="text" class="form-control" id="walked">
						</div>
						<div class="form-group">
							<label for="words" class="text-left">Words</label>
							<input type="text" class="form-control" id="words">
						</div>
						<div class="form-group">
							<label for="sentence" class="text-left">Sentence</label>
							<input type="text" class="form-control" id="sentence">
						</div>
				</div>

				<div class="col-sm-4">
						<div class="form-group">
							<label for="firstTooth" class="text-left">First Tooth</label>
							<input type="text" class="form-control" id="firstTooth">
						</div>
						<div class="form-group">
							<label for="cupTraining" class="text-left">Cup Training</label>
							<input type="text" class="form-control" id="cupTraining">
						</div>
						<div class="form-group">
							<label for="toiletTraining" class="text-left">Toilet Training</label>
							<input type="text" class="form-control" id="toiletTraining">
						</div>
						<div class="form-group">
							<label for="otherBHD" class="text-left">Others</label>
							<textarea rows="5" class="form-control" id="otherBHD"></textarea>
						</div>
				</div>
			</div>

			<hr class="my-4">
			
			<h3>Illness</h3>
			<div class="row">
				<div class="col-sm-4">
					<div class="form-group">
						<label for="allergy" class="text-left">Allergy</label>
						<input type="text" class="form-control" id="allergy">
					</div>
					<div class="form-group">
						<label for="diMatarusan2" class="text-left">di matarusan 2</label>
						<input type="text" class="form-control" id="diMatarusan2">
					</div>
					<div class="form-group">
						<label for="measles" class="text-left">Measles</label>
						<input type="text" class="form-control" id="measles">
					</div>
					<div class="form-group">
						<label for="rubella" class="text-left">Rubella</label>
						<input type="text" class="form-control" id="rubella">
					</div>
				</div>

				<div class="col-sm-4">
						<div class="form-group">
							<label for="mumps" class="text-left">Mumps</label>
							<input type="text" class="form-control" id="mumps">
						</div>
						<div class="form-group">
							<label for="chickenPox" class="text-left">Chicken Pox</label>
							<input type="text" class="form-control" id="chickenPox">
						</div>
						<div class="form-group">
							<label for="diphtheria" class="text-left">Diphtheria</label>
							<input type="text" class="form-control" id="diphtheria">
						</div>
						<div class="form-group">
							<label for="asthma" class="text-left">Asthma</label>
							<input type="text" class="form-control" id="asthma">
						</div>
				</div>

				<div class="col-sm-4">
						<div class="form-group">
							<label for="rheumaticFever" class="text-left">Rheumatic Fever</label>
							<input type="text" class="form-control" id="rheumaticFever">
						</div>
						<div class="form-group">
							<label for="otitisMedia" class="text-left">Otitis Media</label>
							<input type="text" class="form-control" id="otitisMedia">
						</div>
						<div class="form-group">
							<label for="convultion" class="text-left">Convultion</label>
							<input type="text" class="form-control" id="convultion">
						</div>
						<div class="form-group">
							<label for="operations" class="text-left">Operations</label>
							<input type="text" class="form-control" id="operations">
						</div>
				</div>
			</div>

			<div class="form-group">
				<label for="otherIllness" class="text-left">Other illness</label>
				<textarea class="form-control" rows="4" id="otherIllness"></textarea>
			</div>

			<hr class="my-4">
			
			<h3>Feeding History</h3>
			<div class="form-group">
				<label for="typeOfFeeding" class="text-left">Type of Feeding</label>
				<input type="text" class="form-control" id="typeOfFeeding">
			</div>
			<div class="form-group">
				<label for="supplementary" class="text-left">Supplementary</label>
				<input type="text" class="form-control" id="supplementary">
			</div>

			<hr class="my-4">
			
			<h3>Feeding Immunizations</h3>
			<table class="table table-striped">
			<thead>
			<tr>
				<th scope="col"></th>
				<th scope="col">First</th>
				<th scope="col">Second</th>
				<th scope="col">Third</th>
				<th scope="col">Booster</th>
				<th scope="col">Reaction</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th scope="row">BCG</th>
				<td>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" id="bcg1" class="form-check-input" value="">
						</label>
				 </div>
				</td>
				<td>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" id="bcg2" class="form-check-input" value="">
						</label>
				 </div>
				</td>
				<td>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" id="bcg3" class="form-check-input" value="">
						</label>
				 </div>
				</td>
				<td>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" id="bcg4" class="form-check-input" value="">
						</label>
				 </div>
				</td>
				<td>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" id="bcgR" class="form-check-input" value="">
						</label>
				 </div>
				</td>

			</tr>
			<tr>
				<th scope="row">DPT</th>
				<td>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" id="dpt1" class="form-check-input" value="" >
						</label>
				 </div>
				</td>
				<td>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" id="dpt2" class="form-check-input" value="">
						</label>
				 </div>
				</td>
				<td>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" id="dpt3" class="form-check-input" value="">
						</label>
				 </div>
				</td>
				<td>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" id="dpt4" class="form-check-input" value="">
						</label>
				 </div>
				</td>
				<td>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" id="dptR" class="form-check-input" value="">
						</label>
				 </div>
				</td>
			</tr>
			<tr>
				<th scope="row">OPV</th>
				<td>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" id="opv1" class="form-check-input" value="">
						</label>
				 </div>
				</td>
				<td>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" id="opv2" class="form-check-input" value="">
						</label>
				 </div>
				</td>
				<td>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" id="opv3" class="form-check-input" value="">
						</label>
				 </div>
				</td>
				<td>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" id="opv4" class="form-check-input" value="">
						</label>
				 </div>
				</td>
				<td>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" id="opvR" class="form-check-input" value="">
						</label>
				 </div>
				</td>
			</tr>
			<tr>
				<th scope="row">HBV</th>
				<td>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" id="hbv1" class="form-check-input" value="">
						</label>
				 </div>
				</td>
				<td>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" id="hbv2" class="form-check-input" value="">
						</label>
				 </div>
				</td>
				<td>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" id="hbv3" class="form-check-input" value="">
						</label>
				 </div>
				</td>
				<td>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" id="hbv4" class="form-check-input" value="">
						</label>
				 </div>
				</td>
				<td>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" id="hbvR" class="form-check-input" value="">
						</label>
				 </div>
				</td>
			</tr>
			<tr>
				<th scope="row">HiB</th>
				<td>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" id="hib1" class="form-check-input" value="">
						</label>
				 </div>
				</td>
				<td>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" id="hib2" class="form-check-input" value="">
						</label>
				 </div>
				</td>
				<td>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" id="hib3" class="form-check-input" value="">
						</label>
				 </div>
				</td>
				<td>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" id="hib4" class="form-check-input" value="">
						</label>
				 </div>
				</td>
				<td>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" id="hibR" class="form-check-input" value="">
						</label>
				 </div>
				</td>
			</tr>
			<tr>
				<th scope="row">Measles</th>
				<td>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" id="measles1" class="form-check-input" value="">
						</label>
				 </div>
				</td>
				<td>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" id="measles2" class="form-check-input" value="">
						</label>
				 </div>
				</td>
				<td>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" id="measles3" class="form-check-input" value="">
						</label>
				 </div>
				</td>
				<td>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" id="measles4" class="form-check-input" value="">
						</label>
				 </div>
				</td>
				<td>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" id="measlesR" class="form-check-input" value="">
						</label>
				 </div>
				</td>
			</tr>
			<tr>
				<th scope="row">MMR</th>
				<td>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" id="mmr1" class="form-check-input" value="">
						</label>
				 </div>
				</td>
				<td>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" id="mmr2" class="form-check-input" value="">
						</label>
				 </div>
				</td>
				<td>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" id="mmr3" class="form-check-input" value="">
						</label>
				 </div>
				</td>
				<td>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" id="mmr4" class="form-check-input" value="">
						</label>
				 </div>
				</td>
				<td>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" id="mmrR" class="form-check-input" value="">
						</label>
				 </div>
				</td>
			</tr>
			<tr>
				<th scope="row">Varicella</th>
				<td>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" id="varicella1" class="form-check-input" value="">
						</label>
				 </div>
				</td>
				<td>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" id="varicella2" class="form-check-input" value="">
						</label>
				 </div>
				</td>
				<td>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" id="varicella3" class="form-check-input" value="">
						</label>
				 </div>
				</td>
				<td>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" id="varicella4" class="form-check-input" value="">
						</label>
				 </div>
				</td>
				<td>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" id="varicellaR" class="form-check-input" value="">
						</label>
				 </div>
				</td>
			</tr>
			<tr>
				<th scope="row">HAV</th>
				<td>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" id="hav1" class="form-check-input" value="" >
						</label>
				 </div>
				</td>
				<td>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" id="hav2" class="form-check-input" value="">
						</label>
				 </div>
				</td>
				<td>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" id="hav3" class="form-check-input" value="">
						</label>
				 </div>
				</td>
				<td>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" id="hav4" class="form-check-input" value="">
						</label>
				 </div>
				</td>
				<td>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" id="havR" class="form-check-input" value="">
						</label>
				 </div>
				</td>
			</tr>
			<tr>
				<th scope="row">Typhoid Fever</th>
				<td>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" id="typhoidFever1" class="form-check-input" value="">
						</label>
				 </div>
				</td>
				<td>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" id="typhoidFever2" class="form-check-input" value="">
						</label>
				 </div>
				</td>
				<td>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" id="typhoidFever3" class="form-check-input" value="">
						</label>
				 </div>
				</td>
				<td>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" id="typhoidFever4" class="form-check-input" value="">
						</label>
				 </div>
				</td>
				<td>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" id="typhoidFeverR" class="form-check-input" value="">
						</label>
				 </div>
				</td>
			</tr>
			<tr>
				<th scope="row">Flu</th>
				<td>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" id="flu1" class="form-check-input" value="">
						</label>
				 </div>
				</td>
				<td>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox"  id="flu2" class="form-check-input" value="">
						</label>
				 </div>
				</td>
				<td>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" id="flu3" class="form-check-input" value="">
						</label>
				 </div>
				</td>
				<td>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" id="flu4" class="form-check-input" value="">
						</label>
				 </div>
				</td>
				<td>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" id="fluR" class="form-check-input" value="">
						</label>
				 </div>
				</td>
			</tr>
			<tr>
				<th scope="row">TD</th>
				<td>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" id="td1" class="form-check-input" value="">
						</label>
				 </div>
				</td>
				<td>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" id="td2" class="form-check-input" value="">
						</label>
				 </div>
				</td>
				<td>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" id="td3" class="form-check-input" value="">
						</label>
				 </div>
				</td>
				<td>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" id="td4" class="form-check-input" value="">
						</label>
				 </div>
				</td>
				<td>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" id="tdR" class="form-check-input" value="">
						</label>
				 </div>
				</td>
			</tr>
		</tbody>
			</table>

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


		
//******************************ON SUBMIT OF PATIENT FORM*****************************/
	document.getElementById("addPatientForm").addEventListener("submit",(e)=>{
		e.preventDefault();
			var l_name = document.getElementById("l_name").value;
			var f_name = document.getElementById("f_name").value;
			var m_name = document.getElementById("m_name").value;
			var bdate = document.getElementById("bdate").value;
			var age = document.getElementById("age").value;
			var sex = document.getElementById("sex").value;
			var mother = document.getElementById("mother").value;
			var mAge = document.getElementById("mAge").value;
			var father = document.getElementById("father").value;
			var fAge = document.getElementById("fAge").value;
			var address = document.getElementById("address").value;

			var term = document.getElementById("term").value;
			var delivery = document.getElementById("delivery").value;
			var birthWeight = document.getElementById("birthWeight").value;
			var birthLength = document.getElementById("birthLength").value;
			var headCirc = document.getElementById("headCirc").value;
			var chestCirc = document.getElementById("chestCirc").value;
			var abdominalCirc = document.getElementById("abdominalCirc").value;
			var headUp = document.getElementById("headUp").value;
			var diMatarusan = document.getElementById("diMatarusan").value;
			var satUp = document.getElementById("satUp").value;
			var standUp = document.getElementById("standUp").value;
			var walked = document.getElementById("walked").value;
			var words = document.getElementById("words").value;
			var sentence = document.getElementById("sentence").value;
			var firstTooth = document.getElementById("firstTooth").value;
			var cupTraining = document.getElementById("cupTraining").value;
			var toiletTraining = document.getElementById("toiletTraining").value;
			var otherBHD = document.getElementById("otherBHD").value;

			var allergy = document.getElementById("allergy").value;
			var diMatarusan2 = document.getElementById("diMatarusan2").value;
			var measles = document.getElementById("measles").value;
			var rubella = document.getElementById("rubella").value;
			var mumps = document.getElementById("mumps").value;
			var chickenPox = document.getElementById("chickenPox").value;
			var diphtheria = document.getElementById("diphtheria").value;
			var asthma = document.getElementById("asthma").value;
			var rheumaticFever = document.getElementById("rheumaticFever").value;
			var otitisMedia = document.getElementById("otitisMedia").value;
			var convultion = document.getElementById("convultion").value;
			var operations = document.getElementById("operations").value;
			var otherIllness = document.getElementById("otherIllness").value;

			var typeOfFeeding = document.getElementById("typeOfFeeding").value;
			var supplementary = document.getElementById("supplementary").value;

			var bcg1 = document.getElementById("bcg1").checked ? bcg1 = 1 : bcg1 = 0;
			var bcg2 = document.getElementById("bcg2").checked ? bcg2 = 1 : bcg2 = 0;
			var bcg3 = document.getElementById("bcg3").checked ? bcg3 = 1 : bcg3 = 0;
			var bcg4 = document.getElementById("bcg4").checked ? bcg4 = 1 : bcg4 = 0;
			var bcgR = document.getElementById("bcgR").checked ? bcgR = 1 : bcgR = 0;

			var dpt1 = document.getElementById("dpt1").checked ? dpt1 = 1 : dpt1 = 0;
			var dpt2 = document.getElementById("dpt2").checked ? dpt2 = 1 : dpt2 = 0;
			var dpt3 = document.getElementById("dpt3").checked ? dpt3 = 1 : dpt3 = 0;
			var dpt4 = document.getElementById("dpt4").checked ? dpt4 = 1 : dpt4 = 0;
			var dptR = document.getElementById("dptR").checked ? dptR = 1 : dptR = 0;

			var opv1 = document.getElementById("opv1").checked ? opv1 = 1 : opv1 = 0;
			var opv2 = document.getElementById("opv2").checked ? opv2 = 1 : opv2 = 0;
			var opv3 = document.getElementById("opv3").checked ? opv3 = 1 : opv3 = 0;
			var opv4 = document.getElementById("opv4").checked ? opv4 = 1 : opv1 = 0;
			var opvR = document.getElementById("opvR").checked ? opvR = 1 : opv1 = 0;

			var hbv1 = document.getElementById("hbv1").checked ? hbv1 = 1 : hbv1 = 0;
			var hbv2 = document.getElementById("hbv2").checked ? hbv2 = 1 : hbv2 = 0;
			var hbv3 = document.getElementById("hbv3").checked ? hbv3 = 1 : hbv3 = 0;
			var hbv4 = document.getElementById("hbv4").checked ? hbv4 = 1 : hbv4 = 0;
			var hbvR = document.getElementById("hbvR").checked ? hbvR = 1 : hbvR = 0;

			var hib1 = document.getElementById("hib1").checked ? hib1 = 1 : hib1 = 0;
			var hib2 = document.getElementById("hib2").checked ? hib2 = 1 : hib2 = 0;
			var hib3 = document.getElementById("hib3").checked ? hib3 = 1 : hib3 = 0;
			var hib4 = document.getElementById("hib4").checked ? hib4 = 1 : hib4 = 0;
			var hibR = document.getElementById("hibR").checked ? hibR = 1 : hibR = 0;

			var measles1 = document.getElementById("measles1").checked ? measles1 = 1 : measles1 = 0;
			var measles2 = document.getElementById("measles2").checked ? measles2 = 1 : measles2 = 0;
			var measles3 = document.getElementById("measles3").checked ? measles3 = 1 : measles3 = 0;
			var measles4 = document.getElementById("measles4").checked ? measles4 = 1 : measles4 = 0;
			var measlesR = document.getElementById("measlesR").checked ? measlesR = 1 : measlesR = 0;

			var mmr1 = document.getElementById("mmr1").checked ? mmr1 = 1 : mmr1 = 0;
			var mmr2 = document.getElementById("mmr2").checked ? mmr2 = 1 : mmr2 = 0;
			var mmr3 = document.getElementById("mmr3").checked ? mmr3 = 1 : mmr3 = 0;
			var mmr4 = document.getElementById("mmr4").checked ? mmr4 = 1 : mmr4 = 0;
			var mmrR = document.getElementById("mmrR").checked ? mmrR = 1 : mmrR = 0;

			var varicella1 = document.getElementById("varicella1").checked ? varicella1 = 1 : varicella1 = 0;
			var varicella2 = document.getElementById("varicella2").checked ? varicella2 = 1 : varicella2 = 0;
			var varicella3 = document.getElementById("varicella3").checked ? varicella3 = 1 : varicella3 = 0;
			var varicella4 = document.getElementById("varicella4").checked ? varicella4 = 1 : varicella4 = 0;
			var varicellaR = document.getElementById("varicellaR").checked ? varicellaR = 1 : varicellaR = 0;

			var hav1 = document.getElementById("hav1").checked ? hav1 = 1 : hav1 = 0;
			var hav2 = document.getElementById("hav2").checked ? hav2 = 1 : hav2 = 0;
			var hav3 = document.getElementById("hav3").checked ? hav3 = 1 : hav3 = 0;
			var hav4 = document.getElementById("hav4").checked ? hav4 = 1 : hav4 = 0;
			var havR = document.getElementById("havR").checked ? havR = 1 : havR = 0;

			var typhoidFever1 = document.getElementById("typhoidFever1").checked ? typhoidFever1 = 1 : typhoidFever1 = 0;
			var typhoidFever2 = document.getElementById("typhoidFever2").checked ? typhoidFever2 = 1 : typhoidFever2 = 0;
			var typhoidFever3 = document.getElementById("typhoidFever3").checked ? typhoidFever3 = 1 : typhoidFever3 = 0;
			var typhoidFever4 = document.getElementById("typhoidFever4").checked ? typhoidFever4 = 1 : typhoidFever4 = 0;
			var typhoidFeverR = document.getElementById("typhoidFeverR").checked ? typhoidFeverR = 1 : typhoidFeverR = 0;

			var flu1 = document.getElementById("flu1").checked ? flu1 = 1 : flu1 = 0;
			var flu2 = document.getElementById("flu2").checked ? flu2 = 1 : flu2 = 0;
			var flu3 = document.getElementById("flu3").checked ? flu3 = 1 : flu3 = 0;
			var flu4 = document.getElementById("flu4").checked ? flu4 = 1 : flu4 = 0;
			var fluR = document.getElementById("fluR").checked ? fluR = 1 : fluR = 0;

			var td1 = document.getElementById("td1").checked ? td1 = 1 : td1 = 0;
			var td2 = document.getElementById("td2").checked ? td2 = 1 : td2 = 0;
			var td3 = document.getElementById("td3").checked ? td3 = 1 : td3 = 0;
			var td4 = document.getElementById("td4").checked ? td4 = 1 : td4 = 0;
			var tdR = document.getElementById("tdR").checked ? tdR = 1 : tdR = 0;
			//alert(bcg1+" "+bcg2+" "+bcg3+" "+bcg4+" "+bcgR);

				var ajax = new XMLHttpRequest();
				var URL = "./php/patient/addPatient.php";
				var data = {
					l_name: l_name,
					f_name: f_name,
					m_name: m_name,
					bdate: bdate,
					age:age,
					sex: sex,
					mother: mother,
					mAge: mAge,
					father: father,
					fAge: fAge,
					address: address,
					term: term,
					delivery: delivery,
					birthWeight: birthWeight,
					birthLength: birthLength,
					headCirc: headCirc,
					chestCirc: chestCirc,
					abdominalCirc: abdominalCirc,
					headUp: headUp,
					diMatarusan: diMatarusan,
					satUp: satUp,
					standUp: standUp,
					walked: walked,
					words:words,
					sentence: sentence,
					firstTooth: firstTooth,
					cupTraining: cupTraining,
					toiletTraining:toiletTraining,
					otherBHD: otherBHD,
					allergy: allergy,
					diMatarusan2: diMatarusan2,
					measles: measles,
					rubella: rubella,
					mumps: mumps,
					chickenPox: chickenPox,
					diphtheria:diphtheria,
					asthma: asthma,
					rheumaticFever: rheumaticFever,
					otitisMedia: otitisMedia,
					convultion: convultion,
					operations: operations,
					otherIllness: otherIllness,
					typeOfFeeding: typeOfFeeding,
					supplementary: supplementary,
					bcg1: bcg1,
					bcg2: bcg2,
					bcg3: bcg3,
					bcg4: bcg4,
					bcgR: bcgR,
					dpt1: dpt1,
					dpt2: dpt2,
					dpt3: dpt3,
					dpt4: dpt4,
					dptR: dptR,
					opv1: opv1,
					opv2: opv2,
					opv3: opv3,
					opv4: opv4,
					opvR: opvR,
					hbv1: hbv1,
					hbv2: hbv2,
					hbv3: hbv3,
					hbv4: hbv4,
					hbvR: hbvR,
					hib1: hib1,
					hib2: hib2,
					hib3: hib3,
					hib4: hib4,
					hibR: hibR,
					measles1: measles1,
					measles2: measles2,
					measles3: measles3,
					measles4: measles4,
					measlesR: measlesR,
					mmr1: mmr1,
					mmr2: mmr2,
					mmr3: mmr3,
					mmr4: mmr4,
					mmrR: mmrR,
					varicella1: varicella1,
					varicella2: varicella2,
					varicella3: varicella3,
					varicella4: varicella4,
					varicellaR: varicellaR,
					hav1: hav1,
					hav2: hav2,
					hav3: hav3,
					hav4: hav4,
					havR: havR,
					typhoidFever1: typhoidFever1,
					typhoidFever2: typhoidFever2,
					typhoidFever3: typhoidFever3,
					typhoidFever4: typhoidFever4,
					typhoidFeverR: typhoidFeverR,
					flu1: flu1,
					flu2: flu2,
					flu3: flu3,
					flu4: flu4,
					fluR: fluR,
					td1: td1,
					td2: td2,
					td3: td3,
					td4: td4,
					tdR: tdR,
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
							}, 3000);//after 3sec remove the error message
						}else{
							$('#example').DataTable().ajax.reload();
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
//**************************************END OF ADD PATIENT************************************ */


function edit_patient(a_id){

	var ajax = new XMLHttpRequest();
	var URLedit = "./php/patient/editpatient.php";
	var data = {
		p_id:a_id
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
				    <input type="hidden" id="p_id" value="${response[0].p_id}">
					<label for="l_name">Last Name</label>
					<input type="text" class="form-control" id="l_name" placeholder="Lastname" value="${response[0].p_l_name}">
				  </div>
				 </div>
				 <div class="col-sm-4">
					<div class="form-group">
						<label for="f_name">First Name</label>
						<input type="text" class="form-control" id="f_name" placeholder="Firstname" value="${response[0].p_f_name}">
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<label for="m_name">Middle Name</label>
						<input type="text" class="form-control" id="m_name" placeholder="Middlename" value="${response[0].p_m_name}">
					</div>
				</div>
				</div>
				<div class="col-sm-12">
					<div class="form-group">
					<label for="address">Address</label>
					<input type="text" class="form-control" id="address" placeholder="Address" value="${response[0].p_address}">
					</div>
					<div class="form-group">
					<label for="sex">Sex</label>
					<select class="form-control" id="sex" placeholder="Sex">
						<option value="${response[0].role}" selected disabled>-${response[0].role}-</option>
						<option value="Male">Male</option>
						<option value="Female">Female</option>
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
						var address = document.getElementById("bdate").value;
						var age = document.getElementById("age").value;
						var sex = document.getElementById("sex").value;
						var ajax = new XMLHttpRequest();
						var URL = "./php/patient/updatepatient.php";
						var data = {
						l_name: l_name,
						f_name: f_name,
						m_name: m_name,
						address: address,
						p_id: p_id,
						sex: sex
					};
					var send_data = JSON.stringify(data);
					//alert(data.username);
					
					ajax.onreadystatechange = function() {
						if (ajax.readyState == 4 && ajax.status == 200) {
							var response = JSON.parse(ajax.responseText);
							//console.log(response);
							$('#example').DataTable().ajax.reload();
							Swal.fire({
								title: 'Updated!',
								padding: '2em',
								type: 'info',
								html:`
									<h3>Patient Info has been updated</h3>
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
							$('#example').DataTable().ajax.reload();
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
							$('#example').DataTable().ajax.reload();
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



	}	
//}

