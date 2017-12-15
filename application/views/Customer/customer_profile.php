<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div style="margin-top: 95px;" ></div>
<header id="cid">

</header>

<!--<div class="col-md-12">-->
<!-- Page Container -->
<div class="container col-sm-pull-12" style="max-width:1500px;margin-top:80px">
    <!-- The Grid -->
    <div class="row">
        <!-- Left Column -->
        <div class="col-md-2">
            <!-- Profile -->
<!--            <div class="">-->
<!--                <div class="container card round white">-->
                    <h4 class="center">My Profile</h4>
                    <p class="center"><img src="/w3images/avatar3.png" class="circle" style="height:106px;width:106px;" alt="Avatar"></p>
                    <hr>
                    <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i> <?php echo $customer['customer_fname'];?>  <?php echo $customer['customer_lname'];?></p>
                    <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i> <?php echo $customer['customer_nic'];?></p>
                    <p><i class=""><?php echo $this->session->userdata('user_username')?></p>
<!--                </div>-->
<!--            </div>-->
            <!-- End Left Column -->
        </div>

        <!-- Middle Column -->
        <div class="col-md-5">
            <div class="container"><br>
                    <?php echo validation_errors();?>

                    <form class="well form-horizontal" action="<?php echo base_url()?>/users/register" method="post"  id="reg_form">
                        <fieldset>

                            <!-- Form Name -->
                            <legend id="cid"><center><h4><b>Registration Form</b></h4></center></legend><br>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Customer id</label>
                                <div class="col-md-4 ">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input  name="customer_id" id="customer_id" class="form-control"  type="text" value="<?php echo $this->session->userdata('user_id');?>" readonly>
                                    </div>
                                </div>
                            </div>


                            <!-- Text input-->


                            <div class="form-group">
                                <label class="col-md-3 control-label">First Name</label>
                                <div class="col-md-4 ">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="customer_fname" name="customer_fname" placeholder="First Name" class="form-control"  type="text" value="<?php echo $customer['customer_fname'];?>" style="text-transform: capitalize;" required>
                                    </div>
                                </div>
                            </div>

                            <!-- Text input-->

                            <div class="form-group">
                                <label class="col-md-3 control-label" >Last Name</label>
                                <div class="col-md-4 ">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input name="customer_lname" id="customer_lname" placeholder="Last Name" class="form-control"  type="text" value="<?php echo $customer['customer_lname'];?>" style="text-transform: capitalize;" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Gender</label>
                                <div class="col-md-4 ">
                                    <input type="radio"  value="male" name="customer_gender" id="customer_gender" required>Male
                                    <input type="radio"  value="female" name="customer_gender" id="customer_gender" required>Female
                                </div>
                            </div>




                            <!-- Text input-->

                            <div class="form-group">
                                <label class="col-md-3 control-label">Customer NIC.</label>
                                <div class="col-md-4 inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-id-card-o"></i></span>
                                        <input id="customer_nic" name="customer_nic" placeholder="nic" class="form-control" type="text" value="<?php echo $customer['customer_nic'];?>"  required>
                                    </div>
                                </div>
                            </div>


                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label">E-Mail</label>
                                <div class="col-md-4 ">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                        <input id="customer_email" name="customer_email" placeholder="E-Mail Address" class="form-control"  type="text" value="<?php echo $this->session->userdata('user_username')?>" required>
                                    </div>
                                </div>
                            </div>


                            <!-- Text input-->

                            <div class="form-group">
                                <label class="col-md-3 control-label">Contact No.</label>
                                <div class="col-md-4 ">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                        <input id="customer_contact_no" name="customer_contact_no" placeholder="(0710000)" class="form-control" type="text" value="<?php echo $customer['customer_contacte_number'];?>">
                                    </div>
                                </div>
                            </div>
                            <!-- Button -->
                            <div class="form-group">
                                <label class="col-md-3 control-label"></label>
                                <div class="col-md-4"><br>
                                    <button id="sub"  type="button" class="btn btn-warning" >SUBMIT <span class="glyphicon glyphicon-send"></span></button>
                                </div>
                            </div>

                        </fieldset>
                    </form>
                </div>
            </div>

            <!-- End Middle Column -->

        <!-- Right Column -->
            <!-- End Right Column -->
        </div>

        <!-- End Grid -->
    </div>

    <!-- End Page Container -->
<!--</div>-->
<!--<br>-->
</div>
<script>
    $('#sub').click(function(){
        var customer_id=$('#customer_id').val();
        var customer_fname=$('#customer_fname').val();
        var customer_lname=$('#customer_lname').val();
        var customer_nic=$('#customer_nic').val();
        var customer_email=$('#customer_email').val();
        var customer_contact_no=$('#customer_contact_no').val();
        var customer_gender=$("input[type=radio]:checked").val();

        $.ajax({
            type:'post',
            data:{'customer_id':customer_id,'customer_fname':customer_fname,'customer_lname':customer_lname,'customer_nic':customer_nic,'customer_email':customer_email,'customer_contact_no':customer_contact_no,'customer_gender':customer_gender},
            url:'<?php echo base_url('users/register')?>',
            success:function(data){
                console.log(data);
                if($('#alert')!=null){
                    $('#alert').remove();
                }
                if($.trim(data)=="success"){
                    $("<div id=\"alert\" class=\"alert alert-success col-md-10 col-md-offset-1\"><strong>Success!</strong>your details successfully updated</div>").insertAfter('#cid');

                }
                else{
                    $("<div id=\"alert\" class=\"alert alert-danger col-md-10 col-md-offset-1\"><strong>Error!</strong>"+data+"</div>").insertAfter('#cid');

                }
            }

        });

    });
</script>



