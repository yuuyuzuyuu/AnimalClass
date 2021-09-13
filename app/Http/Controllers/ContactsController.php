<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Contact;

class ContactsController extends Controller
{
    public function index() {
        return view('user.contact.index');
    }

    public function confirm(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'title' => 'required',
            'body' => 'required',
        ]);

        $inputs = $request->all();

        return view('user.contact.confirm', [
            'inputs' => $inputs,
        ]);
    }

    public function send(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'title' => 'required',
            'body' => 'required',
        ]);

        $action = $request->input('action');
        $inputs = $request->except('action');

        if($action !== '送信') {
            return redirect()
                ->route('contact.index')
                ->withInput($inputs);
        } else {
            \Mail::to($inputs['email'])->send(new Contact($inputs));
            $request->session()->regenerateToken();
            return view('user.contact.thanks');
        }
    }
}
