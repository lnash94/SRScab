
<div style="margin-top: 100px;"></div>
<div  class="container" id="changing_space">

		<ol class="breadcrumb">
			<li><a href="index.html">Customer</a></li>
			<li class="active">New Reservation</li>
		</ol>
		<header class="page-header" id="pheader">
					<h1 class="page-title">Reservation</h1>
					 
		</header>
			<div id="newreservationform" class="col-md-10 col-md-offset-1">
			<?php echo form_open('Reservation/reservecar')?>
				<div class="col-md-7">
				
					<label>Pick-up Location :</label>
					
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15843.61041766155!2d79.861315!3d6.90225!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2db2c18a68712863!2sUniversity+of+Colombo+School+of+Computing+(UCSC)!5e0!3m2!1sen!2slk!4v1508653282987" width="600" height="300" frameborder="0" style="border:0" id="location" allowfullscreen></iframe>

					<br></br>
					<table>
					<tr>
					<td>
					<label>Pick-up Date :</label>
					<input type="datetime-local" name="pickupdate" id="pickupdate" class="form-control" required></br>
					</td>
					<td>
					<label>Drop-off Date :</label>
					<input type="datetime-local" name="dropoffdate" id="dropoffdate" class="form-control" required></br>
					</td>
					</tr>
					</table>


					<label>No of Passengers :</label>
					<select class="form-control" name="passengers" id="passengers">
							
	                        <option value="2">2</option>
	                        <option value="3">3</option>
	                        <option value="4">4</option>
	                        <option value="5">5</option>
	                        <option value="6">6</option>
	                        <option value="7">7</option>
	                        <option value="8">8</option>
	                        <option value="9">9</option>
	                        <option value="10">10</option>
	                        <option value="11">11</option>
	                        <option value="12">12</option>
	                        
	                </select>
					<br></br>
					<button type="button" class="btn btn-success btn-md" id="nextbtn">Next</button>
					
					</div><!-- colmd7 -->
				</div><!-- div id -->
		</div><!-- container -->
<script>
		var location;
		var pickupdate;
		var dropoffdate;
		var passengers;	
	$('#nextbtn').click(function(){
		var location=$('#location').val();
		var pickupdate=$('#pickupdate').val();
		var dropoffdate=$('#dropoffdate').val();
		var passengers=$('#passengers').val();

			$.ajax({
				type:'post',
				data:{'location':location,'pickupdate':pickupdate,'dropoffdate':dropoffdate,'Nopassengers':passengers},
				url:'<?php echo base_url('Reservation/reservecar')?>',
				success:function(data){
					
						if($('#alert')!=null){
							$('#alert').remove();
						}
						if(data=="success"){
						$("#changing_space").load("choose_vehicle.php #vehiclechoose_space");	
					}
						else{
						
						$("<div id=\"alert\" class=\"alert alert-danger col-md-10 col-md-offset-1\"><strong>Error!</strong>"+data+"</div>").insertAfter('#pheader');
							//alert(($('.home').scrollTop()));
							window.scrollTo(0,0);
						}
					}
			});
		
			
	});
</script>