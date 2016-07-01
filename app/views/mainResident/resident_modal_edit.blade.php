<!--- MODAL EDIT-->

        <div class="modal fade" id="edit">
          <div class="modal-dialog modal-lg">
          <!-- form start method = "POST" action="{{URL::to('updateOfficialPosition')}}"-->
                <div class="form-horizontal" >
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit Resident Info</h4>
              </div>
              <!-- modal content -->
              <div class="modal-body">
            
                  <div class="box-body">

                  <table id="ename" class="table table-bordered table-striped" style="font-size:14px" > 
                    <tbody>
                      <tr>
                        <td>ID:</td>
                        <td><input type="text" class="form-control" id = "etxtID" name = "txt2" readonlyRE></td>
                        <td>&nbsp; &nbsp; &nbsp;</td>
                        <td>Name: </td>
                        <td><input type="text" class="form-control" id = "etxtFName" name = "txt2"></td>
                        <td><input type="text" class="form-control" id = "etxtMName" name = "txt2"></td>
                        <td><input type="text" class="form-control" id = "etxtLName" name = "txt2"></td>


                      </tr>
                    </tbody>
                  </table>

                    <br><br>

                    <div class="col-md-12">
                      <!-- Custom Tabs -->
                      <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                          <li class="active"><a href="#tab_1" data-toggle="tab">Personal Details</a></li>
                          <li><a href="#etab_2" data-toggle="tab">Contact Details</a></li>
                          <li><a href="#etab_3" data-toggle="tab">Health Details</a></li>
                          <li><a href="#etab_4" data-toggle="tab">Education and Literacy</a></li>
                          <li><a href="#etab_5" data-toggle="tab">Economic Details</a></li>
                         
                        </ul>

                      
                        <div class="tab-content" style="overflow: auto">
                         
                          <div class="tab-pane active" id="etab_1">
                          <div id="dynamicInput3">
                            <table id="etable1" style="border-spacing: 0px;border-collapse: collapse;font-size: 12px;">
                              <thead style="font-size:13px; background-color:#f0f5f5">
                                <tr>
                                  <th>Relation to the Head*</th>
                                  <th>Residency Status*</th>
                                  <th>Birthdate*</th>
                                  <th>Birth Place*</th>
                                  <th>Gender*</th>
                                  <th>Civil Status*</th>
                                  <th>Religion*</th>
                                </tr>
                              </thead>

                              <tbody>
                                <tr>
                                  <td><select class="form-control" id="etxtRelation">
                                      <option>Head</option>
                                      <option>Husband</option>
                                      <option>Wife</option>
                                      <option>Son</option>
                                      <option>Daughter</option>
                                      <option>Son-in-law</option>
                                      <option>Daughter-in-law</option>
                                      <option>Father-in-law</option>
                                      <option>Mother-in-law</option>
                                      <option>Grandson</option>
                                      <option>Granddaughter</option>
                                      <option>Father</option>
                                      <option>Mother</option>
                                      <option>Relative-male</option>
                                      <option>Relative-female</option>
                                      <option>Househelp-male</option>
                                      <option>Househelp-female</option>
                                      <option>Tenant/Boarder</option>
                                  </select></td>
                                  <td><select id="etxtResidency" class="form-control">
                                      <option>House Owner</option>
                                      <option>Renter</option>
                                  </select></td>

                                  <td><input type=text class="form-control" id="etxtBday" onkeyup="myAgeValidation()" step="any" required></td>
                                  <td><input type=text class="form-control" id="etxtBPlace" required></td>
                                  <td style="width:100px;align:center"><input type="radio" name="ebtnGender" id="ebtnGender" checked>Male
                                  	  <input type="radio" id="ebtnGender" name="ebtnGender">Female</td>
                                  <td><select class="form-control" id="etxtCivil" required>
                                      <option>Single</option>
                                      <option>Married</option>
                                      <option>Divorced</option>
                                      <option>Widowed</option>
                                      <option>Separated</option>
                                  </select></td>
                                  <td><select class="form-control" id="etxtReligion" required>
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

                           
                          <div class="tab-pane" id="etab_2">
                          <div id="dynamicInput">
                            <table id="etable2" style="border-spacing: 0px;border-collapse: collapse;font-size: 12px;" align="center">
                              <thead style="font-size:13px; background-color:#f0f5f5; size:26px">
                                <tr>
                                  <th>Mobile <br> No.</th>
                                  <th>Landline <br> No.</th>
                                  <th>E-mail <br> Address</th>

                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td><input type=text class="form-control" id="etxtMobile"></td>e
                                  <td><input type=text class="form-control" id="etxtLine"></td>
                                  <td><input type=text class="form-control" id="etxtEmail"></td>
                                </tr>

                              </tbody>
                          
                            </table>

                            

                          </div><!-- /.tab-pane -->
                          

                          </div>
                          <div class="tab-pane" id="etab_3">
                          <div id="dynamicInput2">
                            <table id="etable3" style="border-spacing: 0px;border-collapse: collapse;font-size: 12px;" align="center">
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
                                  <td><input type=text class="form-control" id="etxtHeight" value = 0 onkeyup = "getHeight()" step="any" required></td>
                                  <td><input type=text class="form-control" id="etxtWeight" value = 0 onkeyup = "getWeight()" step="any" required></td>
                                  <td><input type=text class="form-control" readonly id="etxtBMI"></td>
                                  <td><input type=text class="form-control" readonly id="etxtHealthStat"></td>
                                </tr>

                              </tbody>
                        
                            </table>
                            </div>
                          </div><!-- /.tab-pane -->

                          <div class="tab-pane" id="etab_4">
                          <div id="dynamicInput4">
                            <table id="etable4" style="border-spacing: 0px;border-collapse: collapse;font-size: 12px;" align="center">
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
                                        id="etxtCurrentStud"
                                        onclick = "getEduc()"
                                        required>
                                            <option>Yes</option>
                                            <option>No</option>
                                    </select></td>

                                  <td><select class="form-control"  id="etxtRecentEd">
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

                                  <td><select class="form-control"  id="etxtHighestEd">
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


                                   <td align="center"><input type="radio" id="ebtnRead" name="ebtnRead" checked>Yes
                                      <input type="radio"  id="ebtnRead" name="ebtnRead">No</td>
                                  <td align="center"><input type="radio" id="ebtnWrite" name="ebtnWrite" checked>Yes
                                      <input type="radio"  id="ebtnRead" name="ebtnWrite">No</td>
                                  </select></td>

                                  
                                </tr>

                               

                              </tbody>
                            </table>
                            </div>
                          </div><!-- /.tab-pane -->

                          <div class="tab-pane" id="etab_5">
                          <div id="dynamicInput5">
                            <table id="etable5" style="border-spacing: 0px;border-collapse: collapse;font-size: 12px;" align="center">
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
                                        id="txtCurrentEmp"
                                        onclick = "getEcon()"
                                        required>
                                            <option>Yes</option>
                                            <option>No</option>
                                    </select></td>
                                  <td><input type=text class="form-control" id="etxtOccupation"></td>
                                  <td><input type=text class="form-control"  id="etxtSalary"></td>
                                  </select></td>
                                </tr>

                              

                              </tbody>
                            </table>
                            </div>
                          </div><!-- /.tab-pane -->
                        </div><!-- /.tab-content -->
                      </div><!-- nav-tabs-custom -->
                    </div><!-- /.col -->


                    

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



        <script src="{{ asset ('bower_components/admin-lte/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>


        <script type="text/javascript">
          

                $(document).ready(function(){

                   $('#btnUpdate').click(function(e){
                    e.preventDefault();
                    var txt1 = $('#etxtID').val();
                    var txt2 = $('#etxtFName').val();
                    var txt3 = $('#etxtLName').val();
                    var txt4 = $('#etxtMName').val();
                    var txt5 = $('#etxtRelation').val();
                    var txt6 = $('#etxtResidency').val();
                    var txt7 = $('#etxtBday').val();
                    var txt8 = $('#etxtBPlace').val();
                    var txt9 = $("input[name='ebtnGender']:checked").val();
                    var txt10 = $('#etxtCivil').val();
                    var txt11 = $('#etxtReligion').val();
                    var txt12 = $('#etxtMobile').val();
                    var txt13 = $('#etxtLine').val();
                    var txt14 = $('#etxtEmail').val();
                    var txt15 = $('#etxtHeight').val();
                    var txt16 = $('#etxtWeight').val();
                    var txt17 = $('#etxtHealthStat').val();
                    var txt18 = $('#etxtCurrentStud').val();
                    var txt19 = $('#etxtHighestEd').val();
                    var txt20 = $('#etxtRecentEd').val();
                    var txt21 = $("input[name='ebtnRead']:checked").val();
                   var txt22= $("input[name='ebtnWrite']:checked").val();
                    var txt23 = $('#etxtCurrentEmp').val();
                    var txt24 = $('#etxtOccupation').val();
                    var txt25 = $('#etxtSalary').val();

                    $.ajax({
                      type: 'POST',
                      url: 'updateResident',
                      data: { txt1: txt1, 
                              txt2: txt2,
                              txt3: txt3,
                              txt4: txt4,
                              txt5: txt5,
                              txt6: txt6,
                              txt7: txt7,
                              txt8: txt8,
                              txt9: txt9,
                              txt10: txt10,
                              txt11: txt11,
                              txt12: txt12,
                              txt13: txt13,
                              txt14: txt14,
                              txt15: txt15,
                              txt16: txt16,
                              txt17: txt17,
                              txt18: txt18,
                              txt19: txt19,
                              txt20: txt20,
                              txt21: txt21,
                              txt22: txt22,
                              txt23: txt23,
                              txt24: txt24,
                              txt25: txt25},
                      dataType: 'JSON',
                      success: function(data){
                        alert('Record is successfully updated!');
                       /* tbl.clear().draw();

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

                    });
            
                  });
        </script>