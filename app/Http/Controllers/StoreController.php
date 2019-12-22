<?php


namespace App\Http\Controllers;


use App\Store;

class StoreController extends BaseController
{
    public function __construct()
    {
        $this->class = Store::class;
    }
}
