@extends('layouts.app-welcome')
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
                                <img class="rounded-top text-white d-flex flex-row" name="cover_photo" src="{{asset('image/banner/WP-Banner(1).png')}}"style="height:450px;">
                                  <div class="ms-4 mt-5 d-flex flex-column" style="width: 180px">
                                  @if(!file_exists(Auth::user()->profile_pic))
                                    <img class="rounded-circle img-thumbnail profile-pic-member" name="profile_pic"src="{{asset('image/profile/user.png')}}"
                                      alt="Generic placeholder image" 
                                      style="width:200px;z-index: 1">  
                                       @else
                                       <img class="rounded-circle img-thumbnail profile-pic-member" name="profile_pic"src="{{asset('image/upload/.$data->profile_pic')}}"
                                 
                                 alt="Generic placeholder image" 
                                 style="width:200px;z-index: 1"> 
                                 @endif
                                    </div>
                                </img>
                                <div class="card-body pt-3 text-black">
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-lg-8">
                                            <h3>{{Auth::user()->name}} </h3>
                                            <h5>{{Auth::user()->members->current_position ?? ''}}</h5>
                                            <p class="mb-0">{{Auth::user()->members->org_name ?? ''}}</p>
                                            <p class="mb-0">{{Auth::user()->members->addr_municipality ?? ''}}, {{Auth::user()->members->addr_country ?? ''}}</p>
                                            <p class="mb-0">{{Auth::user()->members->batch_year ?? ''}}-{{Auth::user()->members->batch_name ?? ''}}
                                            </p>
                                           

                                            <span>
                                            <a href="#" class="btn p-0">
                                                <i class="fa-brands fa-facebook"></i>                   
                                            </a>
                                           
                                        </span>
                                        </div>
                                        <div class="col-lg-4 text-right pr-5">
                                           <a class="edit-profile"data-toggle="modal" data-target="#exampleModal"><i class="fa-solid fa-pen"></i></a>

                                     </div>
                            
                                           <!-- Modal -->
                                           <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Edit Profile</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        </div>
                                                        <div class="modal-body">
                                                    <form class="user" method="post">
                                                        @csrf
                                                            <div class="form-group row">
                                                                <div class="col-sm-12 mb-3 mb-sm-0">
                                                                    <label style="font-size:12px;">First Name</label>
                                                                    <input type="text" class="form-control" name="firstname"
                                                                        placeholder="" value="{{Auth::user()->members->firstname ?? ''}}" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-sm-12 mb-3 mb-sm-0">
                                                                    <label style="font-size:12px;">Middle Name</label>
                                                                    <input type="text" class="form-control"
                                                                        name="middlename" value="{{Auth::user()->members->middlename ?? ''}}"placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-sm-12 mb-3 mb-sm-0">
                                                                    <label style="font-size:12px;">Last Name</label>
                                                                    <input type="text" class="form-control"
                                                                        name="lastname"value="{{Auth::user()->members->lastname ?? ''}}" placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                                    <label style="font-size:12px;">Batch Year</label>
                                                                    <input type="number" class="form-control" name="batch_year"
                                                                        placeholder="" value="{{Auth::user()->members->batch_year ?? ''}}"required>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <label style="font-size:12px;">Batch Name</label>
                                                                    <input type="text" class="form-control " name="batch_name"
                                                                        placeholder="" value="{{Auth::user()->members->batch_name ?? ''}}"required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-sm-12 mb-3 mb-sm-0">
                                                                    <label style="font-size:12px;">Birthdate</label>
                                                                    <input type="date" class="form-control"
                                                                        name="birthdate" placeholder="Birthdate" value="{{Auth::user()->members->birthdate ?? ''}}"required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                                    <label style="font-size:12px;">Contact Number</label>
                                                                    <input type="text" class="form-control" name="contact_no"
                                                                        placeholder="" value="{{Auth::user()->members->contact_no ?? ''}}"required>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <label style="font-size:12px;">Facebook Name (Optional)</label>
                                                                    <input type="text" class="form-control " name="facebook"
                                                                        placeholder="" value="{{Auth::user()->members->facebook ?? ''}}">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                                    <label style="font-size:12px;">City/Municipality</label>
                                                                    <input type="text" class="form-control" name="addr_municipality"
                                                                        placeholder="" value="{{Auth::user()->members->addr_municipality ?? ''}}"required>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <label style="font-size:12px;">Country</label>
                                                                    <input type="text" class="form-control " name="addr_country"
                                                                        placeholder="" value="{{Auth::user()->members->addr_country ?? ''}}"required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-sm-12 mb-3 mb-sm-0">
                                                                    <label style="font-size:12px;">Current Position</label>
                                                                    <input type="text" class="form-control" name="current_position"
                                                                        placeholder="" value="{{Auth::user()->members->current_position ?? ''}}"required>
                                                                </div>
                
                                                            </div>
                                                            <div class="form-group row">
                                                            <div class="col-sm-12  mb-3 mb-sm-0">
                                                                    <label style="font-size:12px;">Name of Company or Organization</label>
                                                                    <input type="text" class="form-control " name="org_name"
                                                                        placeholder="" value="{{Auth::user()->members->org_name ?? ''}}"required>
                                                                </div>
                                                            </div>
                                                       
                                                        
                                                        </form>

                                                                </div>
                                                    <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                    </div>
                                                            </div>
                                                        </div>
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

@endsection