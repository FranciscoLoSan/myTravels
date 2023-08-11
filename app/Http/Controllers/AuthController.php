<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{

    public function _construct()
    {
        $this->middleware('auth:api', ['except' => ['login', 'register']]);
    }

    public function register(Request $request)
    {
        $validator = validator::make(
            $request->all(),
            [
                'nombre' => 'required|max:30',
                'apellido_p' => 'required|max:30',
                'apellido_m' => 'required|max:30',
                'correo' => 'required|unique:App\Models\Usuario,correo|max:100',
                'password' => 'required|string|min:8',
                'estado_civil' => 'required',
                'ciudad' => 'required|max:75',
                'fecha_nacimiento' => 'required',
                'actividad1' => 'required',
                'actividad2' => 'required',
                'actividad3' => 'required',
            ]
        );

        if ($validator->fails()) {
            return response()->json($validator->errors()->toJson(), 400);
        }

        $user = User::create(array_merge(
            $validator->validated(),
            ['password' => bcrypt($request->password)]
        ));

        return response()->json([
            'massage' => 'User successfully registered',
            'user' => $user
        ], 201);
    }

    public function login(Request $request)
    {
        $validator = validator::make(
            $request->all(),
            [
                'correo' => 'required|email',
                'password' => 'required|string|min:8'
            ]
        );

        // dd($request->password);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        if (!$token = auth()->attempt($validator->validated())) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->createNewToken($token);
    }

    public function createNewToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60,
            'user' => auth()->user()
        ]);
    }
}
