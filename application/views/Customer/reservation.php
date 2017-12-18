
<div style="margin-top: 100px;"></div>
<div  class="contenainer" id="changing_space">

    <ol class="breadcrumb">
        <li><a href="index.html">Customer</a></li>
        <li class="active">New Reservation</li>
    </ol>
    <header class="page-header" id="pheader">
        <h1 class="page-title">Reservation</h1>

    </header>
    <div id="newreservationform" class="col-md-12">
        <?php echo form_open('Reservation/reservecar')?>
        <div class="col-md-7">

            <label>Pick-up Location :</label>
            <br></br>
            <table>
                <tr>
                    <td>
                        <button  class="btn btn-success btn-md" type="button" id="loadmap">View Map</button>
                        <input type="text" name="locationdata" id="locationdata" style="width:450px;" class="" disabled>


                    </td>

                </tr>
            </table>



            <br></br>
            <table>
                <tr>
                    <td>
                        <label>Pick-up Date :</label>
                        <input type="datetime-local" name="pickupdate" id="pickupdate" class="form-control" required></br>
                    </td>
                    <td>
                        <label>Drop-off Date :</label>
                        <input type="datetime-local" name="dropoffdate" id="dropoffdate" class="form-control" required></br>
                    </td>
                </tr>
            </table>


            <br></br>
            <button type="button" class="btn btn-success btn-md" id="nextbtn">Next</button>

        </div><!-- colmd7 -->
    </div><!-- div id -->
</div><!-- container -->

<script>
    var locationdata;
    var pickupdate;
    var dropoffdate;
    var passengers;
    $('#loadmap').click(function () {

    window.location.replace("<?php echo base_url()?>Locationmap/get_locationmap");

    });
    $('#nextbtn').click(function(){ //element to be click to load the page in the div

        pickupdate=$('#pickupdate').val();
        dropoffdate=$('#dropoffdate').val();
        passengers=$('#passengers').val();
        locationdata=$('#locationdata').val();

        $('#changing_space').load('<?php echo base_url();?>Selectreservation/get_selectedreservation');

    });
$(document).ready(function () {
    $('#locationdata').val('<?php echo $location;?>');
});
  function reserve() {

       // var lno=$(this).val();
     // alert(lno);
//        $.ajax({
//            type:'post',
//            url:'<?php //echo base_url(); ?>///Reservation/mynewreservation',
//            data:{lno:lno,locationdata:locationdata,pickupdate:pickupdate,dropoffdate:dropoffdate,passengers:passengers},
//            success:function (data) {
//                alert(data);
//            }
//        });

    }

</script>