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
		<?php echo form_open_multipart('upload/index')?>
		<div class="col-md-7">
		<label>Select vehicle type</label>
		<select class="form-control">
			<option value="Luxury">Luxury Cars</option>
			<option value="Genaral">Genaral Cars</option>
			<option value="4wd">Bus,Van,4WD,SUV</option>
			<option value="Classic">Classic And Vintage</option>
		</select></br>
		<label>Licence plate number</label>
		<input type="text" class="form-control" name="licenno"/ placeholder="Licence number"></br>
		<label>Other details</label>
		<input type="text" class="form-control" name="details"/ placeholder="Enter details such as A/C,CD player etc."></br>
		<label style="margin-right: 15px;">With driver only</label>
		<label class="switch">
  		<input type="checkbox">
  		<span class="slider round"></span>
		</label></br></br>
		<button type="submit" class="btn btn-success btn-xs">Register</button>
		</div>
		<div class="pull-right col-md-4">
		<label>Vehicle image</label>
		<input type="file" name="userfile"/>
		<button type="submit" class="btn btn-xs" name="submit"><i class="fa fa-folder-open" aria-hidden="true"></i>Upload</button>
		<img src="<?php echo base_url().$path?>" height="170px;" width="100%"></div>
	</form>
	
	
	</div>	
</div>	