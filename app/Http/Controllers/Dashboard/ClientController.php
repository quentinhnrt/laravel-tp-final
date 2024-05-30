<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        return view('clients.index', ['clients' => $clients]);
    }
    
    public function show(Client $client)
    {
        return view('clients.show', ['client' => $client]);
    }
    
    public function create(): View
    {
        return view('clients.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'nullable|string|max:255',
            'website' => 'nullable|string|max:255|unique:clients,website',
            'projectlist' => 'nullable|string'
        ]);

        $client = Client::create($validated);

        return redirect()->route('clients.show', ['client' => $client->id])
            ->with('success', "Le client a bien été créé");
    }

    public function edit(Client $client): View
    {
        return view('clients.edit', ['client' => $client]);
    }

    public function update(Request $request, Client $client): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'nullable|string|max:255',
            'website' => 'nullable|string|max:255|unique:clients,website,' . $client->id,
            'projectlist' => 'nullable|string'
        ]);

        $client->update($validated);

        return redirect()->route('clients.show', ['client' => $client->id])
            ->with('success', "Le client a bien été modifié");
    }

    public function destroy(Client $client): RedirectResponse
    {
        $client->delete();

        return redirect()->route('clients.index')
            ->with('success', "Le client a bien été supprimé");
    }
}
