<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $config = [
            'title' => 'Usuários',
            'hTitle' => 'Lista de usuários',
        ];
        $users = User::paginate(5);
        return view('components.users.index', compact('users', 'config'));
    }
}
