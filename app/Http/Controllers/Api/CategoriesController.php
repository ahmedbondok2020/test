<?php

namespace App\Http\Controllers\Api;

use App\categories;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class CategoriesController extends Controller
{
    use ApiResponseTrait;

    public function index(Request $request)
    {
//        $categories = categories::where('parent_id', 0)->with('childs')->get();

        $offset = $request->has('offset') ? $request->get('offset') : 0;

//        $categories = \App\Http\Resources\Categories::collection(categories::where('parent_id', '=', 0)->with('childs')->limit(10)->offset($offset)->get());
        $categories = \App\Http\Resources\Categories::collection(categories::where('parent_id', '=', 0)->with('childs')->paginate($this->paginate));
//        return response($categories , 200);
        return $this->ApiResponse($categories , '', 200);

    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name_ar' => 'required|string|unique:categories,name_ar,id|max:255',
            'name_en' => 'required|string|unique:categories,name_ar,id|max:255',
            'image' => 'required|string',
            'parent_id' => 'required|string',
        ]);

        if ($validator->fails()) {
            return $this->ApiResponse('', $validator->errors(), 422);
        }

        $categories = categories::create($request->all());
        if ($categories)
        {
            return $this->ApiResponse($categories, '', 201);
        }
        else{
            return $this->ApiResponse('', 'Can Not Store This Category', 400);
        }
    }


    public function show($id)
    {
        $categories = categories::find($id);
        if ($categories)
        {
            //        return response($categories , 200);
            return $this->ApiResponse(new \App\Http\Resources\Categories($categories) , '', 200);
        }
        else{
            return $this->NotFoundResponse();
        }

    }

    public function edit($id)
    {
//        $categories = categories::find($id);
//
//        if ($categories)
//        {
//            //        return response($categories , 200);
////            $categories->update();
//
//            return $this->ApiResponse(new \App\Http\Resources\Categories($categories) , '', 200);
//        }
//        else{
//            return $this->ApiResponse( '' , 'we did not found this id', 404);
//        }
    }


    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name_ar' => 'required|string|unique:categories,id|max:255',
            'name_en' => 'required|string|unique:categories,id|max:255',
            'image' => 'required|string',
            'parent_id' => 'required|string',
        ]);

        if ($validator->fails()) {
            return $this->ApiResponse('', $validator->errors(), 422);
        }

        $categories = categories::find($id);
        if (!$categories)
        {
            return $this->NotFoundResponse();
        }
        else{
            $categories = $categories->update($request->all());
            if ($categories)
            {
                return $this->ApiResponse(new \App\Http\Resources\Categories($categories) , '', 200);
            }
            else{
                return $this->ApiResponse('' , 'Unknown Category', 520);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
