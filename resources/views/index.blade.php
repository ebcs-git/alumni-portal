@extends('layouts.app-welcome')
@section('content')

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid p-0">
                    <div class="row p-5">
                        <div class="col-lg-12 text-center"> 
                           <img class="pb-3"src="{{asset('/image/logo/ebcs_logo.png')}}"> </img>
                           <h1 style="font-size:64px;color:white;"><strong>EBCS ALUMNI PORTAL</strong></h1>
                           <p class="text-white">This platform is designed to help you stay connected with your fellow alumni and the school community.</p>
                           <div class="col-lg-12">
                            <a href="{{url('/register')}}"><button type="button" class="btn btn btn-warning mr-2" style="border-radius:30px;padding:10px 20px;background:#EAC20A;color:black;">REGISTER</button></a>
                            <a href="{{url('/login')}}"><button type="button" class="btn btn-warning" style="border-radius:30px;padding:10px 20px;background:#EAC20A;color:black;">LOGIN</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="footer" >
                <div class="container ">
                    <div class="row d-flex" srtyle="justify-content:between;">
                        <div class="col-6">
                        <span>Copyright &copy; Ebenezer Bible College and Seminary,Inc. 2023</span>
                        
                        </div>
                        <div class="col-6">
                        <a href="https://www.facebook.com/ebenezerop" target="_blank"><i class="fa-brands fa-square-facebook" style="color:white;" ></i></a>
                        <a href="https://www.linkedin.com/in/ebcs/"><i class="fa-brands fa-linkedin"style="color:white;"></i></a>
                        </div>
                    </div>
                </div>
            </div>
         </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded bottom" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
<style>
   
    .footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
   
    color: white;
    text-align: center;
    }
    </style>

@endsection