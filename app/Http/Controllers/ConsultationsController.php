<?php

namespace App\Http\Controllers;

use App\Models\Vet;
use App\Models\Animal;
use App\Models\Consultation;
use Illuminate\Http\Request;

class ConsultationsController extends Controller
{
    public function index(){
        $consultationslist = Consultation::with('animal','vet')->get();
        return view(('consultations.index'), compact('consultationslist'));
    }

    public function create(){
        $vets = Vet::all();
        $animals = Animal::all();
        return view(('consultations.create'), compact('vets','animals'));
    }

    public function store(Request $request){
        $consultation = new Consultation([
            'date' => $request -> input('date'),
            'hour' => $request -> input('hour'),
            'reason' => $request -> input('reason'),
            'vet_id' => $request -> input('vet_id'),
            'animal_id' => $request -> input('animal_id'),]);

        $consultation->save();

        return redirect()->route('consultations.index', $consultation);
    }

    public function show(Consultation $consultation){
        return view('consultations.show', compact('consultation'));
    }

    public function edit(Consultation $consultation){
        $vets = Vet::all();
        $animals = Animal::all();
        return view('consultations.edit', compact('consultation','vets','animals'));
    }

    public function update(Request $request, Consultation $consultation){
        // dd($request->all());
        //dd($consultation->id, $consultation->getAttributes());
        $validated = $request->validate([
            'date' => 'required|date',
            'hour'  => 'required',
            'reason' => 'required|string',
            'vet_id' => 'required|exists:vets,id',
            'animal_id' => 'required|exists:animals,id',
        ]);

        $consultation->update($validated);

        return redirect()->route('consultations.index');
    }

    public function destroy(Consultation $consultation){
        $consultation->delete();
        return redirect()->route('consultations.index');
    }
}
