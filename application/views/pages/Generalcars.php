<div style="margin-top: 100px;"></div>
<div class="container">	
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url();?>">Home</a></li>
			<li class="active">Genaral cars</li>
		</ol><br>
		<div class="col-md-4 vehicletumb">
			
			<a href="#" class="linker1">
				<center><button class="btn btn-primary btn-lg d" >Reserve Now</button></center></a>
				<img src="<?php echo base_url();?>/assets/images/vehicles/20728150_1420643884638912_1060001645389039003_n.jpg">
				<div class="details">details about vehicle here(AC,No of seats etc)</div>
		</div>
		<div class="col-md-4 vehicletumb">
			
			<a href="#" class="linker1">
				<center><button class="btn btn-primary btn-lg d" >Reserve Now</button></center></a>
				<img src="<?php echo base_url();?>/assets/images/vehicles/20728150_1420643884638912_1060001645389039003_n.jpg">
				<div class="details">details about vehicle here(AC,No of seats etc)</div>
		</div>
		<div class="col-md-4 vehicletumb">
			
			<a href="#" class="linker1">
				<center><button class="btn btn-primary btn-lg d" >Reserve Now</button></center></a>
				<img src="<?php echo base_url();?>/assets/images/vehicles/20728150_1420643884638912_1060001645389039003_n.jpg">
				<div class="details">details about vehicle here(AC,No of seats etc)</div>
		</div>
		<div class="col-md-4 vehicletumb">
			
			<a href="#" class="linker1">
				<center><button class="btn btn-primary btn-lg d" >Reserve Now</button></center></a>
				<img src="<?php echo base_url();?>/assets/images/vehicles/20728150_1420643884638912_1060001645389039003_n.jpg">
				<div class="details">details about vehicle here(AC,No of seats etc)</div>
		</div>
		
		
		
		 <!-- Pagination -->
      <ul class="pagination justify-content-center col-md-12">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">1</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">2</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">3</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
      </ul>
</div>		
<script>
$('.linker1').hover(function(){
	this.getElementsByTagName('center')[0].getElementsByTagName('button')[0].style.display='inline';
	
});
$('.linker1').mouseleave(function(){
		this.getElementsByTagName('center')[0].getElementsByTagName('button')[0].style.display='none';
});
</script>


