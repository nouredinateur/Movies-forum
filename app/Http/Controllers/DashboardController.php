<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'can:accessAdmin']);
        
    }
    public function index(){
        return view('dashboard');
    }
}
