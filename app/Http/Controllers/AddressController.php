<?php


namespace App\Http\Controllers;


use App\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AddressController extends BaseController
{
    public function __construct()
    {
        $this->class = Address::class;
    }

    public function edit(int $id)
    {
        $data = Address::query()
            ->where('user_id', $id)
            ->get();
        if(count($data) > 0){
            return response()->json(compact('data'),200);
        }else{
            return response()->json(['error' => 'no data found'],404);
        }
    }

    public function clientStore(Request $request)
    {
        $user = Auth::user();
        unset(Address::$rules['user_id']);
        $this->validate($request,Address::$rules);
        $data = Address::create(array_unique(array_merge($request->all(),[ 'user_id' => $user->id]), SORT_REGULAR));
        if($data){
            return response()->json($data,201);
        }else{
            return response()->json(['error' => 'error inserting into database'],502);
        }
    }

    public function clientEdit()
    {
        $user = Auth::user();
        $data = Address::query()->where('user_id',$user->id)->get();
        if(count($data) > 0){
            return response()->json(compact('data'),200);
        }else{
            return response()->json(['error' => 'no data found'],404);
        }
    }

    public function clientUpdate(int $id, Request $request)
    {
        $user = Auth::user();
        $data = Address::query()->where(['user_id' => $user->id, 'id' => $id])->first();
        if(is_null($data)){
            return response()->json(['error' => 'no data found'],404);
        }
        unset(Address::$rules['user_id']);
        $this->validate($request,Address::$rules);
        $data->fill(array_unique(array_merge($request->all(),[ 'user_id' => $user->id]), SORT_REGULAR));
        $data->save();
        if($data){
            return response()->json($data,201);
        }else{
            return response()->json(['error' => 'error inserting into database'],502);
        }
    }

}
