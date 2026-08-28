<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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

    public function edit(User $user)
    {
        $config = [
            'title' => 'Configurações',
            'hTitle' => 'Editar usuário',
        ];
        return view('components.users.edit', compact('user','config'));
    }

    public function update(Request $request, User $user)
    {
        $input = $request->validate([
            'email' => ['required','string','email','max:255', Rule::unique('users','email')->ignore($user)],
            'password' => ['nullable','string','max:255'],
        ]);

        if(empty($input['password'])){
            unset($input['password']);
        }

        $user->update($input);
        return back()
            ->with('success','Perfil atualizado com sucesso!');
    }
}
