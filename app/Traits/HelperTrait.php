<?php

namespace App\Traits;


use Illuminate\Support\Str;


trait HelperTrait
{
    public function GetDataWithArray($data, $error_code = 1, $error_msg = "success")
    {
        return response()->json([
            'status' => true,
            'error_code' => $error_code,
            'error_msg' => $error_msg,
            'data' => $data
        ]);
    }

    public function ReturnError($error_code = 0, $error_msg = "Not found")
    {
        return response()->json([
            'status' => false,
            'error_code' => $error_code,
            'error_msg' => $error_msg,
            'data' => null
        ]);
    }


    public function saveImage($photo, $folder)
    {
        $rand = Str::random(3);
        $file_extension = $photo->getClientOriginalExtension();
        $file_name = $rand . time() . '.' . $file_extension;
        $photo->move($folder, $file_name);
        return $folder . '/' . $file_name;

    }

}
