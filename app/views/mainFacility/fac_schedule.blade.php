@extends('layouts.master')

@section('content')
      <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Maintenance
              
            </h1>
            <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-dashboard"></i> Maintenance</a></li>
              <li><a href="#">Facility</a></li>
              <li class="active">Facility Schedule</li>
            </ol>
          </section>

      <!-- Main content -->
      <section class="content">
            <div class="col-md-3">
                <!-- general form elements -->

              </div>

              <div class="col-md-9">
                <div class="box box-info">
                  <div class="box-header">
                    <h3 class="box-title">Facility Schedule Table</h3>
                  </div><!-- /.box-header -->
                  <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>

                      @foreach($fIDs as $fIDs)

                        <tr>
                          <td>
                            <div class="">
                              <div class="box-header with-border">

                              <label>{{$fIDs->FacilityCode}}-{{$fIDs->FacilityID}}  - </label>
                                <h3 class="box-title"> {{$fIDs -> FacilityName}} </h3>
                                
                                
                                <!-- /.box-tools -->
                                
                              </div>
                              <!-- /.box-header -->
                              <div class="box-body">
                                <button class="btn btn-md btn-success btn-flat pull-right" 
                                          data-toggle="modal" 
                                          data-target="#update"
                                          onclick = "modalDetails({{$fIDs -> FacilityID}}, {{$fIDs -> FacilityTypeID}})">

                                            Update Schedule
                                </button>
                                <table class="table table-bordered table-striped">

                                  <thead>
                                    <tr>
                                      <th>Day</th>
                                      <th>Start</th>
                                      <th>End</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    @foreach($fSched as $fs)
                                      @if($fIDs->FacilityID == $fs->FacilityID AND $fIDs->FacilityTypeID == $fs->FacilityTypeID)
                                        <tr>
                                          <td>{{ $fs -> DayName }}</td>
                                          <td>{{ $fs -> FacilityStart }}</td>
                                          <td>{{ $fs -> FacilityEnd }}</td>
                                        </tr>
                                      @endif
                                    @endforeach
                                  </tbody>
                                </table>
                              </div>
                              <!-- /.box-body -->
                            </div>
                          </td>
                        </tr>

                    @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>




         <div class="modal fade" id="update">
            <div class="modal-dialog" >
          
              <form class="form-horizontal" >
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Update Schedule</h4>
                  </div>
                <!-- modal content -->
                  <div class="modal-body">
                
                      <div class="box-body">
                        <div class="form-group">
                          <label  class="col-sm-3 control-label">Facility ID:</label>

                          <div class="col-sm-8">
                            <input type="text" class="form-control" id = "etxt1" name = "etxt1" readonly>
                          </div>
                        </div>
                        <div class="form-group">
                          <label  class="col-sm-3 control-label">Facility Name:</label>

                          <div class="col-sm-8">
                            <input type="text" class="form-control" id = "etxt2" name = "etxt2" readonly>
                            <input type="hidden" class="form-control" id = "hiddenFID" name = "hiddenFID" readonly>
                            <input type="hidden" class="form-control" id = "hiddenFTypeID" name = "hiddenFTypeID" readonly>

                          </div>
                        </div>

                        <div class = "form-group">
                          <div class = "col-sm-12">
                            <table class="table table-bordered table-striped" id = "sched">
                              <thead>
                                <tr>
                                  <th></th>
                                  <th>Days</th>
                                  <th>Start</th>
                                  <th>End</th>
                                </tr>
                              </thead>
                              <tbody>
                                
                                    <tr>
                                      <td align="middle"><input type = "checkbox"></td>
                                      <td>Monday</td>
                                      <td>gsdfg</td>
                                      <td>gsdfg</td>
                                    </tr>
                                  
                                    
                              </tbody>
                            </table>
                          </div>
                        </div>

                        
                      </div>
                      <!-- /.box-body -->
                    
                  </div>

                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" id = "btnUpdate" data-dismiss="modal" >Save Changes</button>
                  </div>
                </div><!-- /.modal-content -->
              </form>
            </div>
            <!-- /.modal-dialog -->
          </div>
          <!-- /.modal -->
    


              <script src="{{ asset ('bower_components/admin-lte/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>


      <script type="text/javascript">
        $(document).ready(function(){

          var tbl = $('#example1').DataTable();


          $('#btnUpdate').click(function()
            {
              tbl.clear().draw();

              var hiddenfid = $('#hiddenFID').val();
              var hiddenftypeid = $('#hiddenFTypeID').val();


              //alert(id);

              var id1 = $('#1').val();
              var id2 = $('#2').val();
              var id3 = $('#3').val();
              var id4 = $('#4').val();
              var id5 = $('#5').val();
              var id6 = $('#6').val();
              var id7 = $('#7').val();

              //alert(id2);

              var ts1 = $('#ts_1').val();
              var ts2 = $('#ts_2').val();
              var ts3 = $('#ts_3').val();
              var ts4 = $('#ts_4').val();
              var ts5 = $('#ts_5').val();
              var ts6 = $('#ts_6').val();
              var ts7 = $('#ts_7').val();
              
              //alert(ts2);

              var te1 = $('#te_1').val();
              var te2 = $('#te_2').val();
              var te3 = $('#te_3').val();
              var te4 = $('#te_4').val();
              var te5 = $('#te_5').val();
              var te6 = $('#te_6').val();
              var te7 = $('#te_7').val();

              //alert(te2);

              $.ajax({
                type: 'POST',
                url: 'updateFacilitySched',
                data: {
                  hiddenFID : hiddenfid,
                  hiddenFTypeID: hiddenftypeid,
                  
                  id1 : id1, id2 : id2,
                  id3 : id3, id4 : id4,
                  id5 : id5, id6 : id6,
                  id7 : id7,


                  ts1 : ts1, ts2 : ts2,
                  ts3 : ts3, ts4 : ts4,
                  ts5 : ts5, ts6 : ts6,
                  ts7 : ts7,


                  te1 : te1, te2 : te2,
                  te3 : te3, te4 : te4,
                  te5 : te5, te6 : te6,
                  te7 : te7
                },
                dataType: 'JSON',
                success: function(data){
                  //$('#example1 tbody tbody tr').remove();
                  //alert(JSON.stringify(data));
                  tbl.clear().draw();
                  $.each(data.fIDs, function(key1, val1){

                    $('#example1').DataTable().row.add([
                      '<div class="">'+
                        '<div class="box-header with-border">'+


                          '<label>'+val1.FacilityCode+ '-' +val1.FacilityID + ' - '+'</label>'+



                          ' <h3 class="box-title">'+ val1.FacilityName +'</h3>'+
                          
                          
                          '</div>'+
                        '<div class="box-body">'+
                          '<button class="btn btn-md btn-success btn-flat pull-right" data-toggle="modal" data-target="#update" onclick = "modalDetails('+ val1.FacilityID + ', '+ val1.FacilityTypeID+')">Update Schedule</button>'+
                          '<table class="table table-bordered table-striped">'+

                            '<thead>'+
                              '<tr>'+
                                '<th>Day</th>'+
                                '<th>Start</th>'+
                                '<th>End</th>'+
                              '</tr>'+
                            '</thead>'+
                            '<tbody id="lol'+val1.FacilityID+val1.FacilityTypeID+'">'+


                            
                              
                            '</tbody>'+
                          '</table>'+
                        '</div>'+
                       
                      '</div>'
                    ]).draw(false);

                    $.each(data.fSched, function(key, val){
                      if(val1.FacilityID == val.FacilityID && val1.FacilityTypeID == val.FacilityTypeID) 
                        $('#lol'+val1.FacilityID+val1.FacilityTypeID).append('<tr><td>'+val.DayName+'</td><td>'+val.FacilityStart+'</td><td>'+val.FacilityEnd+'</td></tr>');

                    });
                  });
                  
                },
                error: function(request, error)
                {
                  console.log(arguments);
                  alert('huhuh ' + error);
                }
              }).error(function(ts){
                alert(ts.responseText);
              });
              
              
            });
        });
      </script>

      <script type="text/javascript">
        function modalDetails(x, y)
        {

          $.ajax({
            type: 'POST',
            url: 'getFacilitySchedule',
            data: {fID : x,
                    fTypeID : y},
            dataType: 'JSON',
            success: function(data){
              //alert(JSON.stringify(data.fIDs));
              $('#etxt1').val(data.fIDs[0].FacilityCode + " - " + data.fIDs[0].FacilityID);
              $('#etxt2').val(data.fIDs[0].FacilityName);

              $('#hiddenFID').val(data.fIDs[0].FacilityID);
              $('#hiddenFTypeID').val(data.fIDs[0].FacilityTypeID);



              $('#sched tbody tr').remove();
              $.each(data.fSched, function(key, val){
                if(val.FacilityStart == null && val.FacilityEnd == null)
                {
                  $('#sched').append(
                    '<tr><td align="middle">'+
                      '<input type = "checkbox" value = "'+ val.FacilityDayID +'"onclick = "checkSched(this)" id = "'+val.FacilityDayID+'">'
                    +'</td><td>'+
                      val.DayName
                    +'</td><td>'+
                      '<input type = "time" value = "" id = "ts_'+val.FacilityDayID+'" disabled>'
                    +'</td><td>'+
                      '<input type = "time" value = "" id = "te_'+val.FacilityDayID+'" disabled>'
                    +'</td></tr>')
                }
                else if(val.FacilityStart != null && val.FacilityEnd != null)
                {
                  $('#sched').append(
                    '<tr><td align="middle">'+
                      '<input type = "checkbox" value = "'+ val.FacilityDayID +'"onclick = "checkSched(this)" id = "'+val.FacilityDayID+'" checked>'
                    +'</td><td>'+
                      val.DayName
                    +'</td><td>'+
                      '<input type = "time" value = "'+val.FacilityStart+'" id = "ts_'+val.FacilityDayID+'">'
                    +'</td><td>'+
                      '<input type = "time" value = "'+val.FacilityEnd+'" id = "te_'+val.FacilityDayID+'">'
                    +'</td></tr>')
                }
                
              });
            }, 
            error: function(request, error)
            {
              console.log(arguments);
              alert("cant " + error);
            }
          }).error(function(ts){
            alert(ts.responseText);
          });

        }

        function checkSched(x)
        {
          var ts = "ts_"+x.value;
          var te = "te_"+x.value;

          //if($('#' + x.value).is(":checked"))
          //  alert('lalala');

          if(document.getElementById(x.value).checked)
          {
            document.getElementById(ts).removeAttribute("disabled");
            document.getElementById(te).removeAttribute("disabled");

            document.getElementById(ts).value = "00:00:00";
            document.getElementById(te).value = "00:00:00";
          }
          else
          {
            document.getElementById(ts).setAttributeNode(document.createAttribute("disabled"));
            document.getElementById(te).setAttributeNode(document.createAttribute("disabled"));

            document.getElementById(ts).value = "";
            document.getElementById(te).value = "";
          }

        }



      </script>
      <!-- /.content -->

        </section>
@stop