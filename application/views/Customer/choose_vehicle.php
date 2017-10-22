<div style="margin-top: 100px;"></div>
<div  class="container" id="vehiclechoose_space">

		<ol class="breadcrumb">
			<li><a href="index.html">Customer</a></li>
			<li class="active">New Reservation</li>
		</ol>
		<header class="page-header" id="pheader">
					<h1 class="page-title">Vehicle Selection</h1>
					
		</header>
			<div id="newvehiclereserveform" class="col-md-10 col-md-offset-1">
				<div class="col-md-7">

				<button type="button" class="btn btn-success btn-md" id="nextpagebtn">Next</button>

				<button type="button" class="btn btn-success btn-md" id="backpagebtn">Back</button>

				</div>
			</div>
		</div>
<script>
$('#nextpagebtn').click(function(){
	alert ("This is a warning message!");
		//$("#changing_space").load("paymentdetails.php #payment_space");
	});
$('#backpagebtn').click(function(){
		$("#vehiclechoose_space").load("reservation.php #changing_space");
	});

</script>