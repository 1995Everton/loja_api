<?php


namespace App\Http\Controllers;



use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends BaseController
{
    public function __construct()
    {
        $this->class = User::class;
    }

    public function update(int $id, Request $request)
    {
        $data = User::find($id);
        if(is_null($data)){
            return response()->json(['error' => 'no data found'],404);
        }
        User::$rules['email'] = 'required|email|unique:user,email,'.$data->id;
        User::$rules['password'] = 'unique:user';
        $this->validate($request,User::$rules);
        $data->fill($request->all());
        $data->save();
        return response()->json($data,200);
    }

    public function clientIndex()
    {
        return response()->json(Auth::user());
    }

    public function clientUpdate(Request $request)
    {

        $user = Auth::user();
        User::$rules['email'] = 'required|email|unique:user,email,'.$user->id;
        User::$rules['password'] = 'unique:user';
        $this->validate($request,User::$rules);
        $user->fill($request->all());
        $user->save();
        return response()->json($user,201);

    }

    public function indexFavorites()
    {
        $data = Auth::user()->favorites()->getResults();
        if(count($data) > 0){
            return response()->json(compact('data'),200);
        }else{
            return response()->json(['error' => 'no data found'],404);
        }
    }

}
