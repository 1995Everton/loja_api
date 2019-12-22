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

    public function clientIndex()
    {
        return response()->json(Auth::user());
    }

    public function clientUpdate(Request $request)
    {
        $user = Auth::user();
        $this->validate($request,User::$rules);
        $user->fill($request->all());
        $user->save();
        return response()->json($user,201);

    }

}
