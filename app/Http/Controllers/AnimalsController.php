<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Animal;

class AnimalsController extends Controller
{
    public function index()
    {
        $animals = Animal::all();

        return view('user.animal.index', [
          'animals' => $animals,
        ]);
    }

    public function create()
    {
        return view('center.animal.create');
    }

    public function store(Request $request)
    {
        $animal = new Animal;
        $animal->image1 = $request->image1;
        $animal->image2 = $request->image2;
        $animal->image3 = $request->image3;
        $animal->name = $request->name;
        $animal->age = $request->age;
        $animal->gender = $request->gender;
        $animal->type = $request->type;
        $animal->animal_type = $request->animal_type;
        $animal->introduction = $request->introduction;
        $animal->active_status = $request->active_status;
        $animal->save();

        return redirect('/center');
    }

    public function show($id)
    {
        $animal = Animal::findorFail($id);

        return view('animal.show', [
            'animal' => $animal,
        ]);
    }

    public function edit($id)
    {
        $animal = Animal::findorFail($id);

        return view('animals.edit', [
            'animals' => $animal,
        ]);
    }

    public function update(Request $request, $id)
    {
        $animal = Animal::findorFail($id);
        $animal->image1 = $request->image1;
        $animal->image2 = $request->image2;
        $animal->image3 = $request->image3;
        $animal->name = $request->name;
        $animal->age = $request->age;
        $animal->gender = $request->gender;
        $animal->type = $request->type;
        $animal->animal_type = $request->animal_type;
        $animal->introduction = $request->introduction;
        $animal->active_status = $request->active_status;
        $animal->save();

        return redirect('/center');
    }

    public function destroy($id)
    {
        $animal = Animal::findorFail($id);
        $animal->delete();

        return redirect('/center');
    }
}
