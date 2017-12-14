<div style="margin-top: 100px;"></div>
<div class="modal fade " id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            
            <div class="modal-body">
                Are You Sure You Want to delete This vehicle
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a class="btn btn-danger btn-ok">Delete</a>
            </div>
        </div>
    </div>
</div>

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
			
<div style="height: 100%; width: 100%">
<div class=" container col-md-2"  style="background-color: white;">
	
       <input type="text" class="form-control" placeholder="Search.." style="margin-bottom: 30px;">
       
            <button class="btn btn-default filter-button" data-filter="all" style="width: 100%">All</button>
            <button class="btn btn-default filter-button" data-filter="Luxury" style="width: 100%">Luxury Bars</button>
            <button class="btn btn-default filter-button" data-filter="Genaral" style="width: 100%">Genaral Cars</button>
            <button class="btn btn-default filter-button" data-filter="4wd" style="width: 100%">Bus,van4WD,SUV</button>
            <button class="btn btn-default filter-button" data-filter="Classic" style="width: 100%">Classic And Vintage</button>
        
</div>
<div class="container col-md-10" style="background-color: white;">	
		        
       <?php
	foreach($vehicles as  $vehicle){
		 echo "<div class=\"gallery_product well col-lg-3 col-md-3 col-sm-3 col-xs-6 filter ".$vehicle['type']."\" id=\"".json_encode($vehicle)."\">
               <button class=\"btn btn-success editbtn btn-lg btn1\" value=\"".$vehicle['L_No']."\">Edit</button>
               <button class=\"btn btn-danger deletebtn btn-lg btn2\" value=\"".$vehicle['L_No']."\">Delete</button>
                <img src=\"".base_url()."assets/images/vehicles/".$vehicle['imageLink']."\" class=\"port-image img-rounded\">
			</div>";
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

$('.gallery_product').hover(function(){
	this.getElementsByTagName('button')[0].style.display='inline';
	this.getElementsByTagName('button')[1].style.display='inline';
	
});
	$('.gallery_product').mouseleave(function(){
	this.getElementsByTagName('button')[0].style.display='none';
	this.getElementsByTagName('button')[1].style.display='none';
	
});
$('.editbtn').click(function(){
		var vehicledata=$(this).parent().attr('id');
alert(vehicledata['type']);
	/*	$("vtype select").val(vehicledata['type']);	
		$("#edit").modal('show');*/
});	
	</script>