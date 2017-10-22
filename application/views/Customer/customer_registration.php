<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 9/12/2017
 * Time: 8:28 PM
<<<<<<< HEAD

 */?>

<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
    <div class="container">

        <form class="well form-horizontal" action="<?php echo base_url()?>/users/register " method="post"  id="reg_form">
            <fieldset>

                <!-- Form Name -->
                <legend><center><h2><b>Registration Form</b></h2></center></legend><br>

                <div class="form-group">
                    <label class="col-md-4 control-label">Customer id</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input  name="customer_id" placeholder="First Name" class="form-control"  type="text" value="<?php echo $this->session->userdata('user_id');?>" disabled">
                        </div>
                    </div>
                </div>


                <!-- Text input-->


                <div class="form-group">
                    <label class="col-md-4 control-label">First Name</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input  name="customer_fname" placeholder="First Name" class="form-control"  type="text">
                        </div>
                    </div>
                </div>

                <!-- Text input-->

                <div class="form-group">
                    <label class="col-md-4 control-label" >Last Name</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input name="customer_lname" placeholder="Last Name" class="form-control"  type="text">
                        </div>
                    </div>
                </div>
                <!-- Text input-->

                <div class="form-group">
                    <label class="col-md-4 control-label">Customer NIC.</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                            <input name="customer_nic" placeholder="nic" class="form-control" type="text">
                        </div>
                    </div>
                </div>


                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label">E-Mail</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                            <input name="customer_email" placeholder="E-Mail Address" class="form-control"  type="text" value="<?php echo $this->session->userdata('user_username')?>">
                        </div>
                    </div>
                </div>


                <!-- Text input-->

                <div class="form-group">
                    <label class="col-md-4 control-label">Contact No.</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                            <input name="customer_contact_no" placeholder="(0710000)" class="form-control" type="text">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" >Address</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input name="customer_address" placeholder="Address" class="form-control"  type="textarea">
                        </div>
                    </div>
                </div>

                <!-- Select Basic -->

                <!-- Success message -->
                <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Success!.</div>

                <!-- Button -->
                <div class="form-group">
                    <label class="col-md-4 control-label"></label>
                    <div class="col-md-4"><br>
                        <button type="submit" id="sub" class="btn btn-warning" >SUBMIT <span class="glyphicon glyphicon-send"></span></button>
                    </div>
                </div>

            </fieldset>
        </form>
    </div>
</div><!-- /.container -->
</div>
