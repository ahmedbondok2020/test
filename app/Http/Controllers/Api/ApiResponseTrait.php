<?php

namespace App\Http\Controllers\Api;


trait ApiResponseTrait
{
    public $paginate = 10;

    /*
     *
     *
     *
     * [
     *  'data' => '',
     *  'status' => true, false,
     *  'error' => ''
     * ]*/

    public function ApiResponse($data = null, $error = null, $code = 200)
    {
        $array = [
            'data' =>$data,
            'status' => in_array($code ,$this->successCode()) ? true : false,
            'error' => $error,
        ];

        return response($array, $code);
    }

    public function successCode()
    {
        return [
            '200', '201', '202'
        ];
    }

    public function NotFoundResponse()
    {
        return $this->ApiResponse('', 'Category Not Found', 404);
    }
}

