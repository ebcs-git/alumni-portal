
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
                <div class="container h-100">
                    <div class="row m-5">
                        <div class="col-lg-12">
                            <h3>Account Settings</h3>
                            <p>Change your profile and account settings</p>
                       </div>
                    </div>
                    <div class="row mr-5 ml-5 mt-5 mb-3">
                        <div class="col-3">
                          <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Account</a>
                            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Password</a>
                          </div>
                        </div>
                        <div class="col-9">
                          <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                <div class="p-2">
                                    <h4>General Info</h4>
                                    <form class="user" method="post" action="update_profile"enctype="multipart/form-data">
                                        @csrf
                                      <div class="form-group row">
                                            <div class="col-sm-12 mb-3 mb-sm-0">
                                                <label style="font-size:12px;">First Name</label>
                                                <input type="text" class="form-control" name="firstname" id="firstname"
                                                    placeholder="" value="{{Auth::user()->members->firstname ?? ''}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-12 mb-3 mb-sm-0">
                                                <label style="font-size:12px;">Middle Name</label>
                                                <input type="text" class="form-control" name="middlename"
                                                    id="middlename" placeholder=""value="{{Auth::user()->members->middlename ?? ''}}" >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-12 mb-3 mb-sm-0">
                                                <label style="font-size:12px;">Last Name</label>
                                                <input type="text" class="form-control"
                                                name="lastname"id="lastname" placeholder="" value="{{Auth::user()->members->lastname ?? ''}}" placeholder="" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label style="font-size:12px;">Batch Year</label>
                                                <input type="text" class="form-control" id="batch_year"
                                                name="batch_year" placeholder="" value="{{Auth::user()->members->batch_year ?? ''}}">
                                            </div>
                                            <div class="col-sm-6">
                                                <label style="font-size:12px;">Batch Name</label>
                                                <input type="text" class="form-control " name="batch_name" id="batch_name"
                                                    placeholder=""  value="{{Auth::user()->members->batch_name ?? ''}}"required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-12 mb-3 mb-sm-0">
                                                <label style="font-size:12px;">Birthdate</label>
                                                <input type="date" class="form-control"
                                                name="birthdate" id="birthdate" value="{{Auth::user()->members->birthdate ?? ''}}"placeholder="Birthdate">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label style="font-size:12px;">Contact Number</label>
                                                <input type="text" class="form-control" name="contact_no"id="contact_no" value="{{Auth::user()->members->contact_no ?? ''}}"
                                                    placeholder="">
                                            </div>
                                            <div class="col-sm-6">
                                                <label style="font-size:12px;">Facebook Name (Optional)</label>
                                                <input type="text" class="form-control" name="facebook"id="facebook"
                                                    value="{{Auth::user()->members->facebook ?? ''}}" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label style="font-size:12px;">City/Municipality</label>
                                                <input type="text" class="form-control" name="addr_municipality"id="addr_municipality"
                                                    placeholder=""value="{{Auth::user()->members->addr_municipality ?? ''}}">
                                            </div>
                                            <div class="col-sm-6">
                                                <label style="font-size:12px;">Country</label>
                                                <input type="text" class="form-control"name="addr_country" id="addr_country"
                                                    placeholder=""value="{{Auth::user()->members->addr_country ?? ''}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label style="font-size:12px;">Current Position</label>
                                                <input type="text" class="form-control"name="current_position" id="current_position"
                                                value="{{Auth::user()->members->current_position ?? ''}}"placeholder="">
                                            </div>
                                            <div class="col-sm-6">
                                                <label style="font-size:12px;">Name of Company or Organization</label>
                                                <input type="text" class="form-control " id="org_name" name="org_name"
                                                    placeholder=""value="{{Auth::user()->members->org_name ?? ''}}">
                                            </div>
                                        </div>
                                         <div class="form-group row">
                                            <div class="col-sm-12 mb-3 mb-sm-0">
                                                <label style="font-size:12px;">Email</label>
                                                <input type="email" class="form-control"
                                                id="email" name="email" placeholder=""value="{{Auth::user()->members->email ?? ''}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                        <div class="col-sm-12 mb-3 mb-sm-0">
                                                <label for="formFileSm" class="form-label">Profile Picture</label>
                                                <input class="form-control" name="profile_pic" id="profile_pic_path" type="file" style="padding-bottom: 40px;
    padding-top: 12px;">
                                                </div>
                                        </div>
                                        <div class="form-group row">
                                        <div class="col-sm-12 mb-3 mb-sm-0">
                                                <label for="formFile" class="form-label">Cover Photo</label>
                                                <input class="form-control" name="cover_photo" id="cover_photo_path" type="file" style="padding-bottom: 40px;
    padding-top: 12px;">
                                                </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-12 text-right">
                                            <a href="" class="btn btn-warning btn-md" style="background-color:#ECC408;" name="update_profile"><strong>Save Changes</strong>
                                                 </a>
                                                </div>
                                        </div>
        
                                    </form>

                                </div>

                            </div>
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                <h4>Update Password</h4>
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <label style="font-size:12px;">Old Password</label>
                                        <input type="email" class="form-control"
                                            id="email" placeholder="" value=""required>
                                    </div>
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <label style="font-size:12px;">New Password</label>
                                        <input type="email" class="form-control"
                                            id="email" placeholder="" required>
                                    </div>
                                  
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 text-right">
                                    <a href="" class="btn btn-warning btn-md" style="background-color:#ECC408;" name="reg_user"><strong>Save Changes</strong>
                                        <!-- if condition, if -->
                                         </a>
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