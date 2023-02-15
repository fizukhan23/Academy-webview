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
		
                                <form action="{{url('/updateworkshop',$data->id)}}" method="post" enctype="multipart/form-data">

           @if(Session::has('success'))
        <div class="alert alert-success">{{ Session::get('success') }}</div>
        @endif
        @if(Session::has('fail'))
        <div class="alert alert-danger">{{ Session::get('fail') }}</div>
        @endif
        @csrf   
        @Method('PUT')
           <h3 style="color: #8f0acd;font-weight: bold;text-align: center;font-size: 29px;">Edit Workshop</h3>  
       
                    <div class="mb-3 col-md-8">
                        <label>ID</label>
                            <input type="text" class="form-control" name="coach_id" value="@if (!empty($data)){{ $data->coach_id }}@else{{ old('coach_id') }}@endif" required>
                            </div>  
                           
                    <div class="mb-3 col-md-8">
                        <label>Title</label>
                            <input type="text" class="form-control" name="title" value="@if (!empty($data)){{ $data->title }}@else{{ old('title') }}@endif" required>
                            </div>   
                         <div class="mb-3 col-md-8">
                        <label>From date</label>
                            <input type="date" class="form-control" name="from_date" value="@if (!empty($data)){{ $data->from_date }}@else{{ old('from_date') }}@endif" required>
                            </div> 
                              <div class="mb-3 col-md-8">
                        <label>TO date</label>
                            <input type="date" class="form-control" name="to_date" value="@if (!empty($data)){{ $data->to_date }}@else{{ old('to_date') }}@endif" required>
                            </div>  
                         <div class="mb-3 col-md-8">
                        <label>Description</label>
                            <input type="text" class="form-control" name="description" value="@if (!empty($data)){{ $data->description }}@else{{ old('description') }}@endif" required>
                            </div>  
                       <div class="mb-3 col-md-8">
                        <label>Duration</label>
                            <input type="text" class="form-control" name="duration" value="@if (!empty($data)){{ $data->duration }}@else{{ old('duration') }}@endif" required>
                            </div>  
                        </div>  
                                         
                      <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>  
                                    </form>
                                  
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