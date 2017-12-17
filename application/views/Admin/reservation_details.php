<form id="mainform">
	<div>
		<div class="col-md-7">
			<form class="form-horizontal">
			  	<div class="form-group">
					<label class="control-label col-sm-4" for="rno">Reservation No</label>
					<div class="col-sm-8">
					  <input class="form-control" id="rno" disabled value="<?php echo($newservation['reservation_No'])  ?>">
					</div>
				</div></br></br>
				<div class="form-group">
					<label class="control-label col-sm-4" for="sdate">Start Date</label>
					<div class="col-sm-8">
					  <input class="form-control" id="sdate" disabled  value="<?php echo($newservation['start_Date'])  ?>">
					</div>
				</div></br></br>
				<div class="form-group">
					<label class="control-label col-sm-4" for="edate">End Date</label>
					<div class="col-sm-8">
					  <input class="form-control" id="edate" disabled  value="<?php echo($newservation['end_Date'])?>">
					</div>
				</div></br></br>
				<div class="form-group">
					<label class="control-label col-sm-4" for="email">Customer Email</label>
					<div class="col-sm-8">
					  <input class="form-control" id="email" disabled  value="<?php echo($newservation['customer_email'])  ?>">
					</div>
				</div></br></br>
				<div class="form-group">
					<label class="control-label col-sm-4" for="tel">Customer Contact No</label>
					<div class="col-sm-8">
					  <input class="form-control" id="tel" disabled  value="<?php echo($newservation['customer_contacte_number'])  ?>">
					</div>
				</div></br></br></br>
				<div class="form-group">
					<label class="control-label col-sm-4" for="tel">Pickup Location</label>
				</div>
			</form>
		</div>
		<div class="col-md-5 pull-left">
			<img src="<?php echo base_url().'assets/images/vehicles/'.$newservation['imageLink']?>" height="200px;" width="100%"></br></br>
			<form class="form-horizontal">
				<div class="form-group">
						<label class="control-label col-sm-6" for="tel">Vehicle Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
						<div class="col-sm-6">
						  <input class="form-control" id="vname" disabled  value="<?php echo($newservation['brand']." ".$newservation['model'])  ?>">
						</div>
				</div>
				<div class="form-group">
						<label class="control-label col-sm-6" for="tel">Licence Plate No</label>
						<div class="col-sm-6">
						  <input class="form-control" id="vlno" disabled  value="<?php echo($newservation['L_No'])  ?>">
						</div>
				</div>
			</div>	
		</div>
	<div>
	<div class="col-md-12">
	<div class="col-md-12 col-md-offset-1"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.948127129003!2d79.90251311449762!3d6.8968080950165165!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25a1da978fdb5%3A0x819b333d83da31b2!2sDiyawanna+Rd%2C+Sri+Jayawardenepura+Kotte!5e0!3m2!1sen!2slk!4v1513430545383" width="600" height="400" frameborder="0" style="border:0" allowfullscreen></iframe></div>
		<form class="form-inline">
			<h4 style="color: darkred;">Assign a driver</h4>
			<div class="form-group col-sm-4">
				<label>Driver Name</label>
				<select id="did" class="form-control">
					<option value="">Select</option>
				<?php 
					foreach($drivers as $driver){
						if(in_array($driver['driver_Id'], $reserveddrivers)){
							
						}
						else{
							echo("<option value=\"".$driver['driver_Id']."\">".$driver['Fname']." ".$driver['Lname']."</option>");
						}
						
					}
			
				
				?>
					
				</select>
			</div>
			<div class="form-group col-sm-3">
			<label>&nbsp;</label>
			<button id="assign" class="btn btn-success btn-sm form-control" >Assign driver</button>
			</div>		
		</form>
	</div>
	</div>
	
	
</form>
<script>
$('#assign').click(function(){
	var rno=$('#rno').val();
	var did=$('#did').val();
	$.ajax({
		type:'post',
		url:'<?php echo base_url()?>/Reservation/assigndriver',
		data:{rno:rno,did:did},
		success:function(data){
			if(data!=""){
				$("<div id=\"alert\" class=\"alert alert-success col-md-10 col-md-offset-1\"><strong>Success!</strong>"+data+"</div>").insertBefore('#mainform');
			}
			else
			window.location='<?php echo base_url()?>users/admindashbord/newcustomerreservations';
		}
	});
	
});	
</script>