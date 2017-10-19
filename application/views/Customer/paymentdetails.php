<div style="margin-top: 100px;"></div>
<div  class="container">

		<ol class="breadcrumb">
			<li><a href="index.html">Customer</a></li>
			<li class="active">Reservation</li>
		</ol>
		<header class="page-header" id="pheader">
					<h1 class="page-title">Payment Details</h1>
		</header>
			<div id="paymentdetailsform" class="col-md-10 col-md-offset-1">
				<div class="col-md-7">
				
				<table>
				<tr>
				<label>Choose Payment Method : &nbsp</label>
				<input type="radio" name="paymentmethod" id="paymentmethod" value="mastercard" checked> 
				<img src="<?php echo base_url();?>assets/images/mastercard.png" alt="Master Card Logo">
		        <input type="radio" name="paymentmethod" id="paymentmethod" value="visa" checked> 
		        <i class="fa fa-cc-visa" aria-hidden="true"></i>
				<input type="radio" name="paymentmethod" id="paymentmethod" value="paypal" checked>
				<i class="fa fa-paypal" aria-hidden="true"></i>
				</tr>
				</table>
				</br>
				<table>
					<tr>
					<label>Cardholder's Name :</label>
					<input type="text" class="form-control" name="holdername" id="holdername" placeholder="Lalanga Ariyasinghe..." required></br>
					<label>Card Number :</label>
					<input type="password" name="password" id="password" placeholder="Password Field.... ">
					</tr>
				</table>

				<table>
					<tr>
					<td>
					<label>Expiry Date :</label>
					</td>
					<td>
					<input type="date" name="pickupdate" id="pickupdate" class="form-control" required>
					</td>
					<td>
					<label>CVV/CVC :</label>
					<input type="number" name="cvvno" id="cvvno" class="form-control" required>
					</td>
					</tr>
				</table>
			</div><!--colmd7-->
		</div><!--paymentdetailsform-->

</div><!--container-->