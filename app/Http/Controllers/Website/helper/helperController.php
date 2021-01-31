<?php

namespace App\Http\Controllers\Website\helper;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as Image;

class helperController extends Controller
{
    public static function make_slug($string, $separator = '-')
    {
        $string = trim($string);
        $string = mb_strtolower($string, 'UTF-8');

        // Make alphanumeric (removes all other characters)
        // this makes the string safe especially when used as a part of a URL
        // this keeps latin characters and Persian characters as well
        $string = preg_replace("/[^a-z0-9_\s-۰۱۲۳۴۵۶۷۸۹ىءاآأإؤئبپتثجچحخدذرزژسشصضطظعغفقکكگگلمنوهیية]/u", '', $string);

        // Remove multiple dashes or whitespaces or underscores
        $string = preg_replace("/[\s-_]+/", ' ', $string);

        // Convert whitespaces and underscore to the given separator
        $string = preg_replace("/[\s_]/", $separator, $string);

        return $string;
    }

//    public static function preg_title($string, $separator = ' ')
//    {
//        $string = trim($string);
//        $string = mb_strtolower($string, 'UTF-8');
//
//        // Make alphanumeric (removes all other characters)
//        // this makes the string safe especially when used as a part of a URL
//        // this keeps latin characters and Persian characters as well
//        $string = preg_replace("/[^a-z0-9_\s-۰۱۲۳۴۵۶۷۸۹ىءاآأؤئبپتثجچحخدذرزژسشصضطظعغفقکكگگلمنوهیية]/u", '', $string);
//
//        // Remove multiple dashes or whitespaces or underscores
//        $string = preg_replace("/[\s-_]+/", ' ', $string);
//
//        // Convert whitespaces and underscore to the given separator
//        $string = preg_replace("/[\s_]/", $separator, $string);
//
//        return $string;
//    }


    static public function upload_images($path,$destination,$image,$width,$height)
    {
        if (!File::isDirectory($path)) {
            File::makeDirectory($path, 0777, true, true);
        }

        $flag = true;
        $try = 1;
        while ($flag && $try < 2):
            try {
                // open and resize an image file
                $img = Image::make($image)->resize($width, $height);
                // save file as jpg with medium quality
                $img->save($destination, 75);
                $flag = false;
            } catch (\Exception $e) {
                //not throwing  error when exception occurs
            }
            $try++;
        endwhile;
    }
}
