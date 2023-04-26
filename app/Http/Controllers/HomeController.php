<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function userHome()
    {
        return view('/member/home');
    }

    public function adminDashboard()
    {
        return view('/admin/admin_dashboard');
    }

 public function superadminDashboard()
    {
        return view('/superadmin/superadmin_dashboard');
    }
}
