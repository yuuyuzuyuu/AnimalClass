<?php

namespace App\Http\Controllers\Center\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use App\Models\Center;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::CENTER_HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:center');
    }

    protected function guard()
    {
        return Auth::guard('center');
    }

    public function showRegistrationForm()
    {
        return view('center.auth.register');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:centers'],
            'tel' => ['required', 'string', 'max:11'],
            'postcode' => ['required', 'string', 'max:7'],
            'pref' => ['required', 'integer'],
            'address' => ['required', 'string'],
            'homepage' => ['nullable', 'string'],
            'instagram' => ['nullable', 'string'],
            'twitter' => ['nullable', 'string'],
            'facebook' => ['nullable', 'string'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Center
     */
    protected function create(array $data)
    {
        return Center::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'tel' => $data['tel'],
            'postcode' => $data['postcode'],
            'pref' => $data['pref'],
            'address' => $data['address'],
            'homepage' => $data['homepage'],
            'instagram' => $data['instagram'],
            'twitter' => $data['twitter'],
            'facebook' => $data['facebook'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
