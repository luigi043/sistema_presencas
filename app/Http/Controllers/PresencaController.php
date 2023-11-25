<?php

namespace App\Http\Controllers;

use App\Models\Presenca;
use App\Models\Aluno;
use App\Models\Disciplina;
use Illuminate\Http\Request;

class PresencaController extends Controller
{
    public function index()
    {
        $presencas = Presenca::all();
        return view('presencas.index', compact('presencas'));
    }

    public function create()
    {
        return view('presencas.create');
    }

    public function store(Request $request)
    {
        $this->validatePresenca($request);

        Presenca::create($request->all());

        return redirect()->route('presencas.index')->with('success', 'Presença registrada com sucesso!');
    }

    public function show(Presenca $presenca)
    {
        return view('presencas.show', compact('presenca'));
    }

    public function edit(Presenca $presenca)
    {
        return view('presencas.edit', compact('presenca'));
    }

    public function update(Request $request, Presenca $presenca)
    {
        $this->validatePresenca($request);

        $presenca->update($request->all());

        return redirect()->route('presencas.index')->with('success', 'Presença atualizada com sucesso!');
    }

    public function destroy(Presenca $presenca)
    {
        $presenca->delete();

        return redirect()->route('presencas.index')->with('success', 'Presença excluída com sucesso!');
    }

    private function validatePresenca(Request $request)
    {
        return $request->validate([
            'aluno_id' => 'required|exists:alunos,id',
            'disciplina_id' => 'required|exists:disciplinas,id',
            'presente' => 'required|boolean',
        ]);
    }
}
