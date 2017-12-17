<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js"></script>
<!--<script src="bower_components/sweetalert2/dist/sweetalert2.all.min.js"></script>

<!-- Include a polyfill for ES6 Promises (optional) for IE11 and Android browser -->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>-->


<div style="margin-top: 100px;"></div>
<div  class="container" id="changing_space">

    <ol class="breadcrumb">
        <li><a href="<?php echo base_url()?>/users/load_customer_profile">Customer</a></li>
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
                            customer_data += '<td><a href="javascript:void(0)"  type="button" class="btn btn-danger btn-sm cancel delete_reservation" name="delete_reservation" data-id="'+val.reservation_No+ '" id="delete_reservation"><i class="glyphicon glyphicon-trash"></i></a></td>';
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

//        delete reservation
        $(document).on('click','#delete_reservation',function(e){
            var reservation_id=$(this).data('id');
            $.ajax({
                url: '<?php echo base_url()?>/reservation/delete_reservation',
                type: 'post',
                data: {'reservation_id': reservation_id},
//                         dataType: 'json',
                success: function(data){
                    if($.trim(data)=="success") {
                        location.reload();
                        window.scrollTo(0, 0);
                    }
                },
                error: function(){
                }
            });
        });
            e.preventDefault();

        });
    //    SwalDelete function

    function SwalDelete(reservation_id){
        /*swal({
            title: 'Are you sure?',
            text: "It will be deleted permanently!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes,delete it!',
            showLoaderOnConfirm: true,

            preConfirm: function(){
                return new Promise(function(resolve){
                    $.ajax({
//
                        type: 'post',
                        data: {'reservation_id': reservation_id},
                        dataType: 'json',
                        success: function(response){
                            console.log(response);
                            swal('Delete!', response.message, response.status);
//                            ****
                            location.reload();
                            window.scrollTo(0,0);
                        },
                        error: function(){
                            swal('Oops', 'Something went wrong!', 'error');
                        }
                    });
                });
            },
            allowOutsideClick: false
        });*/
    }


</script>

<!--<button class="btn btn-default btn-sm" class="deletebtn" style="width: 60px;" singleton="true" data-toggle="confirmation-popout" data-placement="top" title="Delete this Vehicle?" >Delete</button>-->
