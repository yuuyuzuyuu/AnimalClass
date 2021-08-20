<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:user');
    }
    
    public function show($id)
    {
        $user = User::findOrFail($id);
        
        return view('user.show', [
            'user' => $user, 
        ]);
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        
        return view('users.edit', ['user' => $user]);
    }

    public function update(Request $request, User $user)
    {
        $user->name = $request->name;
        $user->nickname = $request->nickname;
        $user->email = $request->email;
        $user->tel = $request->tel;
        $user->pref = $request->pref;
        $user->password = $request->password;
        $user->save();
        return redirect('users/'.$user->id);
    }
}
