<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use App\Models\Client;
use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalsController extends Controller
{
     public function index()
    {
        $animalslist = Animal::with('client')->get();

        return view('animals.index', compact('animalslist'));
    }

     public function create()
    {
        $clients = Client::all();
        return view('animals.create', compact('clients'));
    }

    public function store(Request $request)
    {
        $animal = new Animal([
            'name' => $request -> input('name'),
            'breed' => $request -> input('breed'),
            'b_date' => $request -> input('b_date'),
            'weight' => $request -> input('weight'),
            'gender' => $request -> input('gender'),
            'client_id' => $request -> input('client_id'),]);

        $animal->save();

        return redirect()->route('animals.index', $animal);
    }

    public function show($id)
    {
        $animal = Animal::with('consultations')->findOrFail($id);
        return view('animals.show', compact('animal'));
    }
    
    public function edit(Animal $animal){
        $clients = Client::all();
        return view('animals.edit', compact('animal', 'clients'));
    }

    public function update(Request $request, Animal $animal)
    {
        $validated = $request->validate([
            'name'  => 'required|string',
            'breed' => 'required|string',
            'b_date' => 'required|date',
            'weight' => 'required|numeric',
            'gender' => 'required|string',
            'client_id' => 'required',
        ]);

        $animal->update($validated);

        return redirect()->route('animals.index');
    }

     public function destroy(Animal $animal)
    {
        $animal->delete();

        return redirect()->route('animals.index');
    }
}
