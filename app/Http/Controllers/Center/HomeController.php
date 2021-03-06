<?php

namespace App\Http\Controllers\Center;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Center;
use App\Models\Animal;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:center')
            ->except(['show']);
    }

    public function show($id)
    {
        $center = Center::findOrFail($id);
        $animals = Animal::where('center_id', $center->id)->orderBy('created_at', 'DESC')->paginate(8);

        return view('center.show', [
            'center' => $center,
            'animals' => $animals,
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
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'tel' => 'required|max:11',
            'postcode' => 'required|max:7',
            'pref' => 'required',
            'address' => 'required',
            'password' => 'confirmed',
        ]);

        $center->name = $request->name;
        $center->email = $request->email;
        $center->password = bcrypt($request->password);
        $center->tel = $request->tel;
        $center->pref = $request->pref;
        $center->address = $request->address;
        $center->postcode = $request->postcode;
        $center->homepage = $request->homepage;
        $center->instagram = $request->instagram;
        $center->twitter = $request->twitter;
        $center->facebook = $request->facebook;
        $center->save();
        return redirect('center/'.$center->id);
    }
}
