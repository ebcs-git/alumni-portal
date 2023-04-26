@extends('layouts.app')
@section('content')

    <div class="container"  style="margin-top: 83px;">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block" style="background:#050478;padding-left:50px;padding-bottom:50px;">
                        <img src="{{asset('image/logo/ebcs_logo.png')}}" rel="" style="height:64px;width:64px;margin-top:150px;"></img>
                        <h4 class="mt-2" style="color:white;"><strong>EBCS ALUMNI PORTAL</strong></h4>
                        <div class="col-lg-12 social-media pl-0 d-flex align-items-start pb-3">
                            <a href="https://www.facebook.com/ebenezerop" target="_blank"><i class="fa-brands fa-square-facebook" style="color:white;width:40px" ></i></a>
                            <a href="https://www.linkedin.com/in/ebcs/"><i class="fa-brands fa-linkedin"style="color:white;width:100px"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-7"style="padding:50px;">
                        <div class="text-center">
                            <img src="{{asset('image/icons/Icon awesome-check-circle.png')}}" style="width: 50px;">
                            <h5 class="mt-3"><strong>Thank You for your registration.</strong></h5>
                            <p>Your Data has been saved.</p>
                            <p>Your registration will be verified first.<br>
                                After the verification, you will receive a text message <br> of a confirmation of your registration along with your login details.<br>
                                </p>
                                <p>You may login back once confirmed.</p>
                                <a href="{{url('/')}}" class="btn btn-warning">
                                        <span class="icon text-white-50">
                                        <i class="fa-solid fa-house"></i>
                                         </span>
                                        <span class="text">Home</span>
                                    </a>
   
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
 @endsection