<?php


namespace App\Http\Controllers;


use App\Brand;
use App\Product;

class ProductController extends BaseController
{
    public function __construct()
    {
        $this->class = Product::class;
    }


    public function editCategory(int $id)
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

    public function editBrand(int $id)
    {
        $data = Brand::query()
            ->where('brand_id',$id)
            ->get();
        if(count($data) > 0){
            return response()->json(compact('data'),200);
        }else{
            return response()->json(['error' => 'no data found'],404);
        }
    }
}
