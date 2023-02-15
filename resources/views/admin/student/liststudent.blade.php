

@include('admin.layout.header')
@include('admin.layout.navbar')
@include('admin.layout.sidebar')
<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <h4>Student List Form</h4>
                    </div>

                </div>
                <!-- row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Student List</h4>
                            </div>
                          
                      <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="display" style="min-width: 845px">
                                        <thead class="head">
                                           <tr>
                                               
                                                <th>#</th>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Surname</th>
                                                <th>DOB </th>
                                                <th>Age</th>
                                                <th>Gender</th>
                                                <th>Image</th>
                                                <th>Responsible party</th>
                                                <th>Responsible party Id</th> 
                                                <th>Address</th>
                                                <th>Postal_code</th>
                                                <th>Country</th>
                                                <th>Mobile</th>
                                                <th>Parent Mobile Number</th>
                                                <th>Student Course</th>
                                                <th>Membership fee</th>
                                                <th>Membership Date</th>
                                                <th>Monthly Fee</th>
                                              
                                                <th>Reason for Taking course</th>
                        
                        
                        
                        
                                                <th>Remark</th>
                                               
                                          </tr>
                                        </thead>
                                        <tbody>
                                             <?php $i = 1; ?>
        @foreach($student as $u)
            <tr>
               <td> {{ $i }}</td>
                                               
                                               
                                            <div class="media me-2">
                                                  <td>{{ $u->id }}</td>
                                               <td>{{ $u->name }}</td>
                                               <td>{{ $u->surname }}</td>
                                               <td>{{ $u->DOB }}</td>
                                               <td>{{ $u->age }}</td>
                                               <td>{{ $u->gender }}</td>
                                                <td>
                                                  <img src="{{asset('images/image/'.$u->image)}}" width="60" height="70" style="border-radius: 50%;">  
                                               </td>
                                               <td>{{ $u->res_party }}</td>
                                               <td>{{ $u->res_partyid }}</td>
                                               <td>{{ $u->address }}</td>
                                               <td>{{ $u->postal_code }}</td>
                                               <td>{{ $u->country }}</td>
                                               <td>{{ $u->phone }}</td>
                                               <td>{{ $u->parent_phone }}</td>
                                               <td>{{ $u->stu_course }}</td>
                                               <td>{{ $u->mem_fes }}</td>
                                               <td>{{ $u->mem_date }}</td>
                                               <td>{{ $u->monthly_fee }}</td>
                                           
                                               <td>{{ $u->re_takingcourse }}</td>
                                               <td>{{ $u->remark }}</td>

                                           </div>
                                                <td>
													<div class="d-flex">
														<a href="{{url('editstudent',$u->id)}}" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
														<a href="{{url('deletestudent',$u->id)}}" class="btn btn-danger shadow btn-xs sharp"><i class="fas fa-trash"></i></a>
                                                 
                                                           <a href="{{url('listreport',$u->id)}}" class="btn btn-success">progress</a>
													</div>												
												</td>							
</tr>
<?php $i++; ?>
        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                  
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
    @include('admin.layout.footer')

        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
   

  <script src="{{asset('panel/vendor/global/global.min.js')}}"></script>
	<script src="{{asset('panel/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
	<script src="{{asset('panel/vendor/chart.js/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('panel/js/custom.min.js')}}"></script>
	<script src="{{asset('panel/js/deznav-init.js')}}"></script>
	
	<!-- Apex Chart -->
	<script src="{{asset('panel/vendor/apexchart/apexchart.js')}}"></script>
	
	<!-- Dashboard 1 -->
	<script src="{{asset('panel/js/dashboard/dashboard-1.js')}}"></script>
    <script src="{{asset('vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/plugins-init/datatables.init.js')}}"></script>


</body>


<!-- Mirrored from koki.dexignzone.com/xhtml/table-datatable-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Mar 2022 06:09:27 GMT -->

</html>