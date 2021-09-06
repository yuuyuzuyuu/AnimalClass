<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Animal;
use App\Models\Center;
use App\Models\Information;
use App\Enums\Gender;
use App\Enums\ActiveStatus;
use App\Enums\AnimalType;
use Carbon\Carbon;
use Storage;

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
        $animal = new Animal;
        $gender = Gender::toselectArray();
        $animal_type = AnimalType::toselectArray();
        $active_status = ActiveStatus::toselectArray();

        return view('center.animal.create', [
            'animal' => $animal,
            'gender' => $gender,
            'animal_type' => $animal_type,
            'active_status' => $active_status,
        ]);
    }

    public function store(Request $request)
    {
        $center = \Auth::user('center');

        if(isset($request->dog_type)) {
            $request['type'] = $request->dog_type;
        } else {
            $request['type'] = $request->cat_type;
        }

        $request->validate([
            'name' => 'required|max:20',
            'age' => 'required',
            'gender' => 'required',
            'type' => 'required',
            'animal_type' => 'required',
            'introduction' => 'required|max:255',
            'active_status' => 'required',
        ]);

        if ($file = $request->file('image1')) {
            $fileName = time() . $file->getClientOriginalName();
            $path = Storage::disk('s3')->putFile('/', $file, 'public');
            $fileName = Storage::disk('s3')->url($path);
        } else {
            $fileName = "/images/default.png";
        }

        if ($file = $request->file('image2')) {
            $fileName2 = time() . $file->getClientOriginalName();
            $path = Storage::disk('s3')->putFile('/', $file, 'public');
            $fileName2 = Storage::disk('s3')->url($path);
        } else {
            $fileName2 = "";
        }

        if ($file = $request->file('image3')) {
            $fileName2 = time() . $file->getClientOriginalName();
            $path = Storage::disk('s3')->putFile('/', $file, 'public');
            $fileName3 = Storage::disk('s3')->url($path);
        } else {
            $fileName3 = "";
        }

        $animal = new Animal;
        $animal->image1 = $fileName;
        $animal->image2 = $fileName2;
        $animal->image3 = $fileName3;
        $animal->name = $request->name;
        $animal->age = $request->age;
        $animal->gender = $request->gender;
        $animal->type = $request->type;
        $animal->animal_type = $request->animal_type;
        $animal->introduction = $request->introduction;
        $animal->active_status = $request->active_status;
        $animal->center_id = \Auth::user('center')->id;
        $animal->save();

        return redirect('/animals');
    }

    public function show($id)
    {
        $animal = Animal::findOrFail($id);

        $carbon = new Carbon();

        return view('user.animal.show', [
            'animal' => $animal,
        ]);
    }

    public function edit($id)
    {
        $animal = Animal::findOrFail($id);

        $gender = Gender::toselectArray();
        $animal_type = AnimalType::toselectArray();
        $active_status = ActiveStatus::toselectArray();

        return view('center.animal.edit', [
            'animal' => $animal,
            'gender' => $gender,
            'animal_type' => $animal_type,
            'active_status' => $active_status,
        ]);
    }

    public function update(Request $request, $id)
    {
        $animal = Animal::findOrFail($id);

        if(isset($request->dog_type)) {
            $request['type'] = $request->dog_type;
        } else {
            $request['type'] = $request->cat_type;
        }

        $request->validate([
            'name' => 'required|max:20',
            'age' => 'required',
            'gender' => 'required',
            'type' => 'required',
            'animal_type' => 'required',
            'introduction' => 'required|max:255',
            'active_status' => 'required',
        ]);

        if ($file = $request->image1) {
            $fileName = time() . $file->getClientOriginalName();
            $target_path = public_path('uploads/');
            $file->move($target_path, $fileName);
        } else {
            $fileName = $animal->image1;
        }

        if ($file = $request->image2) {
            $fileName2 = time() . $file->getClientOriginalName();
            $target_path = public_path('uploads/');
            $file->move($target_path, $fileName2);
        } else {
            $fileName2 = $animal->image2;
        }

        if ($file = $request->image3) {
            $fileName3 = time() . $file->getClientOriginalName();
            $target_path = public_path('uploads/');
            $file->move($target_path, $fileName3);
        } else {
            $fileName3 = $animal->image3;
        }

        $animal->name = $request->name;
        $animal->age = $request->age;
        $animal->gender = $request->gender;
        $animal->type = $request->type;
        $animal->animal_type = $request->animal_type;
        $animal->introduction = $request->introduction;
        $animal->active_status = $request->active_status;
        $animal->image1 = $fileName;
        $animal->image2 = $fileName2;
        $animal->image3 = $fileName3;
        $animal->save();

        return redirect('/animals');
    }

    public function destroy($id)
    {
        $animal = Animal::findOrFail($id);
        $animal->delete();

        return redirect('/animals');
    }
}
