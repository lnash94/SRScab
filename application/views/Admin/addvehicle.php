<div style="margin-top: 100px;"></div>
<div class="container">	
		<ol class="breadcrumb">
			<li><a href="index.html">Admin</a></li>
			<li class="active">New Vehicle</li>
		</ol>
		<header class="page-header" id="pheader">
					<h1 class="page-title">Register New Vehicle</h1>
		</header>
		<div id="newvehicleform" class="col-md-10 col-md-offset-1">
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
		<label style="margin-right: 15px;">Transmission<br> Type Auto</label>
		<label class="switch">
  		<input type="checkbox" name="Transmission" id="checkboxtogal1" value="false">
  		<span class="slider round"></span>
		</label></br></br>
		<label style="margin-right: 15px;">With driver only</label>
		<label class="switch">
  		<input type="checkbox" name="withdriver" id="checkboxtogal" value="false">
  		<span class="slider round"></span>
		</label></br></br>
		<label>Other details</label>
		<input type="text" class="form-control" name="details" id="details" placeholder="Enter details such as A/C,CD player etc."></br>
		<button type="button" class="btn btn-success btn-md" id="submitbtn">Register</button>
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
	$('#checkboxtogal').on('change',function(){
		
		if(this.checked){
			
			document.getElementById("checkboxtogal").value="True";
		}
		else{
			document.getElementById("checkboxtogal").value="False";
		}
	});
</script>
<script>
	
	$('#submitbtn').click(function(){
		var type=$('#vtype').val();
		var licenno=$('#licenno').val();
		var brand=$('#brand').val();
		var vmodel=$('#vmodel').val();
		var seats=$('#seats').val();
		var details=$('#details').val();
		var withdriver=$('#checkboxtogal').val();
		var imageLink=$('#imageLink').val();
		//alert(withdriveronly);

				$.ajax({
					type:'post',
					data:{'type':type,'licenno':licenno,'brand':brand,'model':vmodel,'seats':seats, 'details':details,'withdriver':withdriver,'imageLink':imageLink},
					url:'<?php echo base_url('Addvehicle/add')?>',
					success:function(data){
						if($('#alert')!=null){
							$('#alert').remove();
						}
						if(data=="success"){
							$("<div id=\"alert\" class=\"alert alert-success col-md-10 col-md-offset-1\"><strong>Success!</strong>New Vehicle Successfully added to the system</div>").insertAfter('#pheader');
							
							('#licenno').val()="";
							
							('#vmodel').val()="";
							('#seats').val()="";
							('#details').val()="";
							//('#imageLink').val();
						}
						else{
						$("<div id=\"alert\" class=\"alert alert-danger col-md-10 col-md-offset-1\"><strong>Error!</strong>"+data+"</div>").insertAfter('#pheader');
						}
					}
				});
						  });
</script>