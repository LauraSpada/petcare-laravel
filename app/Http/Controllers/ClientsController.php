<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function index()
    {
        $clientslist = Client::all();
        return view('clients.index', compact('clientslist'));
    }

    public function create()
    {
        return view('clients.create');
    }

    public function store(Request $request)
    {
        $client = new Client(['cpf' => $request -> input('cpf'),'name' => $request -> input('name'),'phone' => $request -> input('phone')]);

        $client->save();

        return redirect()->route('clients.index', $client);
    }

    public function show(Client $client)
    {
        return view('clients.show', compact('client'));
    }
    
    public function edit(Client $client){
        return view('clients.edit', compact('client'));
    }

    public function update(Request $request, Client $client)
    {
        $validated = $request->validate([
            'cpf'   => 'required|string',
            'name'  => 'required|string',
            'phone' => 'required|string',
        ]);

        $client->update($validated);

        return redirect()->route('clients.index');
    }

    public function destroy(Client $client)
    {
        $client->delete();

        return redirect()->route('clients.index');
    }
}
