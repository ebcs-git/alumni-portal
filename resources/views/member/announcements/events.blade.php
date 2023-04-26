@extends('layouts.app')
@section('content')
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
                                <img class="rounded-top text-white d-flex flex-row" src="{{asset('image/banner/WP-Banner(1).png')}}"style="height:100%;">
                                </img>
                                </div>
                                <p class="mb-0 mt-2">ALUMNI EVENTS</p>
                                <div class="row d-flex align-items-center ">
                                    <div class="col-lg-8">
                                       <h1>ALUMNI HOMECOMING</h1>
                                    </div>
                                    <div class="col-lg-4 text-right">
                                      <a href="#" class="btn btn-success btn-icon-split">
                                          <span class="icon text-white-50">
                                              <i class="fas fa-check"></i>
                                          </span>
                                          <span class="text">Going</span>
                                      </a>
                                    </div>
                              </div>
                              <hr style="border-width: 2px;">
                              <p class="mb-0 mt-2">DETAILS</p>
                              <div class="card">
                                  <div class="card-body">
                                    <div class="col-lg-12 d-flex mb-0 align-items-center">
                                        <i class="fa-solid fa-calendar-days text-black" style="margin:.5rem;"></i>
                                        <p class="text-black" style="font-size:20px;margin-bottom: 0px;">DECEMBER 9, 2023</p>
                                    </div>
                                    <div class="col-lg-12 d-flex mb-0">
                                        <i class="fa-solid fa-location-dot text-black" style="margin:.5rem;"></i>
                                        <p class="text-black" style="font-size:20px;margin-bottom: 0px;">ECC, Ebenezer Bible College and Seminary Inc.</p>
                                    </div>
                                    <div class="col-lg-12 d-flex mb-0">
                                        <i class="fa-solid fa-users text-black" style="margin:.5rem;"></i>
                                        <p class="text-black" style="font-size:20px;margin-bottom: 0px;">200 people are coming</p>
                                    </div>
                                    <div class="col-lg-12 d-flex mb-0">
                                        <p class="text-black light" style="font-size:20px;margin-bottom: 0px;">One of the main events of this year is the Alumni Homecoming. </p>
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

    <!-- Logout Modal-->
    @extends('layouts.logout-modal')
@endsection