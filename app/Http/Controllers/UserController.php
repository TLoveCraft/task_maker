<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;



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
        dd($request);
    }
}
