<?php

namespace App\Http\Controllers;



class UserController extends Controller
{
    public function index() {
        return view('users.index');
    }
    public function create() {
        //Isso carrega a view create.blade.php dentro da pasta resources/views/users
        return view('users.create');
    }
}
