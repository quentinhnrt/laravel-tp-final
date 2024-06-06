<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClientRequest;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        return view('dashboard.clients.index', ['clients' => $clients]);
    }


    public function show(Client $client)
    {
        return view('dashboard.clients.show', ['client' => $client]);
    }


    public function create(): View
    {
        return view('dashboard.clients.create');
    }

    public function store(ClientRequest $request): RedirectResponse
    {
        $client = Client::create($request->validated());

        return redirect()->route('administration.clients.show', ['client' => $client->id])
            ->with('success', "Le client a bien été créé");
    }

    public function edit(Client $client): View
    {
        return view('dashboard.clients.edit', [
            'client' => $client
        ]);
    }

    public function update(ClientRequest $request, Client $client): RedirectResponse
    {
        $client->update($request->validated());

        return redirect()->route('administration.clients.show', ['client' => $client->id])
            ->with('success', "Le client a bien été modifié");
    }

    public function destroy(Client $client): RedirectResponse
    {
        $client->delete();

        return redirect()->route('administration.clients.index')
            ->with('success', "Le client a bien été supprimé");
    }
}
