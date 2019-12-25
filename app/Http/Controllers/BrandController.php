<?php


namespace App\Http\Controllers;


use App\Brand;

class BrandController extends BaseController
{
    public function __construct()
    {
        $this->class = Brand::class;
    }
}
