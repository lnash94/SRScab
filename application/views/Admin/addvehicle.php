<div style="margin-top: 100px;"></div>
<div class="container">
	
		<ol class="breadcrumb">
			<li><a href="index.html">Admin</a></li>
			<li class="active">New Vehicle</li>
		</ol>
		<header class="page-header">
					<h1 class="page-title">Register New Vehicle</h1>
		</header>
		<div id="newvehicleform" class="col-md-10 col-md-offset-1">
		<?php echo form_open('Addvehicle/add')?>
		<div class="col-md-7">
		<label>Select vehicle type</label>
		<select class="form-control" name="type">
			<option value="Luxury">Luxury Cars</option>
			<option value="Genaral">Genaral Cars</option>
			<option value="4wd">Bus,Van,4WD,SUV</option>
			<option value="Classic">Classic And Vintage</option>
		</select></br>
		<label>Licence plate number</label>
		<input type="text" class="form-control" name="licenno" placeholder="Licence number" required></br>
		<label>Select vehicle Brand</label>
		<select class="form-control" name="brand">
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
		<input type="text" class="form-control" name="model"/ placeholder="Enter vehicle model" required></br>
		<label>Other details</label>
		<input type="text" class="form-control" name="details"/ placeholder="Enter details such as A/C,CD player etc."></br>
		<label style="margin-right: 15px;">With driver only</label>
		<label class="switch">
  		<input type="checkbox" name="withdriver" id="checkboxtogal" value="false">
  		<span class="slider round"></span>
		</label></br></br>
		<button type="submit" class="btn btn-success btn-xs">Register</button>
		</div>
		<input type="hidden" name="imageLink" value="<?php echo $path?>">
		</form>
		
		<?php echo form_open_multipart('upload/index')?>
		<div class="pull-right col-md-4">
		<label>Vehicle image</label>
		<input type="file" name="userfile"/></br>
		<button type="submit" class="btn btn-xs" name="uploadbtn"><i class="fa fa-folder-open" aria-hidden="true"></i>Upload</button></br></br>
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
<!--<script>
	$('#uploadbtn').click(function(){
		var userfile=document.getElementById('userfile1').files[0];
		var form_data =new FormData();
		form_data.append("file",userfile);
		//alert(userfile);
				$.ajax({
					type:'post',
					data:form_data,
					url:'<?php echo base_url('upload/index')?>',
					success:function(data){
						alert(data);
					}
				});
						  });
</script>	-->