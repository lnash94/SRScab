<div style="margin-top: 100px;"></div>
<div  class="container" id="changing_space">

    <ol class="breadcrumb">
        <li><a href="index.html">Customer</a></li>
        <li class="active">Cancel Reservation</li>
    </ol>
    <header class="page-header" id="pheader">
        <h1 class="page-title">Cancel Reservation</h1>

    </header>
    <div id="newreservationform" class="col-md-12">
        <input  name="customer_id" placeholder="First Name" id="customer_id" class="form-control"  type="text" value="<?php echo $this->session->userdata('user_id');?>" readonly>
        <table class="table table-hover table-responsive table-striped table-bordered" id="customer" style="padding-left: 140px;">
            <thead class="thead-inverse">
            <tr>
                <th column-data-id="customer_rank">
                    Number
                </th>
                <th column-data-id="customer_pickup_location">
                    Pick up location
                </th>
                <th column-data-id="customer_start_date">
                    Start Date
                </th>
                <th column-data-id="customer_end_date">
                    End Date
                </th>
                <th column-data-id="customer_amount">
                    Amount
                </th>
                <th column-data-id="customer_cancel_reservation">

                </th>
            </tr>
            </thead>
            <tbody id="customer_cancel_reservation">
            </tbody>
        </table>
    </div>
</div>



<script>
    //gloable j is define to take reservation
    var j=0;
    $(document).ready(function(){
        var customer_id=$('#customer_id').val();
        $.ajax({
            type:"post",
            url:'<?php echo base_url()?>/reservation/cancel_reservation',
            cache:false,
            data:{'customer_id':customer_id},
            success:function(data){
                $('#customer_cancel_reservation').html("");
                var obj = JSON.parse(data);
                if (obj.length > 0) {
                    try {
                        var customer_data = '';
                        $.each(obj, function (i, val) {
                            window.j = window.j + 1;
                            customer_data += '<tr>';
                            customer_data += '<td>' + window.j + '</td>';
                            customer_data += '<td>' + val.start_Date + '</td>';
                            customer_data += '<td>' + val.end_Date + '</td>';
                            customer_data += '<td>' + val.pickup_Location + '</td>';
                            customer_data += '<td>' + val.amount + '</td>';
                            customer_data += '<td><button  type="button" class="btn btn-danger btn-sm cancel cancel_btn" name="cancel" data-id="'+val.reservation_No+ '" id=' + val.reservation_No + ' value="cancel"><i class="material-icons">Cancel</i></button></td>';
                            customer_data += '</tr>';
                        });
                        //append data to table boady
                        $('#customer_cancel_reservation').append(customer_data);
                    } catch (e) {
                        alert('Exception while request');
                    }
                }
                else{
                    $('#customer_cancel_reservation').html($('<div>').text("You have no reservation"));

                }
            },
            error:function(){
                alert('Error while request..');
            }

        });



    });
</script>

<!--<button class="btn btn-default btn-sm" class="deletebtn" style="width: 60px;" singleton="true" data-toggle="confirmation-popout" data-placement="top" title="Delete this Vehicle?" >Delete</button>-->
