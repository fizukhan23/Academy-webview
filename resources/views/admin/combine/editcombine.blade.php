@include('admin.layout.header')
@include('admin.layout.navbar')
@include('admin.layout.sidebar')

<!-- Mirrored from koki.dexignzone.com/xhtml/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Mar 2022 06:08:47 GMT -->


<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6" style="margin-top:9rem">
          
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
		
                                <form action="{{url('/updatecombine',$data->id)}}" method="post" enctype="multipart/form-data">

           @if(Session::has('success'))
        <div class="alert alert-success">{{ Session::get('success') }}</div>
        @endif
        @if(Session::has('fail'))
        <div class="alert alert-danger">{{ Session::get('fail') }}</div>
        @endif
        @csrf   
        @Method('PUT')
           <h3 style="color: #8f0acd;font-weight: bold;text-align: center;font-size: 29px;">Edit both</h3>  
       
                    
            <div class="mb-3 col-md-8">
                       <b><label>Select Option</label></b><br>
                              <input type="radio" name="option"  value="Return Policy"  @if(@$data->option == "Return Policy") checked @endif  required>Return Policy
                                <input type="radio" name="option"  value="Term and Condition"  @if(@$data->option == "Term and Condition") checked @endif  required>Term and Condition
                                <input type="radio" name="option"  value="Shipping"  @if(@$data->option == "Shipping") checked @endif  required>Shipping
                                <input type="radio" name="option"  value="Course Guidline"  @if(@$data->option == "Course Guidline") checked @endif required required>Course Guidline
                                <input type="radio" name="option"  value="How to go about"  @if(@$data->option == "How to go about") checked @endif required required>How to go about
                              </div>
                           <div class="mb-3 col-md-8">
                       <b> <label>Heading</label></b>
                            <input type="text" class="form-control" name="heading" value="@if (!empty($data)){{ $data->heading }}@else{{ old('heading') }}@endif" >
                            </div>
                              <div class="mb-3 col-md-8">
                       <b> <label>Paragraph</label></b>
                            <input type="text" class="form-control" name="paragraph" value="@if (!empty($data)){{ $data->paragraph }}@else{{ old('paragraph') }}@endif" >
                            </div>
                             <div class="mb-3 col-md-8">
                       <b> <label>Description</label></b>
                           <textarea class="form-control" name="description" value="@if (!empty($data)){{ $data->description }}@else{{ old('description') }}@endif" >
                          </textarea>
                            </div>
                     </div>  
                                         
                      <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>  
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


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

</body>


<!-- Mirrored from koki.dexignzone.com/xhtml/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Mar 2022 06:08:48 GMT -->
</html>