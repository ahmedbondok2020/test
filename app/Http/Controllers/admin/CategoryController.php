<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\admin\helper\helperController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\categories;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = categories::where('parent_id', '=', 0)->with('childs')->get();
//        $allCategories = categories::pluck('name_ar','name_en','id')->all();
        $allCategories = categories::all();
        $title = "إضافة تصنيف جديد";

        return view('admin/categories/allcategories', compact('categories','allCategories','title'));
    }

    public function viewCategory (Request $request)
    {
        $categories = categories::where('parent_id', '=', 0)->with('childs')->get();
        $allCategories = categories::where('id', '<>', $request->id)->select('name_ar','name_en','id')->get();
        $Details = categories::where('id', '=', $request->id)->first();
        $title = "تعديل تصنيف";

        return view('admin/categories/editcategories', compact('categories','allCategories','Details','title'));
    }

    public function addCategory (Request $request)
    {
        $image_name = helperController::make_slug($request->name_ar);

        if(!empty($request->file('image'))) {
            $ex = $request->file('image')->getClientOriginalExtension();
            if (in_array($ex, ['png', 'jpeg','jpg','JPG'])) {

                categories::create([
                    'name_ar' => $request->name_ar,
                    'name_en' => $request->name_en,
                    'parent_id' => $request->parent_id,
                    'image' => $image_name . '.jpg',
                ]);

                /// small image for category.
                $path = public_path('website' . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . 'category');

                $image_name = helperController::make_slug($request->title);
                $destination = public_path('website' . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . 'category' .$image_name . ".jpg");

                helperController::upload_images($path,$destination,$request->file('image'),'129','179');


                return redirect('/adminpanel/category/all')->with('msg', 'تم اضافة التصنيف بنجاح');
            }
            return redirect('/adminpanel/category/all')->with('msg', 'لم يتم اضافة التصنيف');
        }else{
            return redirect()->back();
        }
    }

    public function updateCategory (Request $request)
    {
        if(!empty($request->file('image'))) {
            $ex = $request->file('image')->getClientOriginalExtension();
            if (in_array($ex, ['png', 'jpeg','jpg','JPG'])) {
                /// small image for category.
                $path = public_path('website' . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . 'category');

                $image_name = helperController::make_slug($request->title);
                $destination = public_path('website' . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . 'category'. DIRECTORY_SEPARATOR . $image_name . ".jpg");

                helperController::upload_images($path,$destination,$request->file('image'),'129','179');
            }else{
                return redirect()->back()->with('msg', 'الملف ليس صورة');
            }
        }

        $data = categories::where('id','=', $request->id)->first();
        $data->name_ar = $request->name_ar;
        $data->name_en = $request->name_en;
        $data->parent_id = $request->parent_id;
        if(!empty($request->file('image'))) {
            $data->image = $image_name . ".jpg";
        }
        $ok = $data->save();

        if ($ok)
        {return redirect('/adminpanel/category/editCategory/'.$request->id)->with('msg', 'تم تعديل التصنيف بنجاح');}
        else{return redirect('/adminpanel/category/editCategory/'.$request->id)->with('msg', 'لم يتم تعديل التصنيف');}

    }

    public function deleteCategory (Request $request)
    {
        $test = categories::where('parent_id','=',$request->id)->first();
        if (isset($test) && $test != '')
        {
            dd($test);
            return redirect()->back()->with('msg', 'لا يمكن حذف تصنيف تحته تصنيفات');
        }
        else{
            $data = categories::where('id','=', $request->id);
            $data -> delete();

            return redirect('/adminpanel/category/all')->with('msg', 'تم حذف التصنيف');
        }
    }
}
