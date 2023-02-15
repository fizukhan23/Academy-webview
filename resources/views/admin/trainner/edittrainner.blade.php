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
		
                                <form action="{{url('/updatetrainner',$data->id)}}" method="post" enctype="multipart/form-data">

           @if(Session::has('success'))
        <div class="alert alert-success">{{ Session::get('success') }}</div>
        @endif
        @if(Session::has('fail'))
        <div class="alert alert-danger">{{ Session::get('fail') }}</div>
        @endif
        @csrf   
        @Method('PUT')
           <h3 style="color: #8f0acd;font-weight: bold;text-align: center;font-size: 29px;">Edit Coach</h3>  
       
                    <div class="mb-3 col-md-8">
                        <label>Name</label>
                            <input type="text" class="form-control" name="name"  value="@if (!empty($data)){{ $data->name }}@else{{ old('name') }}@endif">
                            </div>  
                         <div class="mb-3 col-md-8">
                        <label>Surname</label>
                            <input type="text" class="form-control" name="surname"  value="@if (!empty($data)){{ $data->surname }}@else{{ old('surname') }}@endif">
                            </div>  
                         <div class="mb-3 col-md-8">
                        <label>D.O.B</label>
                            <input type="date" class="form-control" name="DOB"  value="@if (!empty($data)){{ $data->DOB }}@else{{ old('DOB') }}@endif">
                            </div>  
                       <div class="mb-3 col-md-8">
                        <label>Age</label>
                            <input type="number" class="form-control" name="age"  value="@if (!empty($data)){{ $data->age }}@else{{ old('age') }}@endif">
                            </div> 
                           <div class="mb-3 col-md-8">
                            <label>Gender</label><br>
                            <input type="radio" name="gender"  value="Male"  @if(@$data->gender == "Male") checked @endif required>Male
                            <input type="radio" name="gender"  value="Female"  @if(@$data->gender == "Female") checked @endif required>Female
                            </div>  
                              <div class="mb-3 col-md-8">
                        <label>Image</label>
                            <input type="file" class="form-control" name="image" >
                            @if(!empty($data->image))
                            <img src="{{asset('images/photo/'.$data->image) }}" width="80" height="80" style="border-radius: 50%;"></td>
                                                                @endif
                            </div>
                              <div class="mb-3 col-md-8">
                            <label>Status</label><br>
                           <input type="radio" name="status"  value="Marride"  @if(@$data->status == "Marride") checked @endif required>Marride
                            <input type="radio" name="status"  value="Unmarride"  @if(@$data->status == "Unmarride") checked @endif required>Unmarride
                            </div> 
                             <div class="mb-3 col-md-8">
                        <label>Address</label>
                            <input type="text" class="form-control" name="address"  value="@if (!empty($data)){{ $data->address }}@else{{ old('address') }}@endif">
                            </div> 
                      <div class="mb-3 col-md-8">
                        <label>Country</label>
                            <input type="text" class="form-control" name="country"  value="@if (!empty($data)){{ $data->country }}@else{{ old('country') }}@endif">
                            </div> 
                       <div class="mb-3 col-md-8">
                        <label>Postal code</label>
                            <input type="text" class="form-control" name="postal_code"  value="@if (!empty($data)){{ $data->postal_code }}@else{{ old('postal_code') }}@endif">
                            </div> 
                       <div class="mb-3 col-md-8">
                        <label>Mobile Number</label>
                            <input type="number" class="form-control" name="mobile"  value="@if (!empty($data)){{ $data->mobile }}@else{{ old('mobile') }}@endif">
                            </div>  
                               <div class="mb-3 col-md-8">
                        <label>Qualification</label>
                            <input type="file" class="form-control" name="qualification[]" multiple>
                       </div>
                             <div class="mb-3 col-md-8">
                        <label>Apptitude</label>
                            <input type="text" class="form-control" name="apptitude"  value="@if (!empty($data)){{ $data->apptitude }}@else{{ old('apptitude') }}@endif">
                            </div>  
                             <div class="mb-3 col-md-8">
                        <label>Student evaluation</label>
                            <input type="text" class="form-control" name="student_evaluation"  value="@if (!empty($data)){{ $data->student_evaluation }}@else{{ old('student_evaluation') }}@endif">
                            </div>  
                              <div class="mb-3 col-md-8">
                        <label>Convenient Hours</label>
                            <input type="text" class="form-control" name="convenient_hours"  value="@if (!empty($data)){{ $data->convenient_hours }}@else{{ old('convenient_hours') }}@endif">
                            </div> 
                             <div class="mb-3 col-md-8">
                        <label>Convenient days</label>
                            <input type="text" class="form-control" name="convenient_days"  value="@if (!empty($data)){{ $data->convenient_days }}@else{{ old('convenient_days') }}@endif">
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