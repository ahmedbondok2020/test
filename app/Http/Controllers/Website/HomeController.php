<?php

namespace App\Http\Controllers\Website;

use App\channels;
use App\Http\Controllers\Controller;
use App\User;
use App\videos;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Ads;
use App\keywords_model;
use App\category_model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
        $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      return view('home');
    }
}
