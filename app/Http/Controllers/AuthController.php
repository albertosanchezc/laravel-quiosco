<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistroRequest;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function register(RegistroRequest $request){
        // Validar el registro
        $data = $request->validated();

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password'])
        ]);

        return [
            'token' => $user->creteToken('token')->plainTextToken,
            'user' => $user
        ];
    }
    
    public function login(Request $request){

    }

    public function logout(Request $request){

    }
    
    
}
