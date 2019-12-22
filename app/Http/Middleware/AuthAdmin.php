<?php


namespace App\Http\Middleware;


use App\User;
use Closure;
use Illuminate\Http\Request;

class AuthAdmin
{
    public function handle(Request $request, Closure $next)
    {
        try {
            if (!$request->hasHeader('Authorization')) throw new \Exception();
            $user = User::query()->where('token', $request->header('Authorization'))->first();
            if(is_null($user) || !$user->manager)throw new \Exception();
            return $next($request);
        }catch (\Exception $e) {
            return response('Unauthorized',401);
        }

    }
}
