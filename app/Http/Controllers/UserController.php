<?php


namespace App\Http\Controllers;


use App\User;
use Firebase\JWT\JWT;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends BaseController
{
    public function __construct()
    {
        $this->class = User::class;
    }

}
