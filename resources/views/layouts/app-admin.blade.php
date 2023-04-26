<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>EBCS Admin Portal</title>

    <!-- Custom fonts for this template-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/fontawesome-free/css/all.min.css')}}">
    
    <!-- Custom styles for this template-->
    <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/sb-admin-2.css')}}" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/bahnschrift" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.3/css/bootstrap-datetimepicker.min.css">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar-blue bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                    <img src="{{asset('image/logo/ebcs_logo.png')}}" rel="" style="height:32px;width:32px"></img>
                </div>
                <div class="sidebar-brand-text mx-2" style="text-align:left;">EBCS <br> Alumni Portal</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <!-- Nav Item - Alumni List -->
            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-solid fa-users"></i>
                    <span>Alumni List</span></a>
            </li>
            <!-- Nav Item - Batch List -->
            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-solid fa-user-group"></i>
                    <span>Batch List</span></a>
            </li>
            <!-- Nav Item - Announcements -->
            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-duotone fa-bullhorn"></i>
                     <span>Announcements</span></a>
            </li>
            <!-- Nav Item - Events -->
            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-solid fa-calendar"></i>
                    <span>Events</span></a>
            </li>
             <!-- Nav Item - Opportunities -->
             <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="fa-solid fa-lightbulb"></i>
                    <span>Opportunities</span></a>
            </li>
          
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->
@yield('content')
   
    <style>
        .social-media{
            position: absolute;
            bottom: 0;
            margin-bottom: 30px;
            font-size: 30px;
            text-align:left;
        }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>

   
     <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
     <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
    <script src="cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.3/js/bootstrap-datetimepicker.min.js"></script>
    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('assets/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('assets/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('js/sb-admin-2.min.js')}}"></script>
    <script src="{{asset('js/intl_phone_number.js')}}"></script>


    <!-- Page level plugins -->
    <script src="{{asset('assets/chart.js/Chart.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('js/demo/chart-area-demo.js')}}"></script>
    <script src="{{asset('js/demo/chart-pie-demo.js')}}"></script>
    <script src="https://unpkg.com/htmlincludejs"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.4/js/utils.js"> </script>

</body>

</html>