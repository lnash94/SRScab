
<div class="modal fade " id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog model-lg">
        <div class="modal-content">
            
            <div class="modal-body">
              <div class="col-md-12">
		<label>Select vehicle type</label>
		<select class="form-control" name="type" id="vtype">
			<option value="Luxury">Luxury Cars</option>
			<option value="Genaral">Genaral Cars</option>
			<option value="4wd">Bus,Van,4WD,SUV</option>
			<option value="Classic">Classic And Vintage</option>
		</select></br>
		<label>Licence plate number</label>
		<input type="text" class="form-control" name="licenno" id="licenno" placeholder="Licence number" required></br>
		<label>Select vehicle Brand</label>
		<select class="form-control" name="brand" id="brand">
			<option value="Audi">Audi</option>
			<option value="Benz">Benz</option>
			<option value="BMW">BMW</option>
			<option value="Ford">Ford</option>
			<option value="Honda">Honda</option>
			<option value="hyundai">Hyundai</option>
			<option value="Isuzu">Isuzu</option>
			<option value="Jaguar">Jaguar</option>
			<option value="KIA">KIA</option>
			<option value="micro">Micro</option>
			<option value="Mitsubishi">Mitsubishi</option>
			<option value="Mazda">Mazda</option>
			<option value="Nissan">Nissan</option>
			<option value="Toyota">Toyota</option>
		</select></br>
		<label>Model</label>
		<input type="text" class="form-control" name="model" id="vmodel" placeholder="Enter vehicle model" required></br>
		<label>Number of seats</label>
		<input type="text" class="form-control" name="seats" id="seats" placeholder="Enter number of seats" required></br>
		<label style="margin-right: 15px;">Transmission Type Auto</label>
		<label class="switch">
  		<input type="checkbox" name="Transmission" id="ttype" value="false">
  		<span class="slider round"></span>
		</label>
		<label style="margin-right: 15px; margin-left: 80px;">With driver only</label>
		<label class="switch">
  		<input type="checkbox" name="withdriver" id="checkboxtogal" value="false">
  		<span class="slider round"></span>
		</label></br></br>
		<label>Rate per Day(80km)</label>
		<input type="text" class="form-control" name="rpd" id="rpd" placeholder="Enter rate per day" ></br>
		<label>Excess mileage charge</label>
		<input type="text" class="form-control" name="emc" id="emc" placeholder="Enter Excess mileage charge" required></br>
		<label>Other details</label>
		<input type="text" class="form-control" name="details" id="details" placeholder="Enter details such as A/C,CD player etc."></br>
		</div>  
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a class="btn btn-success btn-ok">Save</a>
            </div>
        </div>
    </div>
</div>
			