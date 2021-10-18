<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class EssentialController 
{
    //this method is for File upload

    public function fileupload($request,$photo,$locations){
           if($request->$photo){
                //  GEt position index of ;
                $position = strpos($request->$photo,';');
                // Get sub string from whole string with substr function
                $substr = substr($request->$photo , 0 , $position);
                // Make string to array where / exixi then get 1 index value;
                $extention = explode('/', $substr)[1];

                // genatrate unique extention
                $unique_ex = md5(time().rand()). '.' . $extention;

                // Make image resize using image intervation
                $img= Image::make($request->$photo)->resize(200,200);

                // Upload location get
                $location = $locations;

                // genatrate image uploaded name
                $image_url = $location.$unique_ex;

                // upload photo in project folder
                $img->save($image_url);

                return $image_url;
    }else{
        $image_url = '';
        return $image_url;
    }
}


public static function delete($data){

    if(!empty($data -> photo)){
        unlink($data -> photo);
        $data -> delete();
    }else{
        $data -> delete();
    }
}


public static function photoupdate($request,$new_photo,$locations,$old){

    if ($request->$new_photo) {
        $file = $request->$new_photo;
        $position = strpos($file, ';');
        $substr = substr($file, 0, $position);
        $arr = explode('/', $substr)[1];
        $unique = md5(time().rand()) . '.' . $arr;
        $location = $locations;
        $img= Image::make($file)->resize(200, 200);
        $im_url = $location.$unique;
        unlink($old);
        $img->save($im_url);
        return $im_url;
    }else{
        $im_url =  $old;
        return $im_url;
    }

}

}
