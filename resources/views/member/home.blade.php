@extends('layouts.app')
@section('content')

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

           @extends('layouts.navigation')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid p-0">
                    @if(session('status'))
                    <div class="alert alert-success" role="alert">
                        {{session('status')}}
                    </div>
                    @endif
                 
                     <!-- Header - set the background image for the header in the line below-->
                            <header class="py-5 bg-image-full" style="height:500px; background-image: url('{{asset('image/banner/WP-Banner(1).png')}}');">
                               
                            </header>
                        <div class="container h-100">
                            <div class="row mt-5">
                                <div class="col-lg-12">
                                    <h2 class="text-center mb-3 text-black" style="color:black;"><b>Announcements</b></h2>
                                    <p>Alumni President</p>
                                    <hr>
                                    <figure class="snip1527">
                                        <div class="image"><img src="{{asset('image/news/building.png')}}" alt="pr-sample23" /></div>
                                        <figcaption>
                                            <div class="date"><span class="day">28</span><span class="month">Nov</span></div>
                                            <h3>ALUMNI Homecoming 2023</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                        </figcaption> <a href="{{url('/announcements/announcement')}}"></a>
                                    </figure>
                                </div>
                                <div class="col-lg-12">
                                    <p>Events</p>
                                    <hr>
                                    <div class="col-lg-12 mb-3">
                                        <div class="card event-card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-lg-2 text-center">
                                                        <p class="date mb-0 text-black" style="font-size: 75px;">09</p>
                                                        <p style="font-size: 40px;margin-top: -40px;">DEC</p>
                                                    </div>
                                                    <div class="col-lg-7">
                                                        <p class="event-title mb-0 text-black" style="font-size: 40px;margin-top:1rem;">ALUMNI HOMECOMING</p>
                                                        <div class="row">
                                                            <div class="col-lg-12 d-flex mb-0">
                                                                <i class="fa-solid fa-location-dot text-black" style="margin-top:.5rem;margin-right:.5rem;"></i>
                                                                <p class="text-black" style="font-size:20px;margin-bottom: 0px;"><strong>ECC, Ebenezer Bible College and Seminary Inc. </strong></p>
                                                            </div>
                                                            <div class="col-lg-12 mt-0 text-black">
                                                                <p style="font-size:20px">One of the main events of this year is the Alumni Homecoming.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 text-center d-flex align-items-center text-center justify-content-center">
                                                        <a href="{{url('member/announcements/events')}}"><button type="button" class="btn btn-primary btn-sm text-center">Details</button></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                       <div class="col-lg-12 mb-3">
                                        <div class="card event-card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-lg-2 text-center">
                                                        <p class="date mb-0 text-black" style="font-size: 75px;">09</p>
                                                        <p style="font-size: 40px;margin-top: -40px;">DEC</p>
                                                    </div>
                                                    <div class="col-lg-7">
                                                        <p class="event-title mb-0 text-black" style="font-size: 40px;margin-top:1rem;">ALUMNI HOMECOMING</p>
                                                        <div class="row">
                                                            <div class="col-lg-12 d-flex mb-0">
                                                                <i class="fa-solid fa-location-dot text-black" style="margin-top:.5rem;margin-right:.5rem;"></i>
                                                                <p class="text-black" style="font-size:20px;margin-bottom: 0px;"><strong>ECC, Ebenezer Bible College and Seminary Inc. </strong></p>
                                                            </div>
                                                            <div class="col-lg-12 mt-0 text-black">
                                                                <p style="font-size:20px">One of the main events of this year is the Alumni Homecoming.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 text-center d-flex align-items-center text-center justify-content-center">
                                                        <a href="{{url('member/announcements/events')}}"><button type="button" class="btn btn-primary btn-sm text-center">Details</button></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-5">
                                    <p>Ministry Opportunities</p>
                                    <hr>
                                    <div class="card">
                                        <img class="rounded-top text-white d-flex flex-row" src="{{asset('image/banner/mo-1.png')}}">
                                          <div class="ms-4 mt-5 d-flex flex-column" style="width: 180px">
                                         
                                        </img>
                                
                                      </div>
                                </div>
                            </div>
                                    <!-- Begin of Support EBCS -->
                                    <div class="row p-3">
                                        <div class="col-lg-12">
                                            <h2 class="text-center mb-3 text-black" style="color:black;"><b>Support EBCS</b></h2>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-lg-4 text-center">
                                                <img src="{{asset('image/icons/pray.png')}}" class="text-center"/>
                                                <h3 class="mt-2" style="color: #ECC408;"><b>PRAY</b></h3>
                                                <p>We need people who will commit to
                                                    regularly interceding for our team,
                                                    leadership, the school and our church.</p>
                                            </div>
                                            <div class="col-lg-4 text-center">
                                                <img src="{{asset('image/icons/give.png')}}" class="text-center"/>
                                                <h3 class="mt-2" style="color: #ECC408;"><b>GIVE</b></h3>
                                                <p>You can support Ebenezer BCS financially, 
                                                    from building and facilities development
                                                     fund, student scholarship fund and beyond.</p>
                                            </div>
                                            <div class="col-lg-4 text-center">
                                                <img src="{{asset('image/icons/refer.png')}}" class="text-center"/>
                                                <h3 class="mt-2" style="color: #ECC408;"><b>REFER</b></h3>
                                                <p>Refer us to other friends or loved ones
                                                    who may have the burden to be part of
                                                    this mission.</p>
                                            </div>
                                            <div class="col-lg-12 mt-3">
                                                <p class="text-center">If you want to partner with us, You may directly contact Dr. Richard Rojas at +636-428-2798
                                                    or email at president@ebcs.edu.ph.</p>
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