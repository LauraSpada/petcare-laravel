<?php

namespace App\Http\Controllers;

use App\Models\Vet;
use Illuminate\Http\Request;

class VetsController extends Controller
{
    public function index()
    {
        $vetslist = Vet::all();
        return view('vets.index', compact('vetslist'));
    }

    public function create()
    {
        return view('vets.create');
    }

    public function store(Request $request)
    {
        $vet = new Vet(['crmv' => $request -> input('crmv'),'name' => $request -> input('name'),'adm_date' => $request -> input('adm_date'),'salary' => $request -> input('salary')]);

        $vet->save();

        return redirect()->route('vets.index', $vet);
    }

    public function show(Vet $vet)
    {
        return view('vets.show', compact('vet'));
    }
    
    public function edit(Vet $vet){
        return view('vets.edit', compact('vet'));
    }

    public function update(Request $request, Vet $vet)
    {
        $validated = $request->validate([
            'crmv'     => 'required|string',
            'name'     => 'required|string',
            'adm_date' => 'required|date',
            'salary'   => 'required|numeric',
        ]);

        $vet->update($validated);

        return redirect()->route('vets.index');
    }

    public function destroy(Vet $vet)
    {
        $vet->delete();

        return redirect()->route('vets.index');
    }
}
