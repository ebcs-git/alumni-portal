<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

use Auth;


class MemberController extends Controller
{
    public function _contstruct(){
        $this->middlware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function Register_Member(Request $request){
        
        $firstname = $request->input('firstname');
        $middlename = $request->input('middlename');
        $lastname = $request->input('lastname');
        $birthdate = $request->input('birthdate');
        $batch_year = $request->input('batch_year');
        $batch_name = $request->input('batch_name');
        $current_position = $request->input('current_position');
        $org_name = $request->input('org_name');
        $contact_no = $request->input('contact_no');
        $facebook = $request->input('facebook');
        $addr_municipality = $request->input('addr_municipality');
        $addr_country = $request->input('addr_country');
        $email = $request->input('email');
        $password = $request->input('password');
       
        
        try {
            $InsertSuccess = Member::insert([
            
                'firstname'=>$firstname,
                'middlename'=>$middlename,
                'lastname'=>$lastname,
                'birthdate'=>$birthdate,
                'batch_year'=>$batch_year,
                'batch_name'=>$batch_name,
                'current_position'=>$current_position,
                'org_name'=>$org_name,
                'contact_no'=>$contact_no,
                'facebook'=>$facebook,
                'addr_municipality'=>$addr_municipality,
                'addr_country'=>$addr_country,
                'email'=>$email,
                'password'=>Hash::make($password)
                 ]);
               
                
        } 
        catch (\Illuminate\Database\QueryException $exception) {
            if ($exception->getCode() === '23000') {
                return back()->withError('User Already Exists!');
            }
        }
    
        return redirect('/confirmation');
    }
    
    public function view(){
        $memberData = User::findOrFail(Auth::user()->member_id);
        return view ('/member/profile/index');

    }
    public function editProfile(){
        $editData = User::findOrFail(Auth::user()->member_id);
        return view ('/member/settings/index',compact('editData'));

    }
    public function save_updatedProfile(Request $request){
        $data = User::findOrFail(Auth::user()->member_id);
        $data->firstname = $request->firstname;
        $data->middlename = $request->middlename;
        $data->lastname = $request->lastname;
        $data->birthdate = $request->birthdate;
        $data->batch_year = $request->batch_year;
        $data->current_position = $request->current_position;
        $data->org_name = $request->org_name;
        $data->contact_no = $request  ->contact_no;
        $data->facebook = $request->facebook;
        $data->addr_municipality = $request->addr_municipality;
        $data->addr_country = $request->addr_country;
        $data->email = $request->email;
        /**       
         * $data = User::findOrFail(Auth::user()->member_id);
        *if($request->file('profile_pic')){
           * $file = $request->file('profile_pic');
           * $filename = data('YmdHi'.$file->getClientOriginalName());
            *$file->move(public_path('upload/user_profile_pic'),$filename);
            *$data1['profile_pic'] =$filename;
        *}
        *if($request->file('cover_photo')){
         *   $file = $request->file('cover_photo');
          *  $filename = data('YmdHi'.$file->getClientOriginalName());
           * $file->move(public_path('upload/user_cover_photo'),$filename);
           * $data1['profile_pic'] =$filename;
       * }
       
         */ 
        $data->save();
        return redirect()->route('/settings');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Member $member)
    {
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Member $member)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Member $member)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Member $member)
    {
        //
    }
}
