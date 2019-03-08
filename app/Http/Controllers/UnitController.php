<?php

namespace App\Http\Controllers;

use App\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function index()
    {
    	return view('units.index', [
    		'units' => Unit::all()
    	]);
    }

    public function create()
    {
    	return view('units.create');
    }

    public function store(Request $request)
    {
    	$validatedData = $request->validate([
	        'name' => 'required',
	        'location' => 'required'
	    ]);

    	$unit = new Unit();
    	$unit->name = $request->name;
    	$unit->location = $request->location;
    	$unit->save();

    	return redirect('/units');
    }

    public function destroy(Unit $unit)
    {
    	$unit->delete();

    	return redirect('/units');
    }
}
