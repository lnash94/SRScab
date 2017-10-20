<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 9/12/2017
 * Time: 8:28 PM
<<<<<<< HEAD

 */?>
<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
    <div class="panel panel-default">
        <div class="panel-body">
            <form method="post" action="<?php echo base_url()?>/users/register">
                <div class="top-margin">
                    <label>First Name</label>
                    <input type="text" class="form-control" name="fname" required>
                </div>
                <div class="top-margin">
                    <label>Last Name</label>
                    <input type="text" class="form-control" name="lname" required>
                </div>
                <div class="top-margin">
                    <label>Email Address <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" >
                </div>

                <div class="row top-margin">
                    <div class="col-sm-6">
                        <label>Password <span class="text-danger">*</span></label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-sm-6">
                        <label>Confirm Password <span class="text-danger">*</span></label>
                        <input type="text" class="form-control">
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="col-lg-8">
                        <label class="checkbox">
                            <input type="checkbox">
                            I've read the <a href="page_terms.html">Terms and Conditions</a>
                        </label>
                    </div>
                    <div class="col-lg-4 text-right">
                        <button class="btn btn-action" type="submit">Register</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>

