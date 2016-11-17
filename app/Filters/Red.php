<?php
/**
 * Created by PhpStorm.
 * User: Nipesh
 * Date: 11/17/2016
 * Time: 7:51 AM
 */

namespace App\Filters;


use Intervention\Image\Filters\FilterInterface;

class Red implements FilterInterface
{


    public function applyFilter(\Intervention\Image\Image $image)
    {
        $image->pixelate(10);
        return $image;
    }


}