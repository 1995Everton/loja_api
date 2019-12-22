<?php


namespace App\Http\Controllers;


use App\Product;

class ProductController extends BaseController
{
    public function __construct()
    {
        $this->class = Product::class;
    }


    public function edit(int $id)
    {
        $data = Product::query()
            ->where('category_id',$id)
            ->get();
        if(count($data) > 0){
            return response()->json(compact('data'),200);
        }else{
            return response()->json(['error' => 'no data found'],404);
        }
    }
}
