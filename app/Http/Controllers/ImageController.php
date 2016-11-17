<?php

namespace App\Http\Controllers;

use App\Filters\DemoFilter;
use App\Filters\Red;
use App\Filters\Rotate;
use Illuminate\Http\Request;
use  \Intervention\Image\Facades\Image;

class ImageController extends Controller
{

    function index( $filter )  {

        $img = Image::make( public_path('images/2.jpg'))->resize(300, 200);
        switch ( $filter ) {
            case "red":
                $img->filter(new Red());
                break;
            case "demo":
                $img->filter(new DemoFilter(10));
                break;
            case "rotated":
                $img->filter(new Rotate());
                break;
        }

        return $img->response('jpg');
    }


    function filters() {


        return view( 'filters.index');
    }
}
