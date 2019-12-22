<?php


namespace App\Http\Controllers;


use App\User;
use Faker\Provider\DateTime;
use Firebase\JWT\JWT;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Laravel\Lumen\Routing\Controller;

class AuthController extends Controller
{
    public function authentication(Request $request)
    {
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $user = User::query()->where('email', $request->email)->first();
        if(is_null($user) || !Hash::check($request->password, $user->password)){
            return response()->json(['error' => 'invalid user'],404);
        }
        $token = JWT::encode([
            'name' => $user->name,
            'id' => $user->id,
            'admin' => $user->manager,
            'created_in' => time()
        ], env('JWT_KEY'));
        $user->token = $token;
        $user->save();
        return response()->json(['access_token' => $token],200);
    }
}
