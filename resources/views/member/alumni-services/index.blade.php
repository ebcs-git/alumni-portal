@extends('layouts.app')
@section('content')
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @extends('layouts.navigation')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid p-0">        
                        <div class="container h-100">
                            <div class="row mt-5">
                                <div class="col-lg-12">
                                    <h2 class="text-center mb-3 text-black" style="color:black;"><b>Alumni Services</b></h2>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-4 d-flex align-items-stretch">
                                                <div class="card card-batch p-2 text-center">
                                                    <div class="card-body">
                                                        <img src="{{asset('image/icons/doc.png')}}" class="rounded-circle" style="width: 120px;" />
                                                        <br>
                                                        <br>
                                                        <p class="text-center text-white mt-2" style="font-size:18px;"><strong>Academic Documents</strong></p>
                                                        <br>
                                                        <p class="text-white"style="font-size:12px;">Request for any academic documents such
                                                            as TOR, Certificate of Good Moral, and alike. You can send an email request to ebcsregistrar26@gmail.com 
                                                        </p>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="col-lg-4 d-flex align-items-stretch">
                                            <div class="card card-batch  p-2 text-center">
                                                <div class="card-body">
                                                    <img src="{{asset('image/icons/user.png')}}" class="rounded-circle" style="width: 120px;" />
                                                    <br>
                                                    <br>
                                                    <p class="text-center text-white mt-2" style="font-size:18px;"><strong>Student Internship</strong></p>
                                                    <br>
                                                    <p class="text-white"style="font-size:12px;">If you are looking for students for internship
                                                        you may send our Field Education Coordinator
                                                         an email at 74alethea@gmail.com.
                                                    </p>
                                                </div>
                                                </div>
                                        </div>
                                        <div class="col-lg-4 d-flex align-items-stretch">
                                            <div class="card card-batch  p-2 text-center">
                                                <div class="card-body">
                                                    <img src="{{asset('image/icons/job.png')}}" class="rounded-circle" style="width: 120px;" />
                                                    <br>
                                                    <br>
                                                    <p class="text-center text-white mt-2" style="font-size:18px;"><strong>Full Time Ministry</strong></p>
                                                    <br>
                                                    <p class="text-white"style="font-size:12px;">If you are looking for students for full time ministry
                                                        you may send our Dean of Student Affairs
                                                         and Services an email
                                                         at studentaffairs.ebcs@gmail.com.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                   </div>
                                </div>
                               
                                
                    </div> 
                     
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; EBCS 2023</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

  @extends('layouts.logout-modal')
    <style>
         .card-batch{
            background-color: #1D2D47;
        }
    </style>
@endsection