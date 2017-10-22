<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 9/12/2017
 * Time: 8:28 PM
<<<<<<< HEAD

 */?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div style="margin-top: 95px;" ></div>
<div class="col-md-8 col-md-offset-3">
    <div class="alert alert-danger" id="cid"><?php echo validation_errors();?></div>

        <form class="well form-horizontal" action="<?php echo base_url()?>/users/register " method="post"  id="reg_form">
            <fieldset>

                <!-- Form Name -->
                <legend id="cid"><center><h4><b>Registration Form</b></h4></center></legend><br>

                <div class="form-group">
                    <label class="col-md-4 control-label">Customer id</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input  name="customer_id" placeholder="First Name" class="form-control"  type="text" value="<?php echo $this->session->userdata('user_id');?>" disabled>
                        </div>
                    </div>
                </div>


                <!-- Text input-->


                <div class="form-group">
                    <label class="col-md-4 control-label">First Name</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input  name="customer_fname" placeholder="First Name" class="form-control"  type="text" value="<?php echo $customer['customer_fname'];?>">
                        </div>
                    </div>
                </div>

                <!-- Text input-->

                <div class="form-group">
                    <label class="col-md-4 control-label" >Last Name</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input name="customer_lname" placeholder="Last Name" class="form-control"  type="text" value="<?php echo $customer['customer_lname'];?>">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label">Gender</label>
                    <input type="radio"  value="male" name="customer_gender" required>Male
                    <input type="radio"  value="female" name="customer_gender" required>Female
                </div>




                <!-- Text input-->

                <div class="form-group">
                    <label class="col-md-4 control-label">Customer NIC.</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-id-card-o"></i></span>
                            <input name="customer_nic" placeholder="nic" class="form-control" type="text" value="<?php echo $customer['customer_nic'];?>">
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
                            <input name="customer_contact_no" placeholder="(0710000)" class="form-control" type="text" value="<?php echo $customer['customer_contacte_number'];?>">
                        </div>
                    </div>
                </div>

                <!--<div class="form-group">
                    <label class="col-md-4 control-label" >Address</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input name="customer_address" placeholder="Address" class="form-control"  type="textarea">
                        </div>
                    </div>
                </div>
-->
                <!-- Select Basic -->

                <!-- Success message -->
                <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Success!.</div>

                <!-- Button -->
                <div class="form-group">
                    <label class="col-md-4 control-label"></label>
                    <div class="col-md-4"><br>
                        <button id="sub" class="btn btn-warning" >SUBMIT <span class="glyphicon glyphicon-send"></span></button>
                    </div>
                </div>

            </fieldset>
        </form>
    </div>
</div>

<script>
    $('#sub').click(function()){
        var customer_id=$('#customer_id').val();
        var customer_fname=$('#customer_fname').val();
        var customer_lname=$('#customer_lname').val();
        var customer_nic=$('#customer_nic').val();
        var customer_email=$('#customer_email').val();
        var customer_contact_no=$('#customer_contact_no').val();

        $.ajax({
            type:'post',
            data:{'customer_id':customer_id,'customer_fname':customer_fname,'customer_lname':customer_lname,'customer_nic':customer_nic,'customer_email':customer_email,'customer_contact_no':customer_contact_no},
            url:'<?php echo base_url('users/edit')?>',
            success:function(data){
                if($('#alert')!=null){
                    $('#alert').remove();
                }
                if(data=="success"){
                    $("<div id=\"alert\" class=\"alert alert-success col-md-10 col-md-offset-1\"><strong>Success!</strong>your details successfully updated</div>").insertAfter('#cid');

                }
                else{
                    $("<div id=\"alert\" class=\"alert alert-danger col-md-10 col-md-offset-1\"><strong>Error!</strong>"+data+"</div>").insertAfter('#cid');

                }
            }

        })

    }
    </script>
















