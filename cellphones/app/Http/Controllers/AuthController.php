<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function index()
    {
        dd('hello');
    }

    public function register(Request $request)
    {

        $v = Validator::make($request->all(), [
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed'
        ]);

        if ($v->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $v->errors()
            ], 422);
        }

        $user = new User;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        return response()->json(['status' => 'success'], 200);
    }

    public function login(Request $request)
    {

        $credentials = $request->only('email', 'password');

        if ($token = $this->guard()->attemp($credentials)) {
            return response()->json(['status' => 'success'], 200);
        }
        return response()->json(['error' => 'login_error'], 401);
    }

    public function logout()
    {
        $this->guard()->logout();
        return respose()->json([
            'status' => 'success',
            'msg' => 'Logged out Successfully'
        ], 200);
    }

    public function refresh()
    {
        if ($token = $this->guard()->refresh()) {
            return response()
                ->json(['status' => 'success'], 200)
                ->header('Authorization', $token);
        }
        return response()->json(['error' => 'refresh_token_error'], 302);
    }

    private function guard()
    {
        return Auth::guard();
    }
}
