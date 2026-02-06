<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->authorizeResource(Client::class, 'client');
    }

    public function index()
    {
        $clients = Client::orderBy('name')->get();

        return view('clients.index', compact('clients'));
    }

    public function create()
    {
        return view('clients.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name'       => ['required', 'string', 'max:255'],
            'cpf'        => ['required', 'string', 'max:14', 'unique:clients,cpf'],
            'birth_date' => ['required', 'date'],
        ]);

        Client::create($data);

        return redirect()->route('clients.index');
    }

    public function edit(Client $client)
    {
        return view('clients.edit', compact('client'));
    }

    public function update(Request $request, Client $client)
    {
        $data = $request->validate([
            'name'       => ['required', 'string', 'max:255'],
            'cpf'        => ['required', 'string', 'max:14', 'unique:clients,cpf,' . $client->id],
            'birth_date' => ['required', 'date'],
        ]);

        $client->update($data);

        return redirect()->route('clients.index');
    }

    public function destroy(Client $client)
    {
        $client->delete();

        return redirect()->route('clients.index');
    }
    public function show(Client $client)
    {
        return view('clients.show', compact('client'));
    }
}
