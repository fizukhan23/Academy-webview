
@include('admin.layout.header')

<body class="h-100">
    <div class="authincation h-100" style="margin-top:60px">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
					 				<div class="text-center mb-3">
									<img src="images/" alt="" style=" ">
									</div>
                                    <h2 class="text-center mb-2"><font color="#7B2869"><strong> </font></strong>  </h2><h4 class="text-center mb-4"><font color="#010103"><strong> ADMIN LOGIN</font></strong></h4>



    <form action="{{ route('login') }}" method="post">
          @if(Session::has('success'))
          <div class="alert alert-success">{{ Session::get('success') }}</div>
          @endif
          @if(Session::has('fail'))
          <div class="alert alert-danger">{{ Session::get('fail') }}</div>
          @endif
          @csrf

                    
                                        <div class="form-group">
                                            <label class="mb-1"><font color="#7B2869 "><strong>EMAIL</font></strong></label>
                                             <input type="text" placeholder="email"  class="form-control" name="email">
                                        </div>

                                        <div class="form-group">
                                            <label class="mb-1"><font color="#7B2869 "><strong>PASSWORD</font></strong></label>
                                      <input type="password" placeholder="Password" class="form-control"  name="password">
                                        </div>
                                        
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-secondary btn-block"> Log in  </button>
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
    

</body>








