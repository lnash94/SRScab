<div style="margin-top: 100px;"></div>
<div class="container">	
		<ol class="breadcrumb">
			<li><a href="index.html">Admin</a></li>
			<li class="active">Manage Vehicle</li>
			<li class="active">Edit</li>
		</ol>
		<header class="page-header" id="pheader">
					<h1 class="page-title">Edit Vehicle</h1>
		</header>
		<div id="newvehicleform" class="col-md-10 col-md-offset-1" name="<?php echo($vehicle['L_No']); ?>">
		<?php echo form_open('Addvehicle/add')?>
		<div class="col-md-7">
		<label>Select vehicle type</label>
		<select class="form-control" name="type" id="vtype">
			<option value="Luxury">Luxury Cars</option>
			<option value="Genaral">Genaral Cars</option>
			<option value="4wd">Bus,Van,4WD,SUV</option>
			<option value="Classic">Classic And Vintage</option>
		</select></br>
		<label>Licence plate number</label>
		<!--loading relevent data to fields-->
		<input type="text" class="form-control" name="licenno" id="licenno" placeholder="Licence number" required value="<?php echo($vehicle['L_No']); ?>"></br>
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
			<option value="LandRover">LandRover</option>
			<option value="micro">Micro</option>
			<option value="Mitsubishi">Mitsubishi</option>
			<option value="Mazda">Mazda</option>
			<option value="Nissan">Nissan</option>
			<option value="Toyota">Toyota</option>
		</select></br>
		<label>Model</label>
		<input type="text" class="form-control" name="model" id="vmodel" placeholder="Enter vehicle model" required value="<?php echo($vehicle['model']); ?>"></br>
		<label>Number of seats</label>
		<input type="text" class="form-control" name="seats" id="seats" placeholder="Enter number of seats" required value="<?php echo($vehicle['No_seats']); ?>"></br>
		<label style="margin-right: 15px;">Transmission Type Auto</label>
		<label class="switch">
  		<input type="checkbox" name="Transmission" id="ttype" value="Manual">
  		<span class="slider round"></span>
		</label>
		<label style="margin-right: 15px; margin-left: 80px;">With driver only</label>
		<label class="switch">
  		<input type="checkbox" name="withdriver" id="checkboxtogal" value="Without driver">
  		<span class="slider round"></span>
		</label></br></br>
		<label>Rate per Day(80km)</label>
		<input type="text" class="form-control" name="rpd" id="rpd" placeholder="Enter rate per day" value="<?php echo($vehicle['rate_per_day']); ?>" ></br>
		<label>Excess mileage charge</label>
		<input type="text" class="form-control" name="emc" id="emc" placeholder="Enter Excess mileage charge" required value="<?php echo($vehicle['excess_mileage']); ?>"></br>
		<label>Other details</label>
		<input type="text" class="form-control" name="details" id="details" placeholder="Enter details such as A/C,CD player etc." value="<?php echo($vehicle['details']); ?>"></br>
		<button type="button" class="btn btn-success btn-md" id="updatebtn">Save</button>
		</div>
		<input type="hidden" name="imageLink" id="imageLink" value="<?php echo $path?>">
		</form>
		
		<?php echo form_open_multipart('upload/index')?>
		<div class="pull-right col-md-4">
		<label>Vehicle image</label>
		<input type="file" name="userfile"/></br>
		<button type="submit" class="btn btn-md" name="uploadbtn"><i class="fa fa-folder-open" aria-hidden="true"></i>Upload</button></br></br>
		<img src="<?php echo base_url().'assets/images/vehicles/'.$path?>" height="170px;" width="100%"></div>
		</form>
	
	</div>	
</div>
<script>
$(document).ready(function(){
	//initialize dropdowns an togal buttons
    $('#vtype').val('<?php echo($vehicle['type']); ?>');
	$('#brand').val('<?php echo($vehicle['brand']); ?>');
	if("<?php echo($vehicle['with_driver']); ?>"=="With driver"){
		$('#checkboxtogal').prop('checked', true);
	}
	if("<?php echo($vehicle['transmission_type']); ?>"=="Auto"){
		$('#ttype').prop('checked', true);
	}
});
$('#checkboxtogal').on('change',function(){
		if(this.checked){
			
			document.getElementById("checkboxtogal").value="With driver";
		}
		else{
			document.getElementById("checkboxtogal").value="Without driver";
		}
	});
$('#ttype').on('change',function(){
		
		if(this.checked){
			
			document.getElementById("ttype").value="Auto";
		}
		else{
			document.getElementById("ttype").value="Manual";
		}
	});
$('#updatebtn').click(function(){
		var type=$('#vtype').val();
		var licenno=$('#licenno').val();
		var brand=$('#brand').val();
		var vmodel=$('#vmodel').val();
		var seats=$('#seats').val();
		var ttype=$('#ttype').val();
		var rpd=$('#rpd').val();
		var emc=$('#emc').val();
		var details=$('#details').val();
		var withdriver=$('#checkboxtogal').val();
		var imageLink=$('#imageLink').val();
		var lodlicenno=$('#newvehicleform').attr('name');
				$.ajax({
					type:'post',
					data:{'type':type,'licenno':licenno,'brand':brand,'model':vmodel,'seats':seats, 'details':details,'withdriver':withdriver,'imageLink':imageLink,'ttype':ttype,'rpd':rpd,emc:emc,lodlicenno:lodlicenno},
					url:'<?php echo base_url('editvehicles/edit')?>',
					success:function(data){
						if($('#alert')!=null){
							$('#alert').remove();
						}
						if(data=="success"){
							$("<div id=\"alert\" class=\"alert alert-success col-md-10 col-md-offset-1\"><strong>Success!</strong>New Vehicle Successfully added to the system</div>").insertAfter('#pheader');
							window.scrollTo(0,0);
							
						}
						else{
						$("<div id=\"alert\" class=\"alert alert-danger col-md-10 col-md-offset-1\"><strong>Error!</strong>"+data+"</div>").insertAfter('#pheader');
							window.scrollTo(0,0);
						}
					}
				});
						  });	
</script>