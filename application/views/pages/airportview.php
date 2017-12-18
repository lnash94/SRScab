<div style="margin-top: 100px;"></div>			
<div style="height: 100%; width: 100%">

<div class="container col-md-12" style="background-color:#A8A8A8; text-align: center; "><h1> Airport/City Service </h1></div>
<div class=" container row">
  <div class="col-sm-3" style="margin-top: 5%;"> <img src="<?php echo base_url();?>assets/images/airport.jpg" alt="Airport/City Service"></div> <!-- 25% -->
  <div class="col-sm-9 "><h1> Are you going abroad ?? </h1> <br>
  <p style="font-size: 20px; text-align: justify; " > If you planning to go abroad and need an  Airport drop? We are happy to Introduce you our Airport/City Service" Package. No need of booking few days before your departure. We can receive your vehicle within few hours. We take no more than 3 hours except the traveling time to reach you to your destination. We are offering you vehicles which having 5 seats or 12 seats as your favor for this Package. you can book cars for Rs.70/= per 1KM and, vans for Rs.90/= per 1KM <br><br></p>
   <h3>Below mentioned vehicles are only allowed for this Package</h3>
   </div> <!-- 75% -->

</div>

<div class="container col-md-12" style="background-color: white; margin-top: 2%;">	
		        
       <?php
	foreach($vehicles as  $vehicle){
		 echo "<div class=\"gallery_product well col-lg-6 col-md-6 col-sm-6 col-xs-12 filter ".$vehicle['type']."\" id=\"".$vehicle['L_No']."\" name=\"".$vehicle['brand']."\">
              <div class=\"col-md-6 col-xs-6\"><img src=\"".base_url()."assets/images/vehicles/".$vehicle['imageLink']."\" class=\"port-image img-rounded\"></div>
				<div class=\"col-xs-5\">
				<h4><b>".$vehicle['brand']."-".$vehicle['model']."</b></h4>
				<div>
				<img src=\"".base_url()."assets/images/seats.png\" style=\"width:23px;height:20px;\">&nbsp;&nbsp;&nbsp;".$vehicle['No_seats']." Seats
				</div>
				<div><img src=\"".base_url()."assets/images/licence-plate.png\" style=\"width:25px;height:17px;\">&nbsp; ".$vehicle['L_No']."</div>
				<div><img src=\"".base_url()."assets/images/ac.png\" style=\"width:20px;height:20px;\">&nbsp;&nbsp;&nbsp;&nbsp;".$vehicle['details']."</div>
				<div><img src=\"".base_url()."assets/images/car.png\" style=\"width:30px;height:17px;\">
				".$vehicle['type']."</div>
				<div>
				<img src=\"".base_url()."assets/images/transmission.png\" style=\"width:20px;height:17px;\">
				&nbsp;&nbsp;&nbsp;".$vehicle['transmission_type']."</div>
				<div>
				<i class=\"fa fa-user\" aria-hidden=\"true\" style=\"font-size:19px;\"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$vehicle['with_driver']."
				</div>
				
				<div>
				<img src=\"".base_url()."assets/images/rate.png\" style=\"width:20px;height:20px;\">&nbsp;&nbsp;&nbsp;&nbsp;Rs.".$vehicle['rate_per_day']." per day
				</div>
				<div>
				<i class=\"fa fa-plus-circle\" aria-hidden=\"true\" style=\"font-size:19px;\"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.".$vehicle['excess_mileage']." per extra mile 
				</div>
			</div>"; ?>
			
	<?php		echo"</div>";
	}
       ?>
</div>
</div>	
