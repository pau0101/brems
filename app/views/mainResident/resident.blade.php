@extends('layouts.master')

@section('content')

		<section class="content-header">
            <h1>
              Maintenance <small>  </small>
              
            </h1>
            <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-dashboard"></i> Maintenance</a></li>
              <li class="active">Resident</li>
            </ol>
          </section>

          <!-- Main content -->
          <section class="content"><br>
            <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class="fa fa-users"></i>&nbsp;&nbsp;Add Resident</h3>
                  <div class="box-tools pull-right">
                      <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->

                <!-- form start -->
                <form role="form" method = POST name = "resident_maint">
                  <div class="box-body">
                   
                    <div class="col-md-12">
                     <div class="well">

                        <div class="form-group">
                          <div class="row">
                            
                            <div class="col-xs-1">
                             <label>House ID</label>
                             <select class="form-control"
                                      id = "drop">
                                  @foreach($house as $hh)
                                      <option value = "{{ $hh -> HouseID}}"> {{ $hh -> HouseID}}</option>
                                  @endforeach

                             </select>
                            </div>

                            <div class="col-xs-3">
                             <label>House Owner</label>
                             <input type=text class="form-control" id="txtOwner" readonly>
                            </div>

                            <div class="col-xs-5">
                             <label>Address</label>
                             <input type=text class="form-control" id="txtAddress" readonly>
                            </div>

                            <div class="col-xs-3">
                             <label>Type</label>
                             <input type=text class="form-control"  id="txtType" readonly>
                             <input type="text" value=1 id="trytry" name="trytry">
                            </div>


                          
                          </div>
                        </div>




                    </div><!--well-->
                    </div><!-- /.col -->
                    

                    <div class="col-md-4">

                      <table id="name" style="border-spacing: 0px;border-collapse: collapse;font-size: 12px; margin-top:54px">
                              <thead style="font-size:13px; background-color:#f0f5f5; text-align:center;" >
                                <tr>
                                  <th></th>
                                  <th> Name of <br> Resident</th>
                                  <th></th>
                                </tr>
                              </thead>

                              <tbody>
                              <tr>
                                  <div class="col-sm-4">
                                    <td><input type="text" class="form-control" id = "txtLName1" placeholder="Last Name*" required></td>
                                    <td><input type="text" class="form-control" id = "txtFName1" placeholder="Given Name*" required></td>
                                    <td><input type="text" class="form-control" id = "txtMName1" placeholder="Middle Name*" required></td>
                                  </div>
                              </tr>
                              

                              </tbody>
                        </table>

                    </div>


                    <div class="col-md-8">
                      <!-- Custom Tabs -->
                      <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                          <li class="active"><a href="#tab_1" data-toggle="tab">Personal Details</a></li>
                          <li><a href="#tab_2" data-toggle="tab">Contact Details</a></li>
                          <li><a href="#tab_3" data-toggle="tab">Health Details</a></li>
                          <li><a href="#tab_4" data-toggle="tab">Education and Literacy</a></li>
                          <li><a href="#tab_5" data-toggle="tab">Economic Details</a></li>
                         
                        </ul>

                      
                        <div class="tab-content" style="overflow: auto">
                         
                          <div class="tab-pane active" id="tab_1">
                          <div id="dynamicInput3">
                            <table id="table1" style="border-spacing: 0px;border-collapse: collapse;font-size: 12px;">
                              <thead style="font-size:13px; background-color:#f0f5f5">
                                <tr>
                                  <th>Relation to the Head*</th>
                                  <th>Residency Status*</th>
                                  <th>Birthdate*</th>
                                  <th>Age</th>
                                  <th>Birth Place*</th>
                                  <th>Gender*</th>
                                  <th>Civil Status*</th>
                                  <th>Religion*</th>
                                </tr>
                              </thead>

                              <tbody>
                                <tr>
                                  <td><input type=text id="txtRelation1" class="form-control" value="Head" readonly></td>
                                  <td><select id="txtResidency1" class="form-control">
                                      <option>House Owner</option>
                                      <option>Renter</option>
                                  </select></td>

                                  <td><input type=text class="form-control" id="txtBday1" onkeyup="myAgeValidation()" step="any" required></td>
                                  <td><input type=text class="form-control" id="txtAge1" readonly></td>
                                  <td><input type=text class="form-control" id="txtBPlace1" required></td>
                                  <td style="width:100px;align:center"><input type="radio" name="btnGender1" value="Male" id="btnGender1" checked>Male
                                  	  <input type="radio" id="btnGender1" value="Female" name="btnGender1">Female</td>
                                  <td><select class="form-control" id="txtCivil1" required>
                                      <option>Single</option>
                                      <option>Married</option>
                                      <option>Divorced</option>
                                      <option>Widowed</option>
                                      <option>Separated</option>
                                  </select></td>
                                  <td><select class="form-control" id="txtReligion1" required>
                                      <option>Roman Catholic</option>
                                      <option>Born-again Christian</option>
                                      <option>Iglesia ni Cristo</option>
                                      <option>Orthodoxy</option>
                                      <option>Protestantism</option>
                                      <option>Mormon</option>
                                      <option>Islam</option>
                                      <option>Buddhism</option>
                                      <option>Judaism</option>
                                      <option>Hinduism</option>
                                      <option>Islam</option>
                                      <option>Others</option>
                                  </select></td>
                                </tr>



                              </tbody>
                            </table>
                            </div>

                      <!--      <center><input type="button" value="Add Members"  class="btn btn-warning btn-flat" onClick="addInput('dynamicInput','dynamicInput2', 'dynamicInput3', 'dynamicInput4', 'dynamicInput5');"></center> -->

                          </div><!-- /.tab-pane -->

                           
                          <div class="tab-pane" id="tab_2">
                          <div id="dynamicInput">
                            <table id="table2" style="border-spacing: 0px;border-collapse: collapse;font-size: 12px;" align="center">
                              <thead style="font-size:13px; background-color:#f0f5f5; size:26px">
                                <tr>
                                  <th>Mobile <br> No.</th>
                                  <th>Landline <br> No.</th>
                                  <th>E-mail <br> Address</th>

                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td><input type=text class="form-control" id="txtMobile1"></td>
                                  <td><input type=text class="form-control" id="txtLine1"></td>
                                  <td><input type=text class="form-control" id="txtEmail1"></td>
                                </tr>

                              </tbody>
                          
                            </table>

                            

                          </div><!-- /.tab-pane -->
                          

                          </div>
                          <div class="tab-pane" id="tab_3">
                          <div id="dynamicInput2">
                            <table id="table3" style="border-spacing: 0px;border-collapse: collapse;font-size: 12px;" align="center">
                              <thead style="font-size:13px; background-color:#f0f5f5">
                                <tr>
                                  <th>Height <br> (in meters)*</th>
                                  <th>Weight <br>(in kilograms)*</th>
                                  <th>Body Mass <br>Index</th>
                                  <th>Health <br>Status</th>
                                
                                </tr>

                              </thead>

                              
                              <tbody>
                                <tr>
                                  <td><input type=text class="form-control" id="txtHeight1" value = 0 onkeyup = "getHeight()" step="any" required></td>
                                  <td><input type=text class="form-control" id="txtWeight1" value = 0 onkeyup = "getWeight()" step="any" required></td>
                                  <td><input type=text class="form-control" readonly id="txtBMI1"></td>
                                  <td><input type=text class="form-control" readonly id="txtHealthStat1"></td>
                                </tr>

                              </tbody>
                        
                            </table>
                            </div>
                          </div><!-- /.tab-pane -->

                          <div class="tab-pane" id="tab_4">
                          <div id="dynamicInput4">
                            <table id="table4" style="border-spacing: 0px;border-collapse: collapse;font-size: 12px;" align="center">
                              <thead style="font-size:13px; background-color:#f0f5f5">
                                <tr>
                                   
                                  <th>Currently Studying?</th>
                                  <th>Current Educational Level</th>
                                  <th>Highest Educational Attainment</th>
                                  <th>Can read in any language? (Reading Literacy)</th>
                                  <th>Can write in any language? (Writing Literacy)</th>

                                </tr>
                              </thead>

                            <tbody>
                                <tr>
                               
                                  <td align="center"><select
                                        class="form-control"
                                        id="txtCurrentStud1"
                                        onclick = "getEduc()"
                                        required>
                                            <option>Yes</option>
                                            <option>No</option>
                                    </select></td>

                                  <td><select class="form-control"  id="txtRecentEd1">
                                      <option>Pre-school/Day Care/Kinder</option>
                                      <option>Grade 1</option>
                                      <option>Grade 2</option>
                                      <option>Grade 3</option>
                                      <option>Grade 4</option>
                                      <option>Grade 5</option>
                                      <option>Grade 6</option>
                                      <option>Grade 7</option>
                                      <option>Grade 8</option>
                                      <option>Grade 9</option>
                                      <option>Grade 10</option>
                                      <option>Grade 11</option>
                                      <option>Grade 12</option>
                                      <option>Vocational Course</option>
                                      <option>1st Year College</option>
                                      <option>2nd Year College</option>
                                      <option>3rd Year College</option>
                                      <option>4th Year College</option>
                                      <option>5th Year College</option>
                                      <option>Masters-Post Graduate</option>
                                      <option>Doctoral-Post Graduate</option>
                                      </select>
                                  </td>

                                  <td><select class="form-control"  id="txtHighestEd1">
                                      <option>Never been in school</option>
                                      <option>Elementary Level</option>
                                      <option>Elementary Graduate</option>
                                      <option>Highschool Level</option>
                                      <option>Highschool Graduate</option>
                                      <option>College Level</option>
                                      <option>College Graduate</option>
                                      <option>Post Graduate Level</option>
                                      <option>Post Graduate Master</option>
                                      <option>Graduate Doctoral</option>
                                  </select></td>


                                   <td align="center"><input type="radio" id="btnRead1" name="btnRead1" value="Yes" checked>Yes
                                      <input type="radio" id="btnRead1" name="btnRead1" value="No">No</td>
                                  <td align="center"><input type="radio" id="btnWrite1" name="btnWrite1" value="Yes" checked>Yes
                                      <input type="radio" id="btnWrite1" name="btnWrite1" value="No">No</td>
                                  </select></td>

                                  
                                </tr>

                               

                              </tbody>
                            </table>
                            </div>
                          </div><!-- /.tab-pane -->

                          <div class="tab-pane" id="tab_5">
                          <div id="dynamicInput5">
                            <table id="table5" style="border-spacing: 0px;border-collapse: collapse;font-size: 12px;" align="center">
                              <thead style="font-size:13px; background-color:#f0f5f5">
                                <tr>

                                  <th>Currently <br>Employed/Earning?</th>
                                  <th>Occupation</th>
                                  <th>Monthly Salary <br>(in peso)</th>

                                </tr>
                              </thead>

                              <tbody>
                                <tr>
                                  <td align="center"><select
                                        class="form-control"
                                        id="txtCurrentEmp1"
                                        onclick = "getEcon()"
                                        required>
                                            <option>Yes</option>
                                            <option>No</option>
                                    </select></td>
                                  <td><input type=text class="form-control" id="txtOccupation1"></td>
                                  <td><input type=text class="form-control"  id="txtSalary1"></td>
                                  </select></td>
                                </tr>

                              

                              </tbody>
                            </table>
                            </div>
                          </div><!-- /.tab-pane -->
                        </div><!-- /.tab-content -->
                      </div><!-- nav-tabs-custom -->
                    </div><!-- /.col -->

                  </div><!-- /.box-body -->

                  <center><div class="box-footer">
                    <input type="button" id="btnRemove" value="Remove"  class="btn btn-success btn-flat" disabled>
                    <input type="button" id="btnAdd" value="Add"  class="btn btn-primary btn-flat">
                    <button type="submit" class="btn btn-info btn-flat" id="btnSubmit">Submit</button>

                  </div></center>
                </form>
              </div><!-- /.box -->
                
              </div><!-- /.col -->

             

          </div><!--row -->

          <div class="row">
              <div class="col-md-12">
                <div class="box box-info">

                  <div class="box-header with-border">
                    <h3 class="box-title">Resident Table</h3>
                    <div class="box-tools pull-right">
                      <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    </div><!-- /.box-tools -->
                  </div><!-- /.box-header -->

                  <div class="box-body">
                    <div  style="overflow:auto">
                    <table id="example1" class="table table-bordered table-striped" style="font-size:13px" >
                      <thead>
                        <tr>
                          <th></th>
                          <th>House ID</th>
                          <th>Family ID</th>
                          <th>Resident ID</th>
                          <th>Name</th>
                          <th>Relation to Head</th>
                          <th>Residency Status</th>
                          <th>Birth Date</th>
                          <th>Birth Place</th>
                          <th>Gender</th>
                          <th>Civil Status</th>
                          <th>Religion</th>
                          <th>Mobile No.</th>
                          <th>Tel No.</th>
                          <th>Email Address</th>
                          <th>Height</th>
                          <th>Weight</th>
                          <th>Health Status</th>
                          <th>Currently Studying?</th>
                          <th>Current Educ. Level</th>
                          <th>Highest Educ. Attainment</th>
                          <th>Reading Literacy</th>
                          <th>Writing Literacy</th>
                          <th>Currently Employed?</th>
                          <th>Occupation</th>
                          <th>Income per month</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($res as $resi)
                          <tr>
                          	  <td>
                                  <button class="btn btn-xs btn-success btn-flat" 
                                          data-toggle="modal" 
                                          data-target="#edit" 
                                          value = "{{$resi -> ResidentID}}"        
                                          onclick = "modalEdit(this)">
                                            <i class="fa fa-pencil"></i>
                                  </button>
                                  <button class="btn btn-xs btn-danger btn-flat" 
                                          data-toggle="modal" 
                                          data-target="#delete"
                                          value = "{{$resi -> ResidentID}}"
                                          onclick = "modalDelete(this)">
                                            <i class="fa fa-remove"></i>
                                  </button></td>		
                              <td>{{ $resi -> HouseID }}</td>
                              <td>{{ $resi -> FamilyID }}</td>
                              <td>{{ $resi -> ResidentID }}</td>
                              <td>{{ $resi -> LastName}}, {{ $resi -> FirstName}} {{ $resi -> MidName}}</td>
                              <td>{{ $resi -> RelationHead }}</td>
                              <td>{{ $resi -> ResidencyStat }}</td>
                              <td>{{ $resi -> Birthdate }}</td>
                              <td>{{ $resi -> Birthplace }}</td>
                              <td>{{ $resi -> Gender }}</td>
                              <td>{{ $resi -> CivilStat }}</td>
                              <td>{{ $resi -> Religion }}</td>
                              <td>{{ $resi -> MobileNo }}</td>
                              <td>{{ $resi -> TelNo }}</td>
                              <td>{{ $resi -> EmailAdd }}</td>
                              <td>{{ $resi -> Height }}</td>
                              <td>{{ $resi -> Weight }}</td>
                              <td>{{ $resi -> HealthStat }}</td>
                              <td>{{ $resi -> CurrStudy }}</td>
                              <td>{{ $resi -> CurrLevel }}</td>
                              <td>{{ $resi -> HighLevel }}</td>
                              <td>{{ $resi -> ReadLiteracy }}</td>
                              <td>{{ $resi -> WriteLiteracy }}</td>
                              <td>{{ $resi -> CurrEmployed }}</td>
                              <td>{{ $resi -> Occupation }}</td>
                              <td>{{ $resi -> Salary }}</td>
                                                       
                            
                        </tr>
                        @endforeach
                      </tbody>

                    </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>


              @include('mainResident.resident_modal_edit')



 		<script src="{{ asset ('bower_components/admin-lte/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>




     <script type="text/javascript">
        var ctr=2;

      $(document).ready(function(){

        $('#btnAdd').click(function(){

          //var a = parseInt(document.getElementById("textbox1").value); 
          //var sample = parseInt(document.getElementById("trytry").value);
         

          $('#name').append('<tr> <div class="col-sm-4"> <td><input type="text" class="form-control" id = "txtFName' + (ctr) + '" placeholder="Last Name*" required></td> <td><input type="text" class="form-control" id = "txtLName' + (ctr) + '" placeholder="Given Name*" required></td> <td><input type="text" class="form-control" id = "txtMName' + (ctr) + '" placeholder="Middle Name*" required></td> </div> </tr>');

          $('#table2').append('<tr> <td><input type=text class="form-control" id="txtMobile' + (ctr) + '"></td> <td><input type=text class="form-control" id="txtLine' + (ctr) + '"></td> <td><input type=text class="form-control" id="txtEmail' + (ctr) + '"></td> </tr>');

          $('#table3').append('<tr> <td><input type=text class="form-control" id="txtHeight' + (ctr) + '" value = 0 onkeyup = "getHeight(ctr)" step="any" required></td> <td><input type=text class="form-control" id="txtWeight' + (ctr) + '" value = 0 onkeyup = "getWeight(ctr)" step="any" required></td> <td><input type=text class="form-control" readonly id="txtBMI' + (ctr) + '"></td> <td><input type=text class="form-control" readonly id="txtHealthStat' + (ctr) + '"></td> </tr>');

          $('#table1').append(' <tr> <td><select id="txtRelation' + (ctr) + '" class="form-control"><option>Husband</option><option>Wife</option><option>Son</option><option>Daughter</option><option>Son-in-law</option><option>Daughter-in-law</option><option>Father-in-law</option><option>Mother-in-law</option><option>Grandson</option><option>Granddaughter</option><option>Father</option><option>Mother</option><option>Relative-male</option><option>Relative-female</option><option>Househelp-male</option><option>Househelp-female</option><option>Tenant/Boarder</option></select></td> <td><select id="txtResidency' + (ctr) + '" class="form-control"> <option>House Owner</option> <option>Renter</option> </select></td> <td><input type=text class="form-control" id="txtBday' + (ctr) + '" onkeyup="myAgeValidation()" step="any" required></td> <td><input type=text class="form-control" id="txtAge' + (ctr) + '" readonly></td> <td><input type=text class="form-control" id="txtBPlace' + (ctr) + '" required></td> <td style="width:100px;align:center"><input type="radio" value="Male" name="btnGender' + (ctr) + '" id="btnGender' + (ctr) + '" checked>Male <input type="radio" value="Female" id="btnGender' + (ctr) + '" name="btnGender' + (ctr) + '">Female</td> <td><select class="form-control" id="txtCivil' + (ctr) + '" required> <option>Single</option> <option>Married</option> <option>Divorced</option> <option>Widowed</option> <option>Separated</option> </select></td> <td><select class="form-control" id="txtReligion' + (ctr) + '" required> <option>Roman Catholic</option> <option>Born-again Christian</option> <option>Iglesia ni Cristo</option> <option>Orthodoxy</option> <option>Protestantism</option> <option>Mormon</option> <option>Islam</option> <option>Buddhism</option> <option>Judaism</option> <option>Hinduism</option> <option>Islam</option> <option>Others</option> </select></td> </tr>');

          $('#table4').append(' <tr> <td align="center"><select class="form-control" id="txtCurrentStud' + (ctr) + '" onclick = "getEduc()" required> <option>Yes</option> <option>No</option> </select></td> <td><select class="form-control"  id="txtRecentEd' + (ctr) + '"> <option>Pre-school/Day Care/Kinder</option> <option>Grade 1</option> <option>Grade 2</option> <option>Grade 3</option> <option>Grade 4</option> <option>Grade 5</option> <option>Grade 6</option> <option>Grade 7</option> <option>Grade 8</option> <option>Grade 9</option> <option>Grade 10</option> <option>Grade 11</option> <option>Grade 12</option> <option>Vocational Course</option> <option>1st Year College</option> <option>2nd Year College</option> <option>3rd Year College</option> <option>4th Year College</option> <option>5th Year College</option> <option>Masters-Post Graduate</option> <option>Doctoral-Post Graduate</option> </select> </td> <td><select class="form-control"  id="txtHighestEd' + (ctr) + '"> <option>Never been in school</option> <option>Elementary Level</option> <option>Elementary Graduate</option> <option>Highschool Level</option> <option>Highschool Graduate</option> <option>College Level</option> <option>College Graduate</option> <option>Post Graduate Level</option> <option>Post Graduate Master</option> <option>Graduate Doctoral</option> </select></td> <td align="center"><input type="radio" value="Yes" id="btnRead' + (ctr) + '" name="btnRead'+(ctr)+'" checked>Yes <input type="radio" value="No" id="btnRead' + (ctr) + '" name="btnRead'+(ctr)+'">No</td> <td align="center"><input type="radio" value="Yes" id="btnWrite' + (ctr) + '" name="btnWrite'+(ctr)+'" checked>Yes <input type="radio" value="No" id="btnWrite' + (ctr) + '" name="btnWrite'+(ctr)+'">No</td> </select></td> </tr>');

           $('#table5').append('<tr> <td align="center"><select class="form-control" id="txtCurrentEmp' + (ctr) + '" onclick = "getEcon()" required> <option>Yes</option> <option>No</option> </select></td> <td><input type=text class="form-control" id="txtOccupation' + (ctr) + '"></td> <td><input type=text class="form-control"  id="txtSalary' + (ctr) + '"></td> </select></td> </tr>');

          
            $('#trytry').val(ctr);
             ctr++;

             if(ctr > 1) {
              document.getElementById('btnRemove').disabled = false;
            }

        });//btnadd

        $('#btnRemove').click(function(){
            var ctr = $('#trytry').val();

            var table1 = $('#example1').DataTable();
            //var row = table1.row( $(this).parents('tr') );
            var row = table1.row($(this).parents("tr").get('ctr'));

            //var rowNode = row.node;

            row.remove();

        });//btnremove

      });

    </script>


    <script type="text/javascript">
                $(document).ready(function(){
                  
                  var tbl = $('#example1').DataTable();
                


                   $('#btnSubmit').click(function(e){
                    e.preventDefault();

                    var x = parseInt(document.getElementById("trytry").value); 
                    var houseid = $("#drop").val();

                    $.ajax({
                      type: 'POST',
                      url: 'addFamily',
                      data: {houseid:houseid},
                      success: function(data){
                      },
                      error: function(request, error){
                        console.log(arguments);
                        alert("cant do this because: " + error);
                      }

                    }).error(function(ts){
                      alert(ts.responseText);
                    });

                  
                  for(i = 1; i <= x; i++) {

                    

                    alert(i);

                    var lname = $('#txtLName'+i).val();
                    var fname = $('#txtFName'+i).val();
                    var mname = $('#txtMName'+i).val();
                    var relationhead = $('#txtRelation'+i).val();
                    var restype = $('#txtResidency'+i).val();
                    var bdate = $('#txtBday'+i).val();
                    var bplace = $('#txtBPlace'+i).val();
                    var gender = $("input[name='btnGender" + i +"']:checked").val();
                    var civil = $('#txtCivil'+i).val();
                    var religion = $('#txtReligion'+i).val();
                    var mobileno = $('#txtMobile'+i).val();
                    var telno = $('#txtLine'+i).val();
                    var email = $('#txtEmail'+i).val();
                    var height = $('#txtHeight'+i).val();
                    var weight = $('#txtWeight'+i).val();
                    var healthstat = $('#txtHealthStat'+i).val();
                    var currentstud = $('#txtCurrentStud'+i).val();
                    var currentlevel = $('#txtRecentEd'+i).val();
                    var highestlevel = $('#txtHighestEd'+i).val();
                    var read = $("input[name='btnRead" + i +"']:checked").val();
                    var write = $("input[name='btnWrite" + i +"']:checked").val();
                    var currentemp = $('#txtCurrentEmp'+i).val();
                    var occup = $('#txtOccupation'+i).val();
                    var salary = $('#txtSalary'+i).val();
                  alert(lname);

                    $.ajax({
                      type: 'POST',
                      url: 'addResident',
                      data: { 
                              houseid:houseid,  
                              lname: lname, 
                              fname: fname,
                              mname: mname,
                              relationhead: relationhead,
                              restype: restype,
                              bdate: bdate,
                              bplace: bplace,
                              gender: gender,
                              civil: civil,
                              religion: religion,
                              mobileno: mobileno,
                              telno: telno,
                              email: email,
                              height: height,
                              weight: weight,
                              healthstat: healthstat,
                              currentstud: currentstud,
                              currentlevel: currentlevel,
                              highestlevel: highestlevel,
                              read: read,
                              write: write,
                              currentemp: currentemp,
                              occup: occup,
                              salary: salary
                            },
                      dataType: 'JSON',
                      success: function(data){
                        alert('Records are successfully added!');
                        /*tbl.clear().draw();

                        $.each(data.res, function(key, val){
                          tbl.row.add([

                            '<button class="btn btn-xs btn-success btn-flat" data-toggle="modal" data-target="#edit" onclick = "modalEdit(this)"> <i class="fa fa-pencil"></i> </button> '+
                            '<button class="btn btn-xs btn-danger btn-flat" data-toggle="modal" data-target="#delete" onclick = "modalDelete(this)"><i class="fa fa-remove"></i></button>',
                            val.HouseID,
                            val.FamilyID,
                            val.ResidentID,
                            val.LastName+", " + val.FirstName + val.MidName,
                            val.RelationHead,
                            val.ResidencyStat,
                            val.Birthdate,
                            val.Birthplace,
                            val.Gender,
                            val.CivilStat,
                            val.Religion,
                            val.MobileNo,
                            val.TelNo,
                            val.EmailAdd,
                            val.Height,
                            val.Weight,
                            val.HealthStat,
                            val.CurrStudy,
                            val.CurrLevel,
                            val.HighLevel,
                            val.ReadLiteracy,
                            val.WriteLiteracy,
                            val.CurrEmployed,
                            val.Occupation,
                            val.Salary                           

                            ]).draw(false);

                        });*/
                      },
                      error: function(request, error){
                        console.log(arguments);
                        alert(error);
                      }//error

                    }).error(function(ts){
                      alert(ts.responseText);
                    });//error

                    $('#txtLName'+i).val("");
                    $('#txtFName'+i).val("");
                    $('#txtMName'+i).val("");
                    $('#txtBday'+i).val("");
                    $('#txtBPlace'+i).val("");
                    $('#txtMobile'+i).val("");
                    $('#txtLine'+i).val("");
                    $('#txtEmail'+i).val("");
                    $('#txtHeight'+i).val("");
                    $('#txtWeight'+i).val("");
                    $('#txtOccupation'+i).val("");
                    $('#txtSalary'+i).val("");



                 }//for
               });





              });//document
        </script>

        <script type="text/javascript">

         $("#drop").change(function () {

            var selectedValue = $(this).val();

                  $.ajax({
                      type: 'POST',
                      url: 'getInfo',
                      data: {id: selectedValue},
                      dataType: 'JSON',
                      success: function(data){
                        $.each(data.house, function(key, val){
                           $('#txtOwner').val(val.HouseOwner);
                           $('#txtAddress').val(val.HouseAddNo + " " + val.HouseStreet + " Street, " + "Zone " + val.HouseZone);
                           $('#txtType').val(val.HouseType);
                           
                        });


                      },
                      error: function(request, error){
                        console.log(arguments);
                        alert("cant do this because: " + error);
                      }
                    }).error(function(ts){
                      alert(ts.responseText);
                    });
          });


        </script>

 <script type="text/javascript">
                $(document).ready(function(){
                   

                });

</script>

  <script type="text/javascript">
                function modalEdit(x){

                  $.ajax({
                      type: 'POST',
                      url: 'getResInfo',
                      data: {id: x.value},
                      dataType: 'JSON',
                      success: function(data){
                        $.each(data.resi, function(key, val){
                          $('#etxtID').val(val.ResidentID);
                           $('#etxtFName').val(val.FirstName);
                          $('#etxtLName').val(val.LastName);
                          $('#etxtMName').val(val.MidName);
                          $('#etxtRelation').val(val.RelationHead);
                          $('#etxtResidency').val(val.ResidencyStat);
                          $('#etxtBday').val(val.Birthdate);
                          $('#etxtBPlace').val(val.Birthplace);
                          $('#ebtnGender').val(val.Gender);
                          $('#etxtCivil').val(val.CivilStat);
                          $('#etxtReligion').val(val.Religion);
                          $('#etxtMobile').val(val.MobileNo);
                          $('#etxtLine').val(val.TelNo);
                          $('#etxtEmail').val(val.EmailAdd);
                          $('#etxtHeight').val(val.Height);
                          $('#etxtWeight').val(val.Weight);
                          $('#etxtHealthStat').val(val.HealthStat);
                          $('#etxtCurrentStud').val(val.CurrStudy);
                          $('#etxtHighestEd').val(val.HighLevel);
                          $('#etxtRecentEd').val(val.CurrLevel);
                          $('#ebtnRead').val(val.ReadLiteracy);
                          $('#ebtnWrite').val(val.WriteLiteracy);
                          $('#etxtCurrentEmp').val(val.CurrEmployed);
                          $('#etxtOccupation').val(val.Occupation);
                          $('#etxtSalary').val(val.Salary);
                        });


                      }
                    });
                }
</script>

<script type = text/javascript>
    function getHeight(x)
    { 
      alert(x);
      
        alert(i);
        var c =  + (document.getElementById('txtWeight'+x).value/(document.getElementById('txtHeight'+x).value*document.getElementById('txtHeight'+x).value));
        var n = c.toFixed(2);
        document.getElementById('txtBMI'+x).value = n;

        
        if(n < 16){
            document.getElementById('txtHealthStat'+x).value = "Severely Underweight";}
        else if (n >= 16 && n < 18.5){
            document.getElementById('txtHealthStat'+x).value = "Underweight";}
        else if (n >= 18.5 && n < 25){
            document.getElementById('txtHealthStat'+x).value = "Normal";}
       else if (n >= 25 && n < 30){
            document.getElementById('txtHealthStat'+x).value = "Overweight";}
        else if (n >= 30){
            document.getElementById('txtHealthStat'+x).value = "Obese";}

      
    }

    function getWeight(x)
    { 
      alert(x);

        var c =  + (document.getElementById('txtWeight'+x).value/(document.getElementById('txtHeight'+x).value*document.getElementById('txtHeight'+x).value));
        var n = c.toFixed(2);
        document.getElementById('txtBMI'+x).value = n;


       
        
        if(n < 16){
            document.getElementById('txtHealthStat'+x).value = "Severely Underweight";}
        else if (n >= 16 && n < 18.5){
            document.getElementById('txtHealthStat'+x).value = "Underweight";}
        else if (n >= 18.5 && n < 25){
            document.getElementById('txtHealthStat'+x).value = "Normal";}
       else if (n >= 25 && n < 30){
            document.getElementById('txtHealthStat'+x).value = "Overweight";}
        else if (n >= 30){
            document.getElementById('txtHealthStat'+x).value = "Obese";}
      
        
    }
</script>




 </section>
 @stop