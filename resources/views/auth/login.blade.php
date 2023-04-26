@extends('layouts.app')
@section('content')
<div class="container" style="margin-top: 83px;">
        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block" style="background:#050478;padding-left:50px;">
                                <img src="{{asset('image/logo/ebcs_logo.png')}}" rel="" style="height:64px;width:64px;margin-top:150px;"></img>
                                <h4 class="mt-2" style="color:white;"><strong>EBCS ALUMNI PORTAL</strong></h4>
                                <div class="col-lg-12 social-media pl-0 d-flex align-items-start">
                                    <a href="https://www.facebook.com/ebenezerop" target="_blank"><i class="fa-brands fa-square-facebook" style="color:white;width:40px" ></i></a>
                                    <a href="https://www.linkedin.com/in/ebcs/"><i class="fa-brands fa-linkedin"style="color:white;width:100px"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome</h1>
                                        @if (Session:: has('error'))
                                            <div class="alert alert-danger" role="alert">
                                                {{ session('error') }}
                                            </div>
                                         @endif
                                        @if(\Session::has('message'))
                                            <div class="alert alert-info"> 
                                                {{\Session::get('message')}}
                                            </div>
                                            @endif
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                    <form method="POST" action="{{ route('login')}}">
                                    @csrf
                                        <div class="form-group">
                                            <input name="email" type="email" class="form-control form-control-user"
                                                aria-describedby="emailHelp"
                                                placeholder="Email Address" style="border-radius: 5px;" required>
                                            </div>
                                        <div class="form-group" id="show_hide_password">
                                            <div class="input-group" >
                                            <input id="password" type="password" style="border-radius: 5px;"class="form-control form-control-user @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" >
                                            <div class="input-group-addon">
                                                        <a href=""><i class="fa fa-eye-slash" style="position:relative"aria-hidden="true"></i></a>
                                                    </div>
                                            </div>   
                                            </div>
                                           
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                        <button type="submit" class="btn btn-warning btn-block" name="login"> {{ __('Login') }}</button>
                                    
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <p class="mb-0">Don't have an account yet?</p>
                                        <a href="{{ url('/register') }}"><strong>REGISTER NOW</strong></a>
                                    </div>
                                    @if (Route::has('password.request'))
                                    <div class="text-center">
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                    </div>
                                  @endif
                                   
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

@endsection
