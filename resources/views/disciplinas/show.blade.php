<!-- resources/views/disciplinas/show.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>{{ $disciplina->nome }}</h1>
    <a href="/disciplinas/{{ $disciplina->id }}/edit">Editar</a>
    <form method="POST" action="/disciplinas/{{ $disciplina->id }}" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Excluir</button>
    </form>
@endsection
