<div style="margin-top: 100px;"></div>
<div class="col-md-12">
<nav class="navbar " style="background-color: aliceblue; ">
  <ul class="nav navbar-nav userdashbord"  >
    <li><a  href="<?php echo base_url();?>reservation/get_myreservation/.<?php $this->session->userdata('customer_id')?>" style="color: black;" >My Reservations</a></li>
    <li><a href="<?php echo base_url();?>users/dashbord/reservation" style="color: black;" >New Reservation</a></li>
    <li><a href="<?php echo base_url();?>users/dashbord/canceledreservation" style="color: black;">Canceled Reservations</a></li>

    
  </ul>
</nav>
</div>


<!--<style>
    @media screen and (max-width: 767px) {
        .sidenav {
            height: auto;
            padding: 15px;
        }
        .row.content {height:auto;}
</style>
        <div class="col-sm-8 text-left">
            <legend><h3><strong>sumudu</strong></h3></legend>
            <label>sumudu hansani</label>
            <br>
            <label>sumudu@gmail.com</label>
            <br>
            <label>0711232123</label>
            <hr>
            <legend><h3><stron>previous ride</stron></h3></legend>
            <p>ride</p>
        </div>
-->
