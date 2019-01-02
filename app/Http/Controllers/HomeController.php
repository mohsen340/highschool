<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $user = Auth::user();
      if ($user->role == 'admin'){
        return redirect('/admin-dashboard');
      }elseif ($user->role == 'teacher'){
        return redirect('/teacher-dashboard');
      }elseif ($user->role == 'parent'){
        return redirect('/parent-dashboard');
      }else{
        return redirect('/');
      }

    }
}
