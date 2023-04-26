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
                     <!-- Header - set the background image for the header in the line below-->
                     <header class="py-5 bg-image-full d-flex align-items-center" style="background: linear-gradient(181deg, rgb(2, 0, 97) 15%, rgb(97, 149, 219) 158.5%);height: 300px;text-align: center;">
                     <div class="col-lg-12">
                        <div class="dropdown show">
                            <a class="btn btn-secondary dropdown-toggle" style="background-color:white;color:black;"href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Select Your Batch Year
                            </a>
                          
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                              <a class="dropdown-item" href="#">1930</a>
                              <a class="dropdown-item" href="#">1931</a>
                              <a class="dropdown-item" href="#">1932</a>
                            </div>
                          </div>
                        </div>
                    </header>
        
                    <div class="container h-100">
                    <div class="row m-4">
                        <div class="col-lg-12">
                            <p class="mb-0">BATCH</p>
                             <h2 class="mt-0"><b>1975</b></h2>
                                <!--New Tab-->
                                <section id="tabs" class="project-tab">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12 pl-0">
                                                <nav>
                                                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Members</a>
                                                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Photos</a>
                                                    </div>
                                                </nav>
                                                <div class="tab-content" id="nav-tabContent">
                                                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                                        <div class="row mt-4">
                                                            <div class="col-lg-3">
                                                                <div class="card card-batch d-flex align-items-center p-4">
                                                                    <div class="card-body"style="padding:1rem;" >
                                                                    <img src="{{asset('image/pexels-daniel-xavier-1239291.jpg')}}" class="rounded-circle img-thumbnail" style="width: 120px;" />
                                                                    <p class="text-center text-white mt-2" style="font-size:20px;">Jane Doe</p>
                                                                    <button type="button" class="btn btn-outline-secondary btn-outline-white">VIEW PROFILE</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <div class="card card-batch d-flex align-items-center p-4 text-center">
                                                                    <div class="card-body" style="padding:1rem;">
                                                                        <img src="{{asset('image/ROJAS R.jpg')}}" class="rounded-circle img-thumbnail" style="width: 120px;" />
                                                                        <p class="text-center text-white mt-2" style="font-size:18px;">Dr. Richard Rojas</p>
                                                                       <a href="../profile/index.html"><button type="button" class="btn btn-outline-secondary  btn-outline-white">VIEW PROFILE</button></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <div class="card card-batch d-flex align-items-center p-4">
                                                                    <div class="card-body" style="padding:1rem;">
                                                                        <img src="{{asset('image/pexels-daniel-xavier-1239291.jpg')}}" class="rounded-circle img-thumbnail" style="width: 120px;" />
                                                                        <p class="text-center text-white mt-2" style="font-size:20px;">Jane Doe</p>
                                                                        <button type="button" class="btn btn-outline-secondary  btn-outline-white">VIEW PROFILE</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <div class="card card-batch d-flex align-items-center p-4">
                                                                    <div class="card-body" style="padding:1rem;">
                                                                        <img src="{{asset('image/pexels-daniel-xavier-1239291.jpg')}}" class="rounded-circle img-thumbnail" style="width: 120px;" />
                                                                        <p class="text-center text-white mt-2" style="font-size:20px;">Jane Doe</p>
                                                                        <button type="button" class="btn btn-outline-secondary  btn-outline-white">VIEW PROFILE</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 

                                                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                                        <div class="container gallery-container">
                                                            <div class="tz-gallery">
                                                        
                                                                <div class="row">
                                                                    <div class="col-sm-6 col-md-4">
                                                                        <a class="lightbox" href="{{asset('image/gallery/park.jpg')}}">
                                                                            <img src="{{asset('image/gallery/park.jpg')}}" alt="Park">
                                                                        </a>
                                                                    </div>
                                                                    <div class="col-sm-6 col-md-4">
                                                                        <a class="lightbox" href="{{asset('image/gallery/bridge.jpg')}}">
                                                                            <img src="{{asset('image/gallery/bridge.jpg')}}" alt="Bridge">
                                                                        </a>
                                                                    </div>
                                                                    <div class="col-sm-12 col-md-4">
                                                                        <a class="lightbox" href="{{asset('image/gallery/tunnel.jpg')}}">
                                                                            <img src="{{asset('image/gallery/tunnel.jpg')}}" alt="Tunnel">
                                                                        </a>
                                                                    </div>
                                                                    <div class="col-sm-6 col-md-4">
                                                                        <a class="lightbox" href="{{asset('image/gallery/coast.jpg')}}">
                                                                            <img src="{{asset('image/gallery/coast.jpg')}}" alt="Coast">
                                                                        </a>
                                                                    </div>
                                                                    <div class="col-sm-6 col-md-4">
                                                                        <a class="lightbox" href="{{asset('image/gallery/rails.jpg')}}">
                                                                            <img src="{{asset('image/gallery/rails.jpg')}}" alt="Rails">
                                                                        </a>
                                                                    </div>
                                                                    <div class="col-sm-6 col-md-4">
                                                                        <a class="lightbox" href="{{asset('image/gallery/traffic.jpg')}}">
                                                                            <img src="{{asset('image/gallery/traffic.jpg')}}" alt="Traffic">
                                                                        </a>
                                                                    </div>
                                                                    <div class="col-sm-6 col-md-4">
                                                                        <a class="lightbox" href="{{asset('image/gallery/rocks.jpg')}}">
                                                                            <img src="{{asset('image/gallery/rocks.jpg')}}" alt="Rocks">
                                                                        </a>
                                                                    </div>
                                                            
                                                                </div>
                                                        
                                                            </div>
                                                        
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
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
    
<script>
    baguetteBox.run('.tz-gallery');
</script>
@endsection