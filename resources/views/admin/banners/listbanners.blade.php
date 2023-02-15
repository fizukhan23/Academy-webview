



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
                        <h4>Banner Form</h4>
                    </div>

                </div>
                <!-- row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Banner List</h4>
                            </div>
                          
                      <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="display" style="min-width: 845px">
                                        <thead class="head">
                                           <tr>
                                               
                                                <th>#</th>
                                                
                                                 <th>Video</th>  
                                                <th>Image</th>
                                               
                                                <th>Title</th>
                                                <th>Description</th>
                                                <th>Image</th>
                                                <th>Title</th>
                                                <th>Description</th>
                                                <th>Image</th>
                                                <th>Title</th>
                                                <th>Description</th>

                                          </tr>
                                        </thead>
                                        <tbody>
                                             <?php $i = 1; ?>
        @foreach($banners as $u)
            <tr>
               <td> {{ $i }}</td>
                                               
                                               
                                            <div class="media me-2">
                                             
                                               <td>
                                                     <video width="100" height="140"  controls>
                                                  <source src="{{asset('images/video/'.$u->video)}}" type="video/mp4">
                                              </video> 
                                                </td>
                                                 <td>
                                                        <img src="{{asset('images/banner/'.$u->photo)}}" width="60" height="70" style="border-radius: 50%;">  
                                                </td>
                                               
                                                

                                                  <td>{{ $u->title2 }}</td>
                                                  <td>{{ $u->link2 }}</td>
                                                  <td>
                                                        <img src="{{asset('images/banner2/'.$u->img2)}}" width="60" height="70" style="border-radius: 50%;">  
                                                </td>
                                               
                                                

                                                  <td>{{ $u->title3 }}</td>
                                                  <td>{{ $u->link3 }}</td>
                                                  <td>
                                                        <img src="{{asset('images/banner3/'.$u->img3)}}" width="60" height="70" style="border-radius: 50%;">  
                                                </td>
                                               
                                                

                                                  <td>{{ $u->name }}</td>
                                                  <td>{{ $u->link }}</td>
                                            
                                           </div>
                                                <td>
													<div class="d-flex">
														<a href="{{url('editbanners',$u->id)}}" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
														<a href="{{url('deletebanners',$u->id)}}" class="btn btn-danger shadow btn-xs sharp"><i class="fas fa-trash"></i></a>
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