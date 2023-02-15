



@include('admin.layout.header')
@include('admin.layout.navbar')
@include('admin.layout.sidebar')
<body>

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
                        <h4>Pro-report List Form</h4>
                    </div>

                </div>
                <!-- row -->
<script>
    var printTable = function () {
            var tab = document.getElementById('example');
            var win = window.open('', '', 'height=700,width=700');
            win.document.write(tab.outerHTML);
            win.document.close();
            win.print();
        
    }
    
  </Script>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Progress Report List</h4>
                                <button type="button" class="btn btn-primary" style="padding: 8px 16px;  min-width: 100px;" value="Print Tags" onclick="printTable()">Print</button>
                            </div>
                          
                      <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display" style="min-width: 845px">
                                     @foreach($pro_report as $u) 
                                    <tr>
    
    
  </tr>
  <tr>
    <th>Student Name</th>
    <td>{{ $u->skill  }}</td>
   
  </tr>
  <tr>
    <th>progress Report</th>
    <td>{{ $u->head  }}</td>
   
  </tr>
  <?php  ?>
        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                  
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
    @include('admin.layout.footer')

        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

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
    <script src="{{asset('vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/plugins-init/datatables.init.js')}}"></script>


</body>


<!-- Mirrored from koki.dexignzone.com/xhtml/table-datatable-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Mar 2022 06:09:27 GMT -->

</html>