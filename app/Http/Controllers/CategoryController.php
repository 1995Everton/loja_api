<?php


namespace App\Http\Controllers;


use App\Category;

class CategoryController extends BaseController
{
    public function __construct()
    {
        $this->class = Category::class;
    }
}
