<script src="<?php echo base_url();?>assets/js/jquery-3.1.1.min.js"></script><!--do not remove this line-->
<div style="margin-top: 100px;"></div>
<div class="col-md-12">
<nav class="navbar " style="background-color: aliceblue;">
  <ul class="nav navbar-nav userdashbord">
  <li><a href="<?php echo base_url();?>users/admindashbord/newcustomerreservations" style="color: black;">New Customer Reservations <span class="label label-danger" id="notificationlable"></span></a></li>
  <li><a href="<?php echo base_url();?>users/admindashbord/Manage_reservations" style="color: black;">Manage Customer Reservations</a></li>
   <li><a href="<?php echo base_url();?>users/admindashbord/" style="color: black;" >Manage Vehicles</a></li>
    <li><a  href="<?php echo base_url();?>users/admindashbord/addvehicle" style="color: black;" >New Vehicle</a></li>
    <li><a  href="<?php echo base_url();?>users/admindashbord/adddriver" style="color: black;" >New Driver</a></li>
  </ul>
</nav>
	
</div>
<script>
updatenotification

function updatenotification()
{
   $.ajax({//updating the stasus to replied in quotation table
			type:"post",
			url:"<?php echo base_url('Users/updatenotification');?>",
			success:function(data){
				if(data>0){
					$('#notificationlable').html(data);
				}
			}
		});
}


setInterval(updatenotification, 1*1000);	
</script>