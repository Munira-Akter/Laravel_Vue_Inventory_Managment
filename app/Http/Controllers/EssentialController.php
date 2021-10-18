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

}
