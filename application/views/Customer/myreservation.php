<script src="<?php echo base_url('assets/Chartsjs2/js/Chart.min.js');?>"></script>
<!--<script src="--><?php //echo base_url('assets/Chartsjs2/js/jquery-2.0.0.min.js');?><!--" integrity="sha256-1IKHGl6UjLSIT6CXLqmKgavKBXtr0/jJlaGMEkh+dhw=" crossorigin="anonymous"></script>-->
<script src="https://code.jquery.com/jquery-2.0.0.min.js" integrity="sha256-1IKHGl6UjLSIT6CXLqmKgavKBXtr0/jJlaGMEkh+dhw=" crossorigin="anonymous"></script>



<!--                graph -->
<div class="container-fluid">
    <!-- Area Chart Example-->
    <div class="card mb-3">
        <div class="card-header">
            <i class="fa fa-area-chart"></i>(Reservation summary) </div>
        <div class="card-body">
            <canvas id="myAreaChart" width="100%" height="30">

            </canvas>
        </div>
        <div class="card-footer small text-muted">Updated today at <?php echo  date("F j, Y, g:i a");  ?></div>
    </div>
</div>







<div  class="container" id="changing_space">

    <ol class="breadcrumb">
        <li><a href="index.html">Customer</a></li>
        <li class="active">My Reservation</li>
    </ol>
    <header class="page-header" id="pheader">
        <h1 class="page-title">My Reservation</h1>

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
        </tr>
        </thead>
        <tbody id="customer_reservation">
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
            url:'<?php echo base_url()?>/reservation/get_last_reservation',
            cache:false,
            data:{'customer_id':customer_id},
            success:function(data){
                $('#customer_reservation').html("");
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
                            customer_data += '</tr>';
                        });
                        //append data to table boady
                        $('#customer_reservation').append(customer_data);
                    } catch (e) {
                        alert('Exception while request');
                    }
                }
                else{
                    $('#customer_reservation').html($('<div>').text("You have no reservation"));

                }
            },
            error:function(){
                alert('Error while request..');
            }
        });
        $.ajax({
            type:'post',
            url:'<?php echo base_url()?>/charts/get_linegraph',
            data:{'customer_id1':customer_id},
            success:function(response){
                console.log(response);
                //console.log(data[0][0]);
                var parameters = [];
                var parameterv =[];
                var len=response.length;
                for(var i=0; i<len; i++ ){
                    parameters.push(response[i].label);
                    parameterv.push(response[i].value);
                }
                //console.log(parameters);
                //console.log(parameterv);

                //var paramValues=[];
                var data={
                    //labels:["2017-09-01", "2017-10-22", "2017-11-07", "2017-11-13", "2017-11-15", "2017-11-29", "2017-12-03"],
                    labels:parameters,
                    datasets:[{
                        label:"Number of reservation",
                        data:parameterv,
                        //backgroundColor:"blue",
                        //borderColor:"lightblue",
                        //fill: false,
                        //lineTension:0,
                        pointRadius:5,
                        fill:true,
                        lineTension:0.1,
                        backgroundColor:"rgba(75,192,192,0.4)",
                        borderColor:"rgba(75,192,192,1)",
                        borderCapStyle:"butt",
                        borderDash:[],
                        borderDashOffset:0.0,
                        borderJoinStyle:'miter',
                        pointBorderColor:"rgba(75,192,192,1)",
                        pointHoverWidth:10,
                        pointHoverRadius:5,
                        pointHoverBackgroundColor:"rgba(75,192,192,1)",
                        pointHoverBorderColor:"rgba(220,220,220,1)",
                        pointHoverBorderWidth:5,
                        //pointRadius:1,
                        pointHitRadius:10

                    }]
                };
                var options={
                    title:{
                        display:true,
                        position:"top",
                        text:" Number of reservation accroding to date",
                        fontSize:18,
                        fontColor:"#333"
                    },
                    legend:{
                        display:true,
                        position:"bottom"
                    }
                };

                var ctx=$('#myAreaChart');
                var chart = new Chart(ctx,{
                    type:"line",
                    data:data,
                    options:options
                });



                /*var mychart= new Chart(ctx,{
                    type :'line',
                    data:{
                        label:parameters,
                        datasets:{
                            fill:true,
                            lineTension:0.1,
                            backgroundColor:"rgba(75,192,192,0.4)",
                            borderColor:"rgba(75,192,192,1)",
                            borderCapStyle:"butt",
                            borderDash:[],
                            borderDashOffset:0.0,
                            borderJoinStyle:'miter',
                            pointBorderColor:"rgba(75,192,192,1)",
                            pointHoverWidth:10,
                            pointHoverRadius:5,
                            pointHoverBackgroundColor:"rgb(75,192,192,1)",
                            pointHoverBorderColor:"rgba(220,220,220,1)",
                            pointHoverBorderWidth:5,
                            pointRadius:1,
                            pointHitRadius:10,

                            data:parameterv,
                            spanGaps:false,
                        }
                    }

                });
*/
            },
            error:function(data){

            }
        });
    });

</script>
