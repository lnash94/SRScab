<div style="margin-top: 100px;"></div>
<div class="container">	
		<ol class="breadcrumb">
			<li><a href="index.html">Admin</a></li>
			<li class="active">New Driver</li>
		</ol>
		<header class="page-header" id="pheader">
					<h1 class="page-title">Register New Driver</h1>
		</header>
		<div id="newdriverform" class="col-md-10 col-md-offset-1">
		<?php echo form_open('Adddriver/add')?>
		<div class="col-md-7">
		<label>Driver ID</label>
            <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input type="text" class="form-control" name="driverid" id="driverid" placeholder="Driver ID" required></br>
            </div>

            <label>First Name</label>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Lalanga" required></br>
            </div>

		<label>Last Name</label>
                <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		        <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Ariyasinghe" required></br>
                </div>
		<label>Driver NIC</label>
                <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
		        <input type="text" class="form-control" name="nic" id="nic" placeholder="955111540V" required></br>
                </div>
            <label>Contact No.</label>
                <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                <input type="text" class="form-control" name="contactno" id="contactno" placeholder="0332230188" required></br>
                </div>
            <label>Address</label>
                <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                <input type="text" class="form-control" name="address" id="address" placeholder="address" required></br>
                </div>
            <br></br>
            <div class="form-group">
		        <button type="button" class="btn btn-success btn-md" id="submitbtn">Register</button>
            </div>
		</div>

		</form>
		

	
	</div>	
</div>
<script>


	
	$('#submitbtn').click(function(){
		var driverid=$('#driverid').val();
		var firstname=$('#firstname').val();
		var lastname=$('#lastname').val();
		var nic=$('#nic').val();
		var contactno=$('#contactno').val();
		var address=$('#address').val();


				$.ajax({
					type:'post',
					data:{'driverid':driverid,'firstname':firstname,'lastname':lastname,'nic':nic,'contactno':contactno, 'address':address},
					url:'<?php echo base_url('Adddriver/add')?>',
					success:function(data){
						if($('#alert')!=null){
							$('#alert').remove();
						}
						if(data=="success"){
							$("<div id=\"alert\" class=\"alert alert-success col-md-10 col-md-offset-1\"><strong>Success!</strong>New Driver Successfully added to the system</div>").insertAfter('#pheader');
							
							$('#driverid').val("");
							
							$('#firstname').val("");
							$('#lastname').val("");
							$('#nic').val("");
                            $('#contactno').val("");
                            $('#address').val("");
							window.scrollTo(0,0);
							//('#imageLink').val();
						}
						else{
						$("<div id=\"alert\" class=\"alert alert-danger col-md-10 col-md-offset-1\"><strong>Error!</strong>"+data+"</div>").insertAfter('#pheader');
							window.scrollTo(0,0);
						}
					}
				});
						  });
</script>