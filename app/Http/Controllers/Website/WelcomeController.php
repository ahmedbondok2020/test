<?php

namespace App\Http\Controllers\Website;

use App\channels;
use App\contact;
use App\Http\Controllers\admin\helper\helperController;
use App\Http\Requests\website\headerSearchRequest;
use App\keywords;
use App\newsletter;
use App\siteMap;
use App\videos;
use App\watch_count;
use App\watchcount;
use App\web_search;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Website\AllvideoController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Mail;
use Illuminate\Support\Facades\Storage;
use App\Ads;
use App\Mail\Email;
use App\categories;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

}
