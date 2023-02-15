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
		
                                <form action="{{url('/updatestudent',$data->id)}}" method="post" enctype="multipart/form-data">

           @if(Session::has('success'))
        <div class="alert alert-success">{{ Session::get('success') }}</div>
        @endif
        @if(Session::has('fail'))
        <div class="alert alert-danger">{{ Session::get('fail') }}</div>
        @endif
        @csrf   
        @Method('PUT')
           <h3 style="color: #8f0acd;font-weight: bold;text-align: center;font-size: 29px;">Edit Student</h3>  
       
                    <div class="mb-3 col-md-8">
                        <label>Name</label>
                            <input type="text" class="form-control" name="name" value="@if (!empty($data)){{ $data->name }}@else{{ old('name') }}@endif" required>
                            </div>  
                         <div class="mb-3 col-md-8">
                        <label>Surname</label>
                            <input type="text" class="form-control" name="surname" value="@if (!empty($data)){{ $data->surname }}@else{{ old('surname') }}@endif" required>
                            </div>  
                         <div class="mb-3 col-md-8">
                        <label>D.O.B</label>
                            <input type="date" class="form-control" name="DOB" value="@if (!empty($data)){{ $data->DOB }}@else{{ old('DOB') }}@endif" required>
                            </div>  
                       <div class="mb-3 col-md-8">
                        <label>Age</label>
                            <input type="number" class="form-control" name="age" value="@if (!empty($data)){{ $data->age }}@else{{ old('age') }}@endif" required>
                            </div> 
                           <div class="mb-3 col-md-8">
                            <label>Gender</label><br>
                            <input type="radio" name="gender"  value="Male"  @if(@$data->gender == "Male") checked @endif required>Male
                            <input type="radio" name="gender"  value="Female"  @if(@$data->gender == "Female") checked @endif required>Female
                            </div>  
                          <div class="mb-3 col-md-8">
                        <label>Image</label>
                            <input type="file" class="form-control" name="image">
                                     @if(!empty($data->image))
                            <img src="{{asset('images/image/'.$data->image) }}" width="80" height="80" style="border-radius: 50%;"></td>
                                                                @endif
                            </div> 
                      <div class="mb-3 col-md-8">
                        <label>Responsible party</label>
                            <input type="text" class="form-control" name="res_party" value="@if (!empty($data)){{ $data->res_party }}@else{{ old('res_party') }}@endif" required>
                            </div> 
                       <div class="mb-3 col-md-8">
                        <label>Responsble partyid</label>
                            <input type="number" class="form-control" name="res_partyid" value="@if (!empty($data)){{ $data->res_partyid }}@else{{ old('res_partyid') }}@endif" required>
                            </div> 
                             <div class="mb-3 col-md-8">
                        <label>Address</label>
                            <input type="text" class="form-control" name="address" value="@if (!empty($data)){{ $data->address }}@else{{ old('address') }}@endif">
                            </div> 
                             <div class="mb-3 col-md-8">
                        <label>Postal Code</label>
                            <input type="text" class="form-control" name="postal_code" value="@if (!empty($data)){{ $data->postal_code }}@else{{ old('postal_code') }}@endif">
                            </div> 
                             <div class="mb-3 col-md-8">
                        <label>Country</label>
                            <input type="text" class="form-control" name="country" value="@if (!empty($data)){{ $data->country }}@else{{ old('country') }}@endif">
                            </div>
                       <div class="mb-3 col-md-8">
                        <label>Mobile Number</label>
                            <input type="number" class="form-control" name="phone" value="@if (!empty($data)){{ $data->phone }}@else{{ old('phone') }}@endif">
                            </div>  
                             <div class="mb-3 col-md-8">
                        <label>Parent Mobile Number</label>
                            <input type="number" class="form-control" name="parent_phone" value="@if (!empty($data)){{ $data->parent_phone }}@else{{ old('parent_phone') }}@endif">
                            </div>  
                             <div class="mb-3 col-md-8">
                        <label>Student course</label>
                            <input type="text" class="form-control" name="stu_course" value="@if (!empty($data)){{ $data->stu_course }}@else{{ old('stu_course') }}@endif">
                            </div>  
                              <div class="mb-3 col-md-4">
                        <label>Membership fee</label>
                            <input type="text" class="form-control" name="mem_fes" value="@if (!empty($data)){{ $data->mem_fes }}@else{{ old('mem_fes') }}@endif">
                            <input type="date" class="form-control" name="mem_date" value="@if (!empty($data)){{ $data->mem_date }}@else{{ old('mem_date') }}@endif">
                              
                            </div> 
                         <div class="mb-3 col-md-8">
                        <label>Monthly fee</label>
                            <input type="text" class="form-control" name="monthly_fee" value="@if (!empty($data)){{ $data->monthly_fee }}@else{{ old('monthly_fee') }}@endif">
                             <input type="date" class="form-control" name="mon_date" value="@if (!empty($data)){{ $data->mon_date }}@else{{ old('mon_date') }}@endif">
                            </div> 
                             <div class="mb-3 col-md-8">
                        <label>Registration fee</label>
                            <input type="text" class="form-control" name="regis_fee" value="@if (!empty($data)){{ $data->regis_fee }}@else{{ old('regis_fee') }}@endif">
                             <input type="date" class="form-control" name="regis_date" value="@if (!empty($data)){{ $data->regis_date }}@else{{ old('regis_date') }}@endif">
                            </div> 
                            
                             <div class="mb-3 col-md-8">
                        <label>Reason for Taking Course</label>
                            <input type="text" class="form-control" name="re_takingcourse" value="@if (!empty($data)){{ $data->re_takingcourse }}@else{{ old('re_takingcourse') }}@endif">
                            </div>
                             <div class="mb-3 col-md-8">
                        <label>Remark</label>
                            <input type="text" class="form-control" name="remark" value="@if (!empty($data)){{ $data->remark }}@else{{ old('remark') }}@endif">
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