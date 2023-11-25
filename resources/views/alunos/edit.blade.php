<!-- resources/views/alunos/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Editar Aluno</h1>
    <form method="POST" action="{{ route('alunos.update', $aluno->id) }}">
        @csrf
        @method('PUT')
        <!-- Adicione os campos necessários aqui -->
        <button type="submit">Salvar</button>
    </form>
@endsection
