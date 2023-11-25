<!-- resources/views/disciplinas/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Editar Disciplina</h1>
    <form method="POST" action="/disciplinas/{{ $disciplina->id }}">
        @csrf
        @method('PUT')
        <label for="nome">Nome da Disciplina:</label>
        <input type="text" id="nome" name="nome" value="{{ $disciplina->nome }}" required>
        <button type="submit">Salvar</button>
    </form>
@endsection
