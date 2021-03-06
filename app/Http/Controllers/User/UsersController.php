<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Animal;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:user')
            ->except(['index']);
    }

    public function index()
    {
        $animals = Animal::orderBy('created_at', 'desc')->take(4)->get();

        return view('user.welcome', [
            'animals' => $animals,
        ]);
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        $animals = $user->favorites()->orderBy('created_at', 'DESC')->paginate(8);

        return view('user.show', [
            'user' => $user,
            'animals' => $animals,
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
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'password' => 'confirmed',
            'nickname' => 'required|max:20',
            'tel' => 'max:11',
            'pref' => 'required',
        ]);

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