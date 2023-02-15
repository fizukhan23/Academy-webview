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
		
                                <form action="{{url('/updatebanners',$data->id)}}" method="post" enctype="multipart/form-data">

           @if(Session::has('success'))
        <div class="alert alert-success">{{ Session::get('success') }}</div>
        @endif
        @if(Session::has('fail'))
        <div class="alert alert-danger">{{ Session::get('fail') }}</div>
        @endif
        @csrf   
        @Method('PUT')
           <h3 style="color: #8f0acd;font-weight: bold;text-align: center;font-size: 29px;">Edit Banner</h3>  
        
                        <div class="mb-3 col-md-8">
                        <b><label>Video</label></b>
                            <input type="file" class="form-control" name="video" style="height:30px; weight:20px;">
                              @if(!empty($data->photo))
                             <video width="100" height="140"  controls>
                                                  <source src="{{asset('images/video/'.$data->video)}}" type="video/mp4">
                                           </video> 
                                                    @endif
                            </div>  
                             <label>For First card</label>      
                       <div class="mb-3 col-md-8">
                       <b> <label>Image</label></b>
                            <input type="file" class="form-control" name="photo">
                                  @if(!empty($data->photo))
                            <img src="{{asset('images/banner/'.$data->photo) }}" width="80" height="80" style="border-radius: 50%;"></td>
                                                                @endif
                            </div> 
                           <div class="mb-3 col-md-8">
                        <b><label>Name</label></b>
                            <input type="text" class="form-control" name="name" value="@if (!empty($data)){{ $data->name }}@else{{ old('name') }}@endif"  required>
                            </div>  

                       <div class="mb-3 col-md-8">
                        <b><label>Link</label></b>
                            <input type="link" class="form-control" name="link" value="@if (!empty($data)){{ $data->link }}@else{{ old('link') }}@endif"  required>
                            </div>
             <label>For secound card</label>   
                  <div class="mb-3 col-md-8">
                       <b> <label>Image</label></b>
                            <input type="file" class="form-control" name="img2" >
                             @if(!empty($data->img2))
                            <img src="{{asset('images/banner2/'.$data->img2) }}" width="80" height="80" style="border-radius: 50%;"></td>
                                                                @endif
                            </div>  
                     
                           <div class="mb-3 col-md-8">
                        <b><label>Title Name</label></b>
                            <input type="text" class="form-control" name="title2" value="@if (!empty($data)){{ $data->title2 }}@else{{ old('title2') }}@endif">
                            </div>  

                       <div class="mb-3 col-md-8">
                        <b><label>Link</label></b>
                            <input type="link" class="form-control" name="link2" value="@if (!empty($data)){{ $data->link2 }}@else{{ old('link2') }}@endif">
                            </div>
                              <label>For Third Card</label>
                            <div class="mb-3 col-md-8">
                       <b> <label>Image</label></b>
                            <input type="file" class="form-control" name="img3" >
                             @if(!empty($data->img3))
                            <img src="{{asset('images/banner3/'.$data->img3) }}" width="80" height="80" style="border-radius: 50%;"></td>
                                                                @endif
                            </div>  
                    
                           <div class="mb-3 col-md-8">
                        <b><label>Title Name</label></b>
                            <input type="text" class="form-control" name="title3" value="@if (!empty($data)){{ $data->title3 }}@else{{ old('title3') }}@endif">
                            </div>  
                      <div class="mb-3 col-md-8">
                        <b><label>Link</label></b>
                            <input type="link" class="form-control" name="link3" value="@if (!empty($data)){{ $data->link3 }}@else{{ old('link3') }}@endif">
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