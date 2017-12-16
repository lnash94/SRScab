<style>
#newreservationsdiv{
	
	height: 500px;
	border-right: 2px solid #C5C5C5;
	
}
#newreservation{
  list-style-type: none;
	margin: 0px;
	padding: 0px;
}

#newreservation a li{
	text-decoration: none;
	color: #000000;
	padding-top: 12px;
	padding-left: 8px;
	width: 100%;
	height: 65px;
	background-color: #E9E9E9;
	border-radius: 10px;
	border: 1px solid #D4D4D4;
	-webkit-transition: height .5s;
}
#newreservation a li:hover{
	
	height: 80px;
	background-color: #DCDCDC;
}
#newreservation a{
	text-decoration: none;
		
	}

@keyframes fadeIn {
    from {opacity:0;}
    to {opacity:1;}
}
@keyframes fadeOut {
    from {opacity:1;}
    to {opacity:0;}
}
#newreservation a li {
    animation: fadeIn 1s;
}
}
</style>
<div style="margin-top: 100px;"></div>
<div class="container">	
		<ol class="breadcrumb">
			<li><a href="#">Admin</a></li>
			<li class="active">New customer reservations</li>
			
		</ol>
		<header class="page-header" id="pheader">
					<h1 class="page-title">New customer reservations</h1>
		</header>
<div class="col-md-3" id="newreservationsdiv">
<ul id="newreservation">

<?php
				foreach($newservations as $newreservation){//show details about newreservation
				echo("
                  
                    <a href=\"#\"><li value=\"".$newreservation['reservation_No']."\">
                      New reservation from ".$newreservation['customer_fname']." ".$newreservation['customer_lname']."
                    </li></a>
                  ");
					  
				}
                 ?>
</ul>
</div>
<div class="col-md-9 col-sm-12 " id="qrdetails">
        <!-- newreservation details will load here--> 
        <center><h3 style="margin-top: 50px;">Select a reservation to view detatils</h3></center>
</div>		
</div>		