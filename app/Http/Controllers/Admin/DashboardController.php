<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    //
    public function dashboard()
    {
        return view('admin.home_dashboard');
    }

    public function index_contact()
    {
        return view('admin.home_dashboard');
    }
}
