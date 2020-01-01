<?php


namespace App\Http\Controllers;


use App\Request;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Auth;
use Laravel\Lumen\Routing\Controller;

class RequestController extends Controller
{
    public function index()
    {
        $data = Request::query()->where('user_id',Auth::id())->get();
        if(count($data) >  0) {
            return response()->json(compact('data'),200);
        }else{
            return response()->json(['error' => 'no data found'],404);
        }
    }

    public function store(HttpRequest $request)
    {
        $this->validate($request, Request::$rules);
        /** @var Request $data */
        $values = array_merge($request->all(),[ 'user_id' => Auth::id()]);
        $data = Request::create($values);
        foreach($request->products as $key => $value) {
            $data->productRequest()->attach($value['id']);
        }

        if($data){
            return response()->json($data,201);
        }else{
            return response()->json(['error' => 'error inserting into database'],502);
        }
    }
}
