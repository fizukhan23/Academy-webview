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
		
                                <form action="{{url('/updatecourse',$data->id)}}" method="post" enctype="multipart/form-data">

           @if(Session::has('success'))
        <div class="alert alert-success">{{ Session::get('success') }}</div>
        @endif
        @if(Session::has('fail'))
        <div class="alert alert-danger">{{ Session::get('fail') }}</div>
        @endif
        @csrf  
        @Method('PUT') 
           <h3 style="color: #8f0acd;font-weight: bold;text-align: center;font-size: 29px;">Edit Course</h3>  
       
                    
                     <div class="mb-3 col-md-8">
              <label>category Name</label>
         <select name="data1" value="@if (!empty($data)){{ $data->data1 }}@else{{ old('data1') }}@endif" class="form-control" required>
            <option selected disabled >please select</option>
                         @foreach($data1 as $add) 
                    <option value="{{ $add->id }}" class="text-capitalize">
                         {{ $add->category }}</option>
                   @endforeach
                                                
            </select>  
            </div>
                      <div class="mb-3 col-md-8">
              <label>Subcategory Name</label>
         <select name="data2" value="@if (!empty($data)){{ $data->data2 }}@else{{ old('data2') }}@endif" class="form-control" required>
            <option selected disabled >please select</option>
                         @foreach($data2 as $add)                            
                    <option value="{{ $add->id }}"  class="text-capitalize" >
                         {{ $add->subcategory }}</option>
                   @endforeach
                                                
            </select>  
            </div>
                    <div class="mb-3 col-md-8">
                        <label>Name</label>
                            <input type="text" class="form-control" name="name" value="@if (!empty($data)){{ $data->name }}@else{{ old('name') }}@endif" required>
                            </div>  
                         <div class="mb-3 col-md-8">
                        <label>Description</label>
                            <input type="text" class="form-control" name="description"  value="@if (!empty($data)){{ $data->description }}@else{{ old('description') }}@endif"  required>
                            </div>  
                         <div class="mb-3 col-md-8">
                        <label>Syllebus</label>
                            <input type="text" class="form-control" name="syllebus" value="@if (!empty($data)){{ $data->syllebus }}@else{{ old('syllebus') }}@endif"  required>
                            </div>  
                       <div class="mb-3 col-md-8">
                        <label>Duration</label>
                            <input type="text" class="form-control" name="duration" value="@if (!empty($data)){{ $data->duration }}@else{{ old('duration') }}@endif"  required>
                            </div> 
                           <div class="mb-3 col-md-8">
                            <label>Time</label><br>
                            <input type="text" class="form-control" name="time" value="@if (!empty($data)){{ $data->time }}@else{{ old('time') }}@endif"  required>   
                                 </div>
                      <div class="mb-3 col-md-8">
                        <label>Trainner</label>
                            <input type="text" class="form-control" name="trainer" value="@if (!empty($data)){{ $data->trainer }}@else{{ old('trainer') }}@endif"  required>
                            </div> 
                       <div class="mb-3 col-md-8">
                        <label>Price</label>
                            <input type="text" class="form-control" name="price" value="@if (!empty($data)){{ $data->price }}@else{{ old('price') }}@endif"  required>
                            </div> 
                             <div class="mb-3 col-md-8">
                        <label>Accreditation</label>
                            <input type="text" class="form-control" name="accreditation" value="@if (!empty($data)){{ $data->accreditation }}@else{{ old('accreditation') }}@endif"  required>
                            </div> 
                             <div class="mb-3 col-md-8">
                        <label>Pre-reuqisite</label>
                            <input type="text" class="form-control" name="pre_reuqisite" value="@if (!empty($data)){{ $data->pre_reuqisite }}@else{{ old('pre_reuqisite') }}@endif"  required>
                            </div> 
                             <div class="mb-3 col-md-8">
                           <label>Mode</label><br>
                           <input type="radio" name="mode"  value="Online"  @if(@$data->mode == "Online") checked @endif  required>Online
                            <input type="radio" name="mode"  value="Ofline" @if(@$data->mode == "Ofline") checked @endif   required>Ofline
                           </div>
                       <div class="mb-3 col-md-8">
                        <label>If online(Add Video)</label>
                            <input type="file" class="form-control" name="video" accept="video/*">
                                @if(!empty($data->video))
                        <video width="80" height="100"  controls>
                          <source src="{{asset('images/video/'.$data->video)}}" type="video/mp4">
                                           </video> 
                                                                @endif
                            </div>  
                             <div class="mb-3 col-md-8">
                        <label>Equipment need</label>
                            <input type="text" class="form-control" name="equipment_need" value="@if (!empty($data)){{ $data->equipment_need }}@else{{ old('equipment_need') }}@endif"  required>
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