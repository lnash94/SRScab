<form>
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
					  <input class="form-control" id="edate" disabled  value="<?php echo($newservation['end_Date'])  ?>">
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
						  <input class="form-control" id="tel" disabled  value="<?php echo($newservation['brand']." ".$newservation['model'])  ?>">
						</div>
				</div>
				<div class="form-group">
						<label class="control-label col-sm-6" for="tel">Licence Plate No</label>
						<div class="col-sm-6">
						  <input class="form-control" id="tel" disabled  value="<?php echo($newservation['L_No'])  ?>">
						</div>
				</div>
			</div>	
		</div>
	</div>
	<div>
		
	</div>
	
	
</form>