<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 9/12/2017
 * Time: 8:28 PM
<<<<<<< HEAD

 */?>

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
            url:'<?php echo base_url('users/register')?>',
            success:function(data){
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

        })

    }
    </script>
















