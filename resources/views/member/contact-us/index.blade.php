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
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid p-0">        
                        <div class="container h-100 p-3">
                            <div class="row mt-5">
                                <div class="col-lg-12">
                                   
                                    <div class="row d-flex align-items-center">
                                        <div class="col-lg-6">
                
                                                      <img src="{{asset('image/contact-us-photo.png')}}" style="width:100%">
                                                  
                                        </div>
                                        <div class="col-lg-6 pl-3 mt-3">
                                                    <h1 style="color:#050478" class="text-center">CONNECT WITH US</h1>
                                                    <p class="text-left" style="font-size:20px;">For any Alumni Concerns or Inquiries, You may call or email us:</p>
                                                    <div class="col-lg-12 d-flex mb-0">
                                                        <i class="fa-solid fa-phone text-black" style="margin-top:.5rem;margin-right:.5rem;"></i>
                                                        <p class="text-black" style="font-size:20px;margin-bottom: 0px;">+639 734 27421</p>
                                                    </div>
                                                    <div class="col-lg-12 d-flex mb-0">
                                                        <i class="fa-solid fa-envelope text-black" style="margin-top:.5rem;margin-right:.5rem;"></i>
                                                        <p class="text-black" style="font-size:20px;margin-bottom: 0px;">alumni_info@ebcs.edu.ph</p>
                                                    </div>
                                                    <br>
                                                    <p class="text-left" style="font-size:20px;">For any Partnership and Sponsorship, you may contact Dr. Richard Rojas.</p>
                                                    <div class="col-lg-12 d-flex mb-0">
                                                        <i class="fa-solid fa-phone text-black" style="margin-top:.5rem;margin-right:.5rem;"></i>
                                                        <p class="text-black" style="font-size:20px;margin-bottom: 0px;">+636-428-2798</p>
                                                    </div>
                                                    <div class="col-lg-12 d-flex mb-0">
                                                        <i class="fa-solid fa-envelope text-black" style="margin-top:.5rem;margin-right:.5rem;"></i>
                                                        <p class="text-black" style="font-size:20px;margin-bottom: 0px;">president@ebcs.edu.ph</p>
                                                    </div>
                                                    <br>
                                                    <p class="text-left" style="font-size:20px;">You can also message us on Facebook</p>
                                                    <div class="col-lg-12 d-flex mb-0">
                                                        <i class="fa-brands fa-facebook text-black" style="margin-top:.5rem;margin-right:.5rem;"></i>
                                                        <p class="text-black" style="font-size:20px;margin-bottom: 0px;">facebook/ebenezerop</p>
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
  @endsection