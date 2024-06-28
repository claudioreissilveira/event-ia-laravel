<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;

class EventosController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function index()
    {
        $eventos = Evento::all();
        return view('eventos.index', compact('eventos'));
    }

    public function create()
    {
        return view('eventos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string',
            'tipo' => 'required|string|max:255',
            'local' => 'required|string|max:255',
            'data' => 'required|date',
        ]);

        Evento::create($request->all());

        return redirect()->route('eventos.index')->with('success', 'Evento criado com sucesso.');
    }

    public function edit($id)
    {
        $evento = Evento::findOrFail($id);
        return view('eventos.edit', compact('evento'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string',
            'tipo' => 'required|string|max:255',
            'local' => 'required|string|max:255',
            'data' => 'required|date',
        ]);

        $evento = Evento::findOrFail($id);
        $evento->update($request->all());

        return redirect()->route('eventos.index')->with('success', 'Evento atualizado com sucesso.');
    }

    public function destroy($id)
    {
        $evento = Evento::findOrFail($id);
        $evento->delete();

        return redirect()->route('eventos.index')->with('success', 'Evento deletado com sucesso.');
    }

    public function contato()
    {
        return view('contato');
    }
}
