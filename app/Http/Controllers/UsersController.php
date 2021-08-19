<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function show($id)
    {
        $user = User::findOrFail($id);
        
        return view('users.show', [
            'user' => $user, 
        ]);
    }

    public function edit(user $user)
    {
        return view('users.edit', ['user' => $user]);
    }

    public function update(Request $request, user $user)
    {
        $user->name = $request->name;
        $user->save();
        return redirect('users/'.$user->id);
    }
}
