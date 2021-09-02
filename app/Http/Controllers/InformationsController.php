<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Information;
use App\Models\Animal;

class InformationsController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required|max:255',
        ]);

        $information = new Information;
        $information->content = $request->content;
        $information->center_id = \Auth::user('center')->id;
        $information->animal_id = $request->animal_id;
        $information->save();
        
        return back();
    }
    
    public function destroy($id)
    {
        $information = Information::findorFail($id);
        
        if (\Auth::id('center') === $information->center_id) {
            $information->delete();
        };
        return back();
    }
}
