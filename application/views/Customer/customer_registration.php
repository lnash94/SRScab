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

        <form class="well form-horizontal" action=" " method="post"  id="reg_form">
            <fieldset>

                <!-- Form Name -->
                <legend><center><h2><b>Registration Form</b></h2></center></legend><br>

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
                            <input name="customer_email" placeholder="E-Mail Address" class="form-control"  type="text">
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
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" id="sub" class="btn btn-warning" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSUBMIT <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
                    </div>
                </div>

            </fieldset>
        </form>
    </div>
</div><!-- /.container -->
</div>
<!--<script>

    document.getElementBy
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        alert("juju");
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            customer_fname: {
                validators: {
                    stringLength: {
                        min: 2,
                    },
                    notEmpty: {
                        message: 'Please enter your First Name'
                    }
                }
            },
            customer_lname: {
                validators: {
                    stringLength: {
                        min: 2,
                    },
                    notEmpty: {
                        message: 'Please enter your Last Name'
                    }
                }
            },
            user_name: {
                validators: {
                    stringLength: {
                        min: 8,
                    },
                    notEmpty: {
                        message: 'Please enter your Username'
                    }
                }
            },
            user_password: {
                validators: {
                    stringLength: {
                        min: 8,
                    },
                    notEmpty: {
                        message: 'Please enter your Password'
                    }
                }
            },
            confirm_password: {
                validators: {
                    stringLength: {
                        min: 8,
                    },
                    notEmpty: {
                        message: 'Please confirm your Password'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'Please enter your Email Address'
                    },
                    emailAddress: {
                        message: 'Please enter a valid Email Address'
                    }
                }
            },
            contact_no: {
                validators: {
                    stringLength: {
                        min: 12,
                            max: 12,
                            notEmpty: {
                            message: 'Please enter your Contact No.'
                        }
                    }
                },
                department: {
                    validators: {
                        notEmpty: {
                            message: 'Please select your Department/Office'
                        }
                    }
                },
            }
        }
    })
        .on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
            $('#contact_form').data('bootstrapValidator').resetForm();

            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function(result) {
                console.log(result);
            }, 'json');
        });

</script>

-->