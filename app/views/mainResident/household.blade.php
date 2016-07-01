@extends('layouts.master')

@section('content')
          <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Maintenance
              
            </h1>
            <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-dashboard"></i> Maintenance</a></li>
              <li><a href="#">Resident</a></li>
              <li class="active">Household</li>
            </ol>
          </section>

          <!-- Main content -->
          <section class="content">
            <div class="col-md-3">
                <!-- general form elements -->
                  <div class="box box-info">
                    <div class="box-header with-border">
                      <h3 class="box-title">Household</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
               <form method="post" onsubmit="return false">
                      <div class="box-body">

                        <div class="form-group">
                          <label>House Owner*</label>
                          <input type="text" 
                                 class="form-control" 
                                 id="txtOwner" 
                                 name="txtOwner" 
                                 placeholder="Name"
                                 required="required">
                        </div>

                        <div class="form-group">
                          <label>Address*</label>
                          <input type="text" 
                                 class="form-control" 
                                 id="txtAddNo"
                                 name="txtAddNo"
                                 placeholder="House No." 
                                 required="required">

                          <input type="text" 
                                 class="form-control" 
                                 id="txtStreet"
                                 name="txtStreet"
                                 placeholder="Street" 
                                 required="required">

                          <input type="Number" 
                                 class="form-control" 
                                 id="txtZone"
                                 name="txtZone"
                                 placeholder="Zone No."
                                 min="1">
                        </div>

                        <div class="form-group">
                          <label>House Type*</label>
                          <select class="form-control"
                                  id = "txtType"
                                  name = "txtType">
                              <option>Residential</option>
                              <option>Commercial/Business</option>
                              <option>Dormitory</option>
                              <option>Apartment/Boarding House</option>
                          </select>
                        </div>

                      </div><!-- /.box-body -->

                      <div class="box-footer">
                        <center><button type="submit" class="btn btn-info btn-flat" id= "btnSubmit">Submit</button></center>
                      </div>
                </form>
                  </div><!-- /.box -->
              </div>

              <div class="col-md-9">
                <div class="box box-info">
                  <div class="box-header">
                    <h3 class="box-title">Household Table</h3>
                  </div><!-- /.box-header -->
                  <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>House Owner</th>
                          <th>Address</th>
                          <th>House Type</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($hhold as $hh)
                          <tr>
                              <td>{{ $hh -> HouseID }}</td>
                              <td>{{ $hh -> HouseOwner }}</td>
                              <td>{{ $hh -> HouseAddNo}} {{ $hh -> HouseStreet}} Street, Zone {{ $hh -> HouseZone}}</td>
                              <td>{{ $hh -> HouseType }}</td>
                            
                            <td>
                                  <button class="btn btn-xs btn-success btn-flat" 
                                          data-toggle="modal" 
                                          data-target="#edit"
                                          value = "{{$hh -> HouseID}}"
                                          onclick = "modalEdit(this)">
                                            <i class="fa fa-pencil"></i>
                                  </button>
                                  <button class="btn btn-xs btn-danger btn-flat" 
                                          data-toggle="modal" 
                                          data-target="#delete"
                                          value = "{{$hh -> HouseID}}"
                                          onclick = "modalDelete(this)">
                                            <i class="fa fa-remove"></i>
                                  </button></td>
                            
                        </tr>
                        @endforeach
                      </tbody>

                    </table>
                  </div>
                </div>
              </div>


<!--MODAL-->



        <div class="modal fade" id="edit">
          <div class="modal-dialog">
          <!-- form start method = "POST" action="{{URL::to('updateOfficialPosition')}}"-->
                <div class="form-horizontal" >
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit Household</h4>
              </div>
              <!-- modal content -->
              <div class="modal-body">
            
                  <div class="box-body">

                    <div class="form-group">
                      <label  class="col-sm-2 control-label">ID:</label>

                      <div class="col-sm-9">
                        <input type="text" class="form-control" id = "txt1" name = "txt1" readonly>
                      </div>
                    </div>

                    <div class="form-group">
                      <label  class="col-sm-2 control-label">House Owner:</label>

                      <div class="col-sm-9">
                        <input type="text" class="form-control" id = "txt2" name = "txt2">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label">Address:</label>

                      <div class="col-sm-3">
                        <input type="text" class="form-control" id = "txt3" name = "txt3" placeholder = "House No.">
                      </div>
                      <div class="col-sm-3">
                        <input type="text" class="form-control" id = "txt4" name = "txt4"  placeholder = "Street">
                      </div>
                      <div class="col-sm-3">
                        <input type="number" class="form-control" id = "txt5" name = "txt5"  placeholder = "Zone No." min="1">
                      </div>
                    </div>

                    <div class="form-group">
                      <label  class="col-sm-2 control-label">House Type:</label>

                      <div class="col-sm-9">
                        <select class="form-control"
                                  id = "txt6"
                                  name = "txt6">
                              <option>Residential</option>
                              <option>Commercial/Business</option>
                              <option>Dormitory</option>
                              <option>Apartment/Boarding House</option>
                          </select>
                      </div>
                    </div>

                  </div>
                  <!-- /.box-body -->
                
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" id = "btnUpdate" data-dismiss="modal">Save changes</button>
              </div><!-- /.modal-content -->
              
            </div></div>
            <!-- /.modal-dialog -->
          </div>
          <!-- /.modal -->
        
        </div>
      
        
        
        <div class="modal fade" id="delete">
          <div class="modal-dialog">
          <!-- form start method = "POST" action="{{URL::to('deleteOfficialPosition')}}"-->
                <div class="form-horizontal" >
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Are you sure you want to DELETE this POSITION ?</h4>
              </div>
              
              <!-- modal content -->
              <div class="modal-body">
            
                   <div class="box-body">

                    <div class="form-group">
                      <label  class="col-sm-2 control-label">ID:</label>

                      <div class="col-sm-9">
                        <input type="text" class="form-control" id = "dtxt1" name = "dtxt1" readonly>
                      </div>
                    </div>

                    <div class="form-group">
                      <label  class="col-sm-2 control-label">House Owner:</label>

                      <div class="col-sm-9">
                        <input type="text" class="form-control" id = "dtxt2" name = "dtxt2" readonly>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label">Address:</label>

                      <div class="col-sm-9">
                        <input type="text" class="form-control" id = "dtxt3" name = "dtxt3" readonly>
                      </div>
                      
                    </div>

                    <div class="form-group">
                      <label  class="col-sm-2 control-label">House Type:</label>

                      <div class="col-sm-9">
                       <input type="text" class="form-control" id = "dtxt4" name = "dtxt4" readonly>
                      </div>
                    </div>

                  </div>
                  <!-- /.box-body -->
                
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger" id = "btnDelete" data-dismiss="modal">Delete</button>
              </div>
            </div></div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

<!--END OF MODAL-->

        
               <script src="{{ asset ('bower_components/admin-lte/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
              <script type="text/javascript">
                $(document).ready(function(){

                  var tbl = $('#example1').DataTable();

                  $('#btnSubmit').click(function(e){
                    e.preventDefault();
                    var hhowner = $('#txtOwner').val();
                    var hhaddno = $('#txtAddNo').val();
                    var hhstreet = $('#txtStreet').val();
                    var hhzone = $('#txtZone').val();
                    var hhtype = $('#txtType').val();
                    

                    $.ajax({
                      type: 'POST',
                      url: 'addHousehold',
                      data: {hhowner: hhowner, 
                              hhaddno: hhaddno,
                              hhstreet: hhstreet,
                              hhzone: hhzone,
                              hhtype: hhtype},
                      dataType: 'JSON',
                      success: function(data){
                        tbl.clear().draw();

                        $.each(data.house, function(key, val){
                          tbl.row.add([

                            val.HouseID,
                            val.HouseOwner,
                            val.HouseAddNo + val.HouseStreet + val.HouseZone,
                            val.HouseType,
                            '<button class="btn btn-xs btn-success btn-flat" data-toggle="modal" data-target="#edit" onclick = "modalEdit(this)"> <i class="fa fa-pencil"></i> </button> '+
                               '<button class="btn btn-xs btn-danger btn-flat" data-toggle="modal" data-target="#delete" onclick = "modalDelete(this)"><i class="fa fa-remove"></i></button>'


                            ]).draw(false);

                        });
                      }

                    });
                    });
                    $('#txtOwner').val("");
                    $('#txtAddNo').val("");
                    $('#txtStreet').val("");
                    $('#txtZone').val("");
                    $('#txtType').val("");
                  });


                    $('#btnUpdate').click(function(e){
                    e.preventDefault();
                    var txt1 = $('#txt1').val();
                    var txt2 = $('#txt2').val();
                    var txt3 = $('#txt3').val();
                    var txt4 = $('#txt4').val();
                    var txt5 = $('#txt5').val();
                    var txt6 = $('#txt6').val();


                    $.ajax({
                      type: 'POST',
                      url: 'updateHousehold',
                      data: {txt1: txt1, 
                              txt2: txt2,
                              txt3: txt3,
                              txt4: txt4,
                              txt5: txt5,
                              txt6: txt6},
                      dataType: 'JSON',
                      success: function(data){
                        tbl.clear().draw();

                        $.each(data.house, function(key, val){
                          tbl.row.add([

                            val.HouseID,
                            val.HouseOwner,
                            val.HouseAddNo  + val.HouseStreet + "Street," + "Zone" + val.HouseZone,
                            val.HouseType,
                            '<button class="btn btn-xs btn-success btn-flat" data-toggle="modal" data-target="#edit" value = "'+val.HouseID+'" onclick = "modalEdit(this)"> <i class="fa fa-pencil"></i> </button> '+
                               '<button class="btn btn-xs btn-danger btn-flat" data-toggle="modal" data-target="#delete" value = "'+val.HouseID+'" onclick = "modalDelete(this)"><i class="fa fa-remove"></i></button>'


                            ]).draw(false);

                        });
                      }
                    });
                  });


                  $('#btnDelete').click(function(e){
                    e.preventDefault();
                    var txt1 = $('#dtxt1').val();


                    $.ajax({
                      type: 'POST',
                      url: 'deleteHousehold',
                      data: {txt1: txt1},
                      dataType: 'JSON',
                      success: function(data){
                        tbl.clear().draw();

                        $.each(data.house, function(key, val){
                          tbl.row.add([

                           val.HouseID,
                            val.HouseOwner,
                            val.HouseAddNo + val.HouseStreet + "Street," + "Zone" + val.HouseZone,
                            val.HouseType,
                            '<button class="btn btn-xs btn-success btn-flat" data-toggle="modal" data-target="#edit" value = "'+val.HouseID+'" onclick = "modalEdit(this)"> <i class="fa fa-pencil"></i> </button> '+
                               '<button class="btn btn-xs btn-danger btn-flat" data-toggle="modal" data-target="#delete" value = "'+val.HouseID+'" onclick = "modalDelete(this)"><i class="fa fa-remove"></i></button>'

                            ]).draw(false);

                        });
                      }
                    });
                  });

              </script>


            <script type="text/javascript">
                function modalEdit(x){

                  $.ajax({
                      type: 'POST',
                      url: 'getInfo',
                      data: {id: x.value},
                      dataType: 'JSON',
                      success: function(data){
                        $.each(data.house, function(key, val){
                           $('#txt1').val(val.HouseID);
                           $('#txt2').val(val.HouseOwner);
                           $('#txt3').val(val.HouseAddNo);
                           $('#txt4').val(val.HouseStreet);
                           $('#txt5').val(val.HouseZone);
                           $('#txt6').val(val.HouseType);
                        });


                      }
                    });
                }

                function modalDelete(x){

                  $.ajax({
                      type: 'POST',
                      url: 'getInfo',
                      data: {id: x.value},
                      dataType: 'JSON',
                      success: function(data){
                        $.each(data.house, function(key, val){
                          $('#dtxt1').val(val.HouseID);
                          $('#dtxt2').val(val.HouseOwner);
                          $('#dtxt3').val(val.HouseAddNo + " " + val.HouseStreet + "Street, " + "Zone" + val.HouseZone);
                          $('#dtxt4').val(val.HouseType);
                        });


                      }
                    });


                }

              </script>

          </section><!--content -->
@stop
