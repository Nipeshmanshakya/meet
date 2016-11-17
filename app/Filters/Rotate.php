<?php
/**
 * Created by PhpStorm.
 * User: Nipesh
 * Date: 11/17/2016
 * Time: 7:59 AM
 */

namespace App\Filters;


use Intervention\Image\Filters\FilterInterface;

class Rotate implements FilterInterface
{
    public function applyFilter(\Intervention\Image\Image $image)
    {
        $image->rotate(-45);
        return $image;
    }


}