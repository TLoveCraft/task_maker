<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;



class UserController extends Controller
{
    public function index()
    {
        return view('users.index');
    }
    public function create()
    {
        //Isso carrega a view create.blade.php dentro da pasta resources/views/users
        return view('users.create');
    }
    public function store(UserRequest $request)
    {
        //Validação de formulário
        $request->validated();

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);
        return redirect()->route('user.index') ->with('success','Usuário criado com sucesso');
    }
}
