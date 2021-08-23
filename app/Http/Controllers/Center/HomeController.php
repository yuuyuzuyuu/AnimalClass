<?php

namespace App\Http\Controllers\Center;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Center;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:center');
    }

    public function index()
    {
        return view('center.home');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $center = Center::findOrFail($id);
        
        return view('center.show', [
            'center' => $center,
        ]);
    }

    public function edit($id)
    {
        $center = Center::findOrFail($id);
        
        return view('center.edit', [
           'center' => $center, 
        ]);
    }


    public function update(Request $request, Center $center)
    {
        $center->name = $request->name;
        $center->email = $request->email;
        $center->password = $request->password;
        $center->tel = $request->tel;
        $center->pref = $request->pref;
        $center->address = $request->address;
        $center->postcode = $request->postcode;
        $center->save();
        return redirect('center/'.$center->id);
    }

    public function destroy($id)
    {
        //
    }
}
