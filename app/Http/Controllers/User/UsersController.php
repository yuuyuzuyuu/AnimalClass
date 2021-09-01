<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth:user');
    // }
    
    public function index()
    {
        return view('user.welcome');
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
        
        return view('user.edit', [
            'user' => $user,
        ]);
    }

    public function update(Request $request, User $user)
    {
        $user_form = $request->all();
        $user = \Auth::user();
        unset($user_form['_token']);
        $user->name = $request->name;
        $user->nickname = $request->nickname;
        $user->email = $request->email;
        $user->tel = $request->tel;
        $user->pref = $request->pref;
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect('user/'.$user->id);
    }
}
