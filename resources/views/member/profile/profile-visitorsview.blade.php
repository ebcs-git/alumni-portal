@extends('layouts.app')
@section('content')
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

            @extends('layouts.navigation')

                <!-- Begin Page Content -->
                <div class="container-fluid">
                        <div class="container py-5 h-100">
                          <div class="row d-flex justify-content-center align-items-center h-100">
                            <div class="col col-lg-12">
                              <div class="card">
                                <img class="rounded-top text-white d-flex flex-row" src="{{asset('image/banner/WP-Banner(1).png')}}"style="height:450px;">
                                  <div class="ms-4 mt-5 d-flex flex-column" style="width: 180px">
                                    <img class="rounded-circle img-thumbnail profile-pic-member" src="{{asset('image/profile/user.png')}}"
                                      alt="Generic placeholder image" 
                                      style="width:200px;z-index: 1">
                                    </div>
                                </img>
                                <div class="card-body pt-3 text-black">
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-lg-12">
                                            <h3>{{Auth::user()->name}} </h3>
                                            <h5>{{Auth::user()->members->current_position ?? ''}}</h5>
                                            <p class="mb-0">{{Auth::user()->members->org_name ?? ''}}</p>
                                            <p class="mb-0">{{Auth::user()->members->addr_municipality ?? ''}}, {{Auth::user()->members->addr_country ?? ''}}</p>
                                            <p class="mb-0">{{Auth::user()->members->batch_year ?? ''}}{{Auth::user()->members->batch_name ?? ''}}</p>
                                            <p class="mb-0">{{Auth::user()->members->batch_name ?? ''}}</p>

                                            <span>
                                            <a href="#" class="btn p-0">
                                                <i class="fa-brands fa-facebook"></i>                   
                                            </a>
                                           
                                        </span>
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