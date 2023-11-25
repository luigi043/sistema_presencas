<!-- resources/views/disciplinas/index.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Disciplinas</h1>
    <a href="/disciplinas/create">Adicionar Disciplina</a>
    <ul>
        @foreach ($disciplinas as $disciplina)
            <li><a href="/disciplinas/{{ $disciplina->id }}">{{ $disciplina->nome }}</a></li>
        @endforeach
    </ul>
@endsection
