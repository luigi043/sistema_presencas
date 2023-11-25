<!-- resources/views/disciplinas/create.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Adicionar Disciplina</h1>
    <form method="POST" action="/disciplinas">
        @csrf
        <label for="nome">Nome da Disciplina:</label>
        <input type="text" id="nome" name="nome" required>
        <button type="submit">Adicionar</button>
    </form>
@endsection
