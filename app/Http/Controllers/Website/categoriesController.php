<?php

namespace App\Http\Controllers\website;

use App\categories;
use App\videos;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class categoriesController extends Controller
{
    public function index()
    {
        $childs = categories::where('parent_id','=', 0)->orderby('id','desc')->get();
        return view('categories', compact('childs'));

    }

    public function category(Request $request)
    {
        $category = categories::where('id','=', $request->id)->first();
        $childs = categories::where('parent_id','=', $request->id)->orderby('id','desc')->get();

        return view('categories', compact('category', 'childs'));
    }
}
