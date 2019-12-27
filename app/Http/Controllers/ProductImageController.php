<?php


namespace App\Http\Controllers;

use App\ProductImage;

class ProductImageController extends BaseController
{
    public function __construct()
    {
        $this->class = ProductImage::class;
    }

}
