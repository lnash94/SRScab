<div style="margin-top: 100px;"></div>
<div  class="container">

		<ol class="breadcrumb">
			<li><a href="index.html">Customer</a></li>
			<li class="active">New Reservation</li>
		</ol>
		<header class="page-header" id="pheader">
					<h1 class="page-title">Reservation</h1>
		</header>
			<div id="newreservationform" class="col-md-10 col-md-offset-1">
				<div class="col-md-7">
				
					<label>Pick-up Location :</label>
					<input type="text" class="form-control" name="location" id="location" placeholder="city,airport,station,region..." required></br>

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
					<input type="text" class="form-control" name="passengers" id="passengers" placeholder="No-of-passengers..." required></br>
					
					<button type="button" class="btn btn-success btn-xs" id="submitbtn">Search</button>
					
					</div><!-- colmd7 -->
				</div><!-- div id -->
		</div><!-- container -->

</body>
</html>