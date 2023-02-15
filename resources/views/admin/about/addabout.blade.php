@include('admin.layout.header')
@include('admin.layout.navbar')
@include('admin.layout.sidebar')
 <style>
        .inv {
            display: none;
        }
    </style>
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
		
                                <form action="{{url('/saveabout')}}" method="post" enctype="multipart/form-data">

           @if(Session::has('success'))
        <div class="alert alert-success">{{ Session::get('success') }}</div>
        @endif
        @if(Session::has('fail'))
        <div class="alert alert-danger">{{ Session::get('fail') }}</div>
        @endif
        @csrf   
           <h3 style="color: #8f0acd;font-weight: bold;text-align: center;font-size: 29px;">Add both</h3>  
       
                    
            <div class="mb-3 col-md-8">
                       <b><label>Select Option</label></b><br>
                             <select class="form-control" name="option" id="target">
                                  <option value="About Us" required>about us</option>
                                  <option value="What We Do" required>What We do</option>
                                 
                                </select>
                              </div>
                             <div class="mb-3 col-md-8">
                       <b> <label>Main Title</label></b>
                            <input type="text" class="form-control" name="title" >
                            </div>
                        <div class="mb-3 col-md-8">
                       <b> <label>Image</label></b>
                            <input type="file" class="form-control" name="image" >
                            </div>  
                             <div class="mb-3 col-md-8">
                       <b> <label>Main Description</label></b>
                           <textarea class="form-control" name="description"> </textarea>
                            </div>
                              <div class="col-12 col-sm-6 inv " id='What We Do' class="row">
                                <label>For first</label>
                                 <div class="mb-3 col-md-8">
                       <b> <label>Title</label></b>
                            <input type="text" class="form-control" name="tit1" >
                            </div>  
                                <div class="mb-3 col-md-8">
                       <b> <label>Description</label></b>
                           <textarea class="form-control" name="descrip1"> </textarea>
                            </div>  
                              <label>For Second</label>
                             <div class="mb-3 col-md-8">
                       <b> <label>Title</label></b>
                            <input type="text" class="form-control" name="tit2" >
                            </div>  
                                <div class="mb-3 col-md-8">
                       <b> <label>Description</label></b>
                           <textarea class="form-control" name="descrip2"> </textarea>
                            </div>  
                              <label>For Third</label>
                             <div class="mb-3 col-md-8">
                       <b> <label>Title</label></b>
                            <input type="text" class="form-control" name="tit3" >
                            </div>  
                                <div class="mb-3 col-md-8">
                       <b> <label>Description</label></b>
                           <textarea class="form-control" name="descrip3"> </textarea>
                            </div>  
                              <label>For Fourth</label>
                             <div class="mb-3 col-md-8">
                       <b> <label>Title</label></b>
                            <input type="text" class="form-control" name="tit4" >
                            </div>  
                                <div class="mb-3 col-md-8">
                       <b> <label>Description</label></b>
                           <textarea class="form-control" name="descrip4"> </textarea>
                            </div>  
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

<script>
        document
            .getElementById('target')
            .addEventListener('change', function () {
                'use strict';
                var vis = document.querySelector('.vis'),   
                    target = document.getElementById(this.value);
                if (vis !== null) {
                    vis.className = 'inv';
                }
                if (target !== null ) {
                    target.className = 'vis';
                }
        });
        </script>
        
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