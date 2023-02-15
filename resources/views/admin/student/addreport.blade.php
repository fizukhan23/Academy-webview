@include('admin.layout.header')
@include('admin.layout.navbar')
@include('admin.layout.sidebar')

<!-- Mirrored from koki.dexignzone.com/xhtml/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Mar 2022 06:08:47 GMT -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<style media="screen">
  @import url('https://fonts.googleapis.com/css?family=Lobster+Two:700|Poppins&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}


.center,.start-btn{
  position: absolute;
 top: 34%;
  left: 83%;;
  transform: translate(-50%, -50%);
}

.modal-box{
  top: 400%;
  opacity: 0;
  visibility: hidden;
  background: white;
  height: auto;
  width: 376px;
  margin-top:140px;
  padding: 18px 10px;
  border-radius: 5px;
  box-shadow: 5px 5px 30px rgba(0,0,0,.2);
}

.start-btn.show-modal{
  opacity: 0;
  visibility: hidden;
}
.modal-box.show-modal{
  top: 35%;
  left:60%;
  opacity: 1;
  visibility: visible;
  transition: .4s;
}
.modal-box .fa-times{
  position: absolute;
  top: 0;
  right: 0;
  background: #0569d4;
  height: 40px;
  width: 40px;
  line-height: 40px;
  margin: 10px;

  color: white;
  font-size: 18px;
  border-radius: 100%;
  text-align: center;
  cursor: pointer;
}
.fa-times:hover{
  font-size: 22px;
}


.form_container{
  background: #fff;
  padding: 30px;
  margin-top: 20px;
  border-radius: 3px;
}

.form_container .form_item{
  margin-bottom: 25px;
}

.form_container .form_wrap.form_grp{
  display: flex;
}

.form_container .form_wrap.form_grp .form_item{
  width: 50%;
}

.form_container .form_wrap.form_grp .form_item:first-child{
  margin-right: 4%;
}

.form_container .form_item label{
  display: block;
  margin-bottom: 5px;
}

.form_container .form_item input,
.form_container .form_item select{
  width: 100%;
  padding: 10px;
  font-size: 16px;
  border: 1px solid #dadce0;
  border-radius: 3px;
}
 
.form_container .btn input[type="submit"]{
  background: #6271f0;
  border: 1px solid #6271f0;
  padding: 10px;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  color: #fff;
}
</style>


  <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <h4>Progress Report List Form</h4>
                    </div>

                </div>
                <!-- row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Progress</h4>
                            </div>
                          
                      <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="display" style="min-width: 845px">
                                        <thead class="head">
                                           <tr>
                                               
                                                <th>#</th>
                                                 <th>Id</th>
                                                <th>Skil</th>
                                              <th>Description</th>
                                               
                                          </tr>
                                        </thead>
                                        <tbody>
                                             <?php $i = 1; ?>
        @foreach($pro_report as $u)
            <tr>
               <td> {{ $i }}</td>
                                               
                                               
                                            <div class="media me-2">
                                               <td>{{ $u->student_id }}</td>
                                             <td>{{ $u->skill  }}</td>
                                               
                                               <td>{{ $u->description }}</td>
                                           
                                           </div>
                                                <td>
													<div class="d-flex">
														<a href="{{url('editreport',$u->id)}}" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
														<a href="{{url('deletetreport',$u->id)}}" class="btn btn-danger shadow btn-xs sharp"><i class="fas fa-trash"></i></a>
													    <a href="{{url('proreportlist',$u->id)}}" class="btn btn-success shadow btn-xs sharp me-1"><i class="fas fa-eye"></i></a>
                                                    </div>												
												</td>							
</tr>
<?php $i++; ?>
        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>







                     <div class="start-btn">
<button type="button" class="btn btn-primary" style="padding: 8px 16px;  min-width: 100px;">progress report</button>
                   
                  <!--<a href="#">Registration</a>-->
                               </div>
      <div class="center modal-box">

         <div class="fas fa-times"></div>

                          <div class="form_container">
                         
 <form name="form" action="{{url('/savereport')}}" method="post" enctype="multipart/form-data">

           @if(Session::has('success'))
        <div class="alert alert-success">{{ Session::get('success') }}</div>
        @endif
        @if(Session::has('fail'))
        <div class="alert alert-danger">{{ Session::get('fail') }}</div>
        @endif
        @csrf  
                              <div class="form_wrap">
                                  <div class="form_item">
                                      <label>ID</label>
                                      <input type="text" name="student_id" required>

                                  </div>
                              <div class="form_item">
                                      <label>Skill</label>
                                      <input type="date" name="skill">

                                  </div>
                              </div>
                          
                              <div class="form_wrap">
                                  <div class="form_item">
                                      <label>Description</label>
                                      <input type="text" name="description">
                                  </div>
                              </div>
                             
                              <div class="btn">
                                <input type="submit">
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
        </div>
    </div>
   <script>
         $(document).ready(function(){
           $('.start-btn').click(function(){
             $('.modal-box').toggleClass("show-modal");
             $('.start-btn').toggleClass("show-modal");
           });
           $('.fa-times').click(function(){
             $('.modal-box').toggleClass("show-modal");
             $('.start-btn').toggleClass("show-modal");
           });
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