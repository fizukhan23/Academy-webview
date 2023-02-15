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
		
                                <form action="{{url('/savestudent')}}" method="post" enctype="multipart/form-data">

           @if(Session::has('success'))
        <div class="alert alert-success">{{ Session::get('success') }}</div>
        @endif
        @if(Session::has('fail'))
        <div class="alert alert-danger">{{ Session::get('fail') }}</div>
        @endif
        @csrf   
           <h3 style="color: #8f0acd;font-weight: bold;text-align: center;font-size: 29px;">Add Student</h3>  
       
                    <div class="mb-3 col-md-8">
                        <label>Name</label>
                            <input type="text" class="form-control" name="name" required>
                            </div>  
                         <div class="mb-3 col-md-8">
                        <label>Surname</label>
                            <input type="text" class="form-control" name="surname" required>
                            </div>  
                         <div class="mb-3 col-md-8">
                        <label>D.O.B</label>
                            <input type="date" class="form-control" name="DOB" required>
                            </div>  
                       <div class="mb-3 col-md-8">
                        <label>Age</label>
                            <input type="number" class="form-control" name="age" required>
                            </div> 
                           <div class="mb-3 col-md-8">
                            <label>Gender</label><br>
                            <input type="radio" name="gender"  value="Male" required>Male
                            <input type="radio" name="gender"  value="Female" required>Female
                            </div>  
                          <div class="mb-3 col-md-8">
                        <label>Image</label>
                            <input type="file" class="form-control" name="image" required>
                            </div> 
                      <div class="mb-3 col-md-8">
                        <label>Responsible party</label>
                            <input type="text" class="form-control" name="res_party" required>
                            </div> 
                       <div class="mb-3 col-md-8">
                        <label>Responsble partyid</label>
                            <input type="number" class="form-control" name="res_partyid" required>
                            </div> 
                             <div class="mb-3 col-md-8">
                        <label>Address</label>
                            <input type="text" class="form-control" name="address" >
                            </div> 
                             <div class="mb-3 col-md-8">
                        <label>Postal Code</label>
                            <input type="text" class="form-control" name="postal_code" >
                            </div> 
                             <div class="mb-3 col-md-8">
                        <label>Country</label>
                            <input type="text" class="form-control" name="country" >
                            </div>
                       <div class="mb-3 col-md-8">
                        <label>Mobile Number</label>
                            <input type="number" class="form-control" name="phone" >
                            </div>  
                             <div class="mb-3 col-md-8">
                        <label>Parent Mobile Number</label>
                            <input type="number" class="form-control" name="parent_phone" >
                            </div>  
                             <div class="mb-3 col-md-8">
                        <label>Student course</label>
                            <input type="text" class="form-control" name="stu_course" >
                            </div>  
                              <div class="mb-3 col-md-4">
                        <label>Membership fee</label>
                            <input type="text" class="form-control" name="mem_fes" >
                            <input type="date" class="form-control" name="mem_date" >
                              
                            </div> 
                         <div class="mb-3 col-md-8">
                        <label>Monthly fee</label>
                            <input type="text" class="form-control" name="monthly_fee" >
                             <input type="date" class="form-control" name="mon_date" >
                            </div> 
                             <div class="mb-3 col-md-8">
                        <label>Registration fee</label>
                            <input type="text" class="form-control" name="regis_fee" >
                             <input type="date" class="form-control" name="regis_date" >
                            </div> 
                            
                             <div class="mb-3 col-md-8">
                        <label>Reason for Taking Course</label>
                            <input type="text" class="form-control" name="re_takingcourse" >
                            </div>
                             <div class="mb-3 col-md-8">
                        <label>Remark</label>
                            <input type="text" class="form-control" name="remark" >
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