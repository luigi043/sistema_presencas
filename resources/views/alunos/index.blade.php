<!-- resources/views/alunos/index.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Alunos</h1>
    <a href="{{ route('alunos.create') }}">Adicionar Aluno</a>
    <ul>
        @foreach ($alunos as $aluno)
            <li><a href="{{ route('alunos.show', $aluno->id) }}">{{ $aluno->nome }}</a></li>
        @endforeach
    </ul>
@endsection
