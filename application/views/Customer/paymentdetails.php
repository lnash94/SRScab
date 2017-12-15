
<div style="margin-top: 100px;"></div>
<div  class="container" id="payment_space">

		<ol class="breadcrumb">
			<li><a href="index.html">Customer</a></li>
			<li class="active">Reservation</li>
		</ol>
		<header class="page-header" id="pheader">
					<h1 class="page-title">Payment Details</h1>
		</header>
			<div id="paymentdetailsform" class="col-md-10 col-md-offset-1">
				<div class="col-md-8">
				
				<table>
				<tr>
				<label>Choose Payment Method : &nbsp</label>
				<input type="radio" name="paymentmethod" id="paymentmethod" value="mastercard" checked> 
				<img src="<?php echo base_url();?>assets/images/mastercard.png" alt="Master Card Logo">
		        <input type="radio" name="paymentmethod" id="paymentmethod" value="visa" checked> 
		        <img src="<?php echo base_url();?>assets/images/Visa_Logo.png" alt="Visa Logo">
				<input type="radio" name="paymentmethod" id="paymentmethod" value="paypal" checked>
				<img src="<?php echo base_url();?>assets/images/PayPal_Logo1.png" alt="Paypal Logo">
				</tr>
				</table>
				</br>
				
					<label>Cardholder's Name :</label>
					<input type="text" class="form-control" name="holdername" id="holdername" placeholder="Lalanga Ariyasinghe..." required></br>
					<label>Card Number :</label></br>
					<input type="password" class="form-control" name="password" id="password" placeholder="--Card Number--" required="">
					<br></br>

				
					<label>Expiry Date :</label>
					<input type="date" name="expirydate" id="expirydate" class="form-control" required>
					</br>
					<label>CVV/CVC :</label>
					<input type="number" name="cvvno" id="cvvno" class="form-control" placeholder="--CVV/CVC--" required="">

					<br></br>
					<button type="button" class="btn btn-success btn-md" id="paymentsubmitbtn">Submit</button>
					
			</div><!--colmd7-->
		</div><!--paymentdetailsform-->

</div><!--container-->