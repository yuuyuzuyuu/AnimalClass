<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Center;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        return view('admin.home');
    }

    public function user()
    {
        $users = User::all();
        return view('admin.user', [
            'users' => $users,
        ]);
    }

    public function center()
    {
        $centers = Center::all();
        return view('admin.center', [
            'centers' => $centers,
        ]);
    }

}
