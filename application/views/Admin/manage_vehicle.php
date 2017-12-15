<div style="margin-top: 100px;"></div>			
<div style="height: 100%; width: 100%">
<div class=" container col-md-2"  style="background-color: white;">
	
       <input type="text" class="form-control" placeholder="Search.." style="margin-bottom: 30px;" id="search">
       
            <button class="btn btn-default filter-button" data-filter="all" style="width: 100%">All</button>
            <button class="btn btn-default filter-button" data-filter="Luxury" style="width: 100%">Luxury Bars</button>
            <button class="btn btn-default filter-button" data-filter="Genaral" style="width: 100%">Genaral Cars</button>
            <button class="btn btn-default filter-button" data-filter="4wd" style="width: 100%">Bus,van4WD,SUV</button>
            <button class="btn btn-default filter-button" data-filter="Classic" style="width: 100%">Classic And Vintage</button>
        
</div>
<div class="container col-md-10" style="background-color: white;">	
		        
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
			<div class="col-md-1" style="padding-top: 55px; padding-left: 0px;">
			<button class="btn btn-default btn-sm" class="deletebtn" style="width: 60px;" singleton="true" data-toggle="confirmation-popout" data-placement="top" title="Delete this Vehicle?" >Delete</button>
			<button class="btn btn-default btn-sm editbtn" style="width: 60px; margin-top: 20px;" >Edit</button>
			</div>
				
	<?php		echo"</div>";
	}
       ?>
</div>
</div>	
<script>
 $(".filter-button").click(function(){
        var value = $(this).attr('data-filter');
        
        if(value == "all")
        {
            //$('.filter').removeClass('hidden');
            $('.filter').show('1000');
        }
        else
        {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
            $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');
            
        }
    });
    
if ($(".filter-button").removeClass("active")) {
$(this).removeClass("active");
}
$(this).addClass("active");

$('.editbtn').click(function(){
	var vehicllno=$(this).parent().parent().attr('id');
	alert(vehicllno);
	$.ajax({
		type:'post',
		data:{vehicleno:vehicllno},
		url:'<?php echo base_url('Addvehicle/loadedit')?>',
		success:function(data){
			
		}
		
	});
});	
$('#search').keyup(function(){
	$('.filter').show('1000');
	var vehicles=$('.gallery_product');
	if($(this).val()!=""){
		
		for(var i=0;i<vehicles.length;i++){
			
			var brand=vehicles[i].getAttribute('name');
			var valuetocheck=$(this).val();
			var check1=brand.substring(0,($(this).val().length));
			if(valuetocheck.toUpperCase()==check1.toUpperCase()){
				continue;
			}
			vehicles[i].style.display='none';
			
		}
	}
});	
</script>