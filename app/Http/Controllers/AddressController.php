<?php


namespace App\Http\Controllers;


use App\Address;

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
}
