<!-- resources/views/alunos/show.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>{{ $aluno->nome }}</h1>
    <a href="{{ route('alunos.edit', $aluno->id) }}">Editar</a>
    <form method="POST" action="{{ route('alunos.destroy', $aluno->id) }}" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Excluir</button>
    </form>
@endsection
