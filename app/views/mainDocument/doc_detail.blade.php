@extends('layouts.master')

@section('content')
          <section class="content-header">
            <h1>
              Maintenance
              
            </h1>
            <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-dashboard"></i> Maintenance</a></li>
              <li><a href="#">Document</a></li>
              <li class="active">Document Details</li>
            </ol>
          </section>

      <!-- Main content -->
      <section class="content">
          <div class="col-md-3">
                <!-- general form elements -->
                  <div class="box box-success">
                    <div class="box-header with-border">
                      <h3 class="box-title">Document Details</h3>
                    </div><!-- /.box-header 
                     form start--> <form role="form"
                          enctype="multipart/form-data" 
                          id = "formform"
                          action = "{{URL::to('addDocumentDetails')}}"
                          onsubmit = "return false">
                    <!--{{Form::open(array('id' => 'formform', 'files' => true, 'url' => '/addDocumentDetails', 'onsubmit' => 'return false'))}}
                      -->
                      <div class="box-body">

                        <div class="form-group">
                          <label>Name*</label>
                          <input type="text" 
                                 class="form-control" 
                                 id="txtDocName" 
                                 name="txtDocName" 
                                 placeholder="Name"
                                 required="required">
                        </div>

                        <div class="form-group">
                          <label>Fee*</label>
                          <input type="number" 
                                 class="form-control" 
                                 id="txtFee"
                                 name="txtFee"
                                 required="required">
                        </div>

                        <div class="form-group">
                          <label for="exampleInputFile">Template*</label>
                          <input type="file" 
                                  id="fileTemplate"
                                  name="fileTemplate"
                                  required="required">
                          <img id="blah" width="100%" />
                        </div>

                      </div><!-- /.box-body -->

                      <div class="box-footer">
                        <center><button type="submit" 
                                        class="btn btn-success btn-flat"
                                        id = "btnSubmit">Submit</button></center>
                      </div>
                    </form>
                  </div><!-- {{Form::close()}}/.box -->
              </div>

              <div class="col-md-9">
                <div class="box box-success">
                  <div class="box-header">
                    <h3 class="box-title">Document Details Table</h3>
                  </div><!-- /.box-header -->
                  <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Name</th>
                          <th>Fee</th>
                          <th>Template</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($dDetails as $dd)
                          <tr>
                            <td>{{ $dd ->  DocumentID}}</td>
                            <td>{{ $dd ->  DocumentName}}</td>
                            <td>{{ $dd ->  DocumentFee}}</td>
                            <!--<td width="200px"><img width="100%" src = "{{ asset ('bower_components/admin-lte/dist/images/') . '/' . $dd -> DocumentTemplate}}"/></td>
                            -->
                            <td><button type = "button" 
                                        class = "btn btn-block btn-info btn-xs"
                                        data-toggle = "modal"
                                        data-target = "#viewTemplate"
                                        onclick = "modalEdit({{ $dd -> DocumentID }})"> View </button></td>
                            <td><button class="btn btn-xs btn-success btn-flat"
                                        data-toggle = "modal"
                                        data-target = "#edit"
                                        onclick = "modalEdit({{ $dd -> DocumentID }})">
                                          <i class="fa fa-pencil"></i>
                                </button>
                              <button class="btn btn-xs btn-danger btn-flat"
                                        data-toggle = "modal"
                                        data-target = "#delete"
                                        onclick = "modalDelete({{ $dd -> DocumentID }})"><i class="fa fa-remove"></i></button></td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>


          <div class="modal fade" id="viewTemplate" >
            <div class="modal-dialog">
          
              
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Edit Document Purpose</h4>
                  </div>
                <!-- modal content -->
                  <div class="modal-body">
                
                      <div class="box-body">
                        <div class="form-group">
                          <div class="col-sm-12">
                            <img width="100%" id="vTemplate">
                          </div>
                        </div>
                        
                      </div>
                      <!-- /.box-body -->
                    
                  </div>

                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div><!-- /.modal-content -->
       
            </div>
            <!-- /.modal-dialog -->
          </div>
          <!-- /.modal -->


          <div class="modal fade" id="edit">
            <div class="modal-dialog">
          
              <form class="form-horizontal" 
                    role = "form"
                    enctype="multipart/form-data"
                    id = "editForm"                    
                    action = "{{URL::to('updateDocumentDetails')}}"
                    onsubmit = "return false">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Edit Document Purpose</h4>
                  </div>
                <!-- modal content -->
                  <div class="modal-body">
                
                      <div class="box-body">
                        <div class="form-group">
                          <label  class="col-sm-3 control-label">ID:</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id = "etxt1" name = "etxt1" readonly>
                          </div>
                        </div>
                        <div class="form-group">
                          <label  class="col-sm-3 control-label">Document Name:</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id = "etxt2" name = "etxt2" >
                          </div>
                        </div>
                        <div class="form-group">
                          <label  class="col-sm-3 control-label">Fee:</label>
                          <div class="col-sm-8">
                            <input type="number" class="form-control" id = "etxt3" name = "etxt3" >
                          </div>
                        </div>
                        
                        <div class="form-group">
                          <label  class="col-sm-3 control-label">Template:</label>
                          <div class="col-sm-8">
                            <img id = "epic" width="100%">
                          </div>
                        </div>

                        <div class="form-group">
                          <label  class="col-sm-3 control-label">Change Template:</label>
                          <div class="col-sm-8">
                            <input type="file" class = "form-control" id = "etxt4" name = "etxt4">
                          </div>
                        </div>
                        
                      </div>
                      <!-- /.box-body -->
                    
                  </div>

                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" id = "btnUpdate">Save Changes</button>
                  </div>
                </div><!-- /.modal-content -->
              </form>
            </div>
            <!-- /.modal-dialog -->
          </div>
          <!-- /.modal -->



          <div class="modal fade" id="delete">
            <div class="modal-dialog">
          
              <form class="form-horizontal" 
                    role = "form"
                    enctype="multipart/form-data"
                    id = "deleteForm"                    
                    action = "{{URL::to('deleteDocumentDetails')}}"
                    onsubmit = "return false">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Delete Document</h4>
                  </div>
                <!-- modal content -->
                  <div class="modal-body">
                
                      <div class="box-body">
                        <div class="form-group">
                          <label  class="col-sm-3 control-label">ID:</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id = "dtxt1" name = "dtxt1" readonly>
                          </div>
                        </div>
                        <div class="form-group">
                          <label  class="col-sm-3 control-label">Document Name:</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id = "dtxt2" name = "dtxt2" readonly>
                          </div>
                        </div>
                        <div class="form-group">
                          <label  class="col-sm-3 control-label">Fee:</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id = "dtxt3" name = "dtxt3" readonly>
                          </div>
                        </div>
                        <div class="form-group">
                          <label  class="col-sm-3 control-label">Template:</label>
                          <div class="col-sm-8">
                            <img id = "dpic" width="100%">
                          </div>
                        </div>
                        
                      </div>
                      <!-- /.box-body -->
                    
                  </div>

                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger" id = "btnDelete">Delete</button>
                  </div>
                </div><!-- /.modal-content -->
              </form>
            </div>
            <!-- /.modal-dialog -->
          </div>
          <!-- /.modal -->



              <script src="{{ asset ('bower_components/admin-lte/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
              <script src="{{ asset ('bower_components/admin-lte/plugins/jQueryUI/jQuery-ui.min.js') }}"></script>

              <script type="text/javascript">
                $(document).ready(function(){


                  $("#fileTemplate").change(function(){
                      readURL(this);
                  });

                  $("#etxt4").change(function(){
                      readURLforEdit(this);
                  });


                  var tbl = $('#example1').DataTable();


                  


                  $('#formform').on('submit', function(e){  
                    e.preventDefault();

                    //var txtDocName = $('#txtDocName').val();
                    //var txtFee = $('#txtFee').val();
                    //var fileTemplate = $('#fileTemplate');

                    $.ajax({
                      type: 'POST',
                      url: $(this).attr('action'),
                      data://{ txtDocName: txtDocName,
                              //txtFee: txtFee,
                              //fileTemplate: fileTemplate },
                              new FormData(this),
                      dataType: 'JSON',
                      cache: false,
                      contentType: false,
                      processData: false,
                      success: function(data){
                        tbl.clear().draw();
                        $.each(data.oDetails, function(key, val){
                          var string1 = "{{asset('bower_components/admin-lte/dist/images/"+val.DocumentTemplate+"')}}";
                          tbl.row.add([

                              val.DocumentID,
                              val.DocumentName,
                              val.DocumentFee,
                              '<button type = "button" class = "btn btn-block btn-info btn-xs" data-toggle = "modal" data-target = "#viewTemplate" onclick = "modalEdit('+ val.DocumentID +')"> View </button>',
                              //'<img width="100%" src = "'+string1+'"/>',
                              '<button class="btn btn-xs btn-success btn-flat" data-toggle = "modal" data-target = "#edit" onclick = "modalEdit('+val.DocumentID+')"> <i class="fa fa-pencil"></i> </button> '+
                              '<button class="btn btn-xs btn-danger btn-flat" data-toggle = "modal" data-target = "#delete" onclick = "modalDelete('+val.DocumentID+')"><i class="fa fa-remove"></i></button>'

                            ]).draw(false);
                        });
                      },
                      error: function (request, error) {
                        console.log(arguments);
                        alert(" Can't do because: " + error);
                    }
                    }).error(function(ts){
                      alert(ts.responseText);
                    });
                  });



                  $('#editForm').on('submit', function(e){ 
                    e.preventDefault();

                    $.ajax({
                      type: 'POST',
                      url: $(this).attr('action'),
                      data: new FormData(this),
                      dataType: 'JSON',
                      cache: false,
                      contentType: false,
                      processData: false,
                      success: function(data){
                        tbl.clear().draw();
                        $.each(data.oDetails, function(key, val){
                          var string1 = "{{asset('bower_components/admin-lte/dist/images/"+val.DocumentTemplate+"')}}";
                          tbl.row.add([

                              val.DocumentID,
                              val.DocumentName,
                              val.DocumentFee,
                              '<button type = "button" class = "btn btn-block btn-info btn-xs" data-toggle = "modal" data-target = "#viewTemplate" onclick = "modalEdit('+ val.DocumentID +')"> View </button>',
                              //'<img width="100%" src = "'+string1+'"/>',
                              '<button class="btn btn-xs btn-success btn-flat" data-toggle = "modal" data-target = "#edit" onclick = "modalEdit('+val.DocumentID+')"> <i class="fa fa-pencil"></i> </button> '+
                              '<button class="btn btn-xs btn-danger btn-flat" data-toggle = "modal" data-target = "#delete" onclick = "modalDelete('+val.DocumentID+')"><i class="fa fa-remove"></i></button>'

                            ]).draw(false);
                        });
                      },
                      error: function (request, error) {
                        console.log(arguments);
                        alert(" Can't do because: " + error);
                    }
                    }).error(function(ts){
                      alert(ts.responseText);
                    });

                    $('#edit').modal('hide');
                  });


                  $('#deleteForm').on('submit', function(e){ 
                    e.preventDefault();

                    $.ajax({
                      type: 'POST',
                      url: $(this).attr('action'),
                      data: new FormData(this),
                      dataType: 'JSON',
                      cache: false,
                      contentType: false,
                      processData: false,
                      success: function(data){
                        tbl.clear().draw();
                        $.each(data.oDetails, function(key, val){
                          var string1 = "{{asset('bower_components/admin-lte/dist/images/"+val.DocumentTemplate+"')}}";
                          tbl.row.add([

                              val.DocumentID,
                              val.DocumentName,
                              val.DocumentFee,
                              '<button type = "button" class = "btn btn-block btn-info btn-xs" data-toggle = "modal" data-target = "#viewTemplate" onclick = "modalEdit('+ val.DocumentID +')"> View </button>',
                              //'<img width="100%" src = "'+string1+'"/>',
                              '<button class="btn btn-xs btn-success btn-flat" data-toggle = "modal" data-target = "#edit" onclick = "modalEdit('+val.DocumentID+')"> <i class="fa fa-pencil"></i> </button> '+
                              '<button class="btn btn-xs btn-danger btn-flat" data-toggle = "modal" data-target = "#delete" onclick = "modalDelete('+val.DocumentID+')"><i class="fa fa-remove"></i></button>'

                            ]).draw(false);
                        });
                      },
                      error: function (request, error) {
                        console.log(arguments);
                        alert(" Can't do because: " + error);
                    }
                    }).error(function(ts){
                      alert(ts.responseText);
                    });

                    $('#delete').modal('hide');
                  });


                });
              </script>



              <script type="text/javascript">
                function readURL(input) {
                  if (input.files && input.files[0]) {
                      var reader = new FileReader();
                      
                      reader.onload = function (e) {
                          $('#blah').attr('src', e.target.result);
                      }
                      
                      reader.readAsDataURL(input.files[0]);
                  }
                  else{
                    $('#blah').removeAttr('src');
                  }
                }


                function readURLforEdit(input) {
                  if (input.files && input.files[0]) {
                      var reader = new FileReader();
                      
                      reader.onload = function (e) {
                          $('#epic').removeAttr('src');
                          $('#epic').attr('src', e.target.result);
                      }
                      
                      reader.readAsDataURL(input.files[0]);
                  }
                  else{
                    $('#epic').removeAttr('src');
                  }
                }

                function modalEdit(x){
                  $.ajax({
                    type: 'POST',
                    url: 'getDocumentDetails',
                    data: {id: x},
                    dataType: 'JSON',
                    success: function(data){
                      $('#etxt1').val(data.dDetails[0].DocumentID);
                      $('#etxt2').val(data.dDetails[0].DocumentName);
                      $('#etxt3').val(data.dDetails[0].DocumentFee);
                      $('#etxt4').val("");
                      $('#epic').attr('src', "{{ asset ('bower_components/admin-lte/dist/images/" + data.dDetails[0].DocumentTemplate + "')}}" );

                      $('#vTemplate').attr('src', "{{ asset ('bower_components/admin-lte/dist/images/" + data.dDetails[0].DocumentTemplate + "')}}" );






                    },
                    error: function(request, error){
                      console.log(arguments);
                      alert(" Can't do because: " + error);
                    }
                  }).error(function(ts){
                    alert(ts.responseText);
                  });
                }


                function modalDelete(x){
                  $.ajax({
                    type: 'POST',
                    url: 'getDocumentDetails',
                    data: {id: x},
                    dataType: 'JSON',
                    success: function(data){
                      $('#dtxt1').val(data.dDetails[0].DocumentID);
                      $('#dtxt2').val(data.dDetails[0].DocumentName);
                      $('#dtxt3').val(data.dDetails[0].DocumentFee);
                      
                      $('#dpic').attr('src', "{{ asset ('bower_components/admin-lte/dist/images/" + data.dDetails[0].DocumentTemplate + "')}}" );


                    },
                    error: function(request, error){
                      console.log(arguments);
                      alert(" Can't do because: " + error);
                    }
                  }).error(function(ts){
                    alert(ts.responseText);
                  });
                }

                

              </script>
              

      </section>
      <!-- /.content -->
@stop