<?php


namespace App\Http\Controllers;


use App\Brand;
use App\Product;
use http\Client\Curl\User;
use http\Client\Request;
use Illuminate\Support\Facades\Auth;

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


    public function favoriteProduct($id)
    {
        $product = Product::find($id);
        if(is_null($product)){
            return response()->json(['error' => 'informed product does not exist'],404);
        }
        $exists  = Auth::user()->favorites()->where('product_id', $id)->exists();
        if($exists){
            Auth::user()->favorites()->detach($id);
            return response()->json(['action' => 0 ,'success' => 'product removed from favorites'],201);
        }else{
            Auth::user()->favorites()->attach($id);
            return response()->json(['action' => 1 ,'success' => 'successfully favored product'],201);
        }
    }
}
