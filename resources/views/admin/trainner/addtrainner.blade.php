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
		
                                <form action="{{url('/savetrainner')}}" method="post" enctype="multipart/form-data">

           @if(Session::has('success'))
        <div class="alert alert-success">{{ Session::get('success') }}</div>
        @endif
        @if(Session::has('fail'))
        <div class="alert alert-danger">{{ Session::get('fail') }}</div>
        @endif
        @csrf   
           <h3 style="color: #8f0acd;font-weight: bold;text-align: center;font-size: 29px;">Add Coach</h3>  
       
                    <div class="mb-3 col-md-8">
                        <label>Name</label>
                            <input type="text" class="form-control" name="name" >
                            </div>  
                         <div class="mb-3 col-md-8">
                        <label>Surname</label>
                            <input type="text" class="form-control" name="surname" >
                            </div>  
                         <div class="mb-3 col-md-8">
                        <label>D.O.B</label>
                            <input type="date" class="form-control" name="DOB" >
                            </div>  
                       <div class="mb-3 col-md-8">
                        <label>Age</label>
                            <input type="number" class="form-control" name="age" >
                            </div> 
                           <div class="mb-3 col-md-8">
                            <label>Gender</label><br>
                            <input type="radio" name="gender"  value="Male" required>Male
                            <input type="radio" name="gender"  value="Female" required>Female
                            </div>  
                              <div class="mb-3 col-md-8">
                        <label>Image</label>
                            <input type="file" class="form-control" name="image" >
                            </div>
                              <div class="mb-3 col-md-8">
                            <label>Status</label><br>
                           <input type="radio" name="status"  value="Marride" required>Marride
                            <input type="radio" name="status"  value="Unmarride" required>Unmarride
                            </div> 
                             <div class="mb-3 col-md-8">
                        <label>Address</label>
                            <input type="text" class="form-control" name="address" >
                            </div> 
                      <div class="mb-3 col-md-8">
                        <label>Country</label>
                            <input type="text" class="form-control" name="country" >
                            </div> 
                       <div class="mb-3 col-md-8">
                        <label>Postal code</label>
                            <input type="text" class="form-control" name="postal_code" >
                            </div> 
                       <div class="mb-3 col-md-8">
                        <label>Mobile Number</label>
                            <input type="number" class="form-control" name="mobile" >
                            </div>  
                               <div class="mb-3 col-md-8">
                        <label>Qualification</label>
                            <input type="file" class="form-control" name="qualification[]" multiple="multiple" accept="application/pdf">
                            </div>
                             <div class="mb-3 col-md-8">
                        <label>Apptitude</label>
                            <input type="text" class="form-control" name="apptitude" >
                            </div>  
                             <div class="mb-3 col-md-8">
                        <label>Student evaluation</label>
                            <input type="text" class="form-control" name="student_evaluation" >
                            </div>  
                              <div class="mb-3 col-md-8">
                        <label>Convenient Hours</label>
                            <input type="text" class="form-control" name="convenient_hours" >
                            </div> 
                             <div class="mb-3 col-md-8">
                        <label>Convenient days</label>
                            <input type="text" class="form-control" name="convenient_days" >
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