<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\UserProfile;
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
            'types' => [
                'PJ' => 'Pessoa Jurídica',
                'PF' => 'Pessoa física'
            ],
            'interests' => [
                ['label' => 'Futebol', 'value' => 'futebol'],
                ['label' => 'BTS', 'value' => 'bts'],
                ['label' => 'Games', 'value' => 'games']
            ],
            'roles' => Role::all(),
        ];
        $user->load('profile','interests','roles');
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
    public function updateProfile(Request $request, User $user)
    {
        $input = $request->validate([
            'type' => ['nullable','string','max:255'],
            'address' => ['nullable','string','max:255']
        ]);
        UserProfile::updateOrCreate([
            'user_id' => $user->id
        ], $input);

        return back()
            ->with('success','Perfil atualizado com sucesso!');
    }

    public function updateInterests(Request $request, User $user)
    {
        $input = $request->validate([
            'interests' => ['nullable','array'],
        ]);

        $user->interests()->delete();
        if(!empty($input['interests'])){
            $user->interests()->createMany($input['interests']);
        }
        return back()
            ->with('success','Interesses atualizados com sucesso!');

    }
    public function updateRole(Request $request, User $user)
    {
        $input = $request->validate([
            'role' => ['nullable','integer'],
        ]);

        $user->roles()->sync($input);

        return back()
            ->with('success','Cargo atualizado com sucesso!');

    }
}
