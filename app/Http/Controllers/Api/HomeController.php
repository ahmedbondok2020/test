<?php

namespace App\Http\Controllers\Api;

use App\categories;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
      return view('home');
    }

    public function allCategories(Request $request)
    {
        $categories = categories::where('parent_id', '=', 0)->with('childs')->get();
        return response($categories , 200);
    }
}
